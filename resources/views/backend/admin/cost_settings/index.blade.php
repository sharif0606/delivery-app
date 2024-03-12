<!-- resources/views/create_shipment.blade.php -->

@extends('backend.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card formi">
                    <div class="card-header">Shipment Cost Settings</div>
                    <div class="card-body">
                        <a href="{{route(request()->session()->get('roleIdentity').'.cost_settings.create')}}" class="btn btn-primary">
                            <i class="lni lni-agenda"></i>
                            Add New
                        </a>

                        <table>
                            <thead>
                                <tr>
                                    <th>#SL</th>
                                    <th>From Location</th>
                                    <th>To Location</th>
                                    <th>Type</th>
                                    <th>Weight From:</th>
                                    <th>Weight To:</th>
                                    <th>Base Price:</th>
                                    <th>Weight Cost:</th>
                                </tr>
                            </thead>
                            @forelse($data as $d)
                            
                                <tr>
                                    <td>{{$d->id}}</td>
                                    <td>{{$d->from_location_id}}</td>
                                    <td>{{$d->to_location_id}}</td>
                                    <td>{{$d->type_id}}</td>
                                    <td>{{$d->weight_from}}</td>
                                    <td>{{$d->weight_to}}</td>
                                    <td>{{$d->base_price}}</td>
                                    <td>{{$d->weight_cost}}</td>
                                    <td>
                                        <a href="{{route(request()->session()->get('roleIdentity').'.location.edit',$d->id)}}" class="btn btn-info">
                                            <i class="lni lni-pencil"></i>
                                        Edit
                                        </a>
                                        <form onsubmit="return confirm('Are you sure?')" action="{{route(request()->session()->get('roleIdentity').'.location.destroy',$d->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"> <i class="lni lni-trash-can"></i> Delete</button>
                                        </form>
                                                
                                    </td>
                                </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
