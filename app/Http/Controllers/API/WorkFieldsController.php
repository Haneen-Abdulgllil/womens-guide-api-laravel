<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WorkField;

class WorkFieldsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = WorkField::all();

        return response()->json([
            'data' => $data,
        ]);

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
    public function store(Request $request)
    {
        //
        $new_workfield = new WorkField();
        $new_workfield->name = $request->name;
        $new_workfield->description = $request->description;
        $new_workfield->status = $request->input('status') == true ? '1' : '-1';
        $new_workfield->save();
        // Return a response indicating the success and the created resource
        return response()->json([
            'message' => 'Resource created successfully',
            'data' => $new_workfield,
        ], 201);
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
        $item = WorkField::find($id);

        return response()->json([
            'data' => $item,
        ]);
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
        $item = WorkField::find($id);

        return response()->json([
            'data' => $item,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $workfield =  WorkField::find($id);
        $workfield->name = $request->name;
        $workfield->description = $request->description;
        $workfield->status = $request->input('status') == true ? '1' : '-1';
        $workfield->update();
        // Return a response indicating the success and the created resource
        return response()->json([
            'message' => 'Resource updated successfully',
            'data' => $workfield,
        ], 201);

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
        $item = WorkField::find($id);
        // if(!$item)
        // return back()->with(['message' => __(key:'Admin.Message.The operation failed, please try again'), 'type' => 'alert-danger']);
        $item->status *= -1;
        if($item->save());
    }
}
