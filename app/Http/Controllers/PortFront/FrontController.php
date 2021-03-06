<?php

namespace App\Http\Controllers\PortFront;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Home;
use App\Models\Portfolio;
use App\Models\Skill;
use Illuminate\Http\Request;

class FrontController extends Controller
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
    public function getHome(){
        // $home=Home::latest()->first();
        $home=Home::all();
        if (!$home) {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, product not found.'
            ], 400);
        }

        return $home;
    }
    public function getAbout(){
        // $about=About::latest()->first();
        $about=About::all();
        if (!$about) {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, product not found.'
            ], 400);
        }

        return $about;
    }
    public function getEducation(){
        $education=Education::all();
        if (!$education) {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, product not found.'
            ], 400);
        }

        return $education;
    }
    public function getExperience(){
        $experiance=Experience::all();
        if (!$experiance) {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, product not found.'
            ], 400);
        }

        return $experiance;
    }
    public function getSkill(){
        $Skill=Skill::all();
        if (!$Skill) {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, product not found.'
            ], 400);
        }

        return $Skill;
    }
    public function getPortfolio(){
        $portfolio=Portfolio::all();
        if (!$portfolio) {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, product not found.'
            ], 400);
        }

        return $portfolio;
    }
    public function getPortfolioById($id){
        $portfolio=Portfolio::find($id);
        if (!$portfolio) {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, product not found.'
            ], 400);
        }

        return $portfolio;
    }

}
