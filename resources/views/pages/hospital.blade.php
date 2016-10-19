
@extends('app')

@section('css')
    <style>
        #map {
            height: 600px;
            width: 70%;
            left: 15%;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid">

    </div>

    <div class="jumbotron text-center">
        <h1>Nearest Health Service Providers</h1>
        <div class="container-fluid">
            <div id="map"></div>
        </div>
    </div>
@endsection

@section('pageSpecificJS')
    <script>
        var map;
        var infowindow;

        function initMap() {
            var canberra = {lat: -35.282, lng: 149.1287};

            map = new google.maps.Map(document.getElementById('map'), {
                center: canberra,
                zoom: 15
            });

            infowindow = new google.maps.InfoWindow();
            var service = new google.maps.places.PlacesService(map);
            service.nearbySearch({
                location: canberra,
                radius: 5000,
                type: ['hospital']
            }, callback);
        }

        function callback(results, status) {
            if (status === google.maps.places.PlacesServiceStatus.OK) {
                for (var i = 0; i < results.length; i++) {
                    createMarker(results[i]);
                }
            }
        }

        function createMarker(place) {
            var placeLoc = place.geometry.location;
            var marker = new google.maps.Marker({
                map: map,
                position: place.geometry.location
            });

            google.maps.event.addListener(marker, 'click', function() {
                infowindow.setContent(place.name);
                infowindow.open(map, this);
            });
        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRnWYmx12xjMx_pKE55lQad5pfV1p0OHM&libraries=places&callback=initMap" async defer></script>
@endsection