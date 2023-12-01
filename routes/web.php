<?php

use App\Model\Book;
use App\Models\Category;
use PhpParser\Node\Expr\FuncCall;
use App\Http\Controllers\AuthManager;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HistoryPeminjamanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistrasiController;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('buku', BukuController::class);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');
Route::get('/registrasi', [AuthManager::class, 'registrasi'])->name('registrasi');
Route::post('/registrasi', [AuthManager::class, 'registrasiPost'])->name('registrasi.post');
Route::get('/logout', [AuthManager::class, 'Logout'])->name('logout');

Route::resource('/profile', ProfileController::class);


Route::get('/admin', [UserController::class, 'getAdmin']);

Route::resource('peminjaman', PeminjamanController::class);
Route::patch('peminjaman/{id}', 'PeminjamanController@update')->name('peminjaman.update');

Route::get('/tambahpeminjaman', [BookController::class, 'create']);

Route::get('/history_peminjaman', [HistoryPeminjamanController::class, 'index'])->name('histori_peminjaman');



// Route::get('/buku', [BookController::class, 'getBuku'])->name('buku');
//Route::get('/tambahbuku', [BookController::class, 'create']);
//Route::post('/insertbuku', [BookController::class, 'insert']);
//Route::get('/tampilkandata', [BookController::class, 'tampilkandata'])->name('tampilkandata');
//Route::get('/delete/{$id}', [BookController::class, 'delete'])->name('delete');

/*
Route::get('/categories/{category:slug}', function(Category $category){
    return view('category', [
        'title' => $category->name,
        'books' => $category->books,
        'category' => $category->name
    ]);
});
*/

