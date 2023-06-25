<div class="navbar-hidden">
    <i class="fa-solid fa-chevron-right icon-right-navbar"></i>
</div>
<div class="navbar">
    <div class="navbar-logo">
        <a href="">
            <img src="{{ asset('images/logo.png') }}" alt="Logo">
        </a>
    </div>
    <ul class="navbar-menu">
        <a href="{{ route('restore.index') }}">
            <li class="item {{Request::is('restore') ? 'item-active':''}}">

                <i class="fa-solid fa-box-archive"></i>
                <span>Kho bản ghi</span>
            </li>
        </a>
        <a href="{{ route('playlist.index')}}">
            <li class="item {{Request::is('playlist') ? 'item-active':''}}">

                <i class="fa-solid fa-sliders"></i>
                <span>Playlist</span>
            </li>
        </a>
        <a href="">
            <li class="item ">

                <i class="fa-solid fa-calendar-days"></i>
                <span>Lập lịch phát</span>
            </li>
        </a>
        <li href="" class="item item-func ">
            <i class="fa-sharp fa-solid fa-file-image" style="z-index: 1; margin-bottom: -13px;"></i>
            <i class="fa-solid fa-ellipsis-vertical" style="width: 5px; margin-left: 150px"></i> Quản lý

            <ul class="sub-nav">
                <a href="">
                    <li class="item ">
                        Quản lý vài trò
                    </li>
                </a>
                <a href="">
                    <li class="item ">
                        Quản lý tài khoản
                    </li>
                </a>
                <a href="">
                    <li class="item ">
                        nhật kí người dùng
                    </li>
                </a>
            </ul>
        </li>

        <li href="" class="item item-func ">
            <i class="fa-sharp fa-solid fa-file-invoice-dollar" style="z-index: 1; margin-bottom: -13px;"></i>
            <i class="fa-solid fa-ellipsis-vertical" style="width: 5px; margin-left: 150px"></i> Doanh Thu


        </li>
        <li href="" class="item item-func ">
            <i class="fa-solid fa-gear" style="z-index: 1; margin-bottom: -13px;"></i>
            <i class="fa-solid fa-ellipsis-vertical" style="width: 5px; margin-left: 150px"></i> Cài đặt


        </li>
        <li href="" class="item item-func ">
            <i class="fa-regular fa-circle-question" style="z-index: 1; margin-bottom: -13px;"></i>
            <i class="fa-solid fa-ellipsis-vertical" style="width: 5px; margin-left: 150px"></i> Hỗ trợ


        </li>
    </ul>
</div>