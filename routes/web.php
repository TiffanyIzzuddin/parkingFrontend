<?php
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('GuestPage');
})->name('home');

Route::get('/dashboard', function () {
    return view('admin.Dashboard');
})->name('dashboard');

// Route::get('/dashboard', function () {
//     return view('admin.Dashboard'); // Adjust as needed
// })->middleware('auth');

// Route::get('/login', function () {
//     return view('admin.loginPage');
// })->name('login');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [LoginController::class, 'login']);
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

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


Route::get('/reports', [TransactionController::class, 'index'])->name('reports');
Route::get('/transactions/download', [TransactionController::class, 'downloadPdf'])->name('transactions.download');
// Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions.index');
// Route::get('/transactions/create', [TransactionController::class, 'create'])->name('transactions.create');
// Route::post('/transactions', [TransactionController::class, 'store'])->name('transactions.store');
// Route::get('/transactions/{id}', [TransactionController::class, 'show'])->name('transactions.show');
// Route::get('/transactions/{id}/edit', [TransactionController::class, 'edit'])->name('transactions.edit');
// Route::patch('/transactions/{id}', [TransactionController::class, 'update'])->name('transactions.update');
// Route::delete('/transactions/{id}', [TransactionController::class, 'destroy'])->name('transactions.destroy');
