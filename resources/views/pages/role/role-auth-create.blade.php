@extends('layouts.layout')

@section('title', 'Phân quyền người dùng')

@section('css')
<link rel="stylesheet" href="{{asset('css/system.css')}}">
@endsection

@section('content')
<h1>
    Loại hợp đồng
</h1>

<div class="group-flex" style="align-items: normal">
    <div class=" table-group-ban-ghi">
        <div class="text-title">
            Tên vai trò:
            <input type="text" class="input" name="">
        </div>
        <div class="text-title">
            Mô tả:
            <textarea type="text" class="input" name="" rows="5" style="resize: none;"></textarea>
        </div>
    </div>
    <div class=" table-group-ban-ghi" style="margin-left: 3px">
        <span>Phân quyền chức năng:</span>
        <div class="table" style="width: 118%; height: 90%; overflow-y: scroll;">
            <table>
                <thead>
                    <tr>
                        <th>
                            Tên nhóm chức năng
                        </th>
                        <th>
                            <input type="checkbox" class="table-checkbox">
                        </th>
                        <th>
                            Mã chức năng
                        </th>
                        <th>
                            Chắc năng
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td rowspan="5">
                            Quản lý người dùng
                        </td>
                        <td style="text-align: left">
                            <input type="checkbox" class="table-checkbox">
                        </td>
                        <td>
                            Phân quyền người dùng
                        </td>
                        <td>
                            nguoidung_phanquyen
                        </td>

                    </tr>
                    <tr>
                        <td style="text-align: left">
                            <input type="checkbox" class="table-checkbox">
                        </td>
                        <td>
                            Phân quyền người dùng
                        </td>
                        <td>
                            nguoidung_phanquyen
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: left">
                            <input type="checkbox" class="table-checkbox">
                        </td>
                        <td>
                            Phân quyền người dùng
                        </td>
                        <td>
                            nguoidung_phanquyen
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: left">
                            <input type="checkbox" class="table-checkbox">
                        </td>
                        <td>
                            Phân quyền người dùng
                        </td>
                        <td>
                            nguoidung_phanquyen
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: left">
                            <input type="checkbox" class="table-checkbox">
                        </td>
                        <td>
                            Phân quyền người dùng
                        </td>
                        <td>
                            nguoidung_phanquyen
                        </td>
                    </tr>

                    <tr>
                        <td rowspan="5">
                            Quản lý thư viện
                        </td>
                        <td style="text-align: left">
                            <input type="checkbox" class="table-checkbox">
                        </td>
                        <td>
                            Danh sách media
                        </td>
                        <td>
                            nguoidung_xemdanhsach
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="button-group ">
    <a href=" ">
        <button type="button " class="btn btn-outline ">
            Hủy
        </button>
    </a>
    <button class="btn btn-active-form ">
        Tạo
    </button>
</div>
@endsection