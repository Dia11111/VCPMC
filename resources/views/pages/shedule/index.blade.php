@extends('layouts.layout')

@section('title', 'Lập lịch phát')

@section('css')
<link rel="stylesheet" href="{{asset('css/shedule.css')}}">
@endsection

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
    Danh sách lịch phát
</h1>
<div class="header-search">
    <div class="input-search">
        <input type="text" placeholder="Tên chủ đề người tạo...">
        <i class="fa-solid fa-search input-search-icon"></i>
    </div>
    <div class="action-page">
        <a href="">
            <i class="fa-solid fa-list-check"></i>
            <p>
                Thêm lịch phát
            </p>
        </a>
    </div>
</div>
<div class="table">
    <table>
        <thead>
            <tr>
                <th>
                    STT
                </th>
                <th>
                    Tên lịch
                </th>
                <th>
                    Thời gian phát
                </th>
                <th colspan="2">
                </th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 0; $i < 12; $i++)
            <tr>
                <td>
                    {{ $i + 1 }}
                </td>
                <td>
                    <a href="">
                        Lịch phát {{ $i + 1 }}
                    </a>
                </td>
                <td>
                    12:00 - 13:00
                </td>
                <td class="table-action">
                    <a class="text-under" href="{{ route('shedule.show', 1) }}">
                            Xem chi tiết 
                        </a>
                </td>
                <td class="table-action">
                    <a class="text-danger text-under" href="">
                        Xóa
                    </a>
                </td>
            </tr>
            @endfor
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