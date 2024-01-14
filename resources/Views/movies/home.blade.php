@extends('layout.master')

@section('title', 'Home page')

@section('content')
    <h1>Movies</h1>

    <h2>Dernier film ajouté</h2>

    <div class="col-md-4 mb-4">
        <div class="card shadow" style="background-color: #2E4057; color: #F6D8AE">
            <img src="{{$latestMovie->poster}}" class="card-img-top" alt="{{$latestMovie->title}}" style="height: 300px; object-fit: cover;">
            <div class="card-body">
                <h5 class="card-title">{{$latestMovie->title}}</h5>
                <div class="mb-3">
                    <span class="badge" style="background-color: #91283B; color: #2E4057">{{ $latestMovie->averageRating }}/5</span>
                </div>
                <p class="card-text">{{ Str::limit($latestMovie->description, 100) }}</p>
                <a href="{{route('movies.show', ['slug' => $latestMovie->slug, 'movie' => $latestMovie -> id])}}" class="btn" style="background-color: #91283B; color: #2E4057">Read More</a>
            </div>
        </div>
    </div>

    <h2>Dernier commentaire</h2>

    <div class="card m-3 p-3"  style="background-color: #91283B; color: #F6D8AE;">
        <div class="card-body">
            <h5 class="card-title">{{ $latestComment->user->name }}</h5>
            <h6 class="card-subtitle mb-2" style="color: #F6D8AE;">{{ $latestComment->rating }}/5</h6>
            <p class="card-text">{{ $latestComment->comment }}</p>
            <p class="card-text"><small style="color: #F6D8AE;">{{ $latestComment->created_at->diffForHumans() }}</small></p>
        </div>
    </div>
@endsection
