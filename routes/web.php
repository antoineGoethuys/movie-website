<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\movieController;

Route::get('/', function () {
    return view('movies.home');
})->name("movies.home");


Route::prefix('')
    ->name("other.")
    ->group(function () {
        Route::get('/contact', function () {
            return view('other.contact');
        })->name('contact');
        Route::get('/faq', function () {
            return view('other.faq');
        })->name('faq');
        Route::get('/about', function () {
            return view('other.about');
        })->name('about');
    });

Route::prefix('movies')
    ->name("movies.")
    ->controller(movieController::class)
    ->group(function () {
        Route::get("/", 'index')->name("all");

        Route::get("/new", 'create')->name("create")->middleware('auth');
        Route::post("/new", 'store');

        Route::get('{slug}-{movie}', 'show')->where([
            "movie" => "[0-9]+" ,
            "slug" => "[a-zA-Z0-9\-\_]+"
        ])->name("show");
    });

Route::prefix('admin')
    ->name("admin.")
    ->group(function () {
        Route::get('/', function () {
            return view('admin.home');
        })->name("home");
        Route::get('/movies', function () {
            return view('admin.movies');
        })->name("movies");
        Route::get('/users', function () {
            return view('admin.users');
        })->name("users");
    });

    Route::get('/login', [\App\Http\Controllers\Auth\AuthControler::class, 'login'])->name('auth.login');
    Route::post('/login', [\App\Http\Controllers\Auth\AuthControler::class, 'doLogin']);

    Route::delete('/logout', [\App\Http\Controllers\Auth\AuthControler::class, 'logout'])->name('auth.logout');
