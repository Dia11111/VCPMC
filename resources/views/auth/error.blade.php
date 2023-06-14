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
      <a href="{{ route('auth.login') }}">Quay lại đăng nhập</a>
    </div>
  </form>
</div>
@endsection