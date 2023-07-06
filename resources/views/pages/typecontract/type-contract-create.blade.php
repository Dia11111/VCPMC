@extends('layouts.layout')

@section('title', 'Loại hợp đồng')

@section('css')
<link rel="stylesheet" href="{{asset('css/system.css')}}">
@endsection

@section('script')
<script>
    $(document).ready(function() {
        $('#addRow').click(function() {
            var tableBody = $('.table-group-ban-ghi tbody');
            var rowCount = tableBody.children('tr').length;
            var newRow = $('<tr>');

            newRow.append('<td>' + (rowCount + 1) + '</td>');
            newRow.append('<td class="editable"><input type="text" class="edit-input input"></td>');
            newRow.append('<td class="editable"><input type="text" class="edit-input input"></td>');

            tableBody.append(newRow);

            newRow.find('.editable').click(function() {
                var inputElement = $(this).find('input');
                var currentValue = inputElement.val().trim();

                inputElement.focus();

                inputElement.blur(function() {
                    var newValue = $(this).val();
                    $(this).parent().text(newValue);
                });
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
    <div id="addRow">
        <i class="fa-regular fa-plus"></i>
        <p>Thêm mới</p>
    </div>
    <div style="margin-top: 20px;" href="">
        <i class="fa-regular fa-trash-can" style="color: #FF4747"></i>
        <p>Xóa</p>
    </div>
</div>
<div class="table table-group-ban-ghi">
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