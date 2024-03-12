@extends('backend.master_customer')

@section('content')

    <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card formi">
                        <div class="card-header">Order details</div>
                        <div class="card-body">
                        
                            
                            <table >
                                <thead>
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Order Cost</th>
                                        <th>Order Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $order->cost }}</td>
                                        <td>{{ $order->status }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection