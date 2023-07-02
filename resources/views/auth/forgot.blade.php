@extends('layouts.app')
@section('title', 'Forgot Password')
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
      <li><a class="dropdown-item" href="#">Tiếng Việt</a></li>
      <li><a class="dropdown-item" href="#">English</a></li>
    </ul>
  </div>
</div>
<div class="centered-form">
  <form>
    <div class="login-logo">
      <img src="{{ asset('images/logo.png') }}" alt="Logo" width="150">
    </div>
    <p class="login-text">Khôi phục mật khẩu</p>
    <p class="title-text">Vui lòng nhập địa chỉ email đã đăng ký để yêu cầu khôi phục mật khẩu</p>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email</label>
      <input type="email" class="form-control custom-input" id="exampleInputEmail1" aria-describedby="emailHelp" required>
    </div>
    <div class="center-button">
      <a type="submit" class="btn btn-primary custom-button">Xác nhận</a>
    </div>
    <div class="return">
      <a href="{{ route('login') }}">Quay lại đăng nhập</a>
    </div>
  </form>
</div>
@endsection