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
    @yield('js')

</head>
<body onload="getLocation()">
    <small>version 0.0.1</small>
    <nav>

    </nav>

    @yield('content')

    <footer>
        <div class="text-center">
            <a href="#">Source Log</a> |
            <a href="http://www.anu.edu.au/">Australian National University</a> |
            <a href="#">Contact Me</a>
        </div>
    </footer>

@yield('pageSpecificJS')
</body>
</html>
