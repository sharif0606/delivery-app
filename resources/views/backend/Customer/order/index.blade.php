@extends('backend.master_customer')

@section('content')

    <main class="content px-3 py-4">
        <div class="container-fluid">
            <div class="mb-3">
                <h3 class="fw-bold fs-4 my-3">Order details</h3>
                <div class="row">
                    <div class="col-12">    
                        <table class="table table-striped">
                            <thead>
                                <tr class="highlight">
                                    <th scope="col">#</th>
                                    <th scope="col">Delivered By</th>
                                    <th scope="col">Pickup Date</th>
                                    <th scope="col">Delivered Date</th>
                                    <th scope="col">Pickup Address</th>
                                    <th scope="col">delivery Address</th>
                                    <th scope="col">customer no</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($orders as $d)
                                    <tr>
                                        <th scope="row">{{$d->id}}</th>
                                        <td>{{$d->deliveryMan?->name}}</td>
                                        <td>{{$d->pickup_date}}</td>
                                        <td>{{$d->delivery_date}}</td>
                                        <td>{{$d->pickupLocation?->name}} <br> {{$d->pickup_address}}</td>
                                        <td>{{$d->deliveryLocation?->name}} <br> {{$d->delivery_address}}</td>
                                        <td>{{$d->customer?->email}}</td>
                                        <td>
                                            <a href="{{route(request()->session()->get('roleIdentity').'.order.track',$d->id)}}" class="btn btn-info">
                                                <i class="lni lni-pencil"></i>
                                                Track Order
                                            </a>
                                            <a href="{{route(request()->session()->get('roleIdentity').'.order_invoice',$d->id)}}" class="btn btn-info">
                                                <i class="lni lni-file"></i>
                                                Invoice
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    
                                @endforelse
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection