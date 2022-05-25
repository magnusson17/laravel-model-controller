@extends('layout.layout')

@section('content')

    @foreach ($movies as $key => $movie)
    
    <a href="{{ route('show', ['id' => $movie->id]) }}">
        <h2>{{ $movie->title }}</h2>
    </a>

    @endforeach
    
@endsection