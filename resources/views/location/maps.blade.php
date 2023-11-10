@extends('layouts.app')
@section('content')
<div id="wrapper">
    @include('layouts.sidebar')
    <div id="content-wrapper" class="d-flex flex-column">
        @include('layouts.topbar')
        {{-- <div wire:ignore id="mapContainer"></div> --}}
    </div>
</div>
@endsection
@section('scripte')
{{-- <script>
    ...
    // the map default loading stuff
	// Instantiate (and display) a map object:
    const map = new H.Map(document.getElementById('mapContainer')), 
    
    ...

    // map interaction
    document.addEventListener('livewire:load', function () {
        let places = @this.places; // livewire $places
        window.onload = function () {
            moveMapTo(@this.location.position);
        }
        window.addEventListener('locationDataUpdated', event => { // livewire dispatchBrowserEvent on an update method
            map.setZoom(10);
            moveMapTo(event.detail.location.position);
            map.getViewPort().resize();
        });
        
        map.addEventListener('mapviewchangeend', function() {
            ...
            @this.mapViewChanged({ // livewire method
                lat: viewLat,
                lng: viewLng,
                zoom: zoom,
            });
        });
            
    });
</script> --}}
@endsection