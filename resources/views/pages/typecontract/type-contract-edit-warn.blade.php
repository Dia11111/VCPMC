@extends('layouts.layout')

@section('title', 'Loại hợp đồng')

@section('css')
<link rel="stylesheet" href="{{asset('css/system.css')}}">
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
<div class="table table-group-ban-ghi" style="margin-left: 3px">
    <p style="font-size: 18px; font-weight: bold;">
        Cảnh báo hết hạn khai thác tác phẩm
    </p>
    <p style="font-size: 14px; font-weight: bold; margin-top: 40px;">
        Hợp đồng được cảnh báo trước thời gian hết hạn:
        <input type="text" class="input" style="width: 15%;"> ngày
    </p>z
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