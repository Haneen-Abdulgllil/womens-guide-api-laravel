<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Licence;
use App\Models\Licence_office;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreLicenceRequest;
use App\Http\Requests\UpdateLicenceRequest;

class LicenceController extends Controller
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
            $jsonData = Licence::all();
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
    public function store(StoreLicenceRequest $request)
    {
        //

        try { 
            $new_licence = new Licence();
            $new_licence->name = $request->name;
            $new_licence->description = $request->description;
            $new_licence->importance = $request->importance;
            $new_licence->required_documents = $request->required_documents;
            $new_licence->procedures = $request->procedures;
            // $new_licence->issuing_authority = $request->issuing_authority;
            $new_licence->fees = $request->fees;
            $new_licence->penalties = $request->penalties;
            $new_licence->notes = $request->notes;
            $new_licence->department = $request->department;
            $new_licence->status = $request->input('status') == true ? '1' : '-1';
            $new_licence->save();
            $new_licence->offices()->syncwithoutDetaching($request->offices);

            // foreach($request->offices as $key=>$id){
            //     $offices_ids = [
            //         'licence_id'=>$new_licence->id,
            //         'office_id'=>$request->offices[$key],
            //     ];
            //     DB::table('licence_office')->insert($offices_ids);
            // }

        

            // Return a response indicating the success and the created resource
            return response()->json([
                'message' =>  __('message.Resource created successfully'),
                'data' => $new_licence,
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
            $item = Licence::find($id);
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
    public function update(UpdateLicenceRequest $request, $id)
    {
        //
        try { 
            $licence = Licence::find($id);
            $licence->name = $request->name;
            $licence->description = $request->description;   
            $licence->importance = $request->importance;
            $licence->required_documents = $request->required_documents;
            $licence->procedures = $request->procedures;
            // $licence->issuing_authority = $request->issuing_authority;
            $licence->fees = $request->fees;
            $licence->penalties = $request->penalties;
            $licence->notes = $request->notes;
            $licence->department = $request->department;
            $licence->status = $request->input('status') == true ? '1' : '-1';
            $licence->save();
            $licence->offices()->syncwithoutDetaching($request->offices);

            // foreach($request->offices as $key=>$id){
            //     $offices_ids = [
            //         'licence_id'=>$licence->id,
            //         'office_id'=>$request->offices[$key],
            //     ];
            //     DB::table('licence_office')->insert($offices_ids);
            // }

        

            // Return a response indicating the success and the created resource
            return response()->json([
                'message' =>  __('message.Resource created successfully'),
                'data' => $licence,
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
            $item = Licence::find($id);
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


    public function getLicenseOffices($Licence_id)
    {
        try{
            $Licence = Licence::findOrFail($Licence_id);
            $offices = $Licence->offices;

            return response()->json($offices);
        } catch (\Throwable $th) {
            return response()->json([
                'message' =>  __('message.The operation failed, please try again'),
                'error' => $th->getMessage(),
            ], 500);
        }
    }


    public function getLicenseDepartment($Licence_id){
        try{
            $Licence = Licence::findOrFail($Licence_id);
            $DepartmentName = $Licence->department;

            return response()->json(['DepartmentName' => $DepartmentName]);
        } catch (\Throwable $th) {
            return response()->json([
                'message' =>  __('message.The operation failed, please try again'),
                'error' => $th->getMessage(),
            ], 500);
        }
    }

    
    public function deleteLicenceOffices($id)
    {
        try {
            $office = Licence_office::findOrFail($id);
            // dd($images);

            Licence_office::find($id)->delete();
            return response()->json( ['message' =>  __('message.The operation done successfully')]);
        } catch (\Throwable $th) {
            return response()->json([
                'message' =>  __('message.The operation failed, please try again'),
                'error' => $th->getMessage(),
            ], 500);
        }
    }
}
