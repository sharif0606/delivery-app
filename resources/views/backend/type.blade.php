@extends('backend.master')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card formi">
                    <div class="card-header">Type selects</div>

                    <div class="card-body">
                        <form method="POST" action="">
                            @csrf

                            <div class="form-group">
                                <label for="id">Type</label>
                                <input type="number" class="form-control" id="type" name="type" required>
                            </div>

                            

                            <button type="submit" class="btn btn-primary"> Submit </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection