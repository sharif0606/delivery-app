<<<<<<< HEAD
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
=======
@extends('backend.master_deliveryman')


@section('content')
<main class="content px-3 py-4">
    <div class="container-fluid">
        <div class="mb-3">
            <h3 class="fw-bold fs-4 mb-3">Admin Dashboard</h3>
            <div class="row">
                <div class="col-12 col-md-4 ">
                    <div class="card border-0">
                        <div class="card-body py-4">
                            <h5 class="mb-2 fw-bold">
                                Total Due Delivery
                            </h5>
                            <p class="mb-2 fw-bold">
                                50
                            </p>
                            <div class="mb-0">
                                <span class="badge text-success me-2">
                                    +9.0%
                                </span>
                                <span class=" fw-bold">
                                    Since Last Month
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 ">
                    <div class="card  border-0">
                        <div class="card-body py-4">
                            <h5 class="mb-2 fw-bold">
                                Confirmed delivery
                            </h5>
                            <p class="mb-2 fw-bold">
                                30
                            </p>
                            <div class="mb-0">
                                <span class="badge text-success me-2">
                                    +9.0%
                                </span>
                                <span class="fw-bold">
                                    Since Last Month
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 ">
                    <div class="card border-0">
                        <div class="card-body py-4">
                            <h5 class="mb-2 fw-bold">
                                Memebers Progress
                            </h5>
                            <p class="mb-2 fw-bold">
                                $72,540
                            </p>
                            <div class="mb-0">
                                <span class="badge text-success me-2">
                                    +9.0%
                                </span>
                                <span class="fw-bold">
                                    Since Last Month
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h3 class="fw-bold fs-4 my-3">Avg. Agent Earnings</h3>
            
        </div>
    </div>
</main>
@endsection
>>>>>>> 37db6a4a27bb287715a7da94796a0ff2d73cffe5
