@extends('front.master')


@section('title', __('messages.Register'))

@section('title_breadcrumb', __('messages.Register'))

@section('content')

<!-- Start Register -->
<section class="register" style="background-color:#191e3a;>
    <div class="container">
      <div class="register-text py-5">
        <p>ابدأ الآن</p>
        <div class="d-flex align-items-center  gap-2">
          <h5 class="register-title">إنشاء حساب جديد </h5>
          <img src="assets/images/chat/support.svg" alt="support">
        </div>
      </div>
      <div class="form-container">
        <form method="POST" action="{{ route('register') }}">
            @csrf
          <div class="form-floating mb-3">
            <input type="text" name="firstname" value="{{ old('firstname') }}" class="form-control @error('firstname') is-invalid @enderror" id="floatingName" placeholder="الإسم">
            <label for="floatingName">@lang('messages.firstname')</label>
            <div class="icon">
              <i class="fa-solid fa-address-card"></i>
            </div>
            @error('firstname')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          <div class="form-floating mb-3">
            <input type="text" name="lastname" value="{{ old('lastname') }}" class="form-control @error('lastname') is-invalid @enderror" id="floatingName" placeholder="الإسم">
            <label for="floatingName">@lang('messages.lastname')</label>
            <div class="icon">
              <i class="fa-solid fa-address-card"></i>
            </div>
            @error('lastname')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          <div class="form-floating mb-3">
            <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" id="floatingPassword" placeholder="البريد الإلكتروني">
            <label for="floatingPassword">@lang('messages.email')</label>
            <div class="icon">
              <i class="fa-regular fa-envelope"></i>
            </div>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          <div class="form-floating mb-3">
            <input type="password" name="password" value="{{ old('password') }}" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">كلمة السر</label>
            <div class="icon">
              <i class="fa-solid fa-eye"></i>
            </div>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          <div class="form-floating">
            <input type="password" value="{{ old('firstname') }}" name="password_confirmation" class="form-control" id="password-confirm" placeholder=" تأكيد كلمة السر ">
            <label for="password-confirm"> تأكيد كلمة السر </label>
            <div class="icon">
              <i class="fa-solid fa-eye"></i>
            </div>
          </div>

          <button type="submit" class="w-100 submit-btn mt-3">إنشاء حساب</button>
        </form>
      </div>
      <div class="create-account">
        <h5>أمتلك حساب !</h5>
        <a href="{{ route('login') }}" class="create-btn">تسجيل الدخول</a>
      </div>
    </div>
  </section>
  <!-- End Register -->
@endsection
