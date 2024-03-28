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
<<<<<<< HEAD
    public function service(){
        return view('frontend.service');
    }

=======

    public function service(){
        return view('frontend.service');
    }
>>>>>>> d6b2647d14408694c48781d72f64f47fb103285d
}
