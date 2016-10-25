@extends('app')

@section('content')
    <div class="container-fluid">
        <textarea name="" id="textarea" cols="80" rows="10"></textarea>
        <button id="button" onclick="toggleStartStop()"></button>
    </div>

    <script type="text/javascript">
        var recognizing;
        var recognition = new webkitSpeechRecognition();
        recognition.continuous = true;
        reset();
        recognition.onend = reset;

        recognition.onresult = function (event) {
            for (var i = resultIndex; i < event.results.length; ++i) {
                if (event.results.final) {
                    textarea.value += event.results[i][0].transcript;
                }
            }
        };

        function reset() {
            recognizing = false;
            button.innerHTML = "Click to Speak"
        }

        function toggleStartStop() {
            if (recognizing) {
                recognition.stop();
                reset();
            }
            else {
                recognition.start();
                recognizing = true;
                button.innerHTML = "Click to Stop"
            }
        }

    </script>



    {{--<div class="container-fluid">--}}

        {{--<select id="select">--}}
            {{--<option value="volvo">Volvo</option>--}}
            {{--<option value="saab">Saab</option>--}}
            {{--<option value="mercedes">Mercedes</option>--}}
            {{--<option value="audi">Audi</option>--}}
        {{--</select>--}}
        {{--<button onclick="start()">Click to Speak</button>--}}

        {{--<script type="text/javascript">--}}
            {{--var recognition = new webkitSpeechRecognition();--}}
            {{--recognition.onresult = function(event) {--}}
                {{--console.log(event);--}}
            {{--};--}}

            {{--function start() {--}}
                {{--recognition.start();--}}
            {{--}--}}
            {{----}}
            {{--var result = recognition.--}}
        {{--</script>--}}
        {{----}}
    {{--</div>--}}
@endsection