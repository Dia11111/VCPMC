@extends('layouts.layout')

@section('css')
<link rel="stylesheet" href="{{asset('css/device.css')}}">
@endsection

@section('script')
<script>
    let checkboxes = document.querySelectorAll('.table-checkbox');
    let checkboxAll = checkboxes[0];
    // Bỏ đi checkbox đầu tiên
    checkboxes = [...checkboxes].slice(1);
    checkboxAll.addEventListener('change', function() {
        checkboxes.forEach((item) => {
            item.checked = this.checked;
        });
    });
    checkboxes.forEach((item) => {
        item.addEventListener('change', function() {
            const row = this.closest('tr'); // Lấy phần tử cha gần nhất là hàng tr

            // Tìm checkbox trong hàng hiện tại và thiết lập trạng thái của nó
            const rowCheckbox = row.querySelector('.table-checkbox');
            rowCheckbox.checked = this.checked;
        });
    });
</script>
@endsection

@section('content')
<h1>
    Danh sách thiết bị
</h1>

<div class="header-search" style="align-items: flex-end;">
    <div class="choose-option">
        <form class="search-list">
            <div class="form-group">
                <select name="" id="">
                    <option value="0" aria-readonly="true">Chọn nhóm tài khoản</option>
                    <option value="1">Tất cả</option>
                    <option value="2">Công ty TMCP Bách Hóa Xanh</option>
                    <option value="3">Công ty TMCP Pandora</option>
                    <option value="4">Công ty TMCP Phương Nam</option>
                </select>
            </div>
        </form>
        <form class="search-list">
            <div class="form-group">
                <select name="" id="">
                    <option value="">Ẩn hiện cột</option>
                </select>
            </div>
        </form>
    </div>
    <div class="input-search">
        <input type="text" placeholder="Tìm thiết bị theo tên, SKU, địa điểm, địa chỉ Mac">
        <i class="fa-solid fa-search input-search-icon"></i>
    </div>
</div>
<div class="action-page">
    <a href="">
        <i class="fa-solid fa-plus"></i>
        <p>Thêm thiết bị</p>
    </a>
    <div style="margin-top: 20px;" href="">
        <i class="fa-solid fa-power-off"></i>
        <p>Kích hoạt thiết bị</p>
    </div>
    <div style="margin-top: 20px;" href="">
        <i class="fa-solid fa-lock"></i>
        <p>Khóa thiết bị</p>
    </div>
    <div style="margin-top: 20px;" href="">
        <i class="fa-regular fa-trash-can" style="color: #FF4747"></i>
        <p>Xóa thiết bị</p>
    </div>
</div>
<div class="table" style="overflow-x: auto;">
    <table style="width: 110%">
        <thead>
            <tr>
                <th>
                    <input type="checkbox" class="table-checkbox">
                </th>
                <th>
                    STT
                </th>
                <th>
                    Tên thiết bị
                </th>
                <th>
                    Trạng thái
                </th>
                <th>
                    Hạng hợp đồng
                </th>
                <th>
                    Tên đăng nhập
                </th>
                <th>
                    Địa điểm
                </th>
                <th>
                    Memory
                </th>
                <th>
                    MAC address
                </th>
                <th>
                    SKU/ID
                </th>
                <th>
                    Hạn bảo hành
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="text-align: left">
                    <input type="checkbox" class="table-checkbox">
                </td>
                <td>
                    1
                </td>
                <td>
                    <a href="">
                        Thiết bị 1
                    </a>
                </td>
                <td>
                    <i class="fa-solid fa-circle icon-process text-success"></i> Đang kích hoạt| Đang hoạt động
                    <i class="fa-solid fa-circle icon-process text-danger"></i> Ngưng kích hoạt
                </td>
                <td>
                    Hạn hợp đồng 1
                </td>
                <td>
                    Tên đăng nhập 1
                </td>
                <td>
                    Âu cơ, phường 9, quận tân bình
                </td>
                <td>
                    Memory1
                </td>
                <td>
                    MAC Address1
                </td>
                <td>
                    SKU/ID
                </td>
                <td>
                    Hạn bảo hành 1
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
@endsection