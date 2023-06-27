<div class="navbar-hidden">

    <i class="fa-solid fa-chevron-right icon-right-navbar"></i>
</div>

<div class="navbar">
    <div class="navbar-logo">
        <a href="{{ route('restore.index') }}">
            <img src="{{ asset('images/logo.png') }}" alt="logo" class="navbar-logo-img">
        </a>
    </div>
    <div class="navbar-menu">
        <ul class="navbar-menu-list">
            <a href="{{ route('restore.index') }}" class="navbar-menu-item-link">
                <li class="navbar-menu-item {{Request::is('restore') ? 'active':''}}">
                    <i class="fa-solid fa-box-archive"></i> Kho bản ghi
                </li>
            </a>
            <a href="{{ route('playlist.index') }}" class="navbar-menu-item-link">
                <li class="navbar-menu-item {{Request::is('playlist') ? 'active':''}}">
                    <i class="fa-solid fa-list-check"></i> PlayList
                </li>
            </a>
            <a href="" class="navbar-menu-item-link">
                <li class="navbar-menu-item ">
                    <i class="fa-regular fa-calendar-days"></i> Lập lịch phát
                </li>
            </a>
            <div class="navbar-menu-item-link">
                <li class="navbar-menu-item ">
                    <i class="fa-regular fa-file-lines"></i> Quản lý
                    <i class="fa-solid fa-ellipsis-vertical dot-list-item"></i>
                    <ul class="sub-nav">
                        <a href="" class="navbar-menu-item-link ">
                            <li class="sub-nav-menu-item">
                                Lập lịch phát
                            </li>
                        </a>
                        <a href="" class="navbar-menu-item-link ">
                            <li class="sub-nav-menu-item">
                                Lập lịch phát
                            </li>
                        </a>
                        <a href="" class="navbar-menu-item-link ">
                            <li class="sub-nav-menu-item">
                                Lập lịch phát
                            </li>
                        </a>
                    </ul>
                </li>
            </div>
            <div class="navbar-menu-item-link">
                <li class="navbar-menu-item ">
                    <i class="fa-solid fa-file-invoice-dollar"></i> Doanh thu
                    <i class="fa-solid fa-ellipsis-vertical dot-list-item"></i>
                    <ul class="sub-nav">
                        <a href="" class="navbar-menu-item-link ">
                            <li class="sub-nav-menu-item">
                                Lập lịch phát
                            </li>
                        </a>
                        <a href="" class="navbar-menu-item-link ">
                            <li class="sub-nav-menu-item">
                                Lập lịch phát
                            </li>
                        </a>
                        <a href="" class="navbar-menu-item-link ">
                            <li class="sub-nav-menu-item">
                                Lập lịch phát
                            </li>
                        </a>
                    </ul>
                </li>
            </div>
            <div class="navbar-menu-item-link">
                <li class="navbar-menu-item ">
                    <i class="fa-solid fa-gear"></i> Cài đặt
                    <i class="fa-solid fa-ellipsis-vertical dot-list-item"></i>
                    <ul class="sub-nav">
                        <a href="" class="navbar-menu-item-link ">
                            <li class="sub-nav-menu-item">
                                Lập lịch phát
                            </li>
                        </a>
                        <a href="" class="navbar-menu-item-link ">
                            <li class="sub-nav-menu-item">
                                Lập lịch phát
                            </li>
                        </a>
                        <a href="" class="navbar-menu-item-link ">
                            <li class="sub-nav-menu-item">
                                Lập lịch phát
                            </li>
                        </a>
                    </ul>
                </li>
            </div>
            <div class="navbar-menu-item-link">
                <li class="navbar-menu-item ">
                    <i class="fa-regular fa-circle-question"></i> Hỗ trợ
                    <i class="fa-solid fa-ellipsis-vertical dot-list-item"></i>
                    <ul class="sub-nav">
                        <a href="" class="navbar-menu-item-link ">
                            <li class="sub-nav-menu-item">
                                Lập lịch phát
                            </li>
                        </a>
                        <a href="" class="navbar-menu-item-link ">
                            <li class="sub-nav-menu-item">
                                Lập lịch phát
                            </li>
                        </a>
                        <a href="" class="navbar-menu-item-link ">
                            <li class="sub-nav-menu-item">
                                Lập lịch phát
                            </li>
                        </a>
                    </ul>
                </li>
            </div>
        </ul>
    </div>
</div>