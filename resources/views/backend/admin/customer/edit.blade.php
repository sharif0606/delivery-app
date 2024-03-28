@extends('backend.master')

@section('content')
<main class="content px-3 py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card formi">
                <div class="card-header">Edit Customer Details</div>

                <div class="card-body">
                    <form method="POST"
                        action="{{route(request()->session()->get('roleIdentity').'.customer.update',$user->id)}}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{old('name',$user->name)}}" required>
                        </div>

                        <div class="form-group">
                            <label for="name">Email</label>
                            <input type="text" class="form-control" id="type" name="email"
                                value="{{old('email',$user->email)}}" required>
                        </div>

                        <button type="submit" class="btn btn-primary"> Submit </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection