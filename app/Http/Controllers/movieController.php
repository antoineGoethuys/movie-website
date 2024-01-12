<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovieFilterRequest;
use App\Models\movies;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class movieController extends Controller
{
    public function create()
    {
        return view('movies.create');
    }

    public function store(Request $request)
    {
        $movie = movies::create([
            "title" => $request->input("title"),
            "description" => $request->input("description"),
            "slug" => \Str::slug($request->input("title")),
            "image" => $request->input("image"),
            "duration" => $request->input("duration"),
            "age_limit" => $request->input("age_limit"),
        ]);
        return redirect()->route("movies.detail", [
            "slug" => $movie->slug,
            "movie" => $movie->id
        ])->with("success", "Movie created successfully");
    }

    public function index(): View
    {

        return view('movies.moviesList', [
            "movies" => movies::with('genre', 'review')->paginate(10)
        ]);
//        return movie::paginate(10);
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
