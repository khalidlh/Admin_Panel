@extends('layouts.app')
@section('style')
<style>
    .avatar{
        padding: 0;
        margin: 0;
       width: 10%;
       height: 10%;
       border-radius: 50%;
    }
   .imgtd{
    width:25%;
   }
   .delete{
    color: red;
   }
</style>
@endsection
@section('content')
    <div id="wrapper">
        @include('layouts.sidebar')
        <div id="content-wrapper" class="d-flex flex-column">
            @include('layouts.topbar')
            @livewire('gestionusers')
        </div>
    </div>
@endsection
@section('scripte')
    <!-- Optional: Place to the bottom of scripts -->
<script>
    const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)
    const myModal = new bootstrap.Modal(document.getElementById('modalId1'), options)
    const myModal = new bootstrap.Modal(document.getElementById('modalId2'), options)
                    
</script>
@endsection
