<?php

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use App\Models\Game;
use App\Models\Category;
use App\Models\User;
use \App\Http\Controllers\RegisterController;
use \App\Http\Controllers\GameController;
use \App\Http\Controllers\SessionController;
use \App\Http\Controllers\GameCommentsController;

Route::get('/', [GameController::class, 'index'])->name('home');

Route::get('games/{game:slug}', [GameController::class, 'show']);
Route::get('games/{game:slug}/comments', [GameCommentsController::class, 'store']);

route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionController::class, 'create'])->middleware('guest');
Route::post('login', [SessionController::class, 'store'])->middleware('guest');

Route::post('logout', [SessionController::class, 'destroy'])->middleware('auth');

Route::get('admin/games/create', [GameController::class, 'create'])->middleware('admin');
Route::post('admin/games', [GameController::class, 'store'])->middleware('admin');

