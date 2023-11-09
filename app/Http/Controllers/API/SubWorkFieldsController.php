<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubWorkField;
use App\Http\Requests\StoreSubWorkFieldsRequest;
use App\Http\Requests\UpdateSubWorkFieldsRequest;


class SubWorkFieldsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        try{
            $jsonData = SubWorkField::all();
            return response()->json( $jsonData);
        } catch (\Throwable $th) {
            return response()->json([
                'message' =>  __('message.The operation failed, please try again'),
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
    public function store(StoreSubWorkFieldsRequest $request)
    {
        //
        try{
            $new_subworkfield = new SubWorkField();
            $new_subworkfield->name = $request->name;
            $new_subworkfield->description = $request->description;
            $new_subworkfield->work_field = $request->work_field;
            $new_subworkfield->status = $request->input('status') == true ? '1' : '-1';
            $new_subworkfield->save();
            // Return a response indicating the success and the created resource
            return response()->json([
                'message' => __('message.Resource created successfully'),
                'data' => $new_subworkfield,
            ], 201);
        } catch (\Throwable $th) {
            return response()->json([
                'message' =>  __('message.The operation failed, please try again'),
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
        try{
            $item = SubWorkField::find($id);
            return response()->json( $item);
        } catch (\Throwable $th) {
            return response()->json([
                'message' =>  __('message.The operation failed, please try again'),
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
    public function update(UpdateSubWorkFieldsRequest $request, $id)
    {
        //
        try{
            $new_subworkfield = SubWorkField::find($id);
            $new_subworkfield->name = $request->name;
            $new_subworkfield->description = $request->description;
            $new_subworkfield->work_field = $request->work_field;
            $new_subworkfield->status = $request->input('status') == true ? '1' : '-1';
            $new_subworkfield->save();
            // Return a response indicating the success and the created resource
            return response()->json([
                'message' => __('message.Resource updated successfully'),
                'data' => $new_subworkfield,
            ], 201);
        } catch (\Throwable $th) {
            return response()->json([
                'message' =>  __('message.The operation failed, please try again'),
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
            $item = SubWorkField::find($id);
            if(!$item)
                return response()->json(['message' =>  __('message.The operation failed, please try again'),], 201);
            $item->status *= -1;
            if($item->save())
            if ($item->status == -1)
                return response()->json(['message' =>  __('message.The item has been disabled successfully'),], 201);
            else 
                return response()->json(['message' =>  __('message.The item has been successfully activated'),], 201);
        } catch (\Throwable $th) {
            return response()->json([
                'message' =>  __('message.The operation failed, please try again'),
                'error' => $th->getMessage(),
            ], 500);
        }
    }

    // public function getWorkFields($subWorkFieldId){
    //     $subWorkField = SubWorkField::find($subWorkFieldId);
    //     $workField = $subWorkField->work_field;
    //     return response()->json( $workField,);

    // }

    public function getWorkFieldName($subWorkFieldId)
        {
            try{
                $subWorkField = SubWorkField::find($subWorkFieldId);
                $workFieldName = $subWorkField->work_field;

                return response()->json(['workFieldName' => $workFieldName]);
            } catch (\Throwable $th) {
                return response()->json([
                    'message' =>  __('message.The operation failed, please try again'),
                    'error' => $th->getMessage(),
                ], 500);
            }
        }
}
