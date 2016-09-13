<!DOCTYPE html>
<html>
<head>
    <meta name="author" content="Ben Howdle and Dan Matthew">
    <meta name="description" content="A responsive movie poster grabber">
    <title>Front Row by Ben Howdle</title>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.6.2.min.js"></script>
    <!--jQuery, linked from a CDN-->
    <script type="text/javascript" src="http://use.typekit.com/oya4cmx.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
</head>
<body>
<div class="container">
    <header>
        <h1>Front Row</h1>
    </header>
    <section id="fetch">
        <input type="text" placeholder="Enter a movie title" id="term" />
        <button id="search">Find me a poster</button>
    </section>
    <section id="poster">
    </section>
    <footer>
        <p>Created by <a href="http://twostepmedia.co.uk">Ben Howdle</a></p>
    </footer>
</div>

<script>
    $(document).ready(function(){

        $('#term').focus(function(){
            var full = $("#poster").has("img").length ? true : false;
            if(full == false){
                $('#poster').empty();
            }
        });

        var getPoster = function(){

            var film = $('#term').val();

            if(film == ''){

                $('#poster').html("<h2 class='loading'>Ha! We haven't forgotten to validate the form! Please enter something.</h2>");

            } else {

                $('#poster').html("<h2 class='loading'>Your poster is on its way!</h2>");

                $.getJSON("http://api.themoviedb.org/2.1/Movie.search/en/json/23afca60ebf72f8d88cdcae2c4f31866/" + film + "?callback=?", function(json) {
                if (json != "Nothing found."){
                    $('#poster').html('<h2 class="loading">Well, gee whiz! We found you a poster, skip!</h2><img id="thePoster" src=' + json[0].posters[0].image.url + ' />');
                } else {
                    $.getJSON("http://api.themoviedb.org/2.1/Movie.search/en/json/23afca60ebf72f8d88cdcae2c4f31866/goonies?callback=?", function(json) {
                            console.log(json);
                    $('#poster').html();
                });
            }
        });

    }

    return false;
    }

    $('#search').click(getPoster);
    $('#term').keyup(function(event){
        if(event.keyCode == 13){
            getPoster();
        }
    });

    });
</script>

</body>
</html>