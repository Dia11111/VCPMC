@extends('layouts.app')
@section('title', 'Reset Password')
@section('content')
<style>
  .return {
    text-align: center;
    margin-top: 20%;
}

.return a {
    color: #ffa500;
    /* Màu cam */
}
.title-text {
    text-align: center;
    font-size: 13px;
    /* Kích thước chữ */
    font-weight: normal;
    /* In đậm */
    color: #ffffff;
    /* Màu trắng */
}
.language {
    position: absolute;
    top: 24px;
    right: 40px;
    z-index: 1;
}


</style>
<div class="language">
  <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" style="background: none;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
      Language
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="min-width: 100%;">
      <li><a class="dropdown-item" href="locale/vn">Tiếng Việt</a></li>
      <li><a class="dropdown-item" href="locale/en">English</a></li>
    </ul>
  </div>
</div>
<div class="centered-form">
  <form>
    <div class="login-logo">
      <img src="{{ asset('images/logo.png') }}" alt="Logo" width="150">
    </div>
    <p class="login-text">@lang('public.Khôi phục mật khẩu')</p>
    <p class="title-text">@lang('public.Link khôi phục mật khẩu đã được gửi vào mail của bạn. Vui lòng kiểm tra mail.')</p>
    <p class="title-text">@lang('public.Click vào đường link được đính kèm trong mail để chuyển đến trang đặt lại mật khẩu.')</p>
    
    <div class="return">
      <a href="{{ route('login') }}">@lang('public.Quay lại đăng nhập')</a>
    </div>
  </form>
</div>
@endsection