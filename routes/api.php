<?php

use App\Http\Controllers\BaoCaoController;
use App\Http\Controllers\TaiKhoanController;
use App\Http\Controllers\thunhapController;
use App\Http\Controllers\TietKiemController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//thu nhap
Route::get('/canhan/thunhap/data', [thunhapController::class, 'getThuNhap']);
Route::post('/canhan/thunhap/them', [thunhapController::class, 'themThuNhap']);
Route::post('/canhan/thunhap/sua', [thunhapController::class, 'suaThuNhap']);
Route::post('/canhan/thunhap/xoa', [thunhapController::class, 'xoaThuNhap']);

//tiet kiem
Route::get('/canhan/tietkiem/data', [TietKiemController::class, 'getdata']);
Route::post('/canhan/tietkiem/them', [TietKiemController::class, 'themTietKiem']);
Route::post('/canhan/tietkiem/sua', [TietKiemController::class, 'suaTietKiem']);
Route::post('/canhan/tietkiem/xoa', [TietKiemController::class, 'xoaTietKiem']);
// dang nhap
Route::post('/khach-hang/dang-nhap', [TaiKhoanController::class, 'DangNhap']);

//baocao
Route::get('/canhan/baocao', [BaoCaoController::class, 'getBaoCao']);


