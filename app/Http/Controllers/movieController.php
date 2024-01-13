<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Str;

use App\Models\Movie as Movie;

class movieController extends Controller
{
    public function create()
    {
        return view('movies.create');
    }

    public function store(Request $request)
    {
        $movie = Movie::create([
            "title" => $request->input("title"),
            "description" => $request->input("description"),
            "slug" => Str::slug($request->input("title")),
            "image" => $request->input("image"),
            "duration" => $request->input("duration"),
            "age_limit" => $request->input("age_limit"),
        ]);
        return redirect()->route("movies.detail", [
            "slug" => $movie->slug,
            "movie" => $movie->id
        ])->with("success", "Movie created successfully");
    }

    public function index()
    {
        return view('movies.moviesList', [
            "movies" => Movie::paginate(10)
        ]);
    }

    public function show(string $slug,Movie $movie): Response | View
    {
        if ($movie->slug !== $slug) {
            return redirect()->route('movies.show', ['slug' => $movie->slug, 'movie' => $movie->id]);
        }
        return view('movies.show', [
            "movie" => $movie
        ]);
    }
}
