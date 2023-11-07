<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WorkField;
use App\Models\Work_Field_office;
use App\Http\Requests\StoreWorkFieldsRequest;
use App\Http\Requests\UpdateWorkFieldsRequest;
use Illuminate\Support\Facades\DB;

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
        try { 
            $data = WorkField::all();
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
    public function store(StoreWorkFieldsRequest $request)
    {
        //
        try { 
            $new_workfield = new WorkField();
            $new_workfield->name = $request->name;
            $new_workfield->description = $request->description;
            $new_workfield->status = $request->input('status') == true ? '1' : '-1';
            $new_workfield->save();
            $new_workfield->offices()->syncwithoutDetaching($request->offices);
            // foreach($request->offices as $key=>$id){
            //     $offices_ids = [
            //         'work_field_id'=>$new_workfield->id,
            //         'office_id'=>$request->offices[$key],
            //     ];
            //     DB::table('work_field_office')->insert($offices_ids);
            // }
            // Return a response indicating the success and the created resource
            return response()->json([
                'message' =>  __('message.Resource created successfully'),
                'data' => $new_workfield,
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
            $item = WorkField::find($id);
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
    public function update(UpdateWorkFieldsRequest $request, $id)
    {
        //
        try{
            $workfield =  WorkField::find($id);
            $workfield->name = $request->name;
            $workfield->description = $request->description;
            $workfield->status = $request->input('status') == true ? '1' : '-1';
            $workfield->save();
            $workfield->offices()->syncwithoutDetaching($request->offices);
            // Return a response indicating the success and the created resource
            return response()->json([
                'message' =>  __('message.Resource updated successfully'),
                'data' => $workfield,
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
            $item = WorkField::find($id);
            // if(!$item)
            // return back()->with(['message' => __(key:'Admin.Message.The operation failed, please try again'), 'type' => 'alert-danger']);
            $item->status *= -1;
            if($item->save());
        } catch (\Throwable $th) {
            return response()->json([
                'message' =>  __('message.The operation failed, please try again'),
                'error' => $th->getMessage(),
            ], 500);
        }
    }



    public function getSubWorkFields($workFieldId)
    {
        try{
            $workField = WorkField::findOrFail($workFieldId);
            $subWorkFields = $workField->sub_work_field;

            return response()->json($subWorkFields);
        } catch (\Throwable $th) {
            return response()->json([
                'message' =>  __('message.The operation failed, please try again'),
                'error' => $th->getMessage(),
            ], 500);
        }
    }

    

    public function getWorkFieldOffices($work_field_id)
    {
        try{
            $workField = WorkField::findOrFail($work_field_id);
            $offices = $workField->offices;

            return response()->json($offices);
        } catch (\Throwable $th) {
            return response()->json([
                'message' =>  __('message.The operation failed, please try again'),
                'error' => $th->getMessage(),
            ], 500);
        }
    }

    
    public function deleteWorkFieldOffices($id)
    {
        try {
            $office = Work_Field_office::findOrFail($id);
            // dd($images);

            Work_Field_office::find($id)->delete();
            return response()->json( ['message' =>  __('message.The operation done successfully')]);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'message.The operation failed, please try again',
                'error' => $th->getMessage(),
            ], 500);
        }
    }


    public function getWorkFieldBeneficiaries($workFieldId)
    {
        try{
            $workField = WorkField::findOrFail($workFieldId);
            $beneficiaries = $workField->beneficiaries;

            return response()->json($beneficiaries);
        } catch (\Throwable $th) {
            return response()->json([
                'message' =>  __('message.The operation failed, please try again'),
                'error' => $th->getMessage(),
            ], 500);
        }
    }
}
