<!--
* File: index.blade.php
* Owner: Alex Simangunsong
* Purpose: Index page
* Versions
*   User    |       Date       |            Description              |
*   Alex    |    06/09/2016    | Developed                           |
!-->

@extends('app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/search-box.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

    <style>
        #myModal{
            top:30%;
            outline: none;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid text-center top-tiles row">
        <div class="col-xs-2 col-sm-2 col-md-2"></div>
        <div class="col-xs-2 col-sm-2 col-md-2">
            <a href="{{ route('displayNews') }}">
                <img src="{{ asset('images/news-1.png') }}"
                     class="img-thumbnail"
                     width="70%"
                     alt="News Icon">
            </a>
        </div>

        <div class="col-xs-2 col-sm-2 col-md-2">
            <a href="{{ route('displayMarket') }}">
                <img src="{{ asset('images/market-1.jpg') }}"
                     class="img-thumbnail"
                     width="70%"
                     alt="Market Icon">
            </a>
        </div>

        <div class="col-xs-2 col-sm-2 col-md-2">
            <a href="{{ route('displayHospital') }}">
                <img src="{{ asset('images/hospital-2.ico') }}"
                     class="img-thumbnail"
                     width="70%"
                     alt="Hospital Icon">
            </a>
        </div>

        <div class="col-xs-2 col-sm-2 col-md-2">
            {!! Form::open(array(
                'role' => 'form',
                'url' => '/'
            )) !!}

            <input id="latitude" type="hidden" name="latitude" value="">
            <input id="longitude" type="hidden" name="longitude" value="">
            <div class="text-center">
                <input class="btn btn-default btn-lg"
                       type="image" width="75%"
                       src="{{ asset('images/weather-1.png') }}" alt="Submit">
            </div>

            {!! Form::close() !!}
        </div>

    </div>

    <div class="jumbotron text-center">
        <h1>What are you looking for?</h1>
        <br>
        <br>

        <div class="row">
            <div class="col-xs-push-3 col-sm-push-3 col-md-push-3 col-lg-push-3 col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="input-group stylish-input-group">
                    <input type="text" class="form-control"  placeholder="Search" >
                    <span class="input-group-addon">
                        <button type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>
                </div>
            </div>
        </div>
        <br>

        <h2>OR</h2>

        <br>

        <div class="text-center">
            <div class="row">
                <div>
                    <input id="latitude" type="hidden" name="latitude" value="">
                    <input id="longitude" type="hidden" name="longitude" value="">
                    <div class="text-center">
                        <input class="btn btn-default btn-lg" id="speak"
                               data-toggle="modal" data-target="#myModal"
                               type="image" width="15%"
                               style="background-color: rgba(255,0,0,0.5);"
                               src="{{ asset('images/speaking-1.png') }}" alt="Submit">
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    {{--<div class="container-fluid">--}}
        {{--<h1 class="text-center">Your location:</h1>--}}
        {{--<div class="text-center">--}}
            {{--<p id="demo"></p>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--Modal--}}

    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header text-left">
                    <br><br>
                    <h2 class="modal-title">Please speak now<span id="wait">.</span></h2>
                    <br><br>
                </div>
                <div class="modal-footer text-center">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('pageSpecificJS')
    {{--ID--}}
    {{--<script src='//vws.responsivevoice.com/v/e?key=pfqsv23B'></script>--}}

    {{--EN--}}


    <script>
        var x = document.getElementById("demo");

        function getLocation() {
            if(navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(successHandler);
            } else {
                x.innerHTML = "Geolocation is not supported by this browser";
            }
        }

        function successHandler(position) {
            latitude = position.coords.latitude;
            longitude = position.coords.longitude;
            accuracy = position.coords.accuracy;

            document.getElementById('latitude').value = position.coords.latitude;
            document.getElementById('longitude').value = position.coords.longitude;
        }
    </script>

    {{--Wait animation--}}
    <script>
        var dots = window.setInterval( function() {
            var wait = document.getElementById("wait");
            if ( wait.innerHTML.length > 3 )
                wait.innerHTML = "";
            else
                wait.innerHTML += ".";
        }, 500);
    </script>


    {{--Redirect to search page--}}
    {{--<script>--}}
        {{--$(document).ready(function () {--}}
            {{--window.setTimeout(function () {--}}
                {{--location.href = "https://www.google.com.au";--}}
            {{--}, 5000);--}}
        {{--});--}}
    {{--</script>--}}

    <script>
        $('#speak').click (function (e) {
            e.preventDefault(); //will stop the link href to call the blog page

            setTimeout(function () {
                {{--window.location.href = "{{ route('displayNews') }}";--}}
                window.location.href = "{{ route('displayWeather') }}";
            }, 5000);

        });
    </script>
@endsection