@extends('layout.master')

@section('title', 'add movie')

@section('content')
    <div class="container">
        <form method="post" action="">
            @csrf
            <div class="form-group">
                <label for="title">title</label>
                <input type="text" id="title" name="title" class="form-control">

                <label for="description">description</label>
                <textarea name="description" id="description" class="form-control"></textarea>

                <label for="image">image</label>
                <input type="file" id="image" name="image" class="form-control">

                <label for="duration">duration (hour)</label>
                <input type="number" id="duration" name="duration" min="0" step="0.01" class="form-control">

                <label for="age_limit" class="form-label">Age Limit:</label>
                <select id="age_limit" name="age_limit" class="form-control">
                    <option value="">Select an age limit</option>
                    <option value="0">All ages</option>
                    <option value="3">3+</option>
                    <option value="7">7+</option>
                    <option value="12">12+</option>
                    <option value="16">16+</option>
                    <option value="18">18+</option>
                </select>

                <button type="submit" class="btn btn-primary m-3">Send</button>
            </div>

        </form>
    </div>
@endsection
