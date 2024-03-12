<?php

namespace App\Http\Controllers\Backend;


use App\Models\DeliveryCostCalculator;
use App\Http\Controllers\Controller;
use App\Models\Location;
use App\Models\Type;
use Illuminate\Http\Request;

class DeliveryCostCalculatorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=DeliveryCostCalculator::latest()->paginate(10);
        return view('backend.admin.cost_settings.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $location=Location::orderBy('name')->get();
        $type=Type::orderBy('name')->get();
        
        return view('backend.admin.cost_settings.create',compact('location','type'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            DeliveryCostCalculator::create($request->all());
            return redirect()->route(request()->session()->get('roleIdentity').'.cost_settings.index');
        }catch(\Exception $e){
            dd($e);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(DeliveryCostCalculator $deliveryCostCalculator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($cost_settings)
    {
        $location=Location::orderBy('name')->get();
        $type=Type::orderBy('name')->get();
        $data=DeliveryCostCalculator::find($cost_settings);
        return view('backend.admin.cost_settings.edit',compact('location','type','data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $cost_settings)
    {
        try{
            $deliveryCostCalculator=DeliveryCostCalculator::find($cost_settings);
            $deliveryCostCalculator->update($request->all());
            return redirect()->route(request()->session()->get('roleIdentity').'.cost_settings.index');
        }catch(\Exception $e){
            dd($e);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DeliveryCostCalculator $deliveryCostCalculator)
    {
        try{
            $deliveryCostCalculator->delete();
            return redirect()->route(request()->session()->get('roleIdentity').'.cost_settings.index');
        }catch(\Exception $e){
            dd($e);
        }
    }
}
