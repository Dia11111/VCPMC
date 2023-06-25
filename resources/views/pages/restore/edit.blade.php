@extends('layouts.layout')

@section('title', 'Kho bản ghi')

@section('script')
    <script>
        // click btn-submit => submit form
        $('.btn-submit').click(function() {
            $('.form-edit').submit();
        })
        active_navbar_mini();
    </script>
@endsection

@section('content')
<div class="content-profile-1" style="margin: 0px -50px;">
    <!-- <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Library</li>
        </ol>
    </nav> -->
    <h1 style="color: #fff;">
        Bản ghi - Mất em
    </h1>
    <div class="group">
        <div class="action-page">
            <a href="">
                <i class="fa-solid fa-xmark" style="color: #FF4747"></i>
                <p>
                    Xóa bản ghi
                </p>
            </a>
        </div>
        <div class="info">
            <div class="info-ban-ghi">
                <h3 class="title-info">
                    Thông tin bản ghi
                </h3>
                <div class="image-ban-ghi">
                    <div class="image">
                        <img src="images/Logo.png" alt="">
                    </div>
                    <div class="name-file">
                        <i class="fa-solid fa-music"></i> Matem.mp3
                    </div>
                </div>
                <div class="group group-table">
                    <div class="group-a">
                        Ngày thêm:
                    </div>
                    <div class="group-b">
                        07/04/2021 - 17:45:30
                    </div>
                </div>
                <div class="group group-table">
                    <div class="group-a">
                        Người tải lên:
                    </div>
                    <div class="group-b">
                        Super Admin
                    </div>
                </div>
                <div class="group group-table">
                    <div class="group-a">
                        Người duyệt:
                    </div>
                    <div class="group-b">
                        Hệ thống(Tự động phê duyệt)
                    </div>
                </div>
                <div class="group group-table">
                    <div class="group-a">
                        Ngày phê duyệt:
                    </div>
                    <div class="group-b">
                        07/04/2021 - 17:45:50
                    </div>
                </div>
            </div>
            <div class="info-uy-quyen">
                <h3 class="title-info">
                    Thông tin ủy quyền
                </h3>
                <div class="group group-table">
                    <div class="group-a">
                        Số hợp đồng:
                    </div>
                    <div class="group-b">
                        BH123
                    </div>
                </div>
                <div class="group group-table">
                    <div class="group-a">
                        Ngày nhận ủy quyền:
                    </div>
                    <div class="group-b">
                        07/04/2021 - 17:45:30
                    </div>
                </div>
                <div class="group group-table">
                    <div class="group-a">
                        Ngày hết hạn:
                    </div>
                    <div class="group-b">
                        07/04/2021 - 17:45:30
                    </div>
                </div>
                <div class="group group-table">
                    <div class="group-a">
                        Trạng thái:
                    </div>
                    <div class="group-b">
                        07/04/2021 - 17:45:30
                    </div>
                </div>
            </div>
        </div>
        <div class="edit-info">
            <h3 class="title-info">
                Thông tin ủy quyền
            </h3>
            <form class="form-edit" action="">
                <div class="form-group">
                    <label for="">
                        Tên bản ghi:
                    </label>
                    <input class="input" type="text" name="" required>
                </div>

                <div class="form-group">
                    <label for="">
                        Mã ISRC:
                    </label>
                    <input class="input" type="text" name="" required>
                </div>

                <div class="form-group">
                    <label for="">
                        Ca sĩ:
                    </label>
                    <input class="input" type="text" name="" required>
                </div>

                <div class="form-group">
                    <label for="">
                        Tác giả:
                    </label>
                    <input class="input" type="text" name="" required>
                </div>

                <div class="form-group">
                    <label for="">
                        Nhà sản xuất:
                    </label>
                    <input class="input" type="text" name="" required>
                </div>

                <div class="form-group">
                    <label for="">
                        Thể loại:
                    </label>
                    <select class="input" name="" id="">
                        <option value="">
                            Ballad
                        </option>
                        <option value="">
                            Ballad
                        </option>
                    </select>
                </div>
            </form>
        </div>
    </div>
    <div class="group group-table" style="justify-content: center; margin-top: 40px">
        <a href="{{ route('restore.index') }}">
            <button type="button" class="btn btn-outline">
                Hủy
            </button>
        </a>
        <button class="btn btn-submit">
            Lưu
        </button>
    </div>
</div>

@endsection