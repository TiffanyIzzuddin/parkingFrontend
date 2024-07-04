<?php
use App\Http\Controllers\GenreController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.Dashboard');
})->name('dashboard');

Route::get('/reports', function () {
    return view('admin.reportPage');
})->name('reports');

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::resource('admins', AdminController::class);

Route::get('/login', function () {
    return view('admin.loginPage');
})->name('login');

// percobaan
Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/guest', [ItemController::class, 'index']);

Route::get('/genre', [GenreController::class, 'getGenre']);
Route::get('/genres', [GenreController::class, 'getMessage']);