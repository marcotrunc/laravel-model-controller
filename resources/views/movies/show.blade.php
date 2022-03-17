@extends('layouts.main')

@section('title', $movie->title)

@section('content')
<main class="h-100vh pt-5">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <div class="card" >
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$movie->title}}</h5>
                        <p class="card-text">Lorem</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{ $movie->nationality }}</li>
                        <li class="list-group-item">{{ $movie->date }}</li>
                        <li class="list-group-item">{{ $movie->vote }}</li>
                    </ul>
                    <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection