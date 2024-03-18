@extends('backend.master_deliveryman')

@section('content')
@php $status=['Pending','Accepted','Processing','Completed','Return'] @endphp
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card formi">
                <div class="card-header">Order Track History</div>
                <div class="card-body">
                    
                    <table class="table">
                        <tr>
                            <td>Date</td>
                            <td>Note</td>
                            <td>Status</td>
                        </tr>
                        @forelse($order->track as $ot)
                            <tr>
                                <td>{{$ot->track_date}}</td>
                                <td>{{$ot->note}}</td>
                                <td>{{$status[$ot->status]}}</td>
                            </tr>
                        @empty

                        @endforelse
                    </table>
                </div>
            </div>
            <div class="card formi">
                <div class="card-header">Order Track</div>
                <div class="card-body">
                    <form method="POST" action="{{route(request()->session()->get('roleIdentity').'.order.track.store',$order->id)}}">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="note">Note:</label>
                                <textarea class="form-control" id="note" name="note"></textarea>
                            </div>
                            <div class="col-sm-6">
                                <label for="track_date">Date:</label>
                                <input type="date" class="form-control" id="track_date" name="track_date">
                            </div>
                            <div class="col-sm-6">
                                <label for="pickup_address">Status:</label>
                                <select class="form-control" id="status" name="status">
                                    @foreach ($status as $k=>$v)
                                        <option value="{{$k}}">{{$v}}</option>
                                    @endforeach
                                </select>
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
    
</script>
@endpush
