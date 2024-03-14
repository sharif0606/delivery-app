@extends('backend.master')

@section('content')
@php $status=['Pending','Accepted','Processing','Completed','Return'] @endphp
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card formi">
                <div class="card-header">Order</div>
                <div class="card-body">
                    <form method="POST" action="{{route(request()->session()->get('roleIdentity').'.order.update',$order->id)}}">
                        @csrf
                        @method("PUT");
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="pickup_date">Pickup Date:</label>
                                <input type="date" value="{{$order->pickup_date}}" class="form-control" id="pickup_date" name="pickup_date">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="pickup_location">Pickup Location:</label>
                                    <select name="pickup_location" id="pickup_location" class="form-control" required>
                                        <option value="">Select Location</option>
                                        @forelse($location as $from)
                                            <option {{old('pickup_location',$order->pickup_location)==$from->id?'selected':''}} value="{{$from->id}}">{{$from->name}}</option>
                                        @empty
                                        <option value="">No Data Found</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="pickup_address">Pickup Address:</label>
                                <input type="text" class="form-control" id="pickup_address" value="{{$order->pickup_address}}" name="pickup_address">
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="delivery_location">Delivery Location:</label>
                                    <select name="delivery_location" id="delivery_location" class="form-control" required>
                                        <option value="">Select Location</option>
                                        @forelse($location as $from)
                                            <option {{old('delivery_location',$order->delivery_location)==$from->id?'selected':''}} value="{{$from->id}}">{{$from->name}}</option>
                                        @empty
                                        <option value="">No Data Found</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="delivery_address">Delivery Address:</label>
                                <input type="text" class="form-control" id="delivery_address" value="{{$order->delivery_address}}" name="delivery_address">
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="type_id">Type:</label>
                                    <select name="type_id" id="type_id" class="form-control" required>
                                        <option value="">Select Type</option>
                                        @forelse($type as $from)
                                            <option {{old('type_id',$order->type_id)==$from->id?'selected':''}} value="{{$from->id}}">{{$from->name}}</option>
                                        @empty
                                        <option value="">No Data Found</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="is_urgent">Urgent ?:</label>
                                    <select name="is_urgent" id="is_urgent" class="form-control">
                                        <option value="0" {{old('is_urgent',$order->is_urgent)=="0"?'selected':''}}>No</option>
                                        <option value="1" {{old('is_urgent',$order->is_urgent)=="1"?'selected':''}}>Yes</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="product">Product:</label>
                                <input class="form-control" type="text" id="product" name="product" value="{{$order->product}}" required>
                            </div>
                            <div class="col-sm-6">
                                <label for="price">Product Price:</label>
                                <input class="form-control" type="text" id="price" name="price" value="{{$order->price}}" required>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="weight">Weight:</label>
                                    <input type="number" class="form-control" value="{{$order->weight}}" id="weight" name="weight">
                                </div>
                                <button type="button" class="btn btn-primary" onclick="get_cost()">Get Cost</button>
                            </div>
                            <div class="col-sm-6">
                                <table class="table">
                                    <tr>
                                        <td align="right">Base Price:</td>
                                        <td>
                                            <span class="base_price">{{$order->delivery_cost_base}}</span>
                                            <input type="hidden" id="base_price" name="delivery_cost_base" value="{{$order->delivery_cost_base}}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right">Weight Cost:</td>
                                        <td>
                                            <span class="weight_cost">{{$order->delivery_cost_weight}}</span>
                                            <input type="hidden" id="weight_cost" name="delivery_cost_weight" value="{{$order->delivery_cost_weight}}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right">Urgent Cost:</td>
                                        <td>
                                            <span class="urgent">{{$order->urgent_cost}}</span>
                                            <input type="hidden" id="urgent" name="urgent_cost" value="{{$order->urgent_cost}}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right">Total Cost:</td>
                                        <td style="border-top:4px double">
                                            <span class="total_cost">{{ $order->urgent_cost + $order->delivery_cost_weight + $order->delivery_cost_base}}</span>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-sm-12">
                                <label for="note">Note:</label>
                                <textarea class="form-control" id="note" name="note">{{$order->note}}</textarea>
                            </div>
                            <div class="col-sm-6">
                                <label for="pickup_address">Status:</label>
                                <select class="form-control" id="status" name="status">
                                    @foreach ($status as $k=>$v)
                                        <option value="{{$k}}">{{$v}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="delivery_boy_id">Delivery Man:</label>
                                    <select name="delivery_boy_id" id="delivery_boy_id" class="form-control" required>
                                        <option value="">Select Delivery Man</option>
                                        @forelse($delivaryman as $d)
                                            <option {{old('delivery_boy_id',$order->delivery_boy_id)==$d->id?'selected':''}} value="{{$d->id}}">{{$d->name}}</option>
                                        @empty
                                        <option value="">No Data Found</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                        </div>
                        

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection