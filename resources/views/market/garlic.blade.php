<!--
* File: garlic.blade.php
* Owner: Alex Simangunsong
* Purpose: Market page
* Versions
*   User    |       Date       |            Description              |
*   Alex    |    13/10/2016    | Developed                           |
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

            </div>

            <div class="col-md-4">

            </div>
        </div>
    </div>

    <div class="jumbotron">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-push-3 col-md-4">
                    <img src="{{ asset('images/agriculture/garlic-1.jpg') }}"
                         class="img-thumbnail"
                         width="70%"
                         alt="Garlic Icon">
                </div>

                <div class="col-md-push-3 col-md-4">
                    <h2>Garlic</h2>
                    <h3>Price: <h2 style="color: red;">Rp 39.000</h2></h3>
                    <a href="#" class="btn btn-lg btn-primary">Buy Now</a>
                </div>
            </div>
        </div>
    </div>
@endsection