@extends('layouts.app')

@section('content')


<div class="container">
  <div class="row justify-content-center">
    <div class="col-xl-6 col-lg-7 col-md-8 col-xs-10">
      <div class="pt-9 pt-sm-13 pb-10 px-6 px-sm-1 px-md-7 px-lg-15 px-xl-16">
        <div class="mb-10 text-center" data-aos="fade-up" data-aos-duration="500" data-aos-once="true">
          <h2 class="mb-1 font-size-10 letter-spacing-n83">Welcome back</h2>
          <p class=" text-bali-gray font-size-7 mb-0">Enter your account details below</p>
        </div>
        <form action="{{ route('login') }}" data-aos="fade-up" data-aos-duration="800" data-aos-once="true" method="post">
          @csrf
          <!-- Email -->
          <div class="form-group mb-6 position-relative">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror form-control-lg bg-white rounded-4 text-dark-cloud text-placeholder-bali-gray pl-18 font-size-5" placeholder="Email Address" id="email" value="{{ old('email') }}">
            <label class="absolute-center-left font-size-7 mt-1 ml-9" for="email">
              <i class="icon icon-email-84 mb-0 font-weight-bold"></i>
            </label>
            @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <!-- Password -->
          <div class="form-group position-relative mb-5">
            <input type="password" name="password" class="form-control form-control-lg bg-white rounded-4 text-dark-cloud text-placeholder-bali-gray pl-18 font-size-5" placeholder="Password" id="password">
            <label class="absolute-center-left font-size-7 mt-1 ml-9" for="password">
              <i class="icon icon-lock mb-0 font-weight-bold"></i>
            </label>
            <a href="{{ route('password.request') }}" class="btn-link text-light-orange absolute-center-right mr-7">Forgot Password?</a>
            @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <!-- Checkbox -->
          <div class="form-group mb-6 d-flex align-content-center">



            <label for="terms-check" class="check-input-control d-flex align-items-center mb-0 form-check-label mb-0 mt-3 font-size-5 text-bali-gray">


              <input class="checkbox mr-5" type="checkbox" name="remember" id="remember terms-check" {{ old('remember') ? 'checked' : '' }}>



            </label>
            <p class="mb-0 mt-3 font-size-5 text-bali-gray">Keep me signed in</p>
          </div>
          <div class="button">
            <button class="btn btn-blue-3  w-100 rounded-4">Sign in</button>
            <p class="text-center font-size-5 mt-8 text-bali-gray" data-aos="fade-up" data-aos-duration="1100" data-aos-once="true">Don’t have an account? <a href="{{ route('register') }}" class="text-blue-3">Create for free</a>
            </p>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>





@endsection