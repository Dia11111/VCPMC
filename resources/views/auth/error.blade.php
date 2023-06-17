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