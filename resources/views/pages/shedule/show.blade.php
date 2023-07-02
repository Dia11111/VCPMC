@extends('layouts.layout')

@section('title', 'Lập lịch phát')

@section('css')
<link rel="stylesheet" href="{{asset('css/shedule.css')}}">
@endsection

@section('script')
<script>
    active_navbar_mini();
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
    Lịch phát 1
</h1>
<div class="header-search">
    <div class="input-search">
        <input type="text" placeholder="Tên chủ đề người tạo...">
        <i class="fa-solid fa-search input-search-icon"></i>
    </div>
    <div class="action-page">
        <a href="">
            <i class="fa-solid fa-list-check"></i>
            <p>
                Chỉnh sửa lịch phát
            </p>
        </a>
    </div>
</div>
<div class="table">
    <table>
        <thead>
            <tr>
                <th>
                    STT
                </th>
                <th>
                    Tên Playlist
                </th>
                <th>
                    Bắt đầu - Kết thúc
                </th>
                <th>
                    Chu kỳ phát
                </th>
                <th>
                    Thiết bị
                </th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 0; $i < 12; $i++)
            <tr>
                <tr>
                    <td>
                        {{ $i + 1 }}
                    </td>
                    <td>
                        Playlist {{ $i + 1 }}
                    </td>
                    <td>
                        12:00 - 13:00
                    </td>
                    <td>
                        Thứ 2 | Thứ 3
                    </td>
                    <td>
                        Thiết bị 1 | Thiết bị 2 | Thiết bị 3
                    </td>
                </tr>
            </tr>
            @endfor
    </table>

</div>
@endsection