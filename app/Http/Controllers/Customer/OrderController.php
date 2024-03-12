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
        $user = request()->session()->get('userId');
        $orders = Order::where('customer_id', $user)->latest()->paginate(10);
        return view('backend.customer.order.index', compact('orders'));
    }
    public function create()
    {
        $location=Location::orderBy('name')->get();
        $type=Type::orderBy('name')->get();
        return view('backend.customer.order.create',compact('location','type'));
    }
}

