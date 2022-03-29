<?php

namespace App\Http\Controllers\Portfolio;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;

class EduController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $education = Education::create($request->all());
        return response()->json([
            'message' => 'Education create  successfully',
            'education' => $education,
            // 'access_token' => $token,
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Education::find($id);

        if (!$edit) {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, product not found.'
            ], 400);
        }

        return $edit;
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
        $education=Education::find($id);
        $education->update($request->all());
        return response()->json([
            'message' => 'Update   successfully'
            // 'access_token' => $token,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $education=Education::find($id);
        $education->delete();
        return response()->json([
            'message' => 'Delete   successfully'
            // 'access_token' => $token,
        ], 200);
    }

    public function update_education(Request $request, $id)
    {
        $education=Education::find($id);
        $education->update($request->all());
        return response()->json([
            'message' => 'Update   successfully'
            // 'access_token' => $token,
        ], 200);
    }
}
