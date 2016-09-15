<!--
* File: weather.blade.php
* Owner: Alex Simangunsong
* Purpose: Index page
* Versions
*   User    |       Date       |            Description              |
*   Alex    |    13/09/2016    | Developed                           |
!-->

@extends('app')

@section('css')

@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="text-center">
                    <a href="{{ URL::previous() }}">
                        <img src="{{ asset('images/left-arrow.ico') }}"
                             style="top:50%;"
                             width=25%"
                             alt="Weather Icon">
                    </a>
                </div>
            </div>

            <div class="col-md-4">
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
        <h2>Your timezone:</h2>
        <h3>{{ Session::get('forecast')['timezone'] }}</h3>

        <h2>Your current weather:</h2>
        <h2>{{ Session::get('forecast')['currently']['temperature'] }} F</h2>
        <h3>{{ Session::get('forecast')['currently']['summary'] }}</h3>

        <h2>Your weekly weather:</h2>
        <h3></h3>
    </div>



@endsection