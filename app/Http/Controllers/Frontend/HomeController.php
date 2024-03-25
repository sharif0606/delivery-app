<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('frontend.home');
    }

    public function orderTrack(){
        return view('frontend.ordertrack');
    }
    public function service(){
        return view('frontend.service');
    }

}
