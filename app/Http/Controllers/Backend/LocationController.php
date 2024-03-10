<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Location::latest()->paginate(10);
        return view('backend.admin.location.index',compact('data')); //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.admin.location.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            Location::create($request->all());
            return redirect()->route(request()->session()->get('roleIdentity').'.location.index');
        }catch(\Exception $e){
            dd($e);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Location $location)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Location $location)
    {
        return view('backend.admin.location.edit',compact('location'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Location $location)
    {
        try{
            $location->update($request->all());
            return redirect()->route(request()->session()->get('roleIdentity').'.location.index');
        }catch(\Exception $e){
            dd($e);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Location $location)
    {
        try{
            $location->delete();
            return redirect()->route(request()->session()->get('roleIdentity').'.location.index');
        }catch(\Exception $e){
            dd($e);
        }
    }
}
