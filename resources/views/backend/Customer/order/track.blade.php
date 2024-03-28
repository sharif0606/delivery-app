@extends('backend.master_customer')

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
            
        </div>
    </div>
</div>

@endsection

@push('script')
<script>
    
</script>
@endpush
