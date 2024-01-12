@extends('layout.master')

@section('title')
    {{$movie->title}}
@endsection

@section('content')
    <article class="card mb-4 rounded-3 shadow-sm" style="margin: 2rem;">
        <img src="{{$movie->image}}" class="card-img-top" alt="{{$movie->title}}" style="max-width: 100%; height: 80vh; object-fit: contain; background-color: #91283B">
        <div class="card-body text-center">
            <h2 class="card-title">{{$movie->title}}</h2>
            <p class="card-text">
                {{$movie->description}}
            </p>
        </div>
    </article>
@endsection
