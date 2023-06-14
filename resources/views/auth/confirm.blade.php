@extends('layouts.app')
@section('content')
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
    <p class="login-text">Đặt lại mật khẩu</p>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Mật khẩu mới</label>
    <div class="position-relative">
        <input type="password" class="form-control custom-input" id="exampleInputPassword1">
           <i class="password-toggle-icon fa-regular fa-eye" id="togglePassword" onclick="togglePasswordVisibility()"></i>
    </div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Nhập lại mật khẩu mới</label>
      <div class="position-relative">
          <input type="password" class="form-control custom-input" id="exampleInputPassword1">
             <i class="password-toggle-icon fa-regular fa-eye" id="togglePassword" onclick="togglePasswordVisibility()"></i>
      </div>
    </div>

    <div class="center-button">
      <a type="submit" class="btn btn-primary custom-button">Lưu mật khẩu</a>
    </div>
    
  </form>
</div>
@endsection