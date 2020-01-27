<div class="row">
    <div class="col-sm-6">

        <!-- Nombre Field -->
        <div class="form-group ">
            {!! Form::label('nombre', 'Nombre:') !!}
            <input id="nombre" type="text" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }} form-control-user" 
            name="nombre" value="{{ old('nombre') }}" placeholder="Introduce un nombre" required>

            @if ($errors->has('nombre'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('nombre') }}</strong>
            </span>
            @endif
        </div>

        <!-- Apellido Field -->
        <div class="form-group ">
            {!! Form::label('apellido', 'Apellido:') !!}
            <input id="apellido" type="text" class="form-control{{ $errors->has('apellido') ? ' is-invalid' : '' }} form-control-user" name="apellido" value="{{ old('apellido') }}" placeholder="Introduce los apellidos" required>

            @if ($errors->has('apellido'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('apellido') }}</strong>
            </span>
            @endif
        </div>
    </div>

    <div class="col-sm-6">

        <div class="form-group">
            {!! Form::label('email', 'Email corporativo :') !!}
            <small>Este email se utilizará para loguearse en la plataforma</small>

            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} form-control-user" name="email" value="{{ old('email') }}" placeholder="Introduce un email corporativo" required>

            @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
        </div>

        {!! Form::label('password', 'Contraseña:') !!}

        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">

                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} form-control-user" name="password" placeholder="Contraseña" required> @if ($errors->has('password'))

                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span> @endif
            </div>

            <div class="col-sm-6">
                                <input id="password-confirm" type="password" class="form-control form-control-user" name="password_confirmation" placeholder="Repetir contraseña" required>
                            </div>
        </div>

    </div>
</div>

@csrf