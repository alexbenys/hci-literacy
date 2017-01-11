<!--
* File: app.blade.php
* Owner: Alex Simangunsong
* Purpose: Master page for front end
* Versions
*   User    |       Date       |            Description              |
*   Alex    |    06/09/2016    | Developed                           |
!-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Literacy</title>

    {{--Bootstrap Default CSS--}}
    <link rel="stylesheet" href="{{ asset('bootstrap-3.3.7-dist/css/bootstrap.css') }}">

    {{--Additional CSS--}}
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">
    @yield('css')

    {{--Additional JS Files--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src='https://code.responsivevoice.org/responsivevoice.js'></script>
    @yield('js')

</head>
{{--<body onload="getLocation()">--}}
<body onload="@yield('onLoadFunction')">
    <small><a href="/">version 0.0.2</a></small>
    <nav>

    </nav>

    @yield('content')

    <footer style="margin-top: 20px;">
        <div class="text-center">
            <a href="{{ route('displaySourceLog') }}">Source Log</a> |
            <a href="http://www.anu.edu.au/">Australian National University</a> |
            <a href="#">Contact Me</a>
        </div>
    </footer>

@yield('pageSpecificJS')
</body>
</html>
