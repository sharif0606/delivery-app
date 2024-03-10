<!-- resources/views/create_shipment.blade.php -->

@extends('backend.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card formi">
                    <div class="card-header">Shipment Cost Settings</div>
                    <div class="card-body">
                        <a href="{{route(request()->session()->get('roleIdentity').'.cost_settings.create')}}" class="btn btn-primary">
                            <i class="lni lni-agenda"></i>
                            Add New
                        </a>

                        <table>
                            <tr>
                                <th></th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
