@extends('layouts.layout')

@section('title', 'Chấp thuận bản ghi')

@section('script')
<script>
    $(document).ready(function() {
        $('.table-action').eq(0).click(function() {
            $('.modal-view').css('display', 'flex');
        });
        $('.close').click(function() {
            $('.modal-view').css('display', 'none');
        });
        // click without .modal-content to close modal
        $('.modal-view').click(function(e) {
            if (!$(e.target).is('.modal-content') && !$(e.target).is('video')) {
                $('.modal-view').css('display', 'none');
            }
        });
        $('.open-modal-active').click(function() {
            $('.modal-view-action').css('display', 'flex');
        });
        $('.close-modal-active').click(function() {
            $('.modal-view-action').css('display', 'none');
        });
    });
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
<div class="content-profile-1">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Library</li>
        </ol>
    </nav>
    <h1 style="color: #fff;">
        Phê duyệt bản ghi
    </h1>

    <div class="input-search">
        <input type="text" placeholder="Tìm kiếm">
        <i class="fa-solid fa-search input-search-icon"></i>
    </div>
    <div class="header-search">
        <form class="search-list">
            <div class="form-group">
                <label for="">Thể loại</label>

                <select name="" id="">
                    <option value="">Tất cả</option>
                    <option value="">Pop</option>
                    <option value="">EDM</option>
                    <option value="">Ballad</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Định dạng</label>

                <select name="" id="">
                    <option value="">Tất cả</option>
                    <option value="">Pop</option>
                    <option value="">EDM</option>
                    <option value="">Ballad</option>
                </select>
            </div>
            <!-- <div class="form-group">
                <label for="">Thời gian sử dụng</label>

                <select name="" id="">
                    <option value="">Tất cả</option>
                    <option value="">Pop</option>
                    <option value="">EDM</option>
                    <option value="">Ballad</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Trạng thái</label>

                <select name="" id="">
                    <option value="">Tất cả</option>
                    <option value="">Pop</option>
                    <option value="">Duyệt bởi người dùng</option>
                    <option value="">Ballad</option>
                </select>
            </div> -->
            <div class="action-page">
                <a href="">
                    <i class="fa-solid fa-check" style="color: #0FBF00"></i>
                    <p>
                        Phê duyệt
                    </p>
                </a>
                <div style="margin-top: 20px" class="open-modal-active">
                    <i class="fa-solid fa-xmark" style="color: #FF4747"></i>
                    <p>
                        Từ chối
                    </p>
                </div>
            </div>
        </form>
        <div class="choose-option">
            <i class="fa-solid fa-list-ul"></i>
            <a href="">
                <i class="fa-solid fa-table-cells-large"></i>
            </a>
        </div>
    </div>
    <div class="table">
        <table>
            <thead>
                <tr>
                    <th>
                        <input type="checkbox" class="table-checkbox">
                    </th>
                    <th>STT</th>
                    <th>Tên bản ghi</th>
                    <th>Thời lượng</th>
                    <th>Ca sĩ</th>
                    <th>Tác giả</th>
                    <th>Mã ISRC</th>
                    <th>Số hợp đồng</th>
                    <th>Ngày tải</th>
                    <th colspan="1"></th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < 12; $i++)
                <tr>
                    <td style="text-align: left">
                        <input type="checkbox" class="table-checkbox">
                    </td>
                    <td>{{ $i + 1 }}</td>
                    <td>Bản ghi {{ $i + 1 }}</td>
                    <td>00:00:00</td>
                    <td>Ca sĩ {{ $i + 1 }}</td>
                    <td>Tác giả {{ $i + 1 }}</td>
                    <td>123456789</td>
                    <td>Định dạng {{ $i + 1 }}</td>
                    <td>01/01/2023</td>
                    <td class="table-action">Nghe</td>
                </tr>
                @endfor
        </table>
        <div class="footer-table">
            <div class="footer-left">
                Hiển thị <span>12</span> hàng trong mỗi trang
            </div>
            <div class="footer-right">
                <ul>
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="modal-view">
        <div class="modal-content">
            <video width="320" height="240" controls>
                <source src="upload/video.mp4" type="video/mp4">
        </div>
        <div class="close">
            <i class="fa-solid fa-times"></i>
        </div>
    </div>
</div>
<div class="modal-view-action">
    <form class="modal-content">
        <h2>
            Hủy hợp đồng khai thác
        </h2>
        <textarea name="" placeholder="Cho chúng tôi biết lý do hủy hợp đồng khai thác này..."></textarea>
        <div class="button-group">
            <button class="btn">
                Hủy hợp đồng
            </button>
            <button type="button" id="btn-outline" class="btn btn-outline close-modal-active" style=" border: 1px solid #FF7506;
            color: #FF7506;
            background-color: transparent;">
                Quay lại
            </button>
        </div>
    </form>
</div>

@endsection