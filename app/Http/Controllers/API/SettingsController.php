<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Http\Traits\ImageUploadTraits;
use App\Http\Requests\updateSettingsRequest;

class SettingsController extends Controller
{
    use ImageUploadTraits;
    private $dir = 'setting';
    private $inputProjectLogo = 'project_logo';
    private $inputFunderLogo = 'funder_logo';
    private $inputImplementingEntityLogo = 'implementing_entity_logo';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        try { 
            $setting = Setting::first();;
            return response()->json($setting);
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
    public function store(Request $request)
    {
        //
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
            $item = Setting::find($id);
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
    public function update(updateSettingsRequest $request, $id)
    {
        //
        try { 
            $ProjectLogo = $this->uploadImage($request->project_logo, $this->dir);
            $FunderLogo = $this->uploadImage($request->funder_logo, $this->dir);
            $ImplementingEntityLogo = $this->uploadImage($request->implementing_entity_logo, $this->dir);
            $coordinatingEntityLogo = $this->uploadImage($request->coordinating_entity_logo, $this->dir);
            // 
            $setting = Setting::find($id);
            $setting->project_name = $request->project_name;
            if ($request->hasFile('project_logo')) {
                $setting->project_logo = $ProjectLogo;
            }
            $setting->about_application = $request->about_application;
            $setting->application_service = $request->application_service;
            // 


            $setting->funder_name = $request->funder_name;
            if ($request->hasFile('funder_logo')) {
                $setting->funder_logo = $FunderLogo;
            }
            $setting->funder_description = $request->funder_description;
            // 


            $setting->implementing_entity_name = $request->implementing_entity_name;
            if ($request->hasFile('implementing_entity_logo')) {
                $setting->implementing_entity_logo = $ImplementingEntityLogo;
            }
            $setting->implementing_entity_description = $request->implementing_entity_description;
            // 


            $setting->coordinating_entity_name = $request->coordinating_entity_name;
            if ($request->hasFile('coordinating_entity_logo')) {
                $setting->coordinating_entity_logo = $coordinatingEntityLogo;
            }
            $setting->coordinating_entity_description = $request->coordinating_entity_description;
            // 

            
            $setting->email = $request->email;
            $setting->whatsapp_number = $request->whatsapp_number;
            $setting->phone_number = $request->phone_number;
            $setting->save();
            // Return a response indicating the success and the created resource
            return response()->json([
                'message' =>  __('message.Resource updated successfully'),
                'data' => $setting,
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
    }
}
