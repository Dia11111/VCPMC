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

.language select {
    background: transparent;
    border: 1px solid #C8C8DB;
    border-radius: 4px;
    color: white;
    letter-spacing: 0.015em;
    font-weight: 400;
    font-size: 14px;
    line-height: 20px;
    padding: 8px 4px;
}

.language select:focus {
    outline: none;
}

.language select option {
    background: #1E1E2E;
    border: 1px solid #C8C8DB;
    border-radius: 4px;
    letter-spacing: 0.015em;
    font-weight: 400;
    font-size: 14px;
    line-height: 20px;
    padding: 8px 4px;
}

.language select option:hover {
    background: #C8C8DB;
    color: #1E1E2E;
}
</style>
<div class="language">
  <select name="" id="">
      <option value="">
          Tiếng Việt 
          
      </option>
      <option value="">
          English 
          
      </option>
      
  </select>
</div>
<div class="centered-form">
  <form>
    <div class="login-logo">
      <img src="{{ asset('images/logo.png') }}" alt="Logo" width="150">
    </div>
    <p class="login-text">Khôi phục mật khẩu</p>
    <p class="title-text">Link khôi phục mật khẩu đã được gửi vào mail của bạn. Vui lòng kiểm tra mail.</p>
    <p class="title-text">Click vào đường link được đính kèm trong mail để chuyển đến trang đặt lại mật khẩu.</p>
    
    <div class="return">
      <a href="{{ route('login') }}">Quay lại đăng nhập</a>
    </div>
  </form>
</div>
@endsection