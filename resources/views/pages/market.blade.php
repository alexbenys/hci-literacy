<!--
* File: market.blade.php
* Owner: Alex Simangunsong
* Purpose: Market page
* Versions
*   User    |       Date       |            Description              |
*   Alex    |    30/09/2016    | Developed                           |
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
                             width="25%"
                             alt="Weather Icon">
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="text-center">
                    <img src="{{ asset('images/market-1.jpg') }}"
                         class=""
                         width=30%"
                         alt="Market Icon">
                </div>
            </div>

            <div class="col-md-4">

            </div>
        </div>
    </div>

    <div class="jumbotron text-center">
        <h1>Select items</h1>
        <div class="lead">
            Touch and hold to hear description
        </div>

        <div class="row" style="margin-top: 50px;">
            <div class="col-md-push-2 col-md-2">
                <a href="#">
                    <img src="{{ asset('images/agriculture/cabbage-1.png') }}"
                         class="img-thumbnail"
                         width="100%"
                         alt="Cabbage Icon">
                </a>
            </div>

            <div class="col-md-push-2 col-md-2">
                <a href="#">
                    <img src="{{ asset('images/agriculture/green-chilli-1.png') }}"
                         class="img-thumbnail"
                         width="60%"
                         alt="Chilli Icon">
                </a>
            </div>

            <div class="col-md-push-2 col-md-2">
                <a href="#">
                    <img src="{{ asset('images/agriculture/red-chilli-1.png') }}"
                         class="img-thumbnail"
                         width="100%"
                         alt="Chilli Icon">
                </a>
            </div>

            <div class="col-md-push-2 col-md-2">
                <a href="{{ route('displayGarlic') }}">
                    <img src="{{ asset('images/agriculture/garlic-1.jpg') }}"
                         class="img-thumbnail"
                         width="100%"
                         alt="Garlic Icon">
                </a>
            </div>
        </div>

        <div class="row" style="margin-top: 50px;">
            <div class="col-md-push-2 col-md-2">
                <a href="#">
                    <img src="{{ asset('images/agriculture/tomato-1.jpg') }}"
                         class="img-thumbnail"
                         width="100%"
                         alt="Tomato Icon">
                </a>
            </div>

            <div class="col-md-push-2 col-md-2">
                <a href="#">
                    <img src="{{ asset('images/agriculture/cucumber-3.jpg') }}"
                         class="img-thumbnail"
                         width="100%"
                         alt="Cucumber Icon">
                </a>
            </div>

            <div class="col-md-push-2 col-md-2">
                <a href="#">
                    <img src="{{ asset('images/agriculture/ginger-1.jpg') }}"
                         class="img-thumbnail"
                         width="100%"
                         alt="Ginger Icon">
                </a>
            </div>

            <div class="col-md-push-2 col-md-2">
                <a href="#">
                    <img src="{{ asset('images/agriculture/shalots-1.jpg') }}"
                         class="img-thumbnail"
                         width="100%"
                         alt="Shalots Icon">
                </a>
            </div>
        </div>
    </div>
@endsection