@extends('layout.master')

@section('title', 'Movies')

@section('content')
    <div class="container mt-5" style="color: #F6D8AE; background-color: #91283B">
        <h1 class="text-center m-4 rounded" style="color: #91283B; background-color: #2E4057">Movies</h1>
        <div class="row">
            @foreach($movies as $movie)
                <div class="col-md-4 mb-4">
                    <div class="card shadow" style="background-color: #2E4057; color: #F6D8AE">
                        <img src="{{$movie->poster}}" class="card-img-top" alt="{{$movie->title}}" style="height: 300px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">{{$movie->title}}</h5>
                            <div class="mb-3">
                                <span class="badge" style="background-color: #91283B; color: #2E4057">{{ $movie->averageRating }}/5</span>
                            </div>
                            <p class="card-text">{{ Str::limit($movie->description, 100) }}</p>
                            <a href="{{route('movies.show', ['slug' => $movie->slug, 'movie' => $movie -> id])}}" class="btn" style="background-color: #91283B; color: #2E4057">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center mt-4">
            {{$movies->links()}}
        </div>
    </div>
@endsection
