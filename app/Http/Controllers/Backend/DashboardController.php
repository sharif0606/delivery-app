<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function adminDashboard(){
        return view('backend.dashboard.admin');
    }
    public function customerDashboard(){
        return view('backend.dashboard.customer');
    }
    public function deliverymanDashboard(){
        return view('backend.dashboard.deliveryman');
    }
}
