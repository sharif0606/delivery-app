<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\Type;
use App\Models\Order;
use App\Models\DeliveryCostCalculator;
use DB;
class OrderController extends Controller
{
    
    public function index()
    {
        $user = request()->session()->get('userId');
        $orders = Order::where('deliveryman_id', $user)->latest()->paginate(10);
        
        return view('backend.dashboard.deliveryman', compact('orders'));
    }
    public function create()
    {
        
    }

    public function check_rate(Request $request){

        
        
    }

    public function store(Request $request){
        
    }
}
