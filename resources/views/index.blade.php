@extends('layouts.master')

@section('content')

@foreach ($movies as $movie)
<h1><a href="{{ 'movies/' . $movie->id }} "> {{ $movie->title }} </a></h1>
<p> {{ $movie->storyline }} </p>

@endforeach
    
@endsection



