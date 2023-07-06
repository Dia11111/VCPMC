@extends('layout.layouts')

@section('title', 'thông tin tác phẩm')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/system.css') }}">
@endsection

@section('script')
<script>
    $(document).ready(function() {
        $('table td.editable').click(function() {
            // Lấy nội dung hiện tại của ô được click
            var currentValue = $(this).text().trim();

            // Tạo một đối tượng <input> và thiết lập giá trị ban đầu là nội dung hiện tại của ô
            var inputElement = $('<input type="text" class="edit-input input">').val(currentValue);

            // Thay thế ô hiện tại bằng đối tượng <input>
            $(this).html(inputElement);

            // Tự động focus vào đối tượng <input>
            inputElement.focus();

            // Xử lý sự kiện khi đối tượng <input> mất focus
            inputElement.blur(function() {
                // Lấy giá trị mới từ đối tượng <input>
                var newValue = $(this).val();

                // Thay thế đối tượng <input> bằng giá trị mới
                $(this).parent().text(newValue);
            });
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
    Thông tin tác phẩm
</h1>
<h3 style="margin-top: 10px;">
    Thể loại tác phẩm
</h3>
<div class="action-page">
    <a href="">
        <i class="fa-solid fa-plus"></i>
        <p>Thêm mới</p>
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
                <td class="editable">
                    Thể loại 1
                </td>
                <td class="editable">
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
@endsection