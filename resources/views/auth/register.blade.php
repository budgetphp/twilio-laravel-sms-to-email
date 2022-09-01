@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-xl-6 col-lg-7 col-md-8 col-xs-10">
      <div class="pt-9 pt-sm-13 pb-10 px-6 px-sm-1 px-md-7 px-lg-15 px-xl-16">
        <div class="mb-10 text-center aos-init aos-animate" data-aos="fade-up" data-aos-duration="500" data-aos-once="true">
          <h2 class="mb-1 font-size-10 letter-spacing-n83">Create account</h2>
          <p class="text-bali-gray font-size-7 mb-0">No credit card required</p>
        </div>
        <form action="{{ route('register') }}" method="post" data-aos="fade-up" data-aos-duration="800" data-aos-once="true" class="aos-init aos-animate">
          @csrf
          <!--  Name -->
          <div class="form-group mb-6 position-relative">
            <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror form-control-lg bg-white rounded-4 text-dark-cloud text-placeholder-bali-gray pl-18 font-size-5" placeholder="Your Name" id="name" required autocomplete="name" autofocus>
            <label class="absolute-center-left font-size-7 mt-1 ml-9" for="name">
              <i class="icon icon-business-agent-2 mb-0 font-weight-bold"></i>
            </label>

            @error('name')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <!-- Email -->
          <div class="form-group mb-6 position-relative">
            <input id="email" type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror form-control-lg bg-white rounded-4 text-dark-cloud text-placeholder-bali-gray pl-18 font-size-5" placeholder="Email Address" required autocomplete="email">


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
          <div class="form-group position-relative mb-4">
            <input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror form-control-lg bg-white rounded-4 text-dark-cloud text-placeholder-bali-gray pl-18 font-size-5" placeholder="Password" required autocomplete="new-password">
            <label class="absolute-center-left font-size-7 mt-1 ml-9" for="password">
              <i class="icon icon-lock mb-0 font-weight-bold"></i>
            </label>
            @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>

          <!-- Password confirm-->
          <div class="form-group position-relative mb-4">
            <input id="password-confirm" type="password" name="password_confirmation" class="form-control @error('password') is-invalid @enderror form-control-lg bg-white rounded-4 text-dark-cloud text-placeholder-bali-gray pl-18 font-size-5" placeholder="Confirm Password" required autocomplete="new-password">
            <label class="absolute-center-left font-size-7 mt-1 ml-9" for="password-confirm">
              <i class="icon icon-lock mb-0 font-weight-bold"></i>
            </label>
            @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>









          <div class="form-group mt-8 mb-7">
            <label for="terms-check" class="check-input-control d-flex align-items-center">
              <input class="d-none" type="checkbox" id="terms-check">
              <span class="checkbox mr-5"></span>
              <span class="mb-0 font-size-5 text-bali-gray">I agree to the Terms &amp; Conditions
              </span>
            </label>
          </div>
          <div class="button">
            <button type="submit" class="btn btn-blue-3  w-100 rounded-4">Sign up</button>
            <p class="text-center font-size-5 mt-8 text-bali-gray aos-init aos-animate" data-aos="fade-up" data-aos-duration="1100" data-aos-once="true">Already have an account? <a href="{{ route('login') }}" class="text-blue-3 ">Sign in</a>
            </p>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection