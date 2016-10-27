<!--
* File: government-news.blade.php
* Owner: Alex Simangunsong
* Purpose: Market page
* Versions
*   User    |       Date       |            Description              |
*   Alex    |    13/10/2016    | Developed                           |
!-->

@extends('app')

@section('onLoadFunction')
    newsLoadFunctions()
@endsection

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
                    <img src="{{ asset('images/news-1.png') }}"
                         class=""
                         width=30%"
                         alt="Weather Icon">
                </div>
            </div>

            <div class="col-md-4">
                {{--<div class="text-center">--}}
                    {{--<img src="{{ asset('images/news-1.png') }}"--}}
                         {{--class=""--}}
                         {{--width=30%"--}}
                         {{--alt="Weather Icon">--}}
                {{--</div>--}}
            </div>
        </div>

    </div>

    <div class="jumbotron text-center">
        <h1>News</h1>
        <br><br>

        <div class="row">
            <div class="col-md-push-2 col-md-4">
                <a href="#">
                    <img src="{{ asset('images/news/jokowi-1.jpg') }}"
                         class="img img-thumbnail"
                         width="95%"
                         alt="News Placeholder">
                    <p>Presiden Joko Widodo semakin serius memberantas pungutan liar</p>
                </a>
            </div>

            <div class="col-md-push-2 col-md-4">
                <a href="#">
                    <img src="{{ asset('images/news/ahok-1.jpg') }}"
                         class="img img-thumbnail"
                         width="75%"
                         alt="News Placeholder">
                    <p>Basuki Cahaya Purnama mengambil cuti kampanye hari ini</p>
                </a>
            </div>
        </div>

        <br><br>

        <div class="row">
            <div class="col-md-push-2 col-md-4">
                <a href="#">
                    <img src="{{ asset('images/news/idris-1.jpg') }}"
                         class="img img-thumbnail"
                         width="85%"
                         alt="News Placeholder">
                    <p>Walikota Depok, Idris Abdul Shomad berhenti mengeluarkan izin mini market</p>
                </a>
            </div>

            <div class="col-md-push-2 col-md-4">
                <a href="#">
                    <img src="{{ asset('images/news/terminal-1.jpg') }}"
                         class="img img-thumbnail"
                         width="75%"
                         alt="News Placeholder">
                    <p>Terminal Jatijajar Depok segera beroperasi</p>
                </a>
            </div>
        </div>



    </div>
@endsection

@section('pageSpecificJS')
    <script>
        function newsLoadFunctions() {

            var textEN =
                    "Welcome to voice services; Press the red button to speak, or click on the desired menu at the top of the screen to continue." +
                    "Say 'WEATHER' to check the current weather." +
                    "Say 'MARKET' to see the prices of items in local markets. " +
                    "Say 'NEWS' to access current news from the government." +
                    "Say 'HOSPITAL' to see health providers around you.";

            var textID =
                    "Berikut adalah berita terbaru hari ini. Tekan gambar untuk melanjutkan." +
                    "Berita terkini pertama: Presiden Joko Widodo semakin serius dalam memberantas pungutan liar. " +
                    "Berita kedua: Gubernur DKI Jakarta, Basuki Cahaya Purnama sudah mengambil cuti kampanye." +
                    "Berita ketiga: Walikota Depok, Idris Abdul Shomad berhenti mengeluarkan izin mini market." +
                    "Berita keempat: Terminal Jatijajar Depok segera beroperasi.";


            setTimeout(function() {
                console.log("Launching welcome message" );
//                responsiveVoice.speak(textEN,'UK English Male');
//                responsiveVoice.speak(textEN,'UK English Female', {rate: 0.9});
//                responsiveVoice.speak(textEN,'US English Female');
//                responsiveVoice.speak(textEN,'Australian Female');
//                responsiveVoice.speak(textID,'Indonesian Female');
            },500);
        }
    </script>
@endsection