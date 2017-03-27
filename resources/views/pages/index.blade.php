<!--
* File: index.blade.php
* Owner: Alex Simangunsong
* Purpose: Index page
* Versions
*   User    |       Date       |            Description              |
*   Alex    |    06/09/2016    | Developed                           |
!-->

@extends('app')

@section('onLoadFunction')
    indexLoadFunctions()
@endsection

@section('js')

@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/search-box.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

    <style>
        #myModal{
            top:30%;
            outline: none;
        }
    </style>


    <style>
        * {
            font-family: Verdana, Arial, sans-serif;
        }
        a:link {
            color:#000;
            text-decoration: none;
        }
        a:visited {
            color:#000;
        }
        a:hover {
            color:#33F;
        }
        .button {
            background: -webkit-linear-gradient(top,#008dfd 0,#0370ea 100%);
            border: 1px solid #076bd2;
            border-radius: 3px;
            color: #fff;
            display: none;
            font-size: 13px;
            font-weight: bold;
            line-height: 1.3;
            padding: 8px 25px;
            text-align: center;
            text-shadow: 1px 1px 1px #076bd2;
            letter-spacing: normal;
        }
        .center {
            padding: 10px;
            text-align: center;
        }
        .final {
            color: black;
            padding-right: 3px;
        }
        .interim {
            color: gray;
        }
        .info {
            font-size: 14px;
            text-align: center;
            color: #777;
            display: none;
        }
        .right {
            float: right;
        }
        .sidebyside {
            display: inline-block;
            width: 45%;
            min-height: 40px;
            text-align: left;
            vertical-align: top;
        }
        #headline {
            font-size: 40px;
            font-weight: 300;
        }
        #info {
            font-size: 20px;
            text-align: center;
            color: #777;
            visibility: hidden;
        }
        #results {
            font-size: 14px;
            font-weight: bold;
            border: 1px solid #ddd;
            padding: 15px;
            text-align: left;
            min-height: 150px;
        }
        #start_button {
            border: 0;
            background-color:transparent;
            padding: 0;
        }
    </style>
@endsection

@section('content')
    <div class="text-center top-tiles" style="">
        <div class="row">
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

            <div class="col-xs-1 col-sm-1 col-md-1" style="">
                <a href="#" id="mute" onclick="muteVoice()">
                    <img src="{{ asset('images/mute-1.png') }}"
                         class="img-thumbnail"
                         width="100%"
                         alt="Mute Icon">
                </a>
            </div>
        </div>

    </div>

    <div class="jumbotron text-center">

        <br>

        <div class="text-center">
            <div class="row">
                <div>
                    <input id="latitude" type="hidden" name="latitude" value="">
                    <input id="longitude" type="hidden" name="longitude" value="">
                    <div class="text-center">
                        <input class="btn btn-default btn-lg"
                               {{--id="speak"--}}
                               data-toggle="modal" data-target="#myModal"
                               type="image" width="15%"
                               style="background-color: rgba(255,0,0,0.5);"
                               id="start_button" onclick="startButton(event)"
                               src="{{ asset('images/speaking-1.png') }}" alt="Submit">
                    </div>
                </div>
            </div>
        </div>

        <div id="webspech">
            <div id="info">
                {{--<p id="info_start">Click on the microphone icon and begin speaking.</p>--}}
                <p id="info_speak_now">Speak now.</p>
                <p id="info_no_speech">No speech was detected. You may need to adjust your
                    <a href="//support.google.com/chrome/bin/answer.py?hl=en&amp;answer=1407892">
                        microphone settings</a>.</p>
                <p id="info_no_microphone" style="display:none">
                    No microphone was found. Ensure that a microphone is installed and that
                    <a href="//support.google.com/chrome/bin/answer.py?hl=en&amp;answer=1407892">
                        microphone settings</a> are configured correctly.</p>
                <p id="info_allow">Click the "Allow" button above to enable your microphone.</p>
                <p id="info_denied">Permission to use microphone was denied.</p>
                <p id="info_blocked">Permission to use microphone is blocked. To change,
                    go to chrome://settings/contentExceptions#media-stream</p>
                <p id="info_upgrade">Web Speech API is not supported by this browser.
                    Upgrade to <a href="//www.google.com/chrome">Chrome</a>
                    version 25 or later.</p>
            </div>

            <div class="right">
                {{--<button id="start_button" onclick="startButton(event)">--}}
                    {{--<img id="start_img" src="mic.gif" alt="Start"></button>--}}
            </div>
            <br><br>
            <div id="results">
                <span id="final_span" class="final"></span>
                {!! Form::open(array(
                    'role' => 'form',
                    'id' => 'voiceForm',
                    'url' => '/voice'
                )) !!}
                <input type="hidden" name="hiddenInput" id="hiddenInput" value="">
                {!! Form::close() !!}
                <span id="interim_span" class="interim"></span>
                <p>
            </div>
            <div class="center">
                <p>
                <div id="div_language">
                    <select id="select_language" onchange="updateCountry()"></select>
                    &nbsp;&nbsp;
                    <select id="select_dialect"></select>
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
                    <h2 class="modal-title">Silakan berbicara sekarang<span id="wait">.</span></h2>
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

    <script>
        function indexLoadFunctions() {
            getLocation();

            var textEN =
                    "Welcome to voice services; Press the red button to speak, or click on the desired menu at the top of the screen to continue." +
                    "Say 'NEWS' to access current news from the government." +
                    "Say 'MARKET' to see the prices of items in local markets. " +
                    "Say 'HOSPITAL' to see health providers around you." +
                    "Say 'WEATHER' to check the current weather.";


            var textID =
                      "Selamat datang di layanan suara, 'Tekan' TombolMerah untuk berbicara atau tekan pilihan menuDiatas untuk layanan terkait. " +
                      "Katakan 'berita' untuk mengakses berita terkini; Katakan 'belanja', untuk melihat harga bahan pangan; " +
                      "Katakan 'klinik' atau 'rumah sakit', untuk melihat layanan kesehatan terdekat. " +
                      "Katakan 'cuaca', untuk mengetahui prakiraan cuaca.";


            setTimeout(function() {
                console.log("Launching welcome message" );
                responsiveVoice.speak(textID,'Indonesian Female');
//                responsiveVoice.speak(textEN);
            },500);
        }
    </script>


    <script>
        navigator.geolocation.getCurrentPosition(function(location) {
            console.log(location.coords.latitude);
            console.log(location.coords.longitude);
            console.log(location.coords.accuracy);
        });
    </script>


    {{--Get location script--}}
    <script src="{{ asset('js/location.js') }}"></script>

    {{--Wait animation--}}
    <script src="{{ asset('js/wait.js') }}"></script>

    {{--Calling Voice Recognition Script--}}
    <script src="{{ asset('js/callVR.js') }}"></script>

    {{--Calling Web Speech Script--}}
    <script src="{{ asset('js/webspeech.js') }}"></script>
@endsection