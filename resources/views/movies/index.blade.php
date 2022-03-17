@extends('layouts.main')

@section('title', 'Movies | Home')

@section('content')
@foreach ($movies as $movie)
    <ul>
        <li><strong>id:</strong><span>{{ $movie->id }}</span></li>
        <li><strong>title:</strong><span>{{ $movie->title }}</span></li>
        <li><strong>original_title:</strong><span>{{ $movie->original_title }}</span></li>
        <li><strong>nationality:</strong><span>{{ $movie->nationality }}</span></li>
        <li><strong>date:</strong><span>{{ $movie->date }}</span></li>
        <li><strong>vote:</strong><span>{{ $movie->vote }}</span></li>
    </ul>
@endforeach 
    
@endsection