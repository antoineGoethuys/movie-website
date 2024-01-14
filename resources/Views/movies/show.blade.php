@extends('layout.master')

@section('title')
    {{$movie->title}}
@endsection

@section('content')
    <article class="card mb-4 rounded-3 shadow-sm" style="margin: 2rem; color: #F6D8AE; background-color: #2E4057">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="{{$movie->poster}}" class="card-img-top m-3" alt="{{$movie->title}}" style="max-width: 100%; height: 80vh; object-fit: contain; background-color: #91283B">
            </div>
            <div class="col-md-8">
                <div class="card-body text-center">
                    <h2 class="card-title">{{$movie->title}}</h2>
                    <div class="d-flex justify-content-center">
                        <div class="p-2 rounded" style="background-color: #91283B; color:#F6D8AE">
                            <h6 class="mb-0">{{ $averageRating }}/5</h6>
                        </div>
                    </div>
                    <p class="card-text">
                        {{$movie->description}}
                    </p>
                </div>
                @if(Auth::check())
                    <form method="POST" action="{{ route('movies.rate', ['slug' => $movie->slug, 'movie' => $movie->id]) }}" class="p-3 m-3 card" style=" color: #F6D8AE; background-color: #91283B">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="rating" class="form-label">Rating</label>
                            <input style="background-color: #F6D8AE" type="number" id="rating" name="rating" min="1" max="5" required class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="comment" class="form-label">Comment</label>
                            <textarea style="background-color: #F6D8AE" id="comment" name="comment" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                @endif
            </div>
        </div>
        @foreach($ratings as $rating)
            <div class="card m-3 p-3"  style="background-color: #91283B; color: #F6D8AE;">
                <div class="card-body">
                    <h5 class="card-title">{{ $rating->user->name }}</h5>
                    <h6 class="card-subtitle mb-2" style="color: #F6D8AE;">{{ $rating->rating }}/5</h6>
                    <p class="card-text">{{ $rating->comment }}</p>
                    <p class="card-text"><small style="color: #F6D8AE;">{{ $rating->created_at->diffForHumans() }}</small></p>
                </div>
            </div>
        @endforeach
    </article>
@endsection
