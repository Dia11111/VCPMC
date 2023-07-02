@extends('layouts.app')
@section('title', 'Error Password')
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

.request-link-container {
  display: flex;
  justify-content: center;
  margin-bottom: 20px;
}

.request-link {
  text-align: center;
  color: #FF7506;
  border: 2px solid #FF7506;
  text-decoration: none;
  border-radius: 8px;
  padding: 5px 10px;
}
.request-link:hover {
    background-color: #FF7506;
    color: white;
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
    <p class="error-text">Không thể kết nối!!</p>
    <p class="title-text">
      Dường như đã có chút trục trặc hoặc link này đã hết hạn.
      <br> 
      Vui lòng thử lại hoặc yêu cầu gửi lại link để đặt lại mật khẩu của bạn.
    </p>
    <div class="request-link-container">
      <a class="request-link" href="">Yêu cầu gửi lại link</a>
    </div>
    
    <div class="return">
      <a href="{{ route('login') }}">Quay lại đăng nhập</a>
    </div>
  </form>
</div>
@endsection