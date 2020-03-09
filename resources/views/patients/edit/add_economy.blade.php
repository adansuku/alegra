<div class="form-group col-sm-4">
    <!-- importe mensual servicios-->
    {!! Form::label('importe_serv', 'Importe mensual servicio:') !!}
    {!! Form::text('importe_serv', $patient->patientOther->importe_serv,
    ['id' => 'num1', 'class' => 'form-control', 'onchange' => 'sumar(this.value)']) !!}

    <!-- Importe mensual transporte -->
    {!! Form::label('importe_trans', 'Importe mensual transporte:') !!}
    {!! Form::text('importe_trans', $patient->patientOther->importe_trans,
    ['class' => 'form-control', 'id' => 'num2', 'onchange' => 'sumar(this.value)']) !!}



    <div class="my-3 h5">Importe total a facturar:
        <span class="h3" id="spTotal"></span> €

    </div>

    <script>
        $(document).ready(function(){
            num1 = document.getElementById('num1').value;
            num2 = document.getElementById('num2').value;
            total = (parseInt(num1) + parseInt(num2));
            document.getElementById('spTotal').innerHTML = total;
            
        });

        function sumar(valor) {
            var total = 0;
            valor = parseInt(valor); 
            total = document.getElementById('spTotal').innerHTML;
            total = (total == null || total == undefined || total == "") ? 0 : total;
            total = (parseInt(total) + parseInt(valor));
            document.getElementById('spTotal').innerHTML = total;
        }
        


            
    </script>
</div>

<div class="form-group col-sm-4">
    {!! Form::label('forma_pago', 'Forma de pago:') !!}
    <select class="form-control" id="type" name="forma_pago">
        <option value="">Selecciona una opción</option>
        <option {{ $patient->patientOther->forma_pago == 'Cesion' ? 'selected':'' }}>Cesión de derechos de cobros
        </option>
        <option {{ $patient->patientOther->forma_pago == 'Efectivo' ? 'selected':'' }}>Efectivo</option>
        <option {{ $patient->patientOther->forma_pago == 'Transferencia' ? 'selected':'' }}>Transferencia</option>
        <option {{ $patient->patientOther->forma_pago == 'Domiciliación bancaria' ? 'selected':'' }}>Domiciliación
            bancaria</option>
    </select>

    {!! Form::label('cuota_socio', 'Cuota de socio:') !!}
    <select class="form-control" id="cuota-socio" name="cuota_socio">
        <option value="">Selecciona una opción</option>
        <option {{ $patient->patientOther->cuota_socio == 'Si' ? 'selected':'' }}>Si</option>
        <option {{ $patient->patientOther->cuota_socio == 'No' ? 'selected':'' }}>No</option>
    </select>

</div>

<div class="col-lg-4">
    {!! Form::label('pago_socio', 'Forma pago Cuota Socio/a:') !!}
    <select class="form-control" id="type" name="pago_socio">
        <option value="">Selecciona una opción</option>
        <option {{ $patient->patientOther->pago_socio == 'Efectivo' ? 'selected':'' }}>Efectivo</option>
        <option {{ $patient->patientOther->pago_socio == 'Transferencia' ? 'selected':'' }}>Transferencia</option>
        <option {{ $patient->patientOther->pago_socio == 'Domiciliación bancaria' ? 'selected':'' }}>Domiciliación
            bancaria</option>
    </select>

    <script>
        $('#cuota-socio').on('change', function() {
            $('#periodicidad').css('display', 'none');
            if ($(this).val() === 'Si') {
                $('#periodicidad').css('display', 'block');
            }
        });

        $(document).ready(function() {
            if ($('#cuota-socio').val() == 'Si')
                $('#periodicidad').show(); // Don't forget to surround the div id with quotes
        });
    </script>

    <div id="periodicidad" style="display: none">
        {!! Form::label('periodicidad', 'Periodicidad:') !!}
        <select class="form-control" id="type" name="periodicidad">
            <option value="">Selecciona una opción</option>
            <option {{ $patient->patientOther->periodicidad == 'Anual' ? 'selected':'' }}>Anual (60€)</option>
            <option {{ $patient->patientOther->periodicidad == 'Semestral' ? 'selected':'' }}>Semestral (30€)</option>
            <option {{ $patient->patientOther->periodicidad == 'Trimestral' ? 'selected':'' }}>Trimestral (15€)</option>
            <option {{ $patient->patientOther->periodicidad == 'Mensual' ? 'selected':'' }}>Mensual (5€)</option>
        </select>
    </div>



    {!! Form::label('socio', 'Socio/a:') !!}
    <select class="form-control" id="socio" name="socio">
        <option value="">Selecciona una opción</option>
        <option {{ $patient->patientOther->socio == 'Si' ? 'selected':'' }}>Si</option>
        <option {{ $patient->patientOther->socio == 'No' ? 'selected':'' }}>No</option>
    </select>

    <!-- No Socio Field -->
    {!! Form::label('no_socio', 'Número de Socio/a:') !!}
    {!! Form::number('no_socio', $patient->patientOther->no_socio , ['class' => 'form-control numero_socio', 'id' =>
    'numero_socio']) !!}

</div>