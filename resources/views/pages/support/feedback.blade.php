@extends('layouts.layout')

@section('css')
<link rel="stylesheet" href="{{asset('css/feedback.css')}}">
@endsection

@section('content')
<div style="z-index: 1;">
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
        Feedback
    </h1>
</div>

<form action="">
    <div class="table" style="width: 511px; height: 460px; margin: 10px 280px;">
        <div class="form-group">
            <label for="role" class="form-label">Tên người dùng</label>
            <input type="text" class="input" id="role" name="role" value="">
        </div>
        <div class="form-group">
            <label for="">
                Trạng thái
            </label>
            <select name="" id="" class="input">
                <option value="" selected>Chọn vấn đề cần được hỗ trợ</option>
                <option value="">Tài khoản</option>
                <option value="">Quản lý doanh thu</option>
                <option value="">Vấn đề bản quyền</option>
                <option value="">Khác</option>
            </select>
        </div>
        <div class="form-group">
            <label for="role" class="form-label">Nội dung</label>
            <textarea name="" class="input" rows="8"></textarea>
        </div>
    </div>
    <button class="btn btn-active-form" style="padding: 10px 65px;
    margin: 0px 455px;">
        Gửi
    </button>
</form>
@endsection