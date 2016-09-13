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
@endsection

@section('content')
    <div class="container-fluid text-center top-tiles">
        <a href="#">
            <img src="{{ asset('images/news-1.png') }}"
                 class="img-thumbnail"
                 width="10%"
                 alt="News Icon">
        </a>
        <a href="#">
            <img src="{{ asset('images/weather-1.png') }}"
                 class="img-thumbnail"
                 width="10%"
                 alt="Weather Icon">
        </a>
        <a href="https://www.google.com.au/maps/search/hospital/@-35.317248,149.1443635,15z/data=!3m1!4b1">
            <img src="{{ asset('images/hospital-2.ico') }}"
                 class="img-thumbnail"
                 width="10%"
                 alt="Hospital Icon">
        </a>
    </div>

    <div class="jumbotron text-center">
        <h1>What are you looking for?</h1>
        <br>
        <br>

        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-push-3 col-md-6 col-lg-6">
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
        <br><br>

        <h2>OR</h2>

        <br><br>

        <div>
            <img src="{{ asset('images/microphone-1.png') }}"
                 width="5%"
                 alt="Microphone Icon">
        </div>
    </div>
    
    <div class="container-fluid">
        <a href="http://api.openweathermap.org/data/2.5/weather?q=London,uk&appid=b5a8f7f2c6b30f1f9896f22374c59155">
            Hey
        </a>
    </div>

@endsection