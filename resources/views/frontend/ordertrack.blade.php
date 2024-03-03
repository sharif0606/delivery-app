@extends('frontend.layout.master')

@section('content')
<main>
    <form id="track-form">
        <label for="tracking-number">Enter Tracking Number:</label>
        <input type="text" id="tracking-number" name="tracking-number" required>
        <button type="submit">Track</button>
    </form>
    <div id="tracking-results"></div>
</main>
@endsection

@push('scripts')
<script src="{{asset('frontend/js/script.js')}}"></script>
@endpush