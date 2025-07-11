<?php

namespace App\Http\Controllers;

use App\Models\TaiKhoan;
use Illuminate\Http\Request;

class TaiKhoanController extends Controller
{
    public function DangNhap(Request $request)
    {
        $TaiKhoan = TaiKhoan::where('email', $request->email)
            ->where('mat_khau', $request->mat_khau)
            ->first();
        if (!$TaiKhoan) {
            return response()->json([
                'status' => false,
                'message' => 'Đăng nhập thất bại, vui lòng kiểm tra lại thông tin đăng nhập',
            ]);
        } else {
            return response()->json([
                'status' => true,
                'message' => 'Đăng nhập thành công',
                'token' => $TaiKhoan->createToken('token_tai_khoan')->plainTextToken
            ]);
        }
    }
}
