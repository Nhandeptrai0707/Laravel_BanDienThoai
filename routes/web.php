<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
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
Route::get('/login',[LoginController::class,'ShowFormLogin']);
Route::post('/login',[LoginController::class,'Login']);
Route::get('/login/nhan',[LoginController::class,'thanhcong']);
Route::get('/thatbai',[LoginController::class,'thatbai']);

