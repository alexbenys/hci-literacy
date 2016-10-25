@extends('app')

@section('content')
    <div class="container-fluid">
        <script type="text/javascript">
            var recognition = new SpeechRecognition();
            recognition.maxAlternatives = 10;
            recognition.onresult = function(event) {
                if (event.results.length > 0) {
                    var result = event.results[0];
                    for (var i = 0; i < result.length; ++i) {
                        var text = result[i].transcript;
                        select.options[i] = new Option(text, text);
                    }
                }
            }

            function start() {
                select.options.length = 0;
                recognition.start();
            }
        </script>

        <select id="select">
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="mercedes">Mercedes</option>
            <option value="audi">Audi</option>
        </select>
        <button onclick="start()">Click to Speak</button>
    </div>
@endsection