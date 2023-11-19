@extends('layouts.login_app')
@section('title', 'تسجيل دخول ')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center mb-5">
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-10">
            <div class="wrap d-md-flex">
                <div class="img" style="background-image: url(login_style/images/bg-1.jpeg);">
          </div>
                <div class="login-wrap p-4 p-md-5">
              <div class="d-flex">
                  <div class="w-100">
                      <h3 class="mb-4">@yield('title')</h3>
                  </div>
                        <div class="w-100">
                            <p class="social-media d-flex justify-content-end">
                                <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
                                <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
                            </p>
                        </div>
              </div>
              <form method="POST" class="signin-form" action="{{ route('login') }}">
                @csrf

                  <div class="form-group mb-3">
                      <label class="label" for="name">البريد الالكتروني</label>
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"   autocomplete="email" autofocus>
                      @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
            <div class="form-group mb-3">
                <label class="label" for="password">كلمة المرور</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror            </div>
            <div class="form-group">
                <button type="submit" class="form-control btn btn-primary rounded submit px-3"> تسجيل دخول</button>
            </div>
            <div class="form-group d-md-flex">
                <div class="w-50 text-right">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="checkbox-wrap checkbox-primary mr-3" for="remember">
                        تذكرنى
                    </label>
               
                            </div>
                            <div class="w-50 text-md-right">
                                @if (Route::has('password.request'))
                                    <a  href="{{ route('password.request') }}">
                                        نسيت كلمة المرور؟
                                    </a>
                                @endif
                            </div>
            </div>
          </form>
        </div>
      </div>
        </div>
    </div>
</div>

@endsection
