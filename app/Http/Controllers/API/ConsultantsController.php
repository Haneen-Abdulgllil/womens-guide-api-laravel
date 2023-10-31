<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Consultant;
use App\Http\Requests\StoreConsultantRequest;
use App\Http\Requests\UpdateConsultantRequest;

class ConsultantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        try { 
            $data = Consultant::all();
            return response()->json($data);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'message.The operation failed, please try again',
                'error' => $th->getMessage(),
            ], 500);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreConsultantRequest $request)
    {
        //
        try { 
            $new_consultant = new Consultant();
            $new_consultant->name = $request->name;
            $new_consultant->description = $request->description;
            $new_consultant->facebook_account = $request->facebook_account;
            $new_consultant->linkedin_account = $request->linkedin_account;
            $new_consultant->email = $request->email;
            $new_consultant->phone_number = $request->phone_number;
            $new_consultant->status = $request->input('status') == true ? '1' : '-1';
            $new_consultant->save();
            // Return a response indicating the success and the created resource
            return response()->json([
                'message' => 'message.Resource created successfully',
                'data' => $new_consultant,
            ], 201);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'message.The operation failed, please try again',
                'error' => $th->getMessage(),
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        try { 
            $item = Consultant::find($id);
            return response()->json($item);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'message.The operation failed, please try again',
                'error' => $th->getMessage(),
            ], 500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateConsultantRequest $request, $id)
    {
        //
        try { 
            $consultant = Consultant::find($id);
            $consultant->name = $request->name;
            $consultant->description = $request->description;
            $consultant->facebook_account = $request->facebook_account;
            $consultant->linkedin_account = $request->linkedin_account;
            $consultant->email = $request->email;
            $consultant->phone_number = $request->phone_number;
            $consultant->status = $request->input('status') == true ? '1' : '-1';
            $consultant->save();
            // Return a response indicating the success and the created resource
            return response()->json([
                'message' => 'message.Resource update successfully',
                'data' => $consultant,
            ], 201);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'message.The operation failed, please try again',
                'error' => $th->getMessage(),
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        try{
            $item = Consultant::find($id);
            // if(!$item)
            // return back()->with(['message' => __(key:'Admin.Message.The operation failed, please try again'), 'type' => 'alert-danger']);
            $item->status *= -1;
            if($item->save());
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'message.The operation failed, please try again',
                'error' => $th->getMessage(),
            ], 500);
        }
    }
}
