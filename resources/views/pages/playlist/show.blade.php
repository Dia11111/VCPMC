@extends('layouts.layout')

@section('title', 'Kho bản ghi')

@section('css')
<link rel="stylesheet" href="{{asset('css/playlist.css')}}">
@endsection

@section('script')
<script>
    active_navbar_mini();

    function active_video() {
        $('.modal-view').css('display', 'flex');
    }
    $('.close').click(function() {
        $('.modal-view').css('display', 'none');
    });
    // click without .modal-content to close modal
    $('.modal-view').click(function(e) {
        if (!$(e.target).is('.modal-content') && !$(e.target).is('video')) {
            $('.modal-view').css('display', 'none');
        }
    });
</script>
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
    Playlist top ca khúc 2023
</h1>

<div class="modal-view">
    <div class="modal-content">
        <video width="320" height="240" controls>
            <source src="" type="video/mp4">
        </video>
        <div class="close">
            <i class="fa-solid fa-times"></i>
        </div>
    </div>
</div>
<div class="group-flex">
    <div class="action-page">
        <a href="">
            <i class="fa-regular fa-pen-to-square"></i>
            <p>
                Chỉnh sửa
            </p>
        </a>
        <div style="margin-top: 20px" class="open-modal-active">
            <i class="fa-solid fa-trash-can" style="color: #FF4747"></i>
            <p>
                Xóa playlist
            </p>
        </div>
    </div>
    <div class="infomation">
        <img src="" alt="">
        <h2>
            Top ca khúc 2024
        </h2>
        <table>
            <tr>
                <th class="title-table">
                    Người tạo:
                </th>
                <th>
                    Super Admin
                </th>
            </tr>
            <tr>
                <th class="title-table">
                    Tổng số:
                </th>
                <th>
                    8 bản ghi
                </th>
            </tr>
            <tr>
                <th class="title-table">
                    Tổng thời lượng:
                </th>
                <th>
                    01:31:16
                </th>
            </tr>
        </table>
        <div class="content-information">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua.
        </div>
        <div class="list-topic">
            <div class="topic-music">
                <i class="fa-solid fa-circle"></i> chu de 1
            </div>

        </div>
        <div class="option-active">
            <div class="option">
                <i class="fa-solid fa-earth-asia"></i> Hiển thị ở chế độ công
            </div>
            <div class="option option-active">
                <i class="fa-solid fa-shuffle"></i> Phát ngẫu nhiên
            </div>
            <div class="option">
                <i class="fa-solid fa-repeat"></i> Lặp lại
            </div>
        </div>
    </div>
    <div class="table table-group">
        <table>
            <thead>
                <tr>
                    <th>
                        STT
                    </th>
                    <th>
                        Tên bản ghi
                    </th>
                    <th>
                        Ca sĩ
                    </th>
                    <th>
                        Tác giả
                    </th>
                    <th colspan="2">
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        1
                    </td>
                    <td>
                        Bản ghi 1
                    </td>
                    <td>
                        Ca sĩ 1
                    </td>
                    <td>
                        Tác giả 1
                    </td>
                    <td class="table-action" onclick="active_video()">
                        Nghe
                    </td>
                    <td class="table-action">
                        <a href="">
                            Gỡ
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
</div>
@endsection