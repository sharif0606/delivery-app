<?php

namespace App\Http\Controllers\Deliveryman;

use App\Http\Controllers\Controller;
use App\Models\OrderTracking;

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
        $data = Order::where('delivery_boy_id', $user)->latest()->paginate(10);
        return view('backend.deliveryman.order.index', compact('data'));
    }
   
    public function order_accepted()
    {
        $data=Order::where('status',1)->latest()->paginate(10);
        return view('backend.deliveryman.order.accepted',compact('data'));
    }
    public function order_processing()
    {
        $data=Order::where('status',2)->latest()->paginate(10);
        return view('backend.deliveryman.order.processing',compact('data'));
    }
    public function order_completed()
    {
        $data=Order::where('status',3)->latest()->paginate(10);
        return view('backend.deliveryman.order.completed',compact('data'));
    }
    public function track( $id)
    {
        $order=Order::find($id);
        return view('backend.deliveryman.order.track',compact('order'));
    }

    public function invoice(Order $order)
    {
        return view('backend.deliveryman.order.invoice',compact('order'));
    }
    public function store(Request $request,$id){
        try{
            $input=$request->all();
            $input['order_id']=$id;
            OrderTracking::create($input);
            
            $order=Order::find($id);
            $order->status=$request->status;
            $order->save();

            return redirect()->route(request()->session()->get('roleIdentity').'.order.index');
        }catch(\Exception $e){
            dd($e);
        }
    }
}
