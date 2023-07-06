@extends('layouts.layout')

@section('title', 'Phân quyền người dùng')

@section('css')
<link rel="stylesheet" href="{{asset('css/contract.css')}}">
@endsection

@section('script')
<script>
    active_navbar_mini();

    // click .btn-active-form to submit form
    $('.btn-active-form').click(function() {
        $('#form-new-contract').submit();
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
    Thêm người dùng mới
</h1>
<form action="" id="form-new-contract" style="margin-top: 30px">
    <div class="group-content">
        <div class="content-info" style="width: 35%;">
            <table>
                <tr>
                    <th class="text-title">
                        Tên người dùng: <span class="text-danger">*</span>
                        <input type="text" class="input" name="">
                    </th>
                </tr>
                <tr>
                    <th class="text-title">
                        Số điện thoại:
                        <input type="text" class="input" name="">
                    </th>
                </tr>
                <tr>
                    <th class="text-title">
                        Ngày hết hạn:
                        <input type="date" class="input" name="" style="resize: none">
                    </th>
                </tr>
                <tr>
                    <th class="text-title">
                        Vai trò: <span class="text-danger">*</span>
                        <input type="text" class="input" name="">
                    </th>
                </tr>
                <tr>
                    <th class="text-title" style="">
                        <span class="text-danger">*</span>
                        <span style="font-weight: normal;">là những thông tin bắt buộc</span>
                    </th>
                </tr>
            </table>
        </div>

        <div class="content-info" style="width: 35%;">
            <table>
                <tr>
                    <th class="text-title">
                        Email:
                        <input type="text" class="input" name="">
                    </th>
                </tr>
                <tr>
                    <th class="text-title">
                        Tên đăng nhập: <span class="text-danger">*</span>
                        <input type="text" class="input" name="">
                    </th>
                </tr>
                <tr>
                    <th class="text-title">
                        Mật khẩu: <span class="text-danger">*</span>
                        <input type="text" class="input" name="">
                    </th>
                </tr>
            </table>
        </div>

    </div>
    <div class="button-group">
        <a href="">
            <button type="button" class="btn btn-outline">
                Hủy
            </button>
        </a>
        <button class="btn btn-active-form">
            Tạo
        </button>
    </div>
</form>
@endsection