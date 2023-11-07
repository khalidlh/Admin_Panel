@extends('layouts.app')
@section('style')
<style>
    .error{
        color:red;
        font-size: 10px;
    }

</style>
    
@endsection
@section('content')
@livewire('authentification')
@endsection