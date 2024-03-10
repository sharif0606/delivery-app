@extends('backend.master')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card formi">
                    <div class="card-header">Type selects</div>

                    <div class="card-body">
                        <form method="POST" action="{{route(request()->session()->get('roleIdentity').'.location.update',$location->id)}}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="id">Type</label>
                                <input type="text" class="form-control" id="location" name="name" value="{{old('name',$location->name)}}" required>
                            </div>
                            <button type="submit" class="btn btn-primary"> Submit </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection