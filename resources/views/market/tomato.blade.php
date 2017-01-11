<!--
* File: garlic.blade.php
* Owner: Alex Simangunsong
* Purpose: Market page
* Versions
*   User    |       Date       |            Description              |
*   Alex    |    13/10/2016    | Developed                           |
!-->

@extends('app')

@section('onLoadFunction')
    garlicLoadFunctions()
@endsection

@section('css')

@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="text-center">
                    <a href="{{ route('displayMarket') }}">
                        <img src="{{ asset('images/left-arrow.ico') }}"
                             style="top:50%;"
                             width=25%"
                             alt="Weather Icon">
                    </a>
                </div>
            </div>

            <div class="col-md-4">

            </div>

            <div class="col-md-4">

            </div>
        </div>
    </div>

    <div class="jumbotron">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-push-3 col-md-4">
                    <img src="{{ asset('images/agriculture/tomato-1.jpg') }}"
                         class="img-thumbnail"
                         width="70%"
                         alt="Shalots Icon">
                </div>

                <div class="col-md-push-3 col-md-4">
                    <h2>Tomat</h2>
                    <h3>Harga: <h2 style="color: green;">Rp 9.600</h2></h3>
                    {{--<a href="#" class="btn btn-lg btn-primary">Dimana membelinya?</a>--}}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('pageSpecificJS')

    <script>
        function garlicLoadFunctions() {

            var textEN =
                    "";
            var textID = "Harga tomat hari ini: sembilan ribu enam ratus rupiah per kilogram;" +
                    "Anda dapat menekan tombol panah untuk melihat harga bahan pangan lainnya.";

            setTimeout(function() {
                console.log("Launching welcome message" );
//                responsiveVoice.speak(textEN,'UK English Male');
//                responsiveVoice.speak(textEN,'US English Female');
                responsiveVoice.speak(textID,'Indonesian Female');
            },500);
        }
    </script>
@endsection