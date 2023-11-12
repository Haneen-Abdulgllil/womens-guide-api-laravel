<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Funder;
use App\Http\Requests\UpdateFundersRequest;
use App\Http\Requests\StoreFundersRequest;
use App\Http\Traits\ImageUploadTraits;

class FundersController extends Controller
{

    use ImageUploadTraits;
    private $dir = 'funder';
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
            $data = Funder::all();
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
    public function store(StoreFundersRequest $request)
    {
        //
        try { 
            $logo = $this->uploadImage($request->logo, $this->dir);
            $new_funder = new Funder();
            $new_funder->name = $request->name;
            $new_funder->description = $request->description;
            $new_funder->logo = $logo;
            $new_funder->our_products = $request->our_products;
            $new_funder->funding_conditions = $request->funding_conditions;
            $new_funder->required_documents = $request->required_documents;
            $new_funder->our_features = $request->our_features;
            $new_funder->guarantees = $request->guarantees;
            $new_funder->financing_ceilings = $request->financing_ceilings;
            $new_funder->facebook_account = $request->facebook_account;
            $new_funder->linkedin_account = $request->linkedin_account;
            $new_funder->email = $request->email;
            $new_funder->phone_number = $request->phone_number;
            $new_funder->funder_resource_id = $request->funder_resource_id;
            $new_funder->status = $request->input('status') == true ? '1' : '-1';
            $new_funder->save();
            // Return a response indicating the success and the created resource
            return response()->json([
                'message' =>  __('message.Resource created successfully'),
                'data' => $new_funder,
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
            $item = Funder::find($id);
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
    public function update(UpdateFundersRequest $request, $id)
    {
        //
        try { 
            $logo = $this->uploadImage($request->logo, $this->dir);
            $funder = Funder::find($id);
            $funder->name = $request->name;
            $funder->description = $request->description;
            if ($request->hasFile('logo')) {
                $new_funder->logo = $logo;
            }
            $funder->our_products = $request->our_products;
            $funder->funding_conditions = $request->funding_conditions;
            $funder->required_documents = $request->required_documents;
            $funder->our_features = $request->our_features;
            $funder->guarantees = $request->guarantees;
            $funder->financing_ceilings = $request->financing_ceilings;
            $funder->facebook_account = $request->facebook_account;
            $funder->linkedin_account = $request->linkedin_account;
            $funder->email = $request->email;
            $funder->phone_number = $request->phone_number;
            $funder->funder_resource_id = $request->funder_resource_id;
            $funder->status = $request->input('status') == true ? '1' : '-1';
            $funder->save();
            // Return a response indicating the success and the created resource
            return response()->json([
                'message' =>  __('message.Resource updated successfully'),
                'data' => $funder,
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
            $item = Funder::find($id);
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
