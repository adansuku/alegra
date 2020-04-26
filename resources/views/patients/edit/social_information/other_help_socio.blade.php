<div class="row m-0 p-0">
<!-- Ayuda Soc Field -->
<div class="form-group col-sm-6">
        {!! Form::label('ayuda_soc', 'Tipo Ayudas:') !!}
        <select class="form-control select2" id="ayuda_soc" name="ayuda_soc[]" id="ayuda_soc" multiple="multiple">
            <option {{ in_array('Teleasistencia', $patient->patientInfo->ayuda_soc) ? 'selected':'' }}>Teleasistencia</option>
            <option {{ in_array('SAD', $patient->patientInfo->ayuda_soc) ? 'selected':'' }}>SAD</option>
            <option {{ in_array('Empleada de Hogar', $patient->patientInfo->ayuda_soc) ? 'selected':'' }}>Empleada de Hogar</option>
            <option {{ in_array('Cuidadora interna', $patient->patientInfo->ayuda_soc) ? 'selected':'' }}>Cuidadora interna</option>
            <option {{ in_array('Fisioterapia', $patient->patientInfo->ayuda_soc) ? 'selected':'' }}>Fisioterapia</option>
            <option {{ in_array('Estimulación Cognitiva', $patient->patientInfo->ayuda_soc) ? 'selected':'' }}>Estimulación Cognitiva</option>
            <option {{ in_array('Apoyo Emocional', $patient->patientInfo->ayuda_soc) ? 'selected':'' }}>Apoyo Emocional</option>
            <option {{ in_array('Centro Atención Residencial', $patient->patientInfo->ayuda_soc) ? 'selected':'' }}>Centro Atención Residencial</option>
            <option {{ in_array('Centro Estancia Diurna', $patient->patientInfo->ayuda_soc) ? 'selected':'' }}>Centro Estancia Diurna</option>
            <option {{ in_array('Otros', $patient->patientInfo->ayuda_soc) ? 'selected':'' }}>Otros</option>
            @if ($patient->convive_con == null)
                $patient->patientInfo->ayuda_soc[0] = "vacio"
            @endif
        </select>

    
    
    <div class="p-3 bg-secondary" id="ayuda_soc_cont" style="display:none">
        {!! Form::label('otras_ayudas_soc', 'Otros (especificar):') !!}
        {!! Form::text('otras_ayudas_soc', $patient->patientInfo->otras_ayudas_soc, ['class' => 'form-control', 'name' =>
        'otras_ayudas_soc', ]) !!}
    </div>

    <script>
        $('#ayuda_soc').on('change', function() {
            if ($("#ayuda_soc option[value=Otros]:selected").length > 0){
                $('#ayuda_soc_cont').css('display', 'block');
                console.log($('entra en el if'));
            }
        });
    </script>

</div>

<!-- Cert Disc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cert_disc', 'Certificado Discapacidad:') !!}
    <select class="form-control" id="certificad_disc" name="cert_disc">
        <option {{ $patient->patientInfo->cert_disc == 'Selecciona una opción' ? 'selected':'' }}>Selecciona una
            opción</option>
        <option {{ $patient->patientInfo->cert_disc == 'Si' ? 'selected':'' }}>Si</option>
        <option {{ $patient->patientInfo->cert_disc == 'No' ? 'selected':'' }}>No</option>
    </select>
</div>

<!-- Tipo Disc Field -->
<div class="form-group col-sm-4 discapacidad bg-secondary py-3"" style=" display: none;">
    {!! Form::label('tipo_disc', 'Tipo Discapacidad:') !!}
    <select class="form-control select2" id="type" name="tipo_disc[]" multiple>
        <option {{ in_array('Intelectual', $patient->patientInfo->tipo_disc) ? 'selected':'' }}>Intelectual</option>
        <option {{ in_array('Física', $patient->patientInfo->tipo_disc) ? 'selected':'' }}>Física</option>
        <option {{ in_array('Sensorial', $patient->patientInfo->tipo_disc) ? 'selected':'' }}>Sensorial</option>
        <option {{ in_array('Psíquica', $patient->patientInfo->tipo_disc) ? 'selected':'' }}>Psíquica</option>
        
    </select>
</div>

<!-- Grado Disc Field -->
<div class="form-group col-sm-4 discapacidad bg-secondary py-3"" style=" display: none;">
    {!! Form::label('grado_disc', 'Porcentaje Discapacidad:') !!}
    {!! Form::text('grado_disc', $patient->patientInfo->grado_disc, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Res Disc Field -->
<div class="form-group col-sm-4 discapacidad bg-secondary py-3"" style=" display: none;">
    {!! Form::label('fecha_res_disc', 'Fecha Resolución Grado Discapacidad:') !!}
    {!! Form::date('fecha_res_disc', $patient->patientInfo->fecha_res_disc, [
        'class' =>
        'form-control','id'=>'fecha_res_disc',

    ]) !!}
</div>

@section('scripts')
<script type="text/javascript">
    $('#fecha_res_disc').datetimepicker({
        format: 'dd-mm-yyyy',
        useCurrent: false
    })
</script>
@endsection

<script>
    $('#certificad_disc').on('change', function() {
        $('.discapacidad').css('display', 'none');
        if ($(this).val() === 'Si') {
            $('.discapacidad').css('display', 'block');
        }
    });

    $(document).ready(function() {
        if ($('#certificad_disc').val() == 'Si')
            $('.discapacidad').show(); // Don't forget to surround the div id with quotes
    });
</script>
</div>