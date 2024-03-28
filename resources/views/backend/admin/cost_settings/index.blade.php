<!-- resources/views/create_shipment.blade.php -->

@extends('backend.master')

@section('content')
<main class="content px-3 py-4">
    <div class="container-fluid">
        <div class="mb-3">
            <div class="fw-bold fs-4 my-3">Shipment Cost Settings</div>
            <div class="row">
                <div class="col-12">
                    <a href="{{route(request()->session()->get('roleIdentity').'.cost_settings.create')}}"
                        class="btn btn-primary">
                        <i class="lni lni-agenda"></i>
                        Add New
                    </a>
                    <br><br>
                    <table class="table table-striped">
                        <thead>
                            <tr class="highlight">
                                <th>#SL</th>
                                <th>From Location</th>
                                <th>To Location</th>
                                <th>Type</th>
                                <th>Weight From:</th>
                                <th>Weight To:</th>
                                <th>Base Price:</th>
                                <th>Weight Cost:</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @forelse($data as $d)
                        <tbody>
                            <tr>
                                <td>{{$d->id}}</td>
                                <td>{{$d->fromCountry?->name}}</td>
                                <td>{{$d->toCountry?->name}}</td>
                                <td>{{$d->docType?->name}}</td>
                                <td>{{$d->weight_from}}</td>
                                <td>{{$d->weight_to}}</td>
                                <td>{{$d->base_price}}</td>
                                <td>{{$d->weight_cost}}</td>
                                <td>
                                    <a href="{{route(request()->session()->get('roleIdentity').'.cost_settings.edit',$d->id)}}"
                                        class="btn btn-info">
                                        <i class="lni lni-pencil"></i>Edit
                                    </a>
                                    <form onsubmit="return confirm('Are you sure?')"
                                        action="{{route(request()->session()->get('roleIdentity').'.cost_settings.destroy',$d->id)}}"
                                        method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"> <i class="lni lni-trash-can"></i>
                                            Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3">No data found</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection