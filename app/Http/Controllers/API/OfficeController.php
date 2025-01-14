<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Office;
use App\Models\Licence_office;
use App\Models\Work_Field_office;
use App\Http\Traits\ImageUploadTraits;
use App\Http\Requests\StoreOfficeRequest;
use App\Http\Requests\UpdateOfficeRequest;

class OfficeController extends Controller
{
    use ImageUploadTraits;
    private $dir = 'office';
    private $inputImage = 'logo';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        try { 
            $data = Office::all();
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
    public function store(StoreOfficeRequest $request)
    {
        //
        try { 
            $logo = $this->uploadImage($request->logo, $this->dir);
            $new_office = new Office();
            $new_office->name = $request->name;
            $new_office->description = $request->description;
            $new_office->address = $request->address;
            $new_office->google_map = $request->google_map;
            $new_office->required_actions = $request->required_actions;
            $new_office->notes = $request->notes;
            $new_office->website_url = $request->website_url;
            $new_office->logo = $logo;
            $new_office->facebook_account = $request->facebook_account;
            $new_office->linkedin_account = $request->linkedin_account;
            $new_office->email = $request->email;
            $new_office->phone_number = $request->phone_number;
            $new_office->status = $request->input('status') == true ? '1' : '-1';
            $new_office->save();
            // Return a response indicating the success and the created resource
            return response()->json([
                'message' =>  __('message.Resource created successfully'),
                'data' => $new_office,
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
            $item = Office::find($id);
            return response()->json($item);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => __('message.The operation failed, please try again'),
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
    public function update(UpdateOfficeRequest $request, $id)
    {
        //
        try { 
            $logo_update = $this->uploadImage($request->logo, $this->dir);
            $office = Office::find($id);
            $office->name = $request->name;
            $office->description = $request->description;
            $office->address = $request->address;
            $office->google_map = $request->google_map;
            $office->required_actions = $request->required_actions;
            $office->notes = $request->notes;
            $office->website_url = $request->website_url;
            if ($request->hasFile('logo')) {
                $office->logo = $logo_update;
            }
            $office->facebook_account = $request->facebook_account;
            $office->linkedin_account = $request->linkedin_account;
            $office->email = $request->email;
            $office->phone_number = $request->phone_number;
            $office->status = $request->input('status') == true ? '1' : '-1';
            $office->save();
            // Return a response indicating the success and the created resource
            return response()->json([
                'message' => __('message.Resource updated successfully'),
                'data' => $office,
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
            $item = Office::find($id);
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

    public function getOfficeLicences($office_id)
    {
        try{
            // $office = Office::findOrFail($office_id);
            // $licences = $office->licences;

            // return response()->json($licences);

            $licences = Licence_office::where('office_id', $office_id)->get();
            return response()->json($licences);

        } catch (\Throwable $th) {
            return response()->json([
                'message' =>  __('message.The operation failed, please try again'),
                'error' => $th->getMessage(),
            ], 500);
        }
    }


    public function getOfficeWorkFields($office_id)
    {
        try{
            // $office = Office::findOrFail($office_id);
            // $workFields = $office->work_fields;

            // return response()->json($workFields);

            $WorkFields = Work_Field_office::where('office_id', $office_id)->get();
            return response()->json($WorkFields);

        } catch (\Throwable $th) {
            return response()->json([
                'message' =>  __('message.The operation failed, please try again'),
                'error' => $th->getMessage(),
            ], 500);
        }
    }

    public function getOfficedepartments($office_id)
    {
        try{
            // $office = Office::findOrFail($office_id);
            // $workFields = $office->work_fields;

            // return response()->json($workFields);

            $office =  Office::findOrFail($office_id);
            $departments = $office->departments;
            return response()->json($departments);

        } catch (\Throwable $th) {
            return response()->json([
                'message' =>  __('message.The operation failed, please try again'),
                'error' => $th->getMessage(),
            ], 500);
        }
    }
}
