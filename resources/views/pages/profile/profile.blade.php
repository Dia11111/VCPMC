@extends('layouts.layout')

@section('title', 'Thông tin cá nhân')

@section('content')
<div class="content-profile">

    <div class="preview-avatar">
        <p class="title">
            Thông tin cơ bản
        </p>
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
            <input type="text" class="form-control" id="name" name="name" value="Lê Tấn Tài" readonly>
        </div>

        <div class="form-group">
            <label for="phone" class="form-label">Ngày sinh</label>
            <input type="text" class="form-control" id="phone" name="phone" value="12/2/2001" readonly>
        </div>
        <div class="form-group">
            <label for="phone" class="form-label">Số điện thoại</label>
            <input type="text" class="form-control" id="phone" name="phone" value="12345678" readonly>
        </div>
        <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="admin@gmail.com" readonly>
        </div>
        <div class="form-group">
            <label for="username" class="form-label">Tên đăng nhập</label>
            <input type="text" class="form-control" id="username" name="username" value="admin@gmail.com" readonly>
        </div>

        <div class="form-group">
            <label for="role" class="form-label">Chức vụ</label>
            <input type="text" class="form-control" id="role" name="role" value="admin" readonly>
        </div>
    </form>
    <a href="">
        <button class="btn-add">
            <i class="fa-solid fa-plus"></i>
            <p>
                Chỉnh sửa thông tin
            </p>
        </button>
    </a>
</div>
@endsection