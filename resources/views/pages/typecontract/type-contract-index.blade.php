@extends('layouts.layout')

@section('title', 'Loại hợp đồng')

@section('css')
<link rel="stylesheet" href="{{asset('css/system.css')}}">
@endsection

@section('script')

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
        <i class="fa-solid fa-file-pen"></i>
        <p>Chỉnh sửa loại hợp đồng</p>
    </a>
    <div style="margin-top: 20px;" href="">
        <i class="fa-sharp fa-regular fa-calendar-plus"></i>
        <p>Chỉnh sửa cảnh báo hết hạn</p>
    </div>
</div>
<div class="group-flex" style="align-items: normal">
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
                    <td>
                        Trọn gói
                    </td>
                    <td>
                        20%
                    </td>
                </tr>
        </table>
    </div>
    <div class="table table-group-ban-ghi" style="margin-left: 3px">
        <p style="font-size: 18px; font-weight: bold;">
            Cảnh báo hết hạn khai thác tác phẩm
        </p>
        <p style="font-size: 14px; font-weight: bold; margin-top: 40px;">
            Hợp đồng được cảnh báo trước thời gian hết hạn:
            <span style="font-weight: normal;">365 ngày</span>
        </p>
    </div>
</div>
@endsection