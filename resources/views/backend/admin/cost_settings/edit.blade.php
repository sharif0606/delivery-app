@extends('backend.master')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card formi">
                    <div class="card-header">Cost Selects</div>

                    <div class="card-body">
                        <form method="POST" action="{{route(request()->session()->get('roleIdentity').'.cost_settings.update',$data->id)}}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="from_location_id">From Location:</label>
                                <select name="from_location_id" id="from_location_id" class="form-control" required>
                                    <option value="">Select Location</option>
                                    @forelse($location as $from)
                                        <option {{old('from_location_id',$data->from_location_id)==$from->id?'selected':''}} value="{{$from->id}}">{{$from->name}}</option>
                                    @empty
                                    <option value="">No Data Found</option>
                                    @endforelse
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="to_location_id">To Location:</label>
                                <select name="to_location_id" id="to_location_id" class="form-control" required>
                                    <option value="">Select Location</option>
                                    @forelse($location as $from)
                                        <option {{old('to_location_id',$data->to_location_id)==$from->id?'selected':''}} value="{{$from->id}}">{{$from->name}}</option>
                                    @empty
                                    <option value="">No Data Found</option>
                                    @endforelse
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="type_id">Type:</label>
                                <select name="type_id" id="type_id" class="form-control" required>
                                    <option value="">Select Type</option>
                                    @forelse($type as $from)
                                        <option {{old('type_id',$data->type_id)==$from->id?'selected':''}} value="{{$from->id}}">{{$from->name}}</option>
                                    @empty
                                    <option value="">No Data Found</option>
                                    @endforelse
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="weight_from">Weight From:</label>
                                <input type="number" value="{{old('weight_from',$data->weight_from)}}" class="form-control" id="weight_from" name="weight_from" required>
                            </div>

                            <div class="form-group">
                                <label for="weight_to">Weight To:</label>
                                <input type="number" value="{{old('weight_to',$data->weight_to)}}" class="form-control" id="weight_to" name="weight_to" required>
                            </div>

                            <div class="form-group">
                                <label for="base_price">Base Price:</label>
                                <input type="number" value="{{old('base_price',$data->base_price)}}" class="form-control" id="base_price" name="base_price" required>
                            </div>

                            <div class="form-group">
                                <label for="weight_cost">Weight Cost:</label>
                                <input type="number" value="{{old('weight_cost',$data->weight_cost)}}" class="form-control" id="weight_cost" name="weight_cost" required>
                            </div>

                            <button type="submit" class="btn btn-primary"> Submit </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection