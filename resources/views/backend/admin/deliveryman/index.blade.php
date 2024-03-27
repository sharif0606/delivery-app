@extends('backend.master')

@section('content')

    <main class="content px-3 py-4">
        <div class="container-fluid">
            <div class="mb-3">
                <h3 class="fw-bold fs-4 my-3">Deliveryman List</h3>
                <div class="row">
                    <div class="col-12">    
                        <a href="{{route(request()->session()->get('roleIdentity').'.deliveryman.create')}}" class="btn btn-primary">
                            <i class="lni lni-agenda"></i>
                            Add New
                        </a>
                        <br><br>
                        <table class="table table-striped">
                            <thead>
                                <tr class="highlight">
                                    <th>Deliveryman ID</th>
                                    <th>Deliveryman Name</th>
                                    <th>Deliveryman Email</th>
                                    <th></th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                @foreach ($data as $c)
                                <tr>
                                    <th>{{$c->id}}</th>
                                    <td>{{$c->name}}</td>
                                    <td>{{$c->email}}</td>
                                    <td></td>
                                    <td>
                                        <a href="{{route(request()->session()->get('roleIdentity').'.deliveryman.edit',$c->id)}}" class="btn btn-info">
                                            <i class="lni lni-pencil"></i>
                                            Edit
                                        </a>
                                        <form onsubmit="return confirm('Are you sure?')" action="{{route(request()->session()->get('roleIdentity').'.deliveryman.destroy',$c->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"> <i class="lni lni-trash-can"></i> Delete</button>
                                        </form>
                                    </td>
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