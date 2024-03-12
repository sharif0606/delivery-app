@extends('backend.master')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card formi">
                    <div class="card-header">Document Type</div>
                    <div class="card-body">
                       
                        <a href="{{route(request()->session()->get('roleIdentity').'.type.create')}}" class="btn btn-primary">
                            <i class="lni lni-agenda"></i>
                            Add New
                        </a>
                        <table class="table">
                            <tr>
                                <th>#SL</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                            @forelse($data as $d)
                                <tr>
                                    <td>{{$d->id}}</td>
                                    <td>{{$d->name}}</td>
                                    <td>
                                        <a href="{{route(request()->session()->get('roleIdentity').'.type.edit',$d->id)}}" class="btn btn-info">
                                            <i class="lni lni-pencil"></i>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                            <tr>
                                <td colspan="3">No data found</td>
                            </tr>
                            @endforelse
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection