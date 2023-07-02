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
                    <i class="fa-solid fa-box-archive"></i>@lang('public.Kho bản ghi') 
                </li>
            </a>
            <a href="{{ route('playlist.index') }}" class="navbar-menu-item-link">
                <li class="navbar-menu-item {{Request::is('playlist') ? 'active':''}}">
                    <i class="fa-solid fa-list-check"></i> @lang('public.Playlist')
                </li>
            </a>
            <a href="{{ route('shedule.index') }}" class="navbar-menu-item-link">
                <li class="navbar-menu-item {{Request::is('shedule') ? 'active':''}}">
                    <i class="fa-regular fa-calendar-days"></i> @lang('public.Lập lịch phát')
                </li>
            </a>
            <div class="navbar-menu-item-link">
                <li class="navbar-menu-item {{Request::is('contract') ? 'active':''}}">
                    <i class="fa-regular fa-file-lines"></i>@lang('public.Quản lý') 
                    <i class="fa-solid fa-ellipsis-vertical dot-list-item"></i>
                    <ul class="sub-nav">
                        <a href="{{ route('contract.index') }}" class="navbar-menu-item-link ">
                            <li class="sub-nav-menu-item">
                                @lang('public.Quản lý hợp đồng')
                            </li>
                        </a>
                        <a href="{{ route('device.index') }}" class="navbar-menu-item-link ">
                            <li class="sub-nav-menu-item">
                                @lang('public.Quản lý thiết bị')
                            </li>
                        </a>
                        <a href="" class="navbar-menu-item-link ">
                            <li class="sub-nav-menu-item">
                                @lang('public.Đơn vị ủy quyền')
                            </li>
                        </a>
                        <a href="" class="navbar-menu-item-link ">
                            <li class="sub-nav-menu-item">
                                @lang('public.Đơn vị sử dụng')
                            </li>
                        </a>
                    </ul>
                </li>
            </div>
            <div class="navbar-menu-item-link">
                <li class="navbar-menu-item ">
                    <i class="fa-solid fa-file-invoice-dollar"></i>@lang('public.Doanh thu') 
                    <i class="fa-solid fa-ellipsis-vertical dot-list-item"></i>
                    <ul class="sub-nav">
                        <a href="" class="navbar-menu-item-link ">
                            <li class="sub-nav-menu-item">
                                @lang('public.Báo cáo doanh thu')
                            </li>
                        </a>
                        <a href="" class="navbar-menu-item-link ">
                            <li class="sub-nav-menu-item">
                                @lang('public.Lịch sử đối soát')
                            </li>
                        </a>
                        <a href="" class="navbar-menu-item-link ">
                            <li class="sub-nav-menu-item">
                                @lang('public.Phân phối doanh thu')
                            </li>
                        </a>
                    </ul>
                </li>
            </div>
            <div class="navbar-menu-item-link">
                <li class="navbar-menu-item ">
                    <i class="fa-solid fa-gear"></i> @lang('public.Cài đặt')
                    <i class="fa-solid fa-ellipsis-vertical dot-list-item"></i>
                    <ul class="sub-nav">
                        <a href="" class="navbar-menu-item-link ">
                            <li class="sub-nav-menu-item">
                                @lang('public.Phân quyền người dùng') 
                            </li>
                        </a>
                        <a href="" class="navbar-menu-item-link ">
                            <li class="sub-nav-menu-item">
                                @lang('public.Cấu hình')
                            </li>
                        </a>
                        <a href="" class="navbar-menu-item-link ">
                            <li class="sub-nav-menu-item">
                                @lang('public.Quản lý hợp đồng')
                            </li>
                        </a>
                        <a href="" class="navbar-menu-item-link ">
                            <li class="sub-nav-menu-item">
                                @lang('public.Thông tin sản phẩm')
                            </li>
                        </a>
                        <a href="" class="navbar-menu-item-link ">
                            <li class="sub-nav-menu-item">
                                @lang('public.Chu kỳ đối soát')
                            </li>
                        </a>
                    </ul>
                </li>
            </div>
            <div class="navbar-menu-item-link">
                <li class="navbar-menu-item {{Request::is('feedback') ? 'active':''}}">
                    <i class="fa-regular fa-circle-question"></i>@lang('public.Hỗ trợ') 
                    <i class="fa-solid fa-ellipsis-vertical dot-list-item"></i>
                    <ul class="sub-nav">
                        <a href="{{ route('user-manual') }}" class="navbar-menu-item-link ">
                            <li class="sub-nav-menu-item">
                                @lang('public.Hướng dẫn sử dụng')
                            </li>
                        </a>
                        <a href="{{ route('download') }}" class="navbar-menu-item-link ">
                            <li class="sub-nav-menu-item">
                                @lang('public.Tải app')
                            </li>
                        </a>
                        <a href="{{ route('feedback') }}" class="navbar-menu-item-link ">
                            <li class="sub-nav-menu-item">
                                @lang('public.Feedback')
                            </li>
                        </a>
                    </ul>
                </li>
            </div>
        </ul>
    </div>
</div>