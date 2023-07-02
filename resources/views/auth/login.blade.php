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


</style>

<div class="language">
  <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" style="background: none;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
      Language
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="min-width: 100%;">
      <li><a class="dropdown-item" href="locale/vn">Tiếng Việt</a></li>
      <li><a class="dropdown-item" href="locale/en">English</a></li>
    </ul>
  </div>
</div>

<div class="centered-form">
  <form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="login-logo">
      <img src="{{ asset('images/logo.png') }}" alt="Logo" width="150">
    </div>

    <p class="login-text">@lang('public.Đăng nhập')</p>

    <div class="mb-3">
      <label for="username" class="form-label">@lang('public.Tên đăng nhập')</label>
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
      <label class="form-check-label" for="remember">@lang('public.Ghi nhớ đăng nhập')</label>
    </div>

    <div class="center-button">
      <button type="submit" class="btn custom-button text-white">@lang('public.Đăng nhập')</button>
    </div>

    <div class="forgot-password">
      <a href="{{ route('forgotPassword') }}">@lang('public.Quên mật khẩu')?</a>
    </div>

  </form>

</div>

@endsection