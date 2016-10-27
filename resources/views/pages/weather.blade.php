<!--
* File: weather.blade.php
* Owner: Alex Simangunsong
* Purpose: Index page
* Versions
*   User    |       Date       |            Description              |
*   Alex    |    13/09/2016    | Developed                           |
!-->

@extends('app')

@section('onLoadFunction')
    weatherLoadFunctions()
@endsection

@section('css')

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
                    <img src="{{ asset('images/weather-1.png') }}"
                         class=""
                         width=30%"
                         alt="Weather Icon">
                </div>
            </div>

            <div class="col-md-4">

            </div>
        </div>

    </div>

    <div class="jumbotron text-center">
        {{--<h2>Your timezone:</h2>--}}
        <h2>Lokasi anda:</h2>
        <h3>{{ Session::get('forecast')['timezone'] }}</h3>

        <hr>

        {{--<h2>Your current weather:</h2>--}}
        <h2>Cuaca hari ini:</h2>
        <img src="{{ asset('images/weather/') }}/{{ Session::get('forecast')['currently']['icon'] }}.jpg"
             alt="Current weather icon - {{ Session::get('forecast')['currently']['icon'] }}"
             width="10%">
        <h2>{{ Session::get('forecast')['currently']['temperature'] }} C</h2>
        <h3>{{ Session::get('forecast')['currently']['summary'] }}</h3>

        <hr>

        {{--<h2>Your weekly weather:</h2>--}}
        <h2>Cuaca beberapa hari ke depan:</h2>
        <div class="row">
            @for ($i = 1; $i < 7; $i++)
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <div>
                    <h2>
                        {{ gmdate("D", Session::get('forecast')['daily']['data'][$i]['time']) }}
                    </h2>
                    <h4>
                        {{ gmdate("d M", Session::get('forecast')['daily']['data'][$i]['time']) }}
                    </h4>

                </div>
                <div>
                    <img src="{{ asset('images/weather/') }}/{{ Session::get('forecast')['daily']['data'][$i]['icon'] }}.jpg"
                         alt="Current weather icon - {{ Session::get('forecast')['daily']['data'][$i]['icon'] }}"
                         width="60%">
                </div>
                {{--<div>{{ Session::get('forecast')['daily']['data'][$i]['summary'] }}</div>--}}
                <div>{{ Session::get('forecast')['daily']['data'][$i]['icon'] }}</div>

                <div class="col-md-6">
                    Min
                </div>

                <div class="col-md-6">
                    Max
                </div>
                <div class="col-md-6">
                    {{ Session::get('forecast')['daily']['data'][$i]['temperatureMin'] }}
                </div>
                <div class="col-md-6">
                    {{ Session::get('forecast')['daily']['data'][$i]['temperatureMax'] }}
                </div>
            </div>
            @endfor
        </div>
        <h3></h3>
    </div>



@endsection

@section('pageSpecificJS')
    {{--<script src='//vws.responsivevoice.com/v/e?key=mYdpcjaU'></script>--}}

    <script>
        function weatherLoadFunctions() {

            var textEN =
                    "Here is the weather forecast for today. The current temperature is 20 degree celsius." +
                    "Click the button below to find out the weather forecast for the next few days, " +
                    "or click on the arrow to go to the previous menu";
            var textID = "Berikut adalah prakiraan cuaca hari ini. Cuaca hari ini " +
                    "{{ Session::get('forecast')['currently']['summary'] }}" + ", dengan suhu " +
                    "{{ Session::get('forecast')['currently']['temperature'] }}" + " derajat selsius." +
                    "Tekan tombol dibawah untuk melihat prakiraan cuaca beberapa hari ke depan.";

            setTimeout(function() {
                console.log("Launching welcome message" );
//                responsiveVoice.speak(textEN,'UK English Male');
//                responsiveVoice.speak(textEN,'US English Female');
                responsiveVoice.speak(textID,'Indonesian Female');
            },500);
        }
    </script>
@endsection