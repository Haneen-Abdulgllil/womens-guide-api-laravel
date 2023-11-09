<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FunderResource;
use App\Http\Requests\updateFunderResourceRequest;
use App\Http\Requests\StoreFunderResourceRequest;

class FunderResourcesController extends Controller
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
            $data = FunderResource::all();
            return response()->json($data);
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
    public function store(StoreFunderResourceRequest $request)
    {
        //
        try { 
            $new_funder_resource = new FunderResource();
            $new_funder_resource->name = $request->name;
            $new_funder_resource->description = $request->description;
            $new_funder_resource->status = $request->input('status') == true ? '1' : '-1';
            $new_funder_resource->save();
            // Return a response indicating the success and the created resource
            return response()->json([
                'message' =>  __('message.Resource created successfully'),
                'data' => $new_funder_resource,
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
        try { 
            $item = FunderResource::find($id);
            return response()->json($item);
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
    public function update(updateFunderResourceRequest $request, $id)
    {
        //
        try { 
            $funder_resource =  FunderResource::find($id);
            $funder_resource->name = $request->name;
            $funder_resource->description = $request->description;
            $funder_resource->status = $request->input('status') == true ? '1' : '-1';
            $funder_resource->save();
            // Return a response indicating the success and the created resource
            return response()->json([
                'message' =>  __('message.Resource updated successfully'),
                'data' => $funder_resource,
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
            $item = FunderResource::find($id);
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
}
