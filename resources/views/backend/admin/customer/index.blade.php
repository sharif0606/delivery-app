@extends('backend.master')

@section('content')

<section id="home">
    <div class="content">
        <h4>Your Trusted Route to Reliable Delivery</h4>


    </div>
</section>

<main class="content px-3 py-4">
    <div class="container-fluid">
        <div class="mb-3">
            <h3 class="fw-bold fs-4 my-3">Avg. Agent Earnings
            </h3>
            <div class="row">
                <div class="col-12">
                    <table class="table table-striped">
                        <thead>
                            <tr class="highlight">
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Orders given</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($data as $c)
                            <tr>
                                <th>{{$c->id}}</th>
                                <td>{{$c->name}}</td>
                                <td>{{$c->email}}</td>
                                <td>10</td>
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