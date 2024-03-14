@extends('backend.master')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card formi">
                    <div class="card-header">Add new delivery man</div>

                    <div class="card-body">
                        <form method="POST" action="{{route(request()->session()->get('roleIdentity').'.deliveryman.store')}}">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" required>
                            </div>

                            <div class="form-group">
                                <label for="name">Email</label>
                                <input type="text" class="form-control" id="type" name="email" value="{{old('email')}}" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="text" class="form-control" id="password" name="password" required>
                            </div>

                            <button type="submit" class="btn btn-primary"> Submit </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection