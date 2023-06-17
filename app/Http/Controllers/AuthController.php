<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function postlogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            // Xác thực thành công, chuyển hướng người dùng đến trang sau khi đăng nhập thành công
            return redirect()->intended('/profile');
        } else {
            // Xác thực thất bại, chuyển hướng người dùng đến trang đăng nhập với thông báo lỗi
            return redirect()->route('login')->withErrors([
                'email' => 'Sai tên đăng nhập hoặc mật khẩu',
            ]);
        }
    }
}
