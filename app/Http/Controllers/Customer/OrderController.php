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
        $orders = Order::where('customer_id', $user)->latest()->paginate(10);
        return view('backend.customer.order.index', compact('orders'));
    }

    public function track( $id)
    {
        $order=Order::find($id);
        return view('backend.customer.order.track',compact('order'));
    }
    public function create()
    {
        $location=Location::orderBy('name')->get();
        $type=Type::orderBy('name')->get();
        return view('backend.customer.order.create',compact('location','type'));
    }

    public function check_rate(Request $request){

        $base_price=$weight_cost=$urgent=$total=0;
        $status=false;

        $pickup_location=$request->pickup_location;
        $delivery_location=$request->delivery_location;
        $type_id=$request->type_id;
        $weight=$request->weight;
        $is_urgent=$request->is_urgent;
        

        $cost=DeliveryCostCalculator::where('from_location_id',$pickup_location)
                                ->where('to_location_id',$delivery_location)
                                ->where('type_id',$type_id)
                                ->where('weight_from','<=',$weight)
                                ->where('weight_to','>=',$weight)
                                ->first();
        
        if($cost){
            $base_price=$cost->base_price;
            $weight_cost=$cost->weight_cost * $weight;
            if($is_urgent==1){
                $urgent=100;
            }
            $total=($base_price+$weight_cost+$urgent);
            $status=true;
        }

        $ret=array('status'=>$status,'base_price'=>$base_price,'weight_cost'=>$weight_cost,'urgent'=>$urgent,'total'=>$total);
        return $ret;
        
    }

    public function store(Request $request){
        try{
            $input=$request->all();
            $input['customer_id']=request()->session()->get('userId');
            //dd($input);
            Order::create($input);
            return redirect()->route(request()->session()->get('roleIdentity').'.order.index');
        }catch(\Exception $e){
            dd($e);
        }
    }
}

