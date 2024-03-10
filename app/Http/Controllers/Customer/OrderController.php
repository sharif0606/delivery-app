<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\Type;
use App\Models\Order;
use App\Models\DeliveryCostCalculator;

class OrderController extends Controller
{
    
    public function index()
    {
        $order= Order::latest()->paginate(10);
        return view('backend.customer.order.index');
    }
    public function create()
    {
        $location=Location::orderBy('name')->get();
        $type=Type::orderBy('name')->get();
        return view('backend.customer.order.create',compact('location','type'));
    }
}
