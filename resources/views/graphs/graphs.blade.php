@extends('layouts.app')
@section('style')
    <style>
        .error {
            color: red;
            font-size: 10px;
        }
    </style>
@endsection
@section('content')
    <div id="wrapper">
        @include('layouts.sidebar')
        <div id="content-wrapper" class="d-flex flex-column">
            @include('layouts.topbar')
            @livewire('graphs')
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)
    </script>
@endsection
