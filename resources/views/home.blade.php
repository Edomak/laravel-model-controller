<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel-model-controller</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>

            * {
                box-sizing: border-box;
                margin: 0;
                padding: 0;
            }
            
            .movies_container {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
            }

            .movie {
                width: calc(100% / 4 - 40px);
                margin: 20px;
                padding: 20px;
                border: 1px solid black;
            }

            p {
                font-size: 18px;
                margin: 10px;
            }
        </style>
    </head>
    <body>
       <h1>{{ $title }}</h1>
       <div class="movies_container">
           @foreach ($movies as $movie)
           <div class="movie">
                <h2>Titolo:</h2>
                <p>-{{ $movie->title }}-</p>
                <h3>Titolo originale:</h3>
                <p>-{{ $movie->original_title }}-</p>
                <h4>Nazionalità:</h4>
                <p>-{{ $movie->nationality }}-</p>
                <h4>Voto:</h4>
                <p>-{{ $movie->vote }}-</p>
            </div>
           @endforeach
       </div>
    </body>
</html>
