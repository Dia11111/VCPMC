@extends('layouts.layout')

@section('title', 'Thông tin tác phẩm')

@section('content')
<div class="breadcrumb">
    <div class="breadcrumb-page">
        <a href="">
            Home
        </a>
        <i class="fa-solid fa-chevron-right breadcrumb-page-icon"></i>
    </div>

    <div class="breadcrumb-page">
        <a href="">
            Show
        </a>
        <i class="fa-solid fa-chevron-right breadcrumb-page-icon"></i>
    </div>

    <div class="breadcrumb-page">
        <a href="">
            ID 1
        </a>
    </div>
</div>
<h1>
    Thông tin tác phẩm
</h1>
<h3 style="margin-top: 10px;">
    Thể loại tác phẩm
</h3>
<div class="action-page">
    <a href="">
        <i class="fa-regular fa-pen-to-square"></i>
        <p>Chỉnh sửa</p>
    </a>
</div>
<div class="table">
    <table>
        <thead>
            <tr>
                <th>
                    STT
                </th>
                <th>
                    Tên thể loại
                </th>
                <th>
                    Mô tả
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    1
                </td>
                <td>
                    Thể loại 1
                </td>
                <td>
                    Nhạc pop là 1
                </td>
            </tr>
        </tbody>
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