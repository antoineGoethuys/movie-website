@extends('layout.master')

@section('title', 'Login')

@section('content')
    <h1>connect</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('auth.login')}}" method="POST" class="vstack gap-3">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email"
                           class="form-control @error('email') is-invalid @enderror"
                           id="email" placeholder="Enter email" value="{{ old('email') }}">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password"
                           class="form-control @error('password') is-invalid @enderror"
                           id="password" placeholder="Enter password">
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <button class="btn btn-primary">Connect</button>
            </form>
        </div>
    </div>
@endsection
