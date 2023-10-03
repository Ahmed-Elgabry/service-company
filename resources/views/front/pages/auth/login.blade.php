@extends('front.master')


@section('title', __('messages.Login'))

@section('title_breadcrumb', __('messages.Login'))

@section('content')


<!-- Start Login -->
<section class="login" style="background-color:#191e3a; ">
    <div class="container">
      <div class=" login-text py-5">
        <p>مرحباً بك مرة أخرى</p>
        <div class="d-flex align-items-center  gap-2">
          <h5 class="login-title">تسجيل الدخول </h5>
          <img src="assets/images/chat/support.svg" alt="support">
        </div>
      </div>
      <div class="form-container">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            {{-- @if (session("error"))
                  <span class="badge badge-danger">
                      {{session("error")}}
                  </span>
            @endif --}}
          <div class="form-floating mb-3">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" value="{{ old('email') }}" required autocomplete="email" autofocus
            >
            <label for="floatingPassword">@lang('messages.email')</label>
            <div class="icon">
              <i class="fa-regular fa-envelope"></i>
            </div>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @else
              @if (session("error"))
              <span class="badge badge-danger" style="background-color:#dc3545;">
                <strong>{{session("error")}}</strong>
              </span>
              @endif
            @enderror
          </div>
          <div class="form-floating">
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" required autocomplete="current-password">
            <label for="floatingInput">@lang('messages.password')</label>
            <div class="icon">
              <i class="fa-solid fa-eye"></i>
            </div>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          <button type="submit" class="w-100 submit-btn mt-3">إرسال</button>
        </form>
      </div>
      <div class="create-account">
        <h5>ليس لدي حساب !</h5>
        <a href="{{ route('register') }}" class="create-btn">إنشاء حساب</a>
      </div>
    </div>
  </section>
  <!-- End Login -->
@endsection
