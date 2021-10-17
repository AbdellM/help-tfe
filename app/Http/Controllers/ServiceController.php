<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceType;

class ServiceController extends Controller
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
            'serviceType' => 'required|string',
        ]);

        return ServiceType::create($request->all())->id;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServiceType  $ServiceType
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return ServiceType::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServiceType  $ServiceType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ServiceType = ServiceType::find($id);
        $ServiceType->update($request->all());

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceType  $ServiceType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ServiceType::destroy($id);
    }
}
