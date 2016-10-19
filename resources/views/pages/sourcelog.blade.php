<!--
* File: index.blade.php
* Owner: Alex Simangunsong
* Purpose: Source Log page
* Versions
*   User    |       Date       |            Description              |
*   Alex    |    19/10/2016    | Developed                           |
!-->

@extends('app')

@section('css')@endsection

@section('js')@endsection

@section('content')
    <div class="container-fluid">
        <div class="container">
            <div class="page-header"><h2>Source Log</h2></div>

            <table class="table table-striped">
                <thead>
                <tr>
                    <th>File Name</th>
                    <th>Type</th>
                    <th>Source</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>microphone-1.png</td>
                    <td>Image - PNG</td>
                    <td>http://edwisztreich.com/images/big-deep-voice-over-icon.png</td>
                </tr>
                <tr>
                    <td>news-1.png</td>
                    <td>Image - PNG</td>
                    <td>http://www.freeiconspng.com/uploads/news-icon-19.png</td>
                </tr>
                <tr>
                    <td>Forecast - Weather API</td>
                    <td>API</td>
                    <td>https://github.com/nWidart/Laravel-forecast</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection