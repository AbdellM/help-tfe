<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demand;


class DemandController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Demand::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    static public function store(Illuminate\Http\Request $request)
    {        
        $request->validate([
            'name' => 'required|string|between:2,100',
            'email' => 'required|string|email|max:100',
            'phone' => 'required|string|between:2,100',
            'project_type_id' => 'required|int|between:2,100',
            'service_type_id' => 'required|int|between:2,100',
            'subject_id' => 'required|int|between:2,100',
            'pageNbr' => 'required|string|between:2,100',
            'limitdate' => 'required|string|between:2,100',
            'topic' => 'required|string|between:2,100',
            'remark' => 'string|between:2,1000',
        ]);

        return Demand::create($request->all())->id;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Demand::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    static public function update(Illuminate\Http\Request $request, $id)
    {
        $Request = Demand::find($id);
        $Request->update($request->all());
        return $Request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Demand::destroy($id);
    }
}
