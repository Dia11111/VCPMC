@extends('layouts.layout')

@section('title', 'Loại hợp đồng')

@section('css')
<link rel="stylesheet" href="{{asset('css/system.css')}}">
@endsection

@section('script')
<script>
    $(document).ready(function() {
        $('table td.editable').click(function() {
            // Lấy nội dung hiện tại của ô được click
            var currentValue = $(this).text().trim();

            newRow.append('<td>' + (rowCount + 1) + '</td>');
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
    Loại hợp đồng
</h1>
<div class="action-page">
    <a href="">
        <i class="fa-regular fa-plus"></i>
        <p>Thêm lịch áp dụng</p>
    </a>
    <div style="margin-top: 20px;" href="">
        <i class="fa-regular fa-trash-can" style="color: #FF4747"></i>
        <p>Xóa</p>
    </div>
</div>
<div class="table table-group-ban-ghi" style="width: 61%; height: 55%;">
    <table>
        <thead>
            <tr>
                <th>
                    STT
                </th>
                <th>
                    Loại hợp đồng
                </th>
                <th>
                    Doanh thu VCPM/hợp đồng (Đơn vị: %)
                </th>
                <th>
                    Ngày áp dụng
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    1
                </td>
                <td class="editable">
                    Trọn gói
                </td>
                <td class="editable">
                    20%
                </td>
                <td class="editable">
                    21/07/2021 13:00:00
                </td>
            </tr>
    </table>
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