@extends('backend.master_customer')

@section('content')

    <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card formi">
                        <div class="card-header">Order details</div>
                        <div class="card-body">
                        
                            
                        <table class="table table-striped">
                        <thead>
                            <tr class="highlight">
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">pickup address</th>
                                <th scope="col">pickup location</th>
                                <th scope="col">delivery_address</th>
                                <th scope="col">delivery_location</th>
                                <th scope="col">status</th>
                                


                            </tr>
                        </thead>
                        <tbody>
                            @forelse($orders as $c)
                            <tr>
                                <th>{{$c->id}}</th>
                                <td>{{$c->customer_id}}</td>
                                <td>{{$c->email}}</td>
                                <td>{{$c->pickup_address}}</td>
                                <td>{{$c->pickup_address}}</td>
                                <td>{{$c->delivery_address}}</td>
                                <td>{{$c->delivery_location}}</td>
                                <td>{{$c->status}}</td>
                                
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