<!--
* File: market.blade.php
* Owner: Alex Simangunsong
* Purpose: Market page
* Versions
*   User    |       Date       |            Description              |
*   Alex    |    30/09/2016    | Developed                           |
!-->

@extends('app')

@section('onLoadFunction')
    marketLoadFunctions()
@endsection

@section('css')

@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="text-center">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('images/left-arrow.ico') }}"
                             style="top:50%;"
                             width="25%"
                             alt="Back Icon Icon">
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
        <h1>e-Pasar</h1>
        <div class="lead">
            {{--Touch and hold to hear description--}}
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
                <a href="{{ route('displayRedChilli') }}">
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
                <a href="{{ route('displayTomato') }}">
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
                <a href="{{ route('displayShalots') }}">
                    <img src="{{ asset('images/agriculture/shalots-1.jpg') }}"
                         class="img-thumbnail"
                         width="100%"
                         alt="Shalots Icon">
                </a>
            </div>
        </div>
    </div>
@endsection

@section('pageSpecificJS')
    <script>
        function marketLoadFunctions() {
            var textEN ="";

            var textID =
                    "Berikut adalah harga bahan pokok di pasar dan agen terdekat. Tekan pada gambar untuk melihat harga lengkap." +
                    "";



            setTimeout(function() {
                console.log("Launching welcome message" );
//                responsiveVoice.speak(textEN,'UK English Male');
//                responsiveVoice.speak(textEN,'US English Female', {rate: 0.7});
//                responsiveVoice.speak(textEN,'UK English Female', {rate: 0.9});
//                responsiveVoice.speak(textEN,'US English Female');
//                responsiveVoice.speak(textEN,'Australian Female');
                responsiveVoice.speak(textID,'Indonesian Female');
            },500);
        }
    </script>
@endsection