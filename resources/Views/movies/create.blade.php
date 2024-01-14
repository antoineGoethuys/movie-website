@extends('layout.master')

@section('title', 'add movie')

@section('content')
    <div class="card m-3 p-3" style="color: #F6D8AE; background-color: #2E4057">
        <form method="post" action="">
            @csrf
            <div class="form-group">
                <label for="title">title</label>
                <input type="text" id="title" name="title" class="form-control" style="background-color: #F6D8AE; color: #91283B">

                <label for="description">description</label>
                <textarea name="description" id="description" class="form-control" style="background-color: #F6D8AE; color: #91283B"></textarea>

                <label for="year">year</label>
                <input type="number" id="year" name="year" min="1900" max="2100" step="1" value="2021" class="form-control" style="background-color: #F6D8AE; color: #91283B">

                <label for="duration">duration</label>
                <input type="number" id="duration" name="duration" min="1" max="1000" step="1" class="form-control" style="background-color: #F6D8AE; color: #91283B">

                <label for="poster">poster (link to image)</label>
                <input type="text" id="poster" name="poster" class="form-control" style="background-color: #F6D8AE; color: #91283B">

                <button type="submit" class="btn btn-primary m-3" style="background-color: #91283B; color: #F6D8AE">Send</button>
            </div>

        </form>
    </div>
@endsection
