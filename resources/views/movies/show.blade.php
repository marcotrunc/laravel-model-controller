@extends('layouts.main')

@section('title', $movie->title)

@section('content')
<main class="h-100vh bg-dark">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <div class="card bg-dark text-center">
                    <div class="card-body text-white">
                        <h5 class="card-title">{{$movie->title}}</h5>
                        <p class="card-text">Lorem</p>
                    </div>
                    <ul class="list-group list-group-flush ">
                        <li class="list-group-item bg-dark"><span class="text-white">{{ $movie->nationality }}</span></li>
                        <li class="list-group-item bg-dark"><span class="text-white">{{ $movie->date }}</span></li>
                        <li class="list-group-item bg-dark"><span class="text-white">{{ $movie->vote }}</span></li>
                    </ul>
                    <div class="card-body">
                    <a href="#" class="card-link">Gurda Film</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection