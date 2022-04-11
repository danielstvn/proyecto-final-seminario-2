@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ url('/assets/estilos/css/estilos.register.css')}}">
<body >
    <div class="wrapper">
        
        <form method="POST" action="{{ route('register') }} " class="register">
            @csrf
            <div class="title">{{ __('Registro de Usuario') }}</div>

            <div class="row mb-3">
                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nombre de Usuario') }}</label>

                <div class="col-md-7">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"  required autocomplete="off">

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo') }}</label>

                <div class="col-md-7">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"  required autocomplete="off">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>

                <div class="col-md-7">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="off">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirmar Contraseña') }}</label>

                <div class="col-md-7">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="off">
                </div>
            </div>

            <div class="row mb-3">
                <div>
                    <button type="submit" class="btn btn-primary">
                        {{ __('Registrarse') }}
                    </button>
                </div>
            </div>
        </form>
        
    </div>
</body>

<script src="{{ url('/assets/estilos/js/script.login.js')}}" ></script>

@endsection