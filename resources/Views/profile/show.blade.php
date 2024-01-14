@extends('layout.master')

@section('title', 'Profile')

@section('content')
<div class="card profile-card">
    <img src="{{ $profile->avatar}}" alt="image/{{ $profile->avatar}}"class="card-img-top">
    <div class="card-body">
        <h1 class="card-title">Profile of {{ $user->username }}</h1>
        <p class="card-text">Email: {{ $user->email }}</p>

        <a href="{{ route('profile.edit') }}" class="btn btn-primary">modify the profile</a>

        <form method="POST" action="{{ route('profile.delete') }}">
            @csrf
            <button type="submit" class="btn btn-danger">Remove profile</button>
        </form>
    </div>
</div>
@endsection
