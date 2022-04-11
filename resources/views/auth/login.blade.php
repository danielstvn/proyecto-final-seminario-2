@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ url('/assets/estilos/css/estilos.login.css')}}">


  <div class="wrapper">
    <form method="POST" action="{{ route('login') }}" class="login">
      @csrf

      <div class="title">{{ __('Login') }}    <i class="fa fa-user"></i></div>
  
      <div >
          <label for="email" class="col-md-8 col-form-label">{{ __('Email Address') }}</label>
          
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
  
          @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
  
      <div>
          <label for="password" class="col-md-8 col-form-label">{{ __('Password') }}</label>
  
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
  
              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
      </div>
  
      <div class="form-row ">
  
        <div class="form-group col-md-3">
          <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        </div>
  
        <div class="form-group col-md-8 check">
          <label  for="remember"  >
            {{ __('Remember Me') }}
        </label>
        </div>
        
  
        
      </div>
      <div>
        <a href="{{ url('/register')}}">Aun no tines cuenta?, Registrate aqui.</a>
      </div>
  
      <div >
        @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{__('Olvido su contraseña?') }}
            </a>
        @endif
      </div>
  
      <div >
        <button type="submit" class="btn">
          <i class="spinner"></i>
          <span class="state">Log in</span>
        </button>
  
          
      </div>
      
     
  </form>
  </div>


<script src="{{ url('/assets/estilos/js/script.login.js')}}" ></script>


@stop