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
        <img src="{{ asset('images/weather-1.png') }}"
             class="img-thumbnail"
             width=30%"
             alt="Weather Icon">

        <div>{{ $timezone }}</div>
    </div>



@endsection