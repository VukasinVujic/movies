<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index Blade</title>
</head>
<body>

    

        @foreach ($movies as $movie)
            <h1><a href="{{ 'movies/' . $movie->id }} "> {{ $movie->title }} </a></h1>
            <p> {{ $movie->storyline }} </p>

        @endforeach


    

    
</body>
</html>