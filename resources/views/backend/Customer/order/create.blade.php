@extends('backend.master_customer')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card formi">
                <div class="card-header">Order details</div>
                <div class="card-body">
                    <form method="POST" action="{{route(request()->session()->get('roleIdentity').'.order.store')}}">
                        @csrf
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="pickup_date">Pickup Date:</label>
                                <input type="date" class="form-control" id="pickup_date" name="pickup_date">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="pickup_location">Pickup Location:</label>
                                    <select name="pickup_location" id="pickup_location" class="form-control" required>
                                        <option value="">Select Location</option>
                                        @forelse($location as $from)
                                            <option {{old('pickup_location')==$from->id?'selected':''}} value="{{$from->id}}">{{$from->name}}</option>
                                        @empty
                                        <option value="">No Data Found</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="pickup_address">Pickup Address:</label>
                                <input type="text" class="form-control" id="pickup_address" name="pickup_address">
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="delivery_location">Delivery Location:</label>
                                    <select name="delivery_location" id="delivery_location" class="form-control" required>
                                        <option value="">Select Location</option>
                                        @forelse($location as $from)
                                            <option {{old('delivery_location')==$from->id?'selected':''}} value="{{$from->id}}">{{$from->name}}</option>
                                        @empty
                                        <option value="">No Data Found</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="delivery_address">Delivery Address:</label>
                                <input type="text" class="form-control" id="delivery_address" name="delivery_address">
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="type_id">Type:</label>
                                    <select name="type_id" id="type_id" class="form-control" required>
                                        <option value="">Select Type</option>
                                        @forelse($type as $from)
                                            <option {{old('type_id')==$from->id?'selected':''}} value="{{$from->id}}">{{$from->name}}</option>
                                        @empty
                                        <option value="">No Data Found</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="is_urgent">Urgent ?:</label>
                                    <select name="is_urgent" id="is_urgent" class="form-control">
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="product">Product:</label>
                                <input class="form-control" type="text" id="product" name="product" required>
                            </div>
                            <div class="col-sm-6">
                                <label for="price">Product Price:</label>
                                <input class="form-control" type="text" id="price" name="price" required>
                            </div>
                            <br>
                            <br>
                            <br>
                            <br>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="weight">Weight:</label>
                                    <input type="number" value="{{old('weight')}}" class="form-control" id="weight" name="weight">
                                </div>

                            </div>
                            <div style="margin-top: 20px;">
                            <div class="col-sm-6">
                                <table class="table">
                                    <tr>
                                        <td align="right">Base Price:</td>
                                        <td>
                                            <span class="base_price">0.00</span>
                                            <input type="hidden" id="base_price" name="delivery_cost_base">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right">Weight Cost:</td>
                                        <td>
                                            <span class="weight_cost">0.00</span>
                                            <input type="hidden" id="weight_cost" name="delivery_cost_weight">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right">Urgent Cost:</td>
                                        <td>
                                            <span class="urgent">0.00</span>
                                            <input type="hidden" id="urgent" name="urgent_cost">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right">Total Cost:</td>
                                        <td style="border-top:4px double">
                                            <span class="total_cost">0.00</span>
                                        </td>
                                    </tr>
                                </table>
                            <button type="button" class="btn btn-primary" onclick="get_cost()">Get Cost</button>
                            </div>
                        </div>
                            <div class="col-sm-12">
                                <label for="note">Note:</label>
                                <textarea class="form-control" id="note" name="note"></textarea>
                            </div>
                        </div>
                        

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('script')
<script>
    function get_cost(){
        // let pickup_location=$('#pickup_location').val();
        // let delivery_location=$('#delivery_location').val();
        // let type_id=$('#type_id').val();
        // let weight=$('#weight').val();
        // let is_urgent=$('#is_urgent').val();
        let obj={
            'pickup_location':$('#pickup_location').val(),
            'delivery_location':$('#delivery_location').val(),
            'type_id':$('#type_id').val(),
            'weight':$('#weight').val(),
            'is_urgent':$('#is_urgent').val(),
        }
        
        $.get("{{route(request()->session()->get('roleIdentity').'.order.check_rate')}}",obj, function(data, status){
            if(data.status){
                $('#base_price').val(data.base_price)
                $('.base_price').text(data.base_price)
                $('#weight_cost').val(data.weight_cost)
                $('.weight_cost').text(data.weight_cost)
                $('#urgent').val(data.urgent)
                $('.urgent').text(data.urgent)
                $('.total_cost').text(data.total)
            }else{
                $('#base_price,#weight_cost,#urgent').val('0.00')
                $('.urgent,.total_cost,.weight_cost,.base_price').text('0.00')

                alert('Our service is not available in this location with your package weight.')
            }
        });
    }
</script>
@endpush
