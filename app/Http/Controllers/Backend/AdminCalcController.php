<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminCalcController extends Controller
{
    public function costset(){
        return view('backend.admincalc');
    }
}
