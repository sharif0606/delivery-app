<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function adminDashboard(){
        
        $totalOrders = Order::count();
        $totalUsers =  User::where('role_id', 2)->count();
        $totalDeliveryman = User::where('role_id', 3)->count();
        return view('backend.dashboard.admin', compact('totalOrders','totalUsers','totalDeliveryman'));
    }
    public function customerDashboard(){
        return view('backend.dashboard.customer');
    }
    public function deliverymanDashboard(){
        $statusValue = request()->session()->get('userId'); 
        $pending = 0;

        // Count the total number of users with 'status' equal to $statusValue
        $totalOrders = Order::where('delivery_boy_id', $statusValue)->count();
        $pendingOrders = Order::where('delivery_boy_id', $statusValue)
        ->where('status', 0)
        ->count();

        return view('backend.dashboard.deliveryman', compact('totalOrders','pendingOrders'));
        //return view('backend.dashboard.deliveryman');
    }
}
