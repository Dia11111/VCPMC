@extends('layouts.layout')

@section('title', 'Kho bản ghi')

@section('script')
<script>
    $(document).ready(function() {
        $('.table-action').eq(1).click(function() {
            $('.modal-view').css('display', 'flex');
        });
        $('.close').click(function() {
            $('.modal-view').css('display', 'none');
        });
        // click without .modal-content to close modal
        $('.modal-view').click(function(e) {
            if (!$(e.target).is('.modal-content') && !$(e.target).is('video')) {
                $('.modal-view').css('display', 'none');
            }
        });
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
    Kho bản ghi
</h1>

<div class="input-search">
    <input type="text" placeholder="Tìm kiếm">
    <i class="fa-solid fa-search input-search-icon"></i>
</div>

<div class="header-search">
    <form class="search-list">
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
                Định dạng
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
                Thời gian sử dụng
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
                Trạng thái
            </label>
            <select name="" id="">
                <option value="">Tất cả</option>
                <option value="">Pop</option>
                <option value="">Duyệt bởi người dùng</option>
                <option value="">Ballad</option>
            </select>
        </div>
        <div class="action-page">
            <a href="{{ route('restore.create') }}">
                <i class="fa-regular fa-pen-to-square"></i>
                <p>
                    Quản lý<br> phê duyệt
                </p>
            </a>
        </div>
    </form>
    <div class="choose-option">
        <i class="fa-solid fa-list-ul"></i>
        <a href="">
            <i class="fa-solid fa-table-cells-large"></i>
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
                    Tên bản ghi
                </th>
                <th>
                    Mã ISRC
                </th>
                <th>
                    Thời lượng
                </th>
                <th>
                    Ca sĩ
                </th>
                <th>
                    Tác giả
                </th>
                <th>
                    Thể loại
                </th>
                <th>
                    Định dạng
                </th>
                <th>
                    Thời hạn sử dụng
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
                    123456789
                </td>
                <td>
                    00:00:00
                </td>
                <td>
                    Ca sĩ {{ $i + 1 }}
                </td>
                <td>
                    Tác giả {{ $i + 1 }}
                </td>
                <td>
                    Thể loại {{ $i + 1 }}
                </td>
                <td>
                    Định dạng {{ $i + 1 }}
                </td>
                <td>
                    01/01/2021
                </td>
                <td class="table-action">
                    <a href="{{ route('restore.edit', $i) }}">
                            Cập nhập
                        </a>
                </td>
                <td class="table-action">
                    Nghe
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

@endsection