<?php
use App\Http\Controllers\LoadDienThoaiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ThanhToanController;
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
Route::post('/LoadDienThoaiVaAnhTheoMaLoai/{maloai}',[LoadDienThoaiController::class,'LoadDienThoaiVaAnhTheoMaLoai'])->name('LoadDienThoaiVaAnhTheoMaLoai');
Route::post('/LoadDienThoaiVaAnh',[LoadDienThoaiController::class,'LoadDienThoaiVaAnh'])->name('LoadDienThoaiVaAnh');
Route::get("/", [PagesController::class,"index"])->name("index");
Route::get('/signin', [LoginController::class, 'ShowFormLogin'])->name('signin');
Route::post('/login', [LoginController::class, 'Login'])->name('login');
Route::get('/home', [LoginController::class, 'thanhcong'])->name('thanhcong');
Route::get('/thatbai', [LoginController::class, 'thatbai'])->name('thatbai');
Route::get('/chitietdienthoai/{MaDT}', [LoadDienThoaiController::class, 'ChiTietDienThoai'])->name('chitietsanpham');
Route::get('/chitietdienthoaianh/{MaDT}', [LoadDienThoaiController::class, 'ChiTietDienThoaiAnh'])->name('chitietsanphamanh');
Route::get('/giohang', [ThanhToanController::class, 'GioHang'])->name('giohang');
Route::post('/muangay', [ThanhToanController::class, 'MuaNgay'])->name('muangay');
Route::post('/mua',[ThanhToanController::class,'Mua'])->name('mua');
Route::match(['get','post'],'/vnpay_payment',[ThanhToanController::class,'Nhan'])->name('thanh');
Route::post('/themvaogiohang', [ThanhToanController::class, 'ThemVaoGioHang'])->name('themvaogiohang');