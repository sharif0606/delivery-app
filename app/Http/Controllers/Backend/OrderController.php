<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use App\Models\Location;
use App\Models\Order;
use App\Models\Type;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Order::where('status',0)->latest()->paginate(10);
        return view('backend.admin.order.index',compact('data'));
    }
    public function order_accepted()
    {
        $data=Order::where('status',1)->latest()->paginate(10);
        return view('backend.admin.order.accepted',compact('data'));
    }
    public function order_processing()
    {
        $data=Order::where('status',2)->latest()->paginate(10);
        return view('backend.admin.order.processing',compact('data'));
    }
    public function order_completed()
    {
        $data=Order::where('status',3)->latest()->paginate(10);
        return view('backend.admin.order.completed',compact('data'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        $delivaryman=User::where('role_id',3)->get();
        $location=Location::orderBy('name')->get();
        $type=Type::orderBy('name')->get();
        return view('backend.admin.order.edit',compact('delivaryman','location','type','order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        try{
            $order->update($request->all());
            return redirect()->route(request()->session()->get('roleIdentity').'.order.index');
        }catch(\Exception $e){
            dd($e);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
