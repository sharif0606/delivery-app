@extends('backend.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card formi">
                <div class="card-header">Order</div>
                <div class="card-body">
                   
                    <a href="{{route(request()->session()->get('roleIdentity').'.type.create')}}" class="btn btn-primary">
                        <i class="lni lni-agenda"></i>
                        Add New
                    </a>
                    <table class="table table-striped">
                        <thead>
                            <tr class="highlight">
                                <th scope="col">#</th>
                                <th scope="col">Order given</th>
                                <th scope="col">Delivered By</th>
                                <th scope="col">Pickup Date</th>
                                <th scope="col">Pickup Address</th>
                                <th scope="col">delivery Address</th>
                                <th scope="col">customer no</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $d)
                                <tr>
                                    <th scope="row">{{$d->id}}</th>
                                    <td>{{$d->customer?->name}}</td>
                                    <td>{{$d->deliveryMan?->name}}</td>
                                    <td>{{$d->pickup_date}}</td>
                                    <td>{{$d->pickupLocation?->name}} <br> {{$d->pickup_address}}</td>
                                    <td>{{$d->deliveryLocation?->name}} <br> {{$d->delivery_address}}</td>
                                    <td>{{$d->customer?->email}}</td>
                                    <td>
                                        <a href="{{route(request()->session()->get('roleIdentity').'.order.edit',$d->id)}}" class="btn btn-info">
                                            <i class="lni lni-pencil"></i>
                                            Edit
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
</div>

@endsection