@extends('layouts.layout')

@section('title', 'playlist')

@section('script')
<script>
    active_navbar_mini();

    function active__video() {
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
    // click .btn-active-form to submit form
    $('.btn-active-form').click(function() {
        $('#information').submit();
    });
</script>
@endsection

@section('content')
<div class="content-profile-1">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Library</li>
        </ol>
    </nav> 
    <h1 style="color: #fff;">
        Playlist top ca khúc 2021
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
    <div class="group-flex" style="align-items: normal">
        <div class="table table-group-ban-ghi">
            <h3 style="color: #fff;">
                Kho bản ghi
            </h3>
            <form class="search-list search-list-play-list">
                <div class="form-group">
                    <label for="">
                        Thể loại
                    </label>
                    <select name="" id="">
                        <option value="">Tất cả</option>
                        <option value="">Pop</option>
                        <option value="">EDM</option>
                        <option value="">Ballad</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">
                        Playlist mẫu
                    </label>
                    <select name="" id="">
                        <option value="">Tất cả</option>
                        <option value="">Pop</option>
                        <option value="">EDM</option>
                        <option value="">Ballad</option>
                    </select>
                </div>
            </form>
            <div class="input-search">
                <input type="text" placeholder="Tìm kiếm">
                <i class="fa-solid fa-search input-search-icon"></i>
            </div>
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
                    @for ($i = 0; $i < 12; $i++)
                    <tr>
                        <td>
                            {{ $i + 1 }}
                        </td>
                        <td>
                            Bản ghi {{ $i + 1 }}
                        </td>
                        <td>
                            Ca sĩ {{ $i + 1 }}
                        </td>
                        <td>
                            Tác giả {{ $i + 1 }}
                        </td>
                        <td class="table-action" onclick="active__video()">
                            Nghe
                        </td>
                        <td class="table-action">
                            thêm
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
        <div class="table table-group-ban-ghi" style="margin-left: 20px">
            <h3 style="color: #fff;">Danh sách bản ghi được thêm vào Playlist</h3>
            <div class="search-list search-list-play-list">
                <p>
                    <span class="total-ban-ghi" style="color: #fff;">
                        Tổng số: 
                    </span>
                    <span>
                        01 bản ghi
                    </span>
                </p>

                <p>
                    <span class="total-ban-ghi" style="color: #fff;">
                        Tổng thời lượng:
                    </span>
                    <span>
                        00:00:00
                    </span>
                </p>
            </div>
            <div class="input-search">
                <input type="text" placeholder="Tìm kiếm">
                <i class="fa-solid fa-search input-search-icon"></i>
            </div>
            <table>
                <thead>
                    {{-- <tr>
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
                    </tr> --}}
                </thead>
                <tbody>
                    <tr>
                        <td colspan="6" style="text-align: center">
                            <p style="font-size: 16px;">
                                Vui lòng chọn bản ghi để thêm vào Playlist
                            </p>
                        </td>
                    </tr>
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
    <div class="button-group">
        <a href="">
            <button type="button" class="btn btn-outline">
                Hủy
            </button>
        </a>
        <button class="btn btn-active-form">
            Lưu
        </button>
    </div>
</div>
@endsection