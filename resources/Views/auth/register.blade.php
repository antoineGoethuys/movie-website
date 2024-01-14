@extends('layout.master')

@section('title', 'Register')

@section('content')
    <h1>Register</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('auth.register')}}" method="POST" class="vstack gap-3">
                @csrf
                <div class="form-group">
                    <label for="username">Name</label>
                    <input type="text" name="name"
                        class="form-control @error('name') is-invalid @enderror"
                        id="name" placeholder="Enter name" value="{{ old('name') }}">
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

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

                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" name="password_confirmation"
                            class="form-control @error('password_confirmation') is-invalid @enderror"
                            id="password_confirmation" placeholder="Confirm password">
                    @error('password_confirmation')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Register</button>

                <a href="{{ route('auth.login') }}" class="btn btn-link">Login</a>
            </form>
        </div>
    </div>
@endsection
