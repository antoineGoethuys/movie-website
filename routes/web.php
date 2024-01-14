<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\movieController;
use App\Http\Controllers\ProfileController;

Route::group([], function(){
    Route::get('/', [movieController::class, 'home'])->name("movies.home");

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
    ->group(function () {
        Route::get("/", [movieController::class, 'index'])->name("all");

        Route::get('{slug}-{movie}', [movieController::class, 'show'])->where([
            "movie" => "[0-9]+" ,
            "slug" => "[a-zA-Z0-9\-\_]+"
        ])->name("show");

        Route::post('/movies/{slug}/{movie}/rate', [movieController::class, 'rate'])->name('rate')->middleware('auth');
    });
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [\App\Http\Controllers\Auth\AuthControler::class, 'login'])->name('auth.login');
    Route::post('/login', [\App\Http\Controllers\Auth\AuthControler::class, 'doLogin']);

    Route::get('/register', [\App\Http\Controllers\Auth\AuthControler::class, 'register'])->name('auth.register');
    Route::post('/register', [\App\Http\Controllers\Auth\AuthControler::class, 'doRegister']);
});

Route::middleware('auth')->group(function () {
    Route::delete('/logout', [\App\Http\Controllers\Auth\AuthControler::class, 'logout'])->name('auth.logout');

    Route::prefix('profile')
    ->name('profile.')
    ->middleware('auth')
    ->group(function () {
        Route::get('/', [ProfileController::class, 'show'])->name('show');
        Route::get('/edit', [ProfileController::class, 'edit'])->name('edit');
        Route::post('/update', [ProfileController::class, 'update'])->name('update');
        Route::post('/delete', [ProfileController::class, 'destroy'])->name('delete');
    });
});

Route::middleware('admin')->group(function () {
    Route::prefix('admin')
    ->name("admin.")
    ->group(function () {
        Route::get('/', [movieController::class, 'home'])->name("home");
        Route::get('/movies', function () {
            return view('admin.movies');
        })->name("movies");
        Route::get('/users', [movieController::class, 'usersList'])->name("users");
        Route::get('/edit/{id}', [movieController::class, 'editUser'])->name("edit");
        Route::put('/update/{id}',[movieController::class, 'updateUser'])->name('update');
    });
});

Route::prefix('movies')->middleware('admin')->group(function () {
    Route::get("/new", [movieController::class, 'create'])->name("create");
    Route::post("/new", [movieController::class, 'store']);
    Route::get('/{slug}-{movie}/edit', [movieController::class, 'edit'])->name('edit');
    Route::post('/{slug}-{movie}/update', [movieController::class, 'update'])->name('update');
    Route::post('/{slug}-{movie}/delete', [movieController::class, 'destroy'])->name('delete');
});
