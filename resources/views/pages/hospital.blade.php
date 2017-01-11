<!--
* File: hospital.blade.php
* Owner: Alex Simangunsong
* Purpose: Hospital page
* Versions
*   User    |       Date       |            Description              |
*   Alex    |    13/10/2016    | Developed                           |
!-->

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
        <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <div class="text-center">
                    <a href="{{ URL::previous() }}">
                        <img src="{{ asset('images/left-arrow.ico') }}"
                             style="top:50%;"
                             width=25%"
                             alt="Weather Icon">
                    </a>
                </div>
            </div>

            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <div class="text-center">
                    <img src="{{ asset('images/hospital-2.ico') }}"
                         class=""
                         width=30%"
                         alt="Weather Icon">
                </div>
            </div>

            <div class="col-md-2">

            </div>

            <div class="col-xs-1 col-sm-1 col-md-1" style="">
                <a href="#" id="mute" onclick="muteVoice()">
                    <img src="{{ asset('images/mute-1.png') }}"
                         class="img-thumbnail"
                         style="margin-top: 20px;"
                         width="90%"
                         alt="Mute Icon">
                </a>
            </div>
        </div>

    </div>

    <div class="jumbotron text-center">
        <h1>Layanan Kesehatan di sekitar anda</h1>
        <div class="container-fluid">
            <div id="map"></div>
        </div>
    </div>
@endsection

@section('pageSpecificJS')
    {{--Voice API--}}
    <script src='//vws.responsivevoice.com/v/e?key=jNbO27u7'></script>

    <script>
        var map;
        var infowindow;

        function initMap() {
//            var canberra = {lat: -35.282, lng: 149.1287};
            var sekolahMaster = {lat: -6.390531, lng: 106.823833};
//            var sekolahMaster = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);

            map = new google.maps.Map(document.getElementById('map'), {
                center: sekolahMaster,
                zoom: 15
            });

            infowindow = new google.maps.InfoWindow();
            var service = new google.maps.places.PlacesService(map);
            service.nearbySearch({
                location: sekolahMaster,
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
                label: '+',
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