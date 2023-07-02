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