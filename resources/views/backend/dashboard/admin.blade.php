@extends('backend.master')

@section('content')
<main class="content px-3 py-4">
    <div class="container-fluid">
        <div class="mb-3">
            <h3 class="head" align="center">Welcome, {{request()->session()->get('name')}}</h3>
            <br><br><br>
            <div class="row">
                <div class="col-12 col-md-4 ">
                    <div class="card border-0">
                        <div class="card-body py-4">
                            <h5 class="mb-2 fw-bold">
                                Total Orders
                            </h5>

                            <div class="mb-0">
                            </div>
                            <p>
                            {{$totalOrders}}
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 ">
                    <div class="card  border-0">
                        <div class="card-body py-4">
                            <h5 class="mb-2 fw-bold">
                                Total Customer
                                Customer Accounts
                            </h5>
                            <p class="mb-2 fw-bold">
                                {{$totalUsers}}
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 ">
                    <div class="card border-0">
                        <div class="card-body py-4">
                            <h5 class="mb-2 fw-bold">
                                Total Deliveryman
                            </h5>
                            <p class="mb-2 fw-bold">
                                </h5>
                            <p class="mb-2 fw-bold">
                                {{$totalDeliveryman}}
                            </p>

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</main>
@endsection