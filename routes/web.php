<?php
use App\Http\Controllers\GenreController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.Dashboard');
})->name('dashboard');

Route::get('/reports', function () {
    return view('admin.reportPage');
})->name('reports');

Route::get('/login', function () {
    return view('admin.loginPage');
})->name('login');

//this prefix below doesnt call any model
Route::prefix('users')->name('users.')->group(function () {
    Route::get('/', [UserController::class, 'getUsers'])->name('index');
    Route::get('/create', [UserController::class, 'createUser'])->name('create');
    Route::get('/{id}', [UserController::class, 'getUser'])->name('show');
    Route::post('/', [UserController::class, 'storeUser'])->name('store');
    Route::get('/{id}/edit', [UserController::class, 'editUser'])->name('edit');
    Route::patch('/{id}', [UserController::class, 'updateUser'])->name('update');
    Route::delete('/{id}', [UserController::class, 'deleteUser'])->name('delete');
});
