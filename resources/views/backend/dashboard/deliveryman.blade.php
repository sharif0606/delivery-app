@extends('backend.master_deliveryman')


@section('content')
<main class="content px-3 py-4">
    <div class="container-fluid">
        <div class="mb-3">
            <h1 class="head">Welcome, {{request()->session()->get('name')}}</h1>
            <div class="row">
                <div class="col-12 col-md-4 ">
                    <div class="card border-0">
                        <div class="card-body py-4">
                            <h5 class="mb-2 fw-bold">
                                Total Assigned Delivery
                            </h5>
                            <p class="mb-2 fw-bold">
                            {{ $totalOrders }}
                            </p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 ">
                    <div class="card  border-0">
                        <div class="card-body py-4">
                            <h5 class="mb-2 fw-bold">
                                Pending Orders
                            </h5>
                            <p class="mb-2 fw-bold">
                                {{$pendingOrders}}
                            </p>
                            
                        </div>
                    </div>
                </div>
                
            </div>
            
            
        </div>
    </div>
</main>
@endsection
