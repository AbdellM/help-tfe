<?php

namespace App\Http\Controllers;

use App\Models\Demand;
use App\Models\ServiceType;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
    public function store(Request $request)
    {
        $demand_id = Demand::create($request->all())->id;

        foreach ($request->get('files') as $file) {
            $req['demand_id'] = $demand_id;
            $req['url'] = $file;

            File::create($req);        
        }
        
        return redirect('/thanks');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Demand  $demand
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
     * @param  \App\Models\Demand  $demand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request = Demand::find($id);
        $request->update($request->all());
        return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Demand  $demand
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Demand::destroy($id);
    }
}
