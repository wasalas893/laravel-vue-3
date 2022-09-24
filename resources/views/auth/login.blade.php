
@extends('layouts.guest') 
@section('content')

<style>
    ul.mt-3.list-disc.list-inside.text-sm.text-red-600 {
    color: red !important;
    margin-left:-25px
    }
    .font-medium.text-red-600 {
    display: none;
    }
</style>



<div class="register-box">


  @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
  @endif

 

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Login</p>
      <x-jet-validation-errors class="md-10" />

      <form method="POST" action="{{ route('login') }}">
            @csrf
       
        <div class="input-group mb-3">
            <label for="email" value="{{ __('Email') }}"></label>
          <input id="email" type="email" class="form-control" placeholder="Email" name="email" :value="old('email')">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <label for="password" value="{{ __('Password') }}"></label>
          <input type="password" id="password" class="form-control" placeholder="Password" name="password" autocomplete="new-password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
       

        <div class="row">
        <div class="col-6">
           <label for="remember_me"></label>
           <input type="checkbox" id="remember_me" name="remember">
           <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
          </div>
         
          <div class="col-6">
            <button type="submit" class="btn btn-primary btn-block"> {{ __('Log in') }}</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      
      @if (Route::has('password.request'))
      <a href="{{ route('password.request') }}" class="text-center">{{ __('Forgot your password?') }}</a>
      @endif
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>




@endsection

       





   


