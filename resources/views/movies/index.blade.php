@extends('layouts.main')

@section('title', 'Movies | Home')

@section('content')
<main>
    <div class="container">
        <div class="row gx-1">
            @foreach ($movies as $movie)
            <div class="w-20">
                <ul>
                    <div class="card">
                        <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $movie->original_title }}</h6>
                        <ul>
                            <li><strong>nationality:</strong><span>{{ $movie->nationality }}</span></li>
                            <li><strong>date:</strong><span>{{ $movie->date }}</span></li>
                            <li></strong><span>{{ $movie->vote }}</span></li>
                        </ul>  
                        <a href="{{route('movie', $movie->id)}}" class="card-link">Scopri di più</a>
                        </div>
                    </div>
                    </ul>
            </div>
            @endforeach 
        </div>
    </div>
</main>

    

    
@endsection