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
        <button class="btn btn-active">
            Hợp đồng uỷ quyền
        </button>
    </a>
    <a href="{{ route('contract.show', [1, 'list-active' => 'true']) }}">
        <button class="btn">
            Hợp đồng khai thác
        </button>
    </a>
    <div class="action-page">
        <a href="{{ route('contract.edit', 1) }}">
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
            <i class="fa-solid fa-xmark" style="color: #FF4747"></i>
            <p>
                Hủy hợp đồng
            </p>
        </div>
    </div>
</div>
<div class="group-content">
    <div class="content-info">
        <table>
            <tr>
                <th class="text-title">
                    Số hợp đồng:
                </th>
                <th>
                    123456
                </th>
            </tr>
            <tr>
                <th class="text-title">
                    Tên hợp đồng:
                </th>
                <th>
                    Hợp đồng ủy quyền
                </th>
            </tr>
            <tr>
                <th class="text-title">
                    Ngày hiệu lực:
                </th>
                <th>
                    20/10/2021
                </th>
            </tr>
            <tr>
                <th class="text-title">
                    Ngày hết hạn:
                </th>
                <th>
                    21/10/2021
                </th>
            </tr>
            <tr>
                <th class="text-title">
                    Tình trạng:
                </th>
                <th>
                    <i class="fa-solid fa-circle icon-process text-info"></i> Còn thời hạn
                </th>
            </tr>
        </table>
    </div>
    <div class="content-info">
        <table>
            <tr>
                <th class="text-title">
                    Đính kèm tệp:
                </th>
                <th>
                    <div>
                        <i class="fa-regular fa-file-word"></i> hetthuongcannho.doc
                    </div>
                    <div>
                        <i class="fa-regular fa-file-word"></i> hetthuongcannho.doc
                    </div>
                </th>
            </tr>
        </table>
    </div>
    <div class="content-info">
        <table>
            <tr>
                <tr>
                    <th class="text-title text-title-2">
                        <i class="fa-solid fa-circle-exclamation"></i> Mức nhuận bút
                    </th>
                </tr>
                <tr>
                    <th class="text-title">
                        Quyền tác giả:
                    </th>
                    <th>
                        0%
                    </th>
                </tr>
                <tr>
                    <th class="text-title">
                        Quyền liên quan:
                    </th>
                </tr>
                <tr>
                    <th style="padding-left: 0">
                        Quyền của người biểu diễn:
                    </th>
                    <th>
                        50%
                    </th>
                </tr>
                <tr>
                    <th style="padding-left: 0">
                        Quyền của nhà sản xuất: <br> (Bản ghi/video)
                    </th>
                    <th>
                        50%
                    </th>
                </tr>

            </tr>
        </table>
    </div>
</div>
<div class="group-content">
    <div class="content-info">
        <table>
            <tr>
                <th class="text-title">
                    Pháp nhân uỷ quyền:
                </th>
                <th>
                    Cá nhân
                </th>
            </tr>
            <tr>
                <th class="text-title">
                    Tên người uỷ quyền:
                </th>
                <th>
                    Nguyễn Văn A
                </th>
            </tr>
            <tr>
                <th class="text-title">
                    Ngày sinh:
                </th>
                <th>
                    20/10/2002
                </th>
            </tr>
            <tr>
                <th class="text-title">
                    Giới tính:
                </th>
                <th>
                    Nam
                </th>
            </tr>
            <tr>
                <th class="text-title">
                    Quốc tịch:
                </th>
                <th>
                    <i class="fa-solid fa-circle icon-process text-info"></i> Việt Nam
                </th>
            </tr>
            <tr>
                <th class="text-title">
                    Số điện thoại:
                </th>
                <th>
                    <i class="fa-solid fa-circle icon-process text-info"></i> (+84) 345 678 901
                </th>
            </tr>
        </table>
    </div>

    <div class="content-info">
        <table>
            <tr>
                <th class="text-title">
                    Số CMND/ CCCD:
                </th>
                <th>
                    1234567890
                </th>
            </tr>
            <tr>
                <th class="text-title">
                    Ngày cấp:
                </th>
                <th>
                    01/01/2022
                </th>
            </tr>
            <tr>
                <th class="text-title">
                    Nơi cấp:
                </th>
                <th>
                    Hà Nội, Việt Nam
                </th>
            </tr>
            <tr>
                <th class="text-title">
                    Mã số thuế:
                </th>
                <th>
                    1234567890
                </th>
            </tr>
            <tr>
                <th class="text-title">
                    Nơi cư trú:
                </th>
                <th>
                    69/53, Nguyễn Gia Trí, Phường 25, Quận Bình Thạnh, Thành phố Hồ Chí Minh
                </th>
            </tr>
        </table>
    </div>

    <div class="content-info">
        <table>
            <tr>
                <th class="text-title">
                    Email:
                </th>
                <th>
                    example@example.com
                </th>
            </tr>
            <tr>
                <th class="text-title">
                    Tài khoản đăng nhập:
                </th>
                <th>
                    myusername
                </th>
            </tr>
            <tr>
                <th class="text-title">
                    Mật khẩu:
                </th>
                <th>
                    ********
                </th>
            </tr>
            <tr>
                <th class="text-title">
                    Số tài khoản:
                </th>
                <th>
                    1234567890
                </th>
            </tr>
            <tr>
                <th class="text-title">
                    Ngân hàng:
                </th>
                <th>
                    ABC Bank
                </th>
            </tr>
        </table>
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
@endsection