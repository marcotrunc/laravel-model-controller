@extends('layouts.main')

@section('title', 'Movies | Home')

@section('content')
<main class="bg-dark">
    <div class="container">
        <div class="row gx-1 gy-5">
            @foreach ($movies as $movie)
            <div class="w-20">
                <div class="card h-300px bg-dark">
                    <div class="card-body text-white">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $movie->original_title }}</h6>
                        <ul>
                            <li><strong>nationality:</strong><span>{{ $movie->nationality }}</span></li>
                            <li><strong>date:</strong><span>{{ $movie->date }}</span></li>
                            <li></strong><span>{{ $movie->vote }}</span></li>
                        </ul>  
                        <a href="{{route('movie', $movie->id)}}" class="card-link"><span class="text-white">Scopri di più</span></a>
                    </div>
                </div>
            </div>
            @endforeach 
        </div>
    </div>
</main>

    

    
@endsection