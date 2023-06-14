@extends('layouts.app')
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
</style>
<div class="dropdown-container">
  <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"style="
  padding: 8px 0px;">
      Tiếng việt
      <img src="{{ asset('images/language.png') }}" style="width: 12%;">
  </button>
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
      <a href="{{ route('auth.login') }}">Quay lại đăng nhập</a>
    </div>
  </form>
</div>
@endsection