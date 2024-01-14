<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Str;

use App\Models\Movie as Movie;
use App\Models\User as User;
use App\Models\MovieComment;
use App\Models\UserMovieRating;

class movieController extends Controller
{
    public function create()
    {
        return view('movies.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'year' => 'required|integer',
            'duration' => 'required|integer',
            'poster' => 'required|string',
        ]);

        $movie = Movie::create([
            "title" => $request->input("title"),
            "description" => $request->input("description"),
            "year" => $request->input("year"),
            "duration" => $request->input("duration"),
            "poster" => $request->input("poster"),
            "slug" => Str::slug($request->input("title"))
        ]);

        return redirect()->route("movies.show", [
            "slug" => $movie->slug,
            "movie" => $movie->id
        ])->with("success", "Movie created successfully");
    }

    public function rate(Request $request, string $slug, Movie $movie)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string'
        ]);

        $movie->ratings()->create([
            'user_id' => auth()->id(),
            'rating' => $request->input('rating')
        ]);

        $movie->comments()->create([
            'user_id' => auth()->id(),
            'comment' => $request->input('comment')
        ]);

        return redirect()->route('movies.show', ['slug' => $movie->slug, 'movie' => $movie->id])->with('success', 'Rating added successfully');
    }

    public function index()
    {
        $movies = Movie::paginate(10);

        $movies->getCollection()->transform(function ($movie) {
            $movie->averageRating = $movie->ratings()->average('rating');
            return $movie;
        });

        return view('movies.moviesList', ['movies' => $movies]);
    }

    public function show(string $slug,Movie $movie): Response | View
    {
        if ($movie->slug !== $slug) {
            return redirect()->route('movies.show', ['slug' => $movie->slug, 'movie' => $movie->id]);
        }
        $ratings = $movie->ratings;
        $averageRating = $ratings->avg('rating');
        return view('movies.show', compact('movie', 'ratings', 'averageRating'));
    }
    public function home()
    {
        $latestMovie = Movie::latest()->first();
        $latestComment = UserMovieRating::latest()->first();

        return view('movies.home', ['latestMovie' => $latestMovie, 'latestComment' => $latestComment]);
    }
    public function usersList()
    {
        $users = User::paginate(10);

        return view('admin.users', ['users' => $users]);
    }
    public function editUser($id)
    {
        $user = User::find($id);

        if (!$user) {
            // Redirect or show error
        }

        return view('admin.edit', ['user' => $user]);
    }
    public function updateUser(Request $request, User $user)
    {
        $request->validate([
            'username' => 'required|string',
            'email' => 'required|email',
            'is_admin' => 'required|boolean'
        ]);

        $user->update([
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'is_admin' => $request->input('is_admin')
        ]);

        return redirect()->route('admin.update', ['id' => $user->id])->with('success', 'User updated successfully');
    }
}
