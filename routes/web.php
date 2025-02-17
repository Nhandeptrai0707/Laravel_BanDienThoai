<?php
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

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

Route::get("/", [PagesController::class,"index"])->name("index");
Route::get('/signin', [LoginController::class, 'ShowFormLogin'])->name('signin');
Route::post('/login', [LoginController::class, 'Login'])->name('login');
Route::get('/thanhcong', [LoginController::class, 'thanhcong'])->name('thanhcong');
Route::get('/thatbai', [LoginController::class, 'thatbai'])->name('thatbai');

