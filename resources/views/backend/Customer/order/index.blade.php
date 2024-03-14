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
    </main>

@endsection