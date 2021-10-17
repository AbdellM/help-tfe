<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectType;

class ProjectController extends Controller
{   
    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   static public function store(Request $request)
   {        
       $request->validate([
           'projectType' => 'required|string',
       ]);

       return ProjectType::create($request->all())->id;
   }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProjectType  $ProjectType
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return ProjectType::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProjectType  $ProjectType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ProjectType = ProjectType::find($id);
        $ProjectType->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProjectType  $ProjectType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ProjectType::destroy($id);
    }
}
