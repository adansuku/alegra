@extends('layouts.app')
@section('loginTitle', 'Register')
@section('content')
<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
            <div class="col-lg-7">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                    </div>

                    <form class="user" method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input id="name" type="text" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }} form-control-user" name="nombre" value="{{ old('nombre') }}" placeholder="First Name" required autofocus>
                                @if ($errors->has('nombre'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('nombre') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="col-sm-6">
                                <input id="lastname" type="text" class="form-control{{ $errors->has('apellido') ? ' is-invalid' : '' }} form-control-user" name="apellido" value="{{ old('apellido') }}" placeholder="Last Name">
                                @if ($errors->has('apellido'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('apellido') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <input id="email" type="email" 
                            class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} form-control-user" 
                            name="email" value="{{ old('email') }}" placeholder="Email Address" required>
                            @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} form-control-user" name="password" placeholder="Password" required>
                                @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="col-sm-6">
                                <input id="password-confirm" type="password" class="form-control form-control-user" name="password_confirmation" placeholder="Repeat Password" required>
                            </div>
                        </div>

                        {{-- Comment next block for using socialite --}}

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                {{ __('Register') }}
                            </button>
                            <hr>
                            <div class="text-center">
                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a><br>
                                @endif
                                <a class="btn btn-link" href="{{url('login')}}">Already have an account? Login!</a>
                            </div>
                        </div>

                        {{-- Comment before block for using socialite --}}

                        {{-- Uncomment next for using socialite **** --}}
                        {{-- <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                    {{ __('Register') }}
                        </button>
                        <hr>
                        <a href="index.html" class="btn btn-google btn-user btn-block">
                            <i class="fab fa-google fa-fw"></i> Register with Google
                        </a>
                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                            <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                        </a>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="forgot-password.html">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="login.html">Already have an account? Login!</a>
                        </div>
                </div> --}}

                {{-- Uncomment for using socialite **** --}}

                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection