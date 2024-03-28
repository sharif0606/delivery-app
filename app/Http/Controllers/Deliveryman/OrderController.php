<?php

<<<<<<< HEAD
namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
=======
namespace App\Http\Controllers\Deliveryman;

use App\Http\Controllers\Controller;
use App\Models\OrderTracking;
>>>>>>> 37db6a4a27bb287715a7da94796a0ff2d73cffe5
use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\Type;
use App\Models\Order;
<<<<<<< HEAD
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
=======
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

>>>>>>> 37db6a4a27bb287715a7da94796a0ff2d73cffe5
