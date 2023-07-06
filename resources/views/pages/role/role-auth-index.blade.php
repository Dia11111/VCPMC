@extends('layouts.layout')

@section('title', 'Phân quyền người dùng')

@section('css')
<link rel="stylesheet" href="{{asset('css/auth.css')}}">
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
    Vai trò người dùng trên
</h1>
<div class="header-search">
    <div class="switch-tab">
        <a class="btn btn-switch" href="{{ route('user.index') }}">
            Danh sách người dùng
        </a>
        <a class="btn btn-active btn-switch">
            Vai trò người dùng
        </a>
    </div>
    <div class="input-search">
        <input type="text" placeholder="Tìm kiếm">
        <i class="fa-solid fa-search input-search-icon"></i>
    </div>
    <div class="action-page">
        <a href="">
            <i class="fa-solid fa-user-group" style="font-size: 25px;"></i>
            <p>
                Thêm vai trò
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
                    Tên nhóm người dùng
                </th>
                <th>
                    Số lượng người dùng
                </th>
                <th>
                    Vai trò
                </th>
                <th>
                    Mô tả
                </th>
                <th colspan="2">
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>
                    1
                </th>
                <td>
                    Admin
                </td>
                <td>
                    1
                </td>
                <td>
                    Admin
                </td>
                <td>
                    Lorem ipsum dotor sit arret
                </td>
                <td class="table-action">
                    <a class="text-under" href="">
                        Cập nhật
                    </a>
                </td>
                <td class="table-action" style="color: #FF4747 !important;">
                    Xóa
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