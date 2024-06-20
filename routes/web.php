<?php
use App\Http\Controllers\GenreController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('dashboard');
// });
Route::get('/', [GenreController::class, 'getGenre']);
Route::get('/genre', [GenreController::class, 'getMessage']);