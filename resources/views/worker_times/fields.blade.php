<!-- Fecha Entrada Field -->
<script>
var hoy = navigator.geolocation.getCurrentPosition;
console.log(hoy);
</script>

<div class="form-group col-sm-6">
    {!! Form::label('fecha_entrada', 'Fecha Entrada:') !!}
    {!! Form::text('fecha_entrada', date('Y-m-d H:i:s'), [
        'class' => 'form-control',
        'id'=>'fecha_entrada',

        
        ]) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#fecha_entrada').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Fecha Salida Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_salida', 'Fecha Salida:') !!}
    {!! Form::text('fecha_salida', null, ['class' => 'form-control']) !!}
</div>

<!-- Latitud Field -->
<div class="form-group col-sm-6">
    {!! Form::label('latitud', 'Latitud:') !!}
    {!! Form::text('latitud', null, ['class' => 'form-control']) !!}
</div>

<!-- Longitud Field -->
<div class="form-group col-sm-6">
    {!! Form::label('longitud', 'Longitud:') !!}
    {!! Form::text('longitud', null, ['class' => 'form-control']) !!}
</div>

<!-- Dirección Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dirección', 'Dirección:') !!}
    {!! Form::text('dirección', null, ['class' => 'form-control']) !!}
</div>

<!-- Observaciones Field -->
<div class="form-group col-sm-6">
    {!! Form::label('observaciones', 'Observaciones:') !!}
    {!! Form::text('observaciones', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('workerTimes.index') !!}" class="btn btn-default">Cancel</a>
</div>
