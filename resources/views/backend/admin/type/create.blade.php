@extends('backend.master')

@section('content')
<main class="content px-3 py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card formi">
                <div class="card-header">Type selects</div>

                <div class="card-body">
                    <form method="POST" action="{{route(request()->session()->get('roleIdentity').'.type.store')}}">
                        @csrf
                        <div class="form-group">
                            <label for="id">Type</label>
                            <input type="text" class="form-control" id="type" name="name" value="{{old('name')}}"
                                required>
                        </div>
                        <button type="submit" class="btn btn-primary"> Submit </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection