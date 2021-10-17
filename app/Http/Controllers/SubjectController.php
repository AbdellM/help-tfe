<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
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
            'subject' => 'required|string',
        ]);

        return Subject::create($request->all())->id;
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subject  $Subject
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Subject::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subject  $Subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Subject = Subject::find($id);
        $Subject->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subject  $Subject
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Subject::destroy($id);
    }
}
