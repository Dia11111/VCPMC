@extends('layouts.layout')

@section('title', 'Loại hợp đồng')

@section('css')
<link rel="stylesheet" href="{{asset('css/system.css')}}">
@endsection

@section('script')
<script>
    function toggleContent(option) {
        var content1 = document.getElementById("content1");
        var content2 = document.getElementById("content2");

        if (option === 1) {
            content1.style.display = "block";
            content2.style.display = "none";
        } else if (option === 2) {
            content1.style.display = "none";
            content2.style.display = "block";
        }
    }
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
    Cài đặt hệ thống
</h1>
<div class="table " style="margin-left: 3px; width:100%; height: 60%;">
    <div>
        <p style="font-size: 18px; font-weight: bold;">
            Cài đặt chu kì đối soát
        </p>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" onclick="toggleContent(1)">
        <label class="form-check-label" for="flexRadioDefault1" style="margin-left: 10px;">
          Đối soát theo quý
        </label>
    </div>
    <div class="form-check-content" id="content1" style="font-size: 13px;
    margin-left: 25px;
    margin-top: 15px;">
        <span style="font-weight: bold;">Quý 1:</span> 01/06 - 30/07
        <br><br>
        <span style="font-weight: bold;">Quý 2:</span> 01/08 - 30/09
        <br><br>
        <span style="font-weight: bold;">Quý 3:</span> 01/10 - 30/11
        <br><br>
        <span style="font-weight: bold;">Quý 4:</span> 01/12 - 31/12
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" onclick="toggleContent(2)">
        <label class="form-check-label" for="flexRadioDefault1" style="margin-left: 10px;">
          Đối soát theo tháng
        </label>
    </div>
    <div class="form-check-content" id="content2">
        <div class="date-input-container">
            <div style="margin-top: 20px;">
                <label for="" style="font-weight: bold;">Ngày bắt đầu:</label>
                <input type="date" class="input" style="width: 58%;">
            </div>
            <div style="margin-top: 20px;">
                <label for="" style="font-weight: bold;">Ngày bắt đầu:</label>
                <input type="date" class="input" style="width: 58%;">
            </div>
        </div>


    </div>
</div>
<div class="button-group ">
    <button class="btn btn-active-form ">
        Lưu
    </button>
</div>
@endsection