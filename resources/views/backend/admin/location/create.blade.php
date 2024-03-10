@extends('backend.master')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card formi">
                    <div class="card-header">Location</div>

                    <div class="card-body">
                        <form method="POST" action="{{route(request()->session()->get('roleIdentity').'.location.store')}}">
                            @csrf
                            <div class="form-group">
                                <label for="id">Location</label>
                                <input type="text" class="form-control" id="location" name="name" value="{{old('name')}}" required>
                            </div>
                            <button type="submit" class="btn btn-primary"> Submit </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection