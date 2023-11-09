<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;

class CoursesController extends Controller
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
    public function store(StoreCourseRequest $request)
    {
        //
        try { 
            $new_Course = new Course();
            $new_Course->name = $request->name;
            $new_Course->description = $request->description;
            $new_Course->status = $request->input('status') == true ? '1' : '-1';
            $new_Course->save();
            // Return a response indicating the success and the created resource
            return response()->json([
                'message' =>  __('message.Resource created successfully'),
                'data' => $new_Course,
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
            $item = Course::find($id);
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
    public function update(UpdateCourseRequest $request, $id)
    {
        //
        try { 
            $Course = Course::find($id);
            $Course->name = $request->name;
            $Course->description = $request->description;
            // $Course->status = $request->input('status') == true ? '1' : '-1';
            $Course->status = $request->status;
            $Course->save();
            // Return a response indicating the success and the created resource
            return response()->json([
                'message' =>  __('message.Resource Updated successfully'),
                'data' => $Course,
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
            $item = Course::find($id);
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
