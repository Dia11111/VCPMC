@extends('layouts.app')
@section('title', 'Đăng nhập')
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
  <select name="language" id="language">
      <option value="vi">
          Tiếng Việt
      </option>
      <option value="en">
          English 
      </option>
      
  </select>
</div>

<div class="centered-form">
  <form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="login-logo">
      <img src="{{ asset('images/logo.png') }}" alt="Logo" width="150">
    </div>

    <p class="login-text">Đăng nhập</p>

    <div class="mb-3">
      <label for="username" class="form-label">Tên đăng nhập</label>
      <input type="text" class="form-control custom-input" name="username" id="username" aria-describedby="emailHelp" required>
    </div>

    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <div class="position-relative">
          <input type="password" class="form-control custom-input" name="password" id="password">
             <i class="password-toggle-icon fa-regular fa-eye" id="togglePassword" onclick="togglePasswordVisibility()"></i>
      </div>

      @if ($errors->any())
          <div class="error-message">
              @foreach ($errors->all() as $error)
                  <span class="error" style="color: #FF4747;">{{ $error }}</span>
              @endforeach
          </div>
      @endif

      <span class="error-message"></span>
    </div>
    
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" name="remember" id="remember">
      <label class="form-check-label" for="remember">Ghi nhớ đăng nhập</label>
    </div>

    <div class="center-button">
      <button type="submit" class="btn custom-button text-white">Đăng nhập</button>
    </div>

    <div class="forgot-password">
      <a href="{{ route('forgotPassword') }}">Quên mật khẩu?</a>
    </div>

  </form>

</div>

@endsection