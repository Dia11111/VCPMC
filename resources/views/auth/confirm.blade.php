@extends('layouts.app')
@section('title', 'Confirm Password')
@section('content')
<style>
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
    <p class="login-text">Đặt lại mật khẩu</p>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Mật khẩu mới</label>
    <div class="position-relative">
        <input type="password" class="form-control custom-input" name="password" id="password">
           <i class="password-toggle-icon fa-regular fa-eye" id="togglePassword" onclick="togglePasswordVisibility()"></i>
    </div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Nhập lại mật khẩu mới</label>
      <div class="position-relative">
          <input type="password" class="form-control custom-input" name="password" id="password">
             <i class="password-toggle-icon fa-regular fa-eye" id="togglePassword" onclick="togglePasswordVisibility()"></i>
      </div>
    </div>

    <div class="center-button">
      <a type="submit" class="btn btn-primary custom-button">Lưu mật khẩu</a>
    </div>
    
  </form>
</div>
@endsection