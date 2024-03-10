<?php

namespace App\Http\Controllers\Backend;
use App\Models\Order;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class OrderControllerCus extends Controller
{
    public function index()
    {
        // Retrieve the authenticated user
        $user = auth()->user();

        $orders = Order::where('email', $user->email)->get();

        return view('backend.customer.order.index', compact('orders'));
    }
}