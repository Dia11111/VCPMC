@extends('layouts.layout')

@section('title', 'Playlist')

@section('content')
<div class="content-profile-1">
                <!-- <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Library</li>
                    </ol>
                </nav> -->
                <h1 style="color: #fff;">
                    Playlist
                </h1>

                <div class="header-search">
                    <div class="input-search">
                        <input type="text" placeholder="Tìm kiếm">
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
                            <i class="fa-regular fa-pen-to-square"></i>
                            <p> Thêm<br> Playlist</p>

                        </a>
                    </div>
                </div>
                <div class="table">
                    <table>
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tiêu đề</th>
                                <th>Số bản ghi</th>
                                <th>Thời lượng</th>
                                <th>Chủ đề</th>
                                <th>Ngày tạo</th>
                                <th>Người tạo</th>
                                <th colspan="1"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 0; $i < 12; $i++)
                            <tr>
                                <td>{{ $i + 1 }}</td>
                                <td>Bản ghi {{ $i + 1 }}</td>
                                <td>12</td>
                                <td>00:00:00</td>
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
                                <td>01/01/2023</td>
                                <td>Người tạo {{ $i + 1 }}</td>
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
                                <li>1</li>
                                <li>2</li>
                                <li>3</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
@endsection