@extends('backend.master_customer')


@section('content')
<main class="content px-3 py-4">
    <div class="container-fluid">
        <div class="mb-3">
            <h3 class="head" id ="title" align="center">Welcome, {{request()->session()->get('name')}}</h3>
            
                
        </div>
        <button class="toggle-btn" type="button">
                    <i class="lni lni-grid-alt"></i>
        </button>
    </div>
</main>
@endsection
