
@extends('layouts.login_app')
@section('title', 'إعادة تعيين كلمة المرور')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center mb-5">
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-10">
            <div class="wrap d-md-flex">
                <div class="img" style="background-image: url(/login_style/images/bg-1.jpeg);">
          </div>
                <div class="login-wrap p-4 p-md-5">
              <div class="d-flex">
                  <div class="w-100">
                      <h3 class="mb-4">@yield('title')</h3>
                  </div>
                        
              </div>
                <form method="POST" class="signin-form"  action="{{ route('password.email') }}">

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
           
            <div class="form-group">
                <button type="submit" class="form-control btn btn-primary rounded submit px-3">  إرسال رابط إعادة تعيين كلمة المرور</button>
            </div>
         
          </form>
        </div>
      </div>
        </div>
    </div>
</div>

@endsection



