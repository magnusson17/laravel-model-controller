@extends('layout.layout')

@section('content')

    @foreach ($movies as $key => $movie)
    
    <h2>{{ $movie->title }}</h2>

    @endforeach
    <p>ciao</p>
    
@endsection