@extends('layouts.app')

@section('content')<div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-6 col-lg-7 col-md-9 col-sm-11">
            <div class="pt-9 pt-sm-13 pb-10 px-5 px-xs-14">
              <div class="mb-10 text-center aos-init aos-animate" data-aos="fade-up" data-aos-duration="500" data-aos-once="true">
                <h2 class="mb-1 font-size-10 letter-spacing-n83">Reset password</h2>
                <p class="text-bali-gray font-size-7 mb-0">Enter your details to recieve reset your password</p>
              </div>

          
              <form action="{{ route('password.update') }}" method="post" data-aos="fade-up" data-aos-duration="800" data-aos-once="true" class="aos-init aos-animate">
              @csrf 
              <input type="hidden" name="token" value="{{ $token }}">

              <!-- Email -->
                <div class="form-group mb-6 position-relative">
                  <input VALUE="{{ $email ?? old('email') }}" type="email" name="email" class="form-control @error('email') is-invalid @enderror form-control-lg bg-white rounded-4 text-bali-gray pl-17 font-size-5" placeholder="Email address" id="email">
                  <label class="absolute-center-left font-size-7 mt-1 ml-9" for="email">
                    <i class="icon icon-email-84 mb-0 font-weight-bold"></i>
                  </label>
                  @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>

                         <!-- password -->
                         <div class="form-group mb-6 position-relative">
                  <input  type="password" name="password" class="form-control @error('password') is-invalid @enderror form-control-lg bg-white rounded-4 text-bali-gray pl-17 font-size-5" placeholder="Password" id="password">
                  <label class="absolute-center-left font-size-7 mt-1 ml-9" for="password">
                    <i class="icon icon-email-84 mb-0 font-weight-bold"></i>
                  </label>
                  @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>

                         <!-- confirm password -->
                         <div class="form-group mb-6 position-relative">
                  <input  type="password" name="password_confirmation" class="form-control form-control-lg bg-white rounded-4 text-bali-gray pl-17 font-size-5" placeholder="Confirm Password" id="password-confirm">
                  <label class="absolute-center-left font-size-7 mt-1 ml-9" for="email">
                    <i class="icon icon-email-84 mb-0 font-weight-bold"></i>
                  </label>
                
                </div>


                <!-- Bottom -->
                <div class="button">
                <button type="submit" class="btn btn-blue-3  w-100 rounded-4"> Reset Password</button>
                  <p class="text-center font-size-5 mt-8 text-bali-gray aos-init aos-animate" data-aos="fade-up" data-aos-duration="1100" data-aos-once="true">Remember password? <a href="{{ route('login') }}" class="text-blue-3 ">Sign in</a>
                  </p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
@endsection
