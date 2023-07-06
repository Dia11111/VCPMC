@extends('layouts.layout')

@section('title', 'Hệ thống')

@section('css')
<link rel="stylesheet" href="{{asset('css/system.css')}}">
@endsection

@section('script')
<script>
    function changeTheme(imageSrc) {
        var tableGroupBanGhi = document.querySelector('.table-group-ban-ghi');
        tableGroupBanGhi.innerHTML = '<img src="' + imageSrc + '" alt="" style="width: 90%;">';

        // Lưu đường dẫn hình ảnh vào Local Storage
        localStorage.setItem('selectedImage', imageSrc);
    }

    // Kiểm tra xem có hình ảnh đã được lưu trong Local Storage hay không
    var selectedImage = localStorage.getItem('selectedImage');
    if (selectedImage) {
        var tableGroupBanGhi = document.querySelector('.table-group-ban-ghi');
        tableGroupBanGhi.innerHTML = '<img src="' + selectedImage + '" alt="" style="width: 90%;">';
    }
</script>
@endsection

@section('content')
<div class="breadcrumb ">
    <div class="breadcrumb-page ">
        <a href=" ">
            Home
        </a>
        <i class="fa-solid fa-chevron-right breadcrumb-page-icon "></i>
    </div>

    <div class="breadcrumb-page ">
        <a href=" ">
            Show
        </a>
        <i class="fa-solid fa-chevron-right breadcrumb-page-icon "></i>
    </div>

    <div class="breadcrumb-page ">
        <a href=" ">
            ID 1
        </a>
    </div>
</div>
<h1>
    Cài đặt cấu hình
</h1>
<div class="group-flex " style="align-items: normal ">

    <div class="table-group-ban-ghi">

    </div>

    <div class="table-group-ban-ghi " style="margin-left: 24px ">
        <div class="wrapper" >
            <i class="fa-solid fa-angle-left"></i>
            <div class="carousel">
                <img src="{{ asset('images/Rectangle 7.png') }} " alt="" onclick="changeTheme('{{ asset('images/Rectangle 7.png') }}')">
                <img src="{{ asset('images/Rectangle 8.png') }} " alt="" onclick="changeTheme('{{ asset('images/Rectangle 8.png') }}')">
                <img src="{{ asset('images/Rectangle 9.png') }} " alt="" onclick="changeTheme('{{ asset('images/Rectangle 9.png') }}')">
            </div>
            <i class="fa-solid fa-angle-right"></i>
        </div>
    </div>
</div>
<div style="margin-top: 20px; ">
    <label for=" " style="font-weight: bold; ">Ngôn ngữ hiển thị</label>
    <div class="dropdown ">
        <button class="dropdown-button ">Chọn ngôn ngữ</button>
        <ul class="dropdown-menu ">
            <li>Tiếng Việt</li>
            <li>Tiếng Anh</li>
        </ul>
    </div>
</div>

@endsection