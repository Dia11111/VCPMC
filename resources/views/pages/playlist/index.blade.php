@extends('layouts.layout')

@section('title', 'Playlist')

@section('css')
<link rel="stylesheet" href="{{asset('css/playlist.css')}}">
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
    Playlist
</h1>

<div class="header-search">
    <div class="input-search">
        <input type="text" placeholder="Tên chủ đề người tạo...">
        <i class="fa-solid fa-search input-search-icon"></i>
    </div>
    <div class="choose-option">
        <i class="fa-solid fa-list-ul"></i>
        <a href="">
            <i class="fa-solid fa-table-cells-large"></i>
        </a>
    </div>
    <div class="action-page">
        <a href="{{ route('playlist.create') }}">
            <i class="fa-solid fa-plus"></i>
            <p>
                Thêm<br> Playlist
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
                    Tiêu đề
                </th>
                <th>
                    Số bản ghi
                </th>
                <th>
                    Thời lượng
                </th>
                <th>
                    Chủ đề
                </th>
                <th>
                    Ngày tạo
                </th>
                <th>
                    Người tạo
                </th>
                <th colspan="1">
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
                    Bản ghi {{ $i + 1 }}
                </td>
                <td>
                    12
                </td>
                <td>
                    00:00:00
                </td>
                <td>
                    <span class="topic">
                            topic
                        </span>
                    <span class="topic">
                            topic
                        </span>
                    <span class="topic">
                            topic
                        </span>
                    <span class="topic">
                            topic
                        </span>
                </td>
                <td>
                    01/01/2021
                </td>
                <td>
                    Người tạo {{ $i + 1 }}
                </td>
                <td class="table-action">
                    <a href="{{ route('playlist.show', $i) }}">
                            Chi tiết
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