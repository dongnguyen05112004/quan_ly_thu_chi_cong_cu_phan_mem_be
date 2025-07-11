<?php

use App\Http\Controllers\TaiKhoanController;
use App\Http\Controllers\TietKiemController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/canhan/tietkiem/data', [TietKiemController::class, 'getdata']);
Route::post('/canhan/tietkiem/them', [TietKiemController::class, 'themTietKiem']);
Route::post('/canhan/tietkiem/sua', [TietKiemController::class, 'suaTietKiem']);
Route::post('/canhan/tietkiem/xoa', [TietKiemController::class, 'xoaTietKiem']);
Route::post('/khach-hang/dang-nhap', [TaiKhoanController::class, 'DangNhap']);


