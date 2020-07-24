<div class="row">
    <div class="col-sm-6">

        <div class="form-group">
            {!! Form::label('email', 'Email corporativo :') !!}
            <small>Este email se utilizará para loguearse en la plataforma</small>

            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} form-control-user" 
            name="email" value="{{ $worker->email }}" placeholder="Introduce un email corporativo" required>

            @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
        </div>

        {!! Form::label('password', 'Contraseña:') !!}

        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">

                <input id="password" type="password" value="{{$worker->password}}" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} form-control-user" name="password" placeholder="Contraseña" required> @if ($errors->has('password'))

                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span> @endif
            </div>

            <div class="col-sm-6">
                 <input id="password-confirm" type="password" class="form-control form-control-user" name="password_confirmation" 
            placeholder="Repetir contraseña" value="{{$worker->password}}" required>
                            </div>
        </div>

    </div>
    
    <div class="col-sm-6">
            <!-- Fecha Alta Field -->
            <div class="form-group ">
                {!! Form::label('fecha_alta', 'Fecha de Alta:') !!}
                {!! Form::date('fecha_alta', $worker->fecha_alta, ['class' => 'form-control','id'=>'fecha_alta']) !!}
            </div>

            @section('scripts')
                <script type="text/javascript">
                    $('#fecha_alta').datetimepicker({
                        format: 'DD-MM-YYYY',
                        useCurrent: false
                    })
                </script>
            @endsection
            <!-- Fecha Baja Field -->
         <div class="form-group ">
                {!! Form::label('fecha_baja', 'Fecha de Baja:') !!}
                {!! Form::date('fecha_baja', $worker->fecha_baja, ['class' => 'form-control','id'=>'fecha_baja']) !!}
            </div>

            @section('scripts')
                <script type="text/javascript">
                    $('#fecha_baja').datetimepicker({
                        format: 'DD-MM-YYYY',
                        useCurrent: false
                    })
                </script>
            @endsection

           
    </div>
    
</div>