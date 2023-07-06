@extends('layout.layouts')

@section('title', 'thông tin tác phẩm')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/system.css') }}">
@endsection

@section('script')
<script>
    $(document).ready(function() {
        $('tbody').mousedown(function(event) {
            if (event.target.tagName !== 'INPUT') {
                var newRow = $('<tr>');

                newRow.append('<td></td>');
                newRow.append('<td class="editable"><input type="text" class="edit-input input"></td>');
                newRow.append('<td class="editable"><input type="text" class="edit-input input"></td>');

                $(this).append(newRow);

                newRow.find('.editable').click(function() {
                    var inputElement = $(this).find('input');
                    var currentValue = inputElement.val().trim();

                    inputElement.focus();

                    inputElement.blur(function() {
                        var newValue = $(this).val();
                        $(this).parent().text(newValue);
                    });
                });
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
    Thông tin tác phẩm
</h1>
<h3 style="margin-top: 10px;">
    Thể loại tác phẩm
</h3>
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