@extends('layouts.layout')

@section('title', 'Phân quyền người dùng')

@section('css')
<link rel="stylesheet" href="{{asset('css/contract.css')}}">
@endsection

@section('content')
<div class="breadcrumb ">
    <div class="breadcrumb-page ">
        <a href=" ">
            Home
        </a>
        <i class="fa-solid fa-chevron-right breadcrumb-page-icon "></i>
    </div>

    <div class="breadcrumb-page ">
        <a href=" ">
            Show
        </a>
        <i class="fa-solid fa-chevron-right breadcrumb-page-icon "></i>
    </div>

    <div class="breadcrumb-page ">
        <a href=" ">
            ID 1
        </a>
    </div>
</div>
<h1>
    Danh sách nguời dùng
</h1>
<div class="header-search">
    <div class="switch-tab">
        <a class="btn btn-active btn-switch">
            Danh sách người dùng
        </a>
        <a class="btn btn-switch" href="{{ route('role.index') }}">
            Vai trò người dùng
        </a>
    </div>
    <div class="input-search">
        <input type="text" placeholder="Tìm kiếm">
        <i class="fa-solid fa-search input-search-icon"></i>
    </div>
    <div class="action-page">
        <a href="">
            <i class="fa-sharp fa-solid fa-user-plus"></i>
            <p>
                Thêm người dùng
            </p>
        </a>
    </div>
</div>
<div class="table table-active">
    <table>
        <thead>
            <tr>
                <th>
                    STT
                </th>
                <th>
                    Họ tên
                </th>
                <th>
                    Tên đăng nhập
                </th>
                <th>
                    Vai trò
                </th>
                <th>
                    Trạng thái
                </th>
                <th>
                    Email
                </th>
                <th>
                    Số điện thoại
                </th>
                <th>
                    Ngày hết hạn
                </th>
                <th colspan="1">
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>
                    1
                </th>
                <td>
                    Lê Tấn Tài
                </td>
                <td>
                    ttai@gmail.com
                </td>
                <td>
                    Admin
                </td>
                <td>
                    Đang kích hoạt
                </td>
                <td>
                    ttai@gmail.com
                </td>
                <td>
                    0934287221
                </td>
                <td>
                    22/01/2001
                </td>
                <td class="table-action">
                    <a class="text-under" href="">
                        Chỉnh sửa
                    </a>
                </td>
            </tr>

    </table>
    <div class="footer-table">
        <div class="footer-left">
            Hiển thị <span>12</span> hàng trong mỗi trang
        </div>

        <div class="footer-right">
            <ul>
                <li><i class="fas fa-chevron-left" style="color: #FF7506;"></i></li>
                <li>1</li>
                <li>2</li>
                <li>3</li>
                <li><i class="fas fa-chevron-right" style="color: #FF7506;"></i></li>
            </ul>
        </div>
    </div>
</div>

@endsection