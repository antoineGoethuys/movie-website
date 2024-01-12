@extends('layout.master')

@section('title', 'Movies')

@section('content')
    <h1>Movies</h1>
    <div class="row">
        @foreach($movies as $movie)
            <div class="col-md-4">
                <article class="card mx-auto" style="width: 18rem; margin: 3rem;">
                    <img src="{{$movie->image}}" class="card-img-top" alt="{{$movie->title}}" style="max-width: 100%; height: auto; object-fit: contain; background-color: #91283B">
                    <div class="card-body text-center">
                        <h2 class="card-title">{{$movie->title}}</h2>
                        <p class="card-text">
                            {{$movie->description}}
                        </p>
                        <a href="{{route('movies.show', ['slug' => $movie->slug, 'movie' => $movie -> id])}}"
                           class="btn btn-primary">
                            lees meer
                        </a>
                    </div>
                </article>
            </div>
        @endforeach
    </div>

    {{$movies->links()}}
@endsection
