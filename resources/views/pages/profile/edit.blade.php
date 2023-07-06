@extends('layouts.layout')

@section('title', 'Thông tin cơ bản')

@section('css')
<link rel="stylesheet" href="{{asset('css/profile.css')}}">
@endsection

@section('script')

@endsection

@section('content')
<h1>
    Thông tin cơ bản
</h1>

<div class="action-page">
    <a href="">
        <i class="fa-sharp fa-solid fa-pen-to-square"></i>
        <p>
            Sửa thông tin
        </p>
    </a>
    <div style="margin-top: 20px" class="open-modal-active">
        <i class="fa-solid fa-lock"></i>
        <p>
            Đổi mật khẩu
        </p>
    </div>
    <div style="margin-top: 20px">
        <i class="fa-solid fa-arrow-right-from-bracket"></i>
        <p>
            Đăng xuất
        </p>
    </div>
</div>
<div class="content-profile">
    <div class="preview-avatar">
        <div class="show-avatar">
            <img src="{{ asset('images/avatar.png') }}" alt="avatar">
            <label for="" class="icon-change-avatar">
            <i class="fa-solid fa-camera"></i>
        </label>
        </div>
        <div class="show-name">
            <p>
                Lê Tấn Tài
            </p>
        </div>
    </div>
    <form class="form-profile">
        <div class="form-group">
            <label for="name" class="form-label">Tên người dùng</label>
            <input type="text" class="input" id="name" name="name" value="" >
        </div>
        <div class="form-group">
            <label for="username" class="form-label">Ngày sinh</label>
            <input type="text" class="input" id="username" name="username" value="" >
        </div>
        <div class="form-group">
            <label for="phone" class="form-label">Số điện thoại</label>
            <input type="text" class="input" id="phone" name="phone" value="" >
        </div>
        <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="input" id="email" name="email" value="" readonly>
        </div>
        <div class="form-group">
            <label for="username" class="form-label">Tên đăng nhập</label>
            <input type="text" class="input" id="username" name="username" value="" readonly>
        </div>
        <div class="form-group">
            <label for="role" class="form-label">Phân quyền</label>
            <input type="text" class="input" id="role" name="role" value="" readonly>
        </div>

    </form>
</div>

@endsection