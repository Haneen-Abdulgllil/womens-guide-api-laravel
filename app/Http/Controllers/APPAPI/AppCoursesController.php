<?php

namespace App\Http\Controllers\APPAPI;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class AppCoursesController extends Controller
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
            $data = Course::all();
            return response()->json($data);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => __('message.The operation failed, please try again'),
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
            $item = Course::find($id);
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
    public function update(Request $request, $id)
    {
        //
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

    public function checkAdded(){
        try {
            $true = 1;
            $false = 0;
            $lastKnownCreatedAt = Course::max('created_at');
    
            // Use diff to compare timestamps more accurately
            $difference = \Carbon\Carbon::now()->diff($lastKnownCreatedAt);
    
            // Check if the difference is within one minute
            if ($difference->i === 0 && $difference->s <= 60) {
                return $true;
            } else {
                return $false;
            }
    
        } catch (\Throwable $th) {
            return response()->json([
                'message' => __('message.The operation failed, please try again'),
                'error' => $th->getMessage(),
            ], 500);
        }
    }

    public function checkUpdated(){
        try {
            $true = 1;
            $false = 0;
            $lastKnownCreatedAt = Course::max('updated_at');
    
            // Use diff to compare timestamps more accurately
            $difference = \Carbon\Carbon::now()->diff($lastKnownCreatedAt);
    
            // Check if the difference is within one minute
            if ($difference->i === 0 && $difference->s <= 60) {
                return $true;
            } else {
                return $false;
            }
    
        } catch (\Throwable $th) {
            return response()->json([
                'message' => __('message.The operation failed, please try again'),
                'error' => $th->getMessage(),
            ], 500);
        }
    }
}
