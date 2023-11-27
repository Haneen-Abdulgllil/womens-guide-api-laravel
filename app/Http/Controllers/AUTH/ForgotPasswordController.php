<?php

namespace App\Http\Controllers\AUTH;

use Carbon\Carbon;
use App\Models\User;
// use phpseclib3\Crypt\Hash;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ResetPasswordRequest;
use App\Http\Requests\ForgotPasswordRequest;

class ForgotPasswordController extends Controller
{
    //
    public function forgotPassword(ForgotPasswordRequest $request){
        $email = $request->email;
        if(User::where ('email',$email)->doesntExist()){
            return response(['message'=> __('message.Email does not exist')], 200);
        }
        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email' => $email, 
            'token' => $token, 
            'created_at' => Carbon::now()
        ]);

        Mail::send('mail.forgot_password', ['token'=>$token], function($message) use($email){
            $message->to($email);
            $message->subject('Reset Password');
            $message->from('guide.womens@gmail.com','womens guide');
        });
        
        return response(['message'=> __('message.Check your email')], 200);

    }

    public function resetPassword(ResetPasswordRequest $request){
        $token  = $request->token;
        $passwordReset = DB::table('password_resets')->where('token',$token)->first();

        if(!$passwordReset){
            return response(['message'=> __('message.Token not found')], 200);
        }

        if(!$passwordReset->created_at >= now()){
            return response(['message'=> __('message.Token has expired')], 200);
        }

        $user = User::where('email', $passwordReset->email)->first();

        if(!$user){
            return response(['message'=> __('message.User dose not exists')], 200);
        }

        $user->password = Hash::make($request->password);
        $user->save();

        DB::table('password_resets')->where('token' , $token)->delete();

        return response(['message'=> __('message.Password successfully updated')], 200);
    }
}
