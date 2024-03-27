@extends('backend.master')

@section('content')
<main class="content px-3 py-4">
    <div class="container-fluid">
        <div class="mb-3">
            <h3 class="fw-bold fs-4 my-3">Delivery locations</h3>
            <div class="row">
                <div class="col-12">
                    <a href="{{route(request()->session()->get('roleIdentity').'.location.create')}}"
                        class="btn btn-primary">
                        <i class="lni lni-agenda"></i>
                        Add New
                    </a>
                    <br><br>
                    <table class="table table-striped">
                        <thead>
                            <tr class="highlight">
                                <th>#SL</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @forelse($data as $d)
                        <tbody>
                            <tr>
                                <td>{{$d->id}}</td>
                                <td>{{$d->name}}</td>
                                <td>
                                    <a href="{{route(request()->session()->get('roleIdentity').'.location.edit',$d->id)}}"
                                        class="btn btn-info">
                                        <i class="lni lni-pencil"></i>
                                        Edit
                                    </a>
                                    <form onsubmit="return confirm('Are you sure?')"
                                        action="{{route(request()->session()->get('roleIdentity').'.location.destroy',$d->id)}}"
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
                            {{-- 
                                <?php if($data){
                                        foreach($data as $d){
                                ?>
                                <tr>
                                    <td>{{$d->id}}</td>
                            <td>{{$d->name}}</td>
                            <td>

                            </td>
                            </tr>
                            <?php
                                        }
                                } ?> --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection