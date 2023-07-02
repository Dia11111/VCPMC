@extends('layouts.layout')

@section('css')
<link rel="stylesheet" href="{{asset('css/feedback.css')}}">
@endsection

@section('content')
<h1>
    Tải App
</h1>
<div class="images-1">
    <img src="images/Group 72.png" style="width: 56%; margin: -147px -100px;">
</div>
<div>
    <h2 class="text-center" style="margin-bottom: 30px; font-size: 36px;">
        ỨNG DỤNG <span style="color: #FF7506;">VCPMC</span>
    </h2>
    <div style="margin: 0px 414px; color: #FF7506; margin-bottom: 10px;">-----------------------------------------</div>
    <div class="text-center">Bạn vui lòng chọn <br> <span style="font-weight: bold; font-size: 16px;">nền tảng</span> phù hợp để trải nghiệm</div>
</div>
<div class="feature-layout">
    <div class="feature-item">
        <div class="image-container">
            <img src="{{ asset('images/Frame.png') }}" alt="">
        </div>
        <button class="btn" style="margin-top: 75px;">Tool Upload</button>
    </div>
    <div class="feature-item">
        <img src="{{ asset('images/pngegg (1) 1.png') }}" alt="">
        <button class="btn" style="margin-top: 44px;">Tải App Window</button>
    </div>
    <div class="feature-item">
        <img src="{{ asset('images/Mask Group.png') }}" alt="">
        <button class="btn" style="margin: 10px;">Tải App Android</button>
    </div>
</div>
@endsection