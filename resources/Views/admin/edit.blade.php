@extends('layout.master')

@section('title', 'Edit User')

@section('content')
    <h1>Edit User</h1>

    <form action="{{ route('admin.update', $user->id) }}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="PUT">

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
        </div>

        <div class="form-group">
            <label for="isAdmin">Is Admin</label>
            <select class="form-control" id="isAdmin" name="isAdmin">
                <option value="0" {{ $user->is_admin == 0 ? 'selected' : '' }}>No</option>
                <option value="1" {{ $user->is_admin == 1 ? 'selected' : '' }}>Yes</option>
            </select>
        </div>

        <button type="submit p-3 m-3" class="btn btn-primary">Update</button>
    </form>
@endsection
