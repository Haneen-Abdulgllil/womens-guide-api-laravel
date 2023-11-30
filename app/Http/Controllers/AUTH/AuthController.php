<?php

namespace App\Http\Controllers\AUTH;


use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;



class AuthController extends Controller
{
    //
    public function login(LoginRequest $request){
        $login = $request->only('email' , 'password');
        if(!Auth::attempt($login)){
            return response(['message' => 'message.Invalid login credential'], 401);
        }
        
        /**
         * @var User $user
         */

         $user = Auth::user();
         $token = $user->createToken('token');
         
         // Access the plain-text token
         $accessToken = $token->accessToken;
         
         return response([
             'id' => $user->id,
             'name' => $user->name,
             'email' => $user->email,
             'created_at' => $user->created_at,
             'updated_at' => $user->updated_at,
             'token' => $accessToken,
         ], 200);
    }

    

    public function logout(Request $request){
        $user = Auth::user();
        $userTokens = $user->tokens();
    
        foreach ($userTokens as $token) {
            $token->delete();
        }
        return response(['message'=> __('message.Logged out successfully')]);
    }




}
