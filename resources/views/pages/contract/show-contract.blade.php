@extends('layouts.layout')

@section('title', 'Hợp đồng')

@section('css')
<link rel="stylesheet" href="{{asset('css/contract.css')}}">
@endsection

@section('script')
<script>
    active_navbar_mini();
    $('.open-modal-active').click(function() {
        $('.modal-view-action').css('display', 'flex');
    });
    $('.close-modal-active').click(function() {
        $('.modal-view-action').css('display', 'none');
    });
    $('.open-modal-contract').click(function() {
        $('.contract').css('display', 'flex');
    });
    $('.table-action').click(function() {
        $('.modal-view').css('display', 'flex');
    });
    // click without .modal-content to close modal
    $('.modal-view').click(function(e) {
        if (!$(e.target).is('.modal-content') && !$(e.target).is('video')) {
            $('.modal-view').css('display', 'none');
        }
    });
</script>
<script>
    const quyenTacGiaCheckbox = document.getElementById('quyenTacGiaCheckbox');
    const quyenTacGiaInput = document.getElementById('quyenTacGiaInput');
    const quyenNguoiBieuDienCheckbox = document.getElementById('quyenNguoiBieuDienCheckbox');
    const quyenNguoiBieuDienInput = document.getElementById('quyenNguoiBieuDienInput');
    const quyenNhaSanXuatCheckbox = document.getElementById('quyenNhaSanXuatCheckbox');
    const quyenNhaSanXuatInput = document.getElementById('quyenNhaSanXuatInput');
    const quyenLienQuanCheckbox = document.getElementById('quyenLienQuanCheckbox');

    quyenTacGiaCheckbox.addEventListener('change', function() {
        const isChecked = quyenTacGiaCheckbox.checked;
        quyenTacGiaInput.disabled = !isChecked;
        quyenNguoiBieuDienCheckbox.disabled = isChecked;
        quyenNhaSanXuatCheckbox.disabled = isChecked;
        quyenNguoiBieuDienInput.disabled = isChecked;
        quyenNhaSanXuatInput.disabled = isChecked;
        quyenLienQuanCheckbox.disabled = isChecked;
    });

    quyenNguoiBieuDienCheckbox.addEventListener('change', function() {
        const isChecked = quyenNguoiBieuDienCheckbox.checked;
        quyenTacGiaCheckbox.disabled = isChecked;
        quyenNhaSanXuatCheckbox.disabled = isChecked;
        quyenTacGiaInput.disabled = isChecked;
        quyenNhaSanXuatInput.disabled = isChecked;
    });

    quyenNhaSanXuatCheckbox.addEventListener('change', function() {
        const isChecked = quyenNhaSanXuatCheckbox.checked;
        quyenTacGiaCheckbox.disabled = isChecked;
        quyenNguoiBieuDienCheckbox.disabled = isChecked;
        quyenTacGiaInput.disabled = isChecked;
        quyenNguoiBieuDienInput.disabled = isChecked;
    });
    quyenLienQuanCheckbox.addEventListener('change', function() {
        const isChecked = quyenLienQuanCheckbox.checked;
        quyenTacGiaCheckbox.disabled = isChecked;
        quyenTacGiaInput.readOnly = isChecked;

        quyenNguoiBieuDienCheckbox.checked = isChecked;
        quyenNhaSanXuatCheckbox.checked = isChecked;
        quyenNguoiBieuDienCheckbox.disabled = isChecked;
        quyenNhaSanXuatCheckbox.disabled = isChecked;
        quyenNguoiBieuDienInput.readOnly = isChecked;
        quyenNhaSanXuatInput.readOnly = isChecked;
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
    @lang('public.Danh sách hợp đồng')
</h1>
<div class="switch-tab">
    <a href="{{ route('contract.show', 1) }}">
        <button class="btn">
            Hợp đồng uỷ quyền
        </button>
    </a>
    <a href="{{ route('contract.show', [1, 'list-active' => 'true']) }}">
        <button class="btn btn-active">
            Hợp đồng khai thác
        </button>
    </a>
    <div class="action-page">
        <a href="">
            <i class="fa-regular fa-pen-to-square"></i>
            <p>
                Chỉnh sửa hợp đồng
            </p>
        </a>
        <div style="margin-top: 20px" class="open-modal-contract">
            <i class="fa-solid fa-file-lines"></i>
            <p>
                Gia hạn hợp đồng
            </p>
        </div>
        <div style="margin-top: 20px" class="open-modal-active">
            <i class="fa-solid fa-xmark"></i>
            <p>
                Hủy hợp đồng
            </p>
        </div>
        <div style="margin-top: 20px" class="open-modal-active">
            <i class="fa-solid fa-plus" style="color: #FF4747"></i>
            <p>
                Thêm bản ghi
            </p>
        </div>
    </div>
</div>
<div class="header-search">
    <form class="search-list">
        <div class="form-group">
            <label for="">
                Tình trạng phê duyệt
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
</div>
<div class="table table-active">
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
                    Ca sĩ
                </th>
                <th>
                    Tác giả
                </th>
                <th>
                    Ngày tải
                </th>
                <th>
                    Tình trạng
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
                    123456789
                </td>
                <td>
                    Ca sĩ {{ $i + 1 }}
                </td>
                <td>
                    Tác giả {{ $i + 1 }}
                </td>
                <td>
                    01/01/2021
                </td>
                <td>
                    <i class="fa-solid fa-circle icon-process text-info"></i> Chờ duyệt
                </td>
                <td class="table-action">
                    Nghe
                </td>
            </tr>
            @endfor
    </table>
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
    <div class="modal-view-action">
        <form class="modal-content">
            <h2>
                Hủy hợp đồng ủy quyền
            </h2>
            <textarea name="" placeholder="Cho chúng tôi biết lý do hủy hợp đồng ủy quyền này..."></textarea>
            <div class="button-group">
                <button type="button" class="btn btn-outline close-modal-active">
                    Quay lại
                </button>
                <button class="btn">
                    Hủy hợp đồng
                </button>
            </div>
        </form>
    </div>
    <div class="modal-view-action contract">
        <form class="modal-content">
            <h2>
                Gia hạn ủy quyền tác phẩm
            </h2>
            <div class="form-group-3">
                <div class="form-group form-group-2">
                    <label for="" style="margin-bottom: 10px;">
                        Thời gian gia hạn <span class="text-danger">*</span>
                    </label>
                    <label for="" style="margin-bottom: 10px; font-weight: 100;">Từ ngày: 02/01/2021</label>
                    <div class="text-title" style="font-size: 16px; font-weight: 100; margin-right: 10px">
                        Đến ngày:
                        <input class="input" type="date" name="" style="width: 60%;" required value="25/10/2022">
                    </div>

                </div>

                <div class="form-group form-group-2">
                    <label for="">
                        Nhà sản xuất: <span class="text-danger">*</span>
                    </label>
                    <div class="text-title" style="font-size: 16px; font-weight: 100; margin-right: 10px; display: flex;
                    align-items: center;">
                        <input type="checkbox" class="table-checkbox" id="quyenTacGiaCheckbox" style="width: 10%;">
                        <span style=" margin: 0 0px; font-weight: 100;">Quyền tác giả</span>
                        <input class="input" type="text" name="" id="quyenTacGiaInput" style="width: 15%;" value="0">%
                    </div>
                    <div>
                        <input type="checkbox" class="table-checkbox" id="quyenLienQuanCheckbox" style="width: 10%;">
                        <span style="margin: 0 0px; font-weight: 100;">Quyền liên quan:</span>
                        <div style="margin-left: 20px; margin-top: 10px;">
                            <input type="checkbox" class="table-checkbox" id="quyenNguoiBieuDienCheckbox" style="width: 10%;">
                            <span for="checkbox1">Quyền của người biểu diễn</span>
                            <input class="input" type="text" name="" id="quyenNguoiBieuDienInput" style="width: 16%;" value="50">%
                        </div>
                        <div style="margin-left: 20px; margin-top: 10px;">
                            <input type="checkbox" class="table-checkbox" id="quyenNhaSanXuatCheckbox" style="width: 10%;">
                            <span for="checkbox2">Quyền của nhà sản <br>(bản ghi/video)</span>
                            <input class="input" type="text" name="" id="quyenNhaSanXuatInput" style="width: 16%;" value="50">%
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group-2">
                <div style="display: flex; align-items: center;">
                    <div class="text-title" style="font-size: 16px; font-weight: 700; margin-right: 10px">
                        Đính lời bài hát:
                    </div>
                    <div class="input-radio">
                        <input id="input-upload" class="input-upload" type="file" name="" required>
                        <button class="btn btn-outline btn-upload" type="button">
                            <i class="fa-solid fa-upload"></i>
                            Tải lên
                        </button>
                    </div>
                </div>
            </div>
            <div class="button-group" style="justify-content: center">
                <button type="button" class="btn btn-outline close-modal-active">
                    Hủy
                </button>
                <button class="btn">
                    Tải lên
                </button>
            </div>
        </form>
    </div>
</div>
@endsection