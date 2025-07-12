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
Route::get('/khach-hang/get-data', [TaiKhoanController::class, 'getdata']);
Route::post('/khach-hang/sua-profile', [TaiKhoanController::class, 'suaprofile']);
Route::post('/khach-hang/doi-password', [TaiKhoanController::class, 'doipassword']);
Route::post('/dang-ky', [TaiKhoanController::class, 'Dangky']);



