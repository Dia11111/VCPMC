@extends('layouts.layout')

@section('title', 'Hợp đồng')

@section('css')
<link rel="stylesheet" href="{{asset('css/contract.css')}}">
@endsection

@section('script')
<script>
    const switchTab = document.querySelector('.table-switch');
    const swichButton = document.querySelectorAll('.btn-switch');
    for (let i = 0; i < swichButton.length; i++) {
        swichButton[i].addEventListener('click', () => {
            for (let j = 0; j < swichButton.length; j++) {
                swichButton[j].classList.remove('btn-active');
            }
            swichButton[i].classList.add('btn-active');
            if (i == 0) {
                switchTab.style.display = 'block';
                switchTab.nextElementSibling.style.display = 'none';
            } else {
                switchTab.style.display = 'none';
                switchTab.nextElementSibling.style.display = 'block';
            }
        })
    }
    $('.open-modal-active').click(function() {
        $('.modal-view-action').css('display', 'flex');
    });
    $('.close-modal-active').click(function() {
        $('.modal-view-action').css('display', 'none');
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
    Danh sách hợp đồng
</h1>
<div class="switch-tab">
    <button class="btn btn-active btn-switch">
        Hợp đồng uỷ quyền
    </button>
    <button class="btn btn-switch">
        Hợp đồng khai thác
    </button>
</div>
<div class="header-search">
    <form class="search-list">
        <div class="form-group">
            <label for="">
            Quyền sở hữu
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
            Hiệu lực hợp đồng
        </label>
            <select name="" id="">
            <option value="">Tất cả</option>
            <option value="">Pop</option>
            <option value="">EDM</option>
            <option value="">Ballad</option>
        </select>
        </div>
        <div class="action-page">
            <a href="{{ route('contract.create') }}">
                <i class="fa-solid fa-plus"></i>
                <p>
                    Thêm hợp đồng
                </p>
            </a>
        </div>
    </form>
    <div class="input-search">
        <input type="text" placeholder="Tìm kiếm">
        <i class="fa-solid fa-search input-search-icon"></i>
    </div>
</div>
<div class="table table-switch table-active">
    <table>
        <thead>
            <tr>
                <th>
                    STT
                </th>
                <th>
                    Số hợp đồng
                </th>
                <th>
                    Tên hợp đồng
                </th>
                <th>
                    Người ủy quyền
                </th>
                <th>
                    Quyền sở hữu
                </th>
                <th>
                    Hiệu lực hợp đồng
                </th>
                <th>
                    Ngày tạo
                </th>
                <th colspan="2">
                </th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 0; $i < 12; $i++)
            <tr>
                <th>
                    {{ $i + 1 }}
                </th>
                <td>
                    123456789
                </td>
                <td>
                    Hợp đồng {{ $i + 1 }}
                </td>
                <td>
                    Nguyễn Văn A
                </td>
                <td>
                    Pop
                </td>
                <td>
                    12/12/2021
                </td>
                <td>
                    12/12/2021
                </td>
                <td class="table-action">
                    <a class="text-under" href="{{ route('contract.show', 1) }}">
                            Xem chi tiết 
                        </a>
                </td>
                <td class="table-action open-modal-active">
                    Lý do hủy
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
<div class="table table-switch">
    <table>
        <thead>
            <tr>
                <th>
                    STT
                </th>
                <th>
                    Số hợp đồng
                </th>
                <th>
                    Khách hàng
                </th>
                <th>
                    Ngày tạo
                </th>
                <th>
                    Ngày hiệu lực
                </th>
                <th>
                    Ngày hết hạn
                </th>
                <th>
                    Hiệu lực hợp đồng
                </th>
                <th colspan="2">
                </th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 0; $i < 12; $i++)    
            <tr>
                <th>
                    {{ $i + 1 }}
                </th>
                <td>
                    123456789
                </td>
                <td>
                    Lê Tấn Tài
                </td>
                <td>
                    12/12/2021
                </td>
                <td>
                    12/12/2021
                </td>
                <td>
                    12/12/2021
                </td>
                <td>
                    Còn hiệu lực
                </td>
                <td class="table-action">
                    <a class="text-under" href="{{ route('contract.show', 1) }}">
                            Xem chi tiết 
                        </a>
                </td>
                <td class="table-action">
                    Sao chép hợp đồng
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
<div class="modal-view-action">
    <div class="modal-content">
        <h2>
            Lý do hủy hợp đồng uỷ quyền HĐUQ 1234
        </h2>
        <textarea name="" readonly>Hủy hợp đồng để tạo hợp đồng mới với giá trị và thời hạn lâu hơn.</textarea>
        <div class="button-group">
            <button type="button" class="btn close-modal-active">
                Đóng
            </button>
        </div>
    </div>
</div>
@endsection