@extends('layouts.app')
@section('loginTitle', 'Login')
@section('content')
<div class="row login_allegra">

    <div class="col-xl-10 col-lg-12 col-md-9 m-auto">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-login-image"
                    style="background-image:url({{ asset("storage/login_allegra.jpg") }});">
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5 my-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Bienvenido/a a Alegra</h1>
                            </div>
                            <form class="user" method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} form-control-user" name="email"
                                        value="{{ old('email') }}" required autofocus aria-describedby="emailHelp" placeholder="Introduce tu email...">                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span> @endif
                                </div>

                                <div class="form-group">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} form-control-user"
                                        name="password" placeholder="Contraseña" required>                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span> @endif
                                </div>

                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old( 'remember') ?
                                            'checked' : '' }}>

                                        <label class="custom-control-label" for="remember">
                                            {{ __('Recuerdame en este ordenador') }}
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        {{ __('Iniciar sesión') }}
                                    </button>

                                    {{-- Comment next for using socialite 
                                    <hr>
                                    <div class="text-center">
                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a><br>
                                    @endif
                                    <a class="btn btn-link"
                                        href="{{url('register')}}">Create an Account!</a>
                                    </div>
                                    --}}
                                   

                                </div>

                                <!-- Uncomment next for adding loggin with socialite -->
                                {{-- 
                                <hr>
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Login with Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                </a>
                                <hr> --}}

                                <!-- end socialite -->

                            </form>

                            {{-- Uncomment for using Socialite **** --}}

                            {{-- <div class="text-center">
                                @if (Route::has('password.request'))
                                <a class="small" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a> @endif
                            </div>

                            <div class="text-center">
                                <a class="small" href="{{url('register')}}">Create an Account!</a>
                            </div> --}}

                            {{-- Uncomment for using Socialite **** --}}
                            

                        </div>
                    </div>
                </div>
            </div>
        </div>

            <div class="container my-auto">
                <div class="copyright text-center my-auto text-white h6">
                    <small><span>Realizado con <i class="fas fa-heart"></i> para Acufade por La Isla Creativa &copy; | <i class="fas fa-grin-hearts"></i> Alegra app 2019 </span></small>
                </div>
            </div>

    </div>
</div>
@endsection
