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

    public function forgotPassword()
    {
        return view('auth.forgot');
    }

    public function resetPassword()
    {
        return view('auth.reset');
    }

    public function changePassword()
    {
        return view('auth.confirm');
    }


    public function postlogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email','password');

        if (Auth::attempt($credentials)) {
            // Xác thực thành công, chuyển hướng người dùng đến trang sau khi đăng nhập thành công
            return redirect()->intended(route('profile'));
        } 
        // Xác thực thất bại, chuyển hướng người dùng đến trang đăng nhập với thông báo lỗi
        return redirect()->route('login')->with('error','Sai tên đăng nhập hoặc mật khẩu');
        
    }
}
