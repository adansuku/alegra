<!-- Numero Expediente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero_expediente', 'Número Expediente:') !!}
    {!! Form::text('numero_expediente', null, ['class' => 'form-control']) !!}
</div>

<!-- Foto Paciente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('foto_paciente', 'Foto:') !!}
    {!! Form::text('foto_paciente', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Alta Paciente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_alta_paciente', 'Fecha de Alta:') !!}
    {!! Form::date('fecha_alta_paciente', null, ['class' => 'form-control','id'=>'fecha_alta_paciente']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#fecha_alta_paciente').datetimepicker({
            format: 'DD-MM-YYYY',
            useCurrent: false
        })
    </script>
@endsection

<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Apellido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apellido', 'Apellido:') !!}
    {!! Form::text('apellido', null, ['class' => 'form-control']) !!}
</div>

<!-- Alias Field -->
<div class="form-group col-sm-6">
    {!! Form::label('alias', 'Alias:') !!}
    {!! Form::text('alias', null, ['class' => 'form-control']) !!}
</div>

<!-- Genero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('genero', 'Género:') !!}
    {!! Form::select('genero', ['Hombre' => 'Hombre', 'Mujer' => 'Mujer'], null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Nacimiento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_nacimiento', 'Fecha Nacimiento:') !!}
    {!! Form::date('fecha_nacimiento', null, ['class' => 'form-control','id'=>'fecha_nacimiento']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#fecha_nacimiento').datetimepicker({
            format: 'DD-MM-YYYY',
            useCurrent: false
        })
    </script>
@endsection

<!-- Dni Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dni', 'Dni:') !!}
    {!! Form::text('dni', null, ['class' => 'form-control']) !!}
</div>

<!-- Estado Civil Field -->
<div class="form-group col-sm-6">
    
    {!! Form::label('estado_civil', 'Estado Civil:') !!}
    {!! Form::select('estado_civil', [' Soltera/o' => ' Soltera/o', ' Viuda/o' => ' Viuda/o', ' Casada/o' => ' Casada/o', ' Divorciada/o' => ' Divorciada/o'], null, ['class' => 'form-control']) !!}
</div>

<!-- Direccion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('direccion', 'Dirección (calle, avenida, plaza…):') !!}
    {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
</div>

<!-- Número Field -->
<div class="form-group col-sm-6">
    {!! Form::label('num_direcion', 'Número:)') !!}
    {!! Form::text('num_direcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Bloque Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bloq_piso', 'Bloque, Piso y/o puerta:)') !!}
    {!! Form::text('bloq_piso', null, ['class' => 'form-control']) !!}
</div>

<!-- Municipio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Municipio', 'Municipio') !!}
    {!! Form::text('Municipio', null, ['class' => 'form-control']) !!}
</div>

<!-- Isla Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Isla', 'Isla:') !!}
    {!! Form::text('Isla', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono', 'Telefono:') !!}
    {!! Form::number('telefono', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono Movil Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono_movil', 'Telefono Movil:') !!}
    {!! Form::number('telefono_movil', null, ['class' => 'form-control']) !!}
</div>

<!-- Convive Con Field -->
<div class="form-group col-sm-6">
    {!! Form::label('convive_con', 'Convive Con:') !!}
    {!! Form::text('convive_con', null, ['class' => 'form-control']) !!}
</div>

<!-- Grado Dependencia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('grado_dependencia', 'Grado Dependencia:') !!}
    {!! Form::text('grado_dependencia', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary float-right']) !!}
    <a href="{!! route('patients.index') !!}" class="btn btn-default float-right">Cancelar</a>
</div>
