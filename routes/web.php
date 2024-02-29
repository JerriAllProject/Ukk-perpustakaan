<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\UlasanController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\KoleksipribadiController;
use App\Http\Controllers\komentarCotroller;
use App\Models\Book;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PublicController::class,'index']);

Route::get('login', [Authcontroller::class, 'login'])->name('login');
Route::post('login', [Authcontroller::class, 'authenticating']);

Route::get('register', [Authcontroller::class, 'register']);
Route::post('register', [Authcontroller::class, 'registerproses']);

Route::get('dashboard',[DashboardController::class, 'index'])->Middleware('only_admin');
Route::delete('dashboard/{id}',[DashboardController::class, 'destroy']);

Route::get('logout', [Authcontroller::class, 'logout']);

Route::get('profile',[UserController::class, 'profile']);

Route::get('books',[BooksController::class, 'index']);
Route::get('book-add',[BooksController::class, 'add']);
Route::post('book-add',[BooksController::class, 'store']);
Route::get('book/{id}',[BooksController::class, 'edit']);
Route::post('book/{id}',[BooksController::class, 'update'])->name('book.edit');
Route::delete('books/{id}',[BooksController::class, 'destroy']);


Route::get('koleksipribadi',[KoleksipribadiController::class, 'index']);
Route::get('koleksipribadi-add',[KoleksipribadiController::class, 'add']);
Route::post('koleksipribadi-add',[KoleksipribadiController::class, 'store']);
Route::delete('koleksipribadi/{id}',[KoleksipribadiController::class, 'destroy']);

Route::get('kategori',[KategoriController::class, 'index']);
Route::get('kategori-add',[KategoriController::class, 'add']);
Route::post('kategori-add',[KategoriController::class, 'store']);
Route::get('kategori/{id}',[KategoriController::class, 'edit']);
Route::post('kategori/{id}',[KategoriController::class, 'update'])->name('kategori.edit');
Route::delete('kategori/{id}',[KategoriController::class, 'destroy']);

Route::get('peminjaman',[PeminjamanController::class, 'index']);
Route::get('peminjaman-add',[PeminjamanController::class, 'add']);
Route::post('peminjaman-add',[PeminjamanController::class, 'store']);
Route::get('peminjaman/{id}',[PeminjamanController::class, 'edit']);
Route::post('peminjaman/{id}',[PeminjamanController::class, 'update'])->name('peminjaman.edit');

Route::get('ulasan',[UlasanController::class, 'index']);
Route::get('ulasan-add',[UlasanController::class, 'add']);
Route::post('ulasan-add',[UlasanController::class, 'store']);
Route::delete('ulasan/{id}',[UlasanController::class, 'destroy']);

Route::get('komentar',[komentarCotroller::class, 'index']);
