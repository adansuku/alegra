<!-- Nom Servicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nom_servicio', 'Nom Servicio:') !!}
    {!! Form::select('nom_servicio', ['SPAPD' => 'SPAPD', 'UEC' => 'UEC', 'CD' => 'CD', 'SPAPD' => 'SPAPD'], null, ['class' => 'form-control']) !!}
</div>

<!-- Municipio Serv Field -->
<div class="form-group col-sm-6">
    {!! Form::label('municipio_serv', 'Municipio Serv:') !!}
    {!! Form::text('municipio_serv', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Plaza Serv Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_plaza_serv', 'Tipo Plaza Serv:') !!}
    {!! Form::select('tipo_plaza_serv', ['PRIVADA' => 'PRIVADA', 'PÚBLICA' => 'PÚBLICA', 'SUBVENCIONADA' => 'SUBVENCIONADA'], null, ['class' => 'form-control']) !!}
</div>

<!-- Plaza Privada Serv Field -->
<div class="form-group col-sm-6">
    {!! Form::label('plaza_privada_serv', 'Plaza Privada Serv:') !!}
    {!! Form::select('plaza_privada_serv', ['Socixs' => 'Socixs', 'No Socixs' => 'No Socixs', 'PEVS' => 'PEVS'], null, ['class' => 'form-control']) !!}
</div>

<!-- Plaza Sub Serv Field -->
<div class="form-group col-sm-6">
    {!! Form::label('plaza_sub_serv', 'Plaza Sub Serv:') !!}
    {!! Form::text('plaza_sub_serv', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Form Serv Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_form_serv', 'Fecha Form Serv:') !!}
    {!! Form::date('fecha_form_serv', null, ['class' => 'form-control','id'=>'fecha_form_serv']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#fecha_form_serv').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('patientServices.index') !!}" class="btn btn-default">Cancel</a>
</div>
