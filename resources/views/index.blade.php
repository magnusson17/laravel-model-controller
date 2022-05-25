@extends('layout.layout')

@section('content')


<div class="container">
    <div class="row row-cols-4 g-3">
        @foreach ($movies as $key => $movie)
            <div class="col">
                <a href="{{ route('show', ['id' => $movie->id]) }}">
                    <h2>{{ $movie->title }}</h2>
                </a>
            </div>
        @endforeach
    </div>
</div>

    
@endsection