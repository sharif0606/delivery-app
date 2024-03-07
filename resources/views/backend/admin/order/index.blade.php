@extends('backend.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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
                                <th scope="col">Taken</th>
                                <th scope="col">Expected delivery(days)</th>
                                <th scope="col">customer no</th>
                                <th scope="col">Order location</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Tyson</td>
                                <td>Mark</td>
                                <td>5</td>
                                <td>01*******</td>
                                <td>house 68, Wall street road</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection