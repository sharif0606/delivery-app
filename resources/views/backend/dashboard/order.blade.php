@extends('backend.master')

@section('content')

    

<!-- resources/views/deliveryman/dashboard.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Assigned Orders</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($assignedOrders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>
                        <form action="{{ route('updateOrderStatus', $order->id) }}" method="POST">
                            @csrf
                            <select name="status">
                                <option value="pending" @if($orders->status == 'pending') selected @endif>Pending</option>
                                <option value="processing" @if($orders->status == 'processing') selected @endif>Processing</option>
                                <option value="delivered" @if($orders->status == 'delivered') selected @endif>Delivered</option>
                                <option value="declined" @if($orders->status == 'declined') selected @endif>Declined</option>
                            </select>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('updateOrderStatus', $order->id) }}" method="POST">
                            @csrf
                            
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@endsection
