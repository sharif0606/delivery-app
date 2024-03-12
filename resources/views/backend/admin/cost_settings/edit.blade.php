@extends('backend.master')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card formi">
                    <div class="card-header">Cost Selects</div>

                    <div class="card-body">
                        <form method="POST" action="{{route(request()->session()->get('roleIdentity').'.costs_settings.update',$data->id)}}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="id">From_location</label>
                                <input type="text" class="form-control" id="From_location" name="name" value="{{old('name',$data->name)}}" required>
                            </div>
                            <button type="submit" class="btn btn-primary"> Submit </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection