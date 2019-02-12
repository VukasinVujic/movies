@extends('layouts.master')

@section('content')
    
{{ $movie->title }}
<br>
{{ $movie->genre }}
<br>
{{ $movie->director }}
<br>
{{ $movie->year }}
<br>
{{ $movie->storyline }}


@endsection


