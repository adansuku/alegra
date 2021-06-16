<div class="row">
    <!-- Miembros unidad familiar -->
    <div class="form-group col-sm-4">
        
        {!! Form::label('miem_familia', 'Miembros Unidad Familiar: (max. 20)') !!}
        {!! Form::number('miem_familia', $patient->patientInfo->miem_familia, ['class' => 'form-control']) !!}
    </div>

    <!-- Hijos -->
    <div class="form-group col-sm-4">
        {!! Form::label('hijos', 'Hijos:') !!}
        {!! Form::number('hijos', $patient->patientInfo->hijos, ['class' => 'form-control', 'value' => '0']) !!}
    </div>

    <!-- Vivienda -->
    <div class="form-group col-sm-4">
        {!! Form::label('tipo_vivienda', 'Vivienda:') !!}
        <select class="form-control" id="tipo_vivienda" name="vivienda" onchange="showInput(this.value, this.id);">
            <option {{ $patient->patientInfo->vivienda == 'Selecciona una opción' ? 'selected':'' }}>Selecciona una
                opción</option>
            <option {{ $patient->patientInfo->vivienda == 'Propiedad' ? 'selected':'' }}>Propiedad</option>
            <option {{ $patient->patientInfo->vivienda == 'Alquiler,' ? 'selected':'' }}>Alquiler</option>
            <option {{ $patient->patientInfo->vivienda == 'Otros (especificar)' ? 'selected':'' }}>Otros (especificar)
            </option>
        </select>
        @if ($patient->patientInfo->vivienda == "Otros (especificar)")
        <script>
            $(document).ready(function(){
                    $('#tipo_vivienda_cont').removeAttr('hidden');
                        });
        </script>
        @endif

        <div class="form-group col-sm-12 bg-secondary py-3" id="tipo_vivienda_cont" hidden="hidden">
            {!! Form::label('vivienda_otros', 'Otros (especificar):') !!}
            {!! Form::text('vivienda_otros', $patient->patientInfo->vivienda_otros, ['class' => 'form-control']) !!}
        </div>
    </div>

    <!-- nivel educativo -->
    <div class="form-group col-sm-4">
        {!! Form::label('nivel_educativo', 'Nivel Educativo:') !!}



        {!! Form::select('nivel_educativo', 
        [
        null => 'Selecciona una opcion',
        'No sabe leer y escribir' => 'No sabe leer y escribir', 
        'Sabe leer y escribir' => 'Sabe leer y escribir', 
        'Primarios' => 'Primarios', 
        'Secundarios' => 'Secundarios', 
        'Formación Profesional grado medio' => 'Formación Profesional grado medio', 
        'Formación Profesional grado superior' => 'Formación Profesional grado superior',
        'Bachillerato' => 'Bachillerato', 
        'Estudios Universitarios' => 'Estudios Universitarios'], 
        $patient->patientInfo->nivel_educativo, ['class' => 'form-control', 'id' => 'nivel_educativo']) !!}

        {{-- @if (
            $patient->patientInfo->nivel_educativo != "No sabe leer y escribir" ||
            $patient->patientInfo->nivel_educativo != "Sabe leer y escribir" ||
            $patient->patientInfo->nivel_educativo != "Graduado Escolar" ||
            $patient->patientInfo->nivel_educativo != "Bachillerato" ||
            $patient->patientInfo->nivel_educativo != "Formación Profesional grado medio" ||
            $patient->patientInfo->nivel_educativo != "Formación Profesional grado superior" ||
            $patient->patientInfo->nivel_educativo != "Estudios Universitarios"
            )
            <script>
                $(document).ready(function(){
                        $('#nivel_educativo_cont').removeAttr('hidden');
                        $("#nivel_educativo option").each(function(){
                            if ($(this).text() == "Otros")
                            $(this).attr("selected","selected");
                        });
                    });
            </script>
        @endif

        <div class="p-3 bg-secondary" id="nivel_educativo_cont" hidden="hidden">
            {!! Form::label('nivelEducativo', 'Otros (especificar):') !!}
            {!! Form::text('nivelEducativo', $patient->patientInfo->nivel_educativo, ['class' => 'form-control', 'name'
            =>
            'nivel_educativo']) !!}
        </div> --}}

    </div>

    <!-- Estudios End Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('estudios_end', 'Estudios finalizados:') !!}
        <select class="form-control" id="estudios_end" name="estudios_end">
            <option {{ $patient->patientInfo->estudios_end == 'Si' ? 'selected':'' }}>Si</option>
            <option {{ $patient->patientInfo->estudios_end == 'No' ? 'selected':'' }}>No</option>
        </select>
    </div>

    <!-- ingresos -->
    <div class="form-group col-sm-4">
        {!! Form::label('ingresos_m', 'Ingresos mensuales:') !!}
        {!! Form::text('ingresos_m', $patient->patientInfo->ingresos_m, ['class'
        => 'form-control']) !!}
    </div>

    <!-- Procedencia Ingresos -->
    <div class="form-group col-sm-4">




        {!! Form::label('ingresos_proced', 'Procedencia Ingresos:') !!}
        {!! Form::select('ingresos_proced', [
             null => 'Selecciona una opción',
            'Salario' => 'Salario',
            'Jubilacion' => 'Jubilacion',
            'Viudedad' => 'Viudedad',
            'PNC' => 'PNC',
            'Otros' => 'Otros(especificar)'],
            $patient->patientInfo->ingresos_proced, ['class' => 'form-control', 'id' => 'ingresos_proced'])
        !!}



        <div class="p-3 bg-secondary" id="ingresos_proced_cont" style="display: none;">
            {!! Form::label('otros_ingresos', 'Otros (especificar):') !!}
            {!! Form::text('otros_ingresos', $patient->patientInfo->otros_ingresos, ['class' => 'form-control',]) !!}
        </div>


        @push('scripts')
        <script>
            $('#ingresos_proced').on('change', function() {
                if ($(this).val() == 'Otros' ) {
                    $('#ingresos_proced_cont').css('display', 'block');
                }else{
                    $('#ingresos_proced_cont').css('display', 'none');
                }
                
            });

            $(document).ready(function() {
                var selected_option = $('#ingresos_proced').val();
                if(selected_option == 'Otros(especificar)'){
                    $('#ingresos_proced_cont').css('display', 'block');
                }
        
            });
        </script>
        @endpush
    </div>

    <!-- Ocupacion Field -->
    <div class=" form-group col-sm-4">
        {!! Form::label('ocupacion', 'Ocupación Anterior:') !!}
        {!! Form::text('ocupacion', $patient->patientInfo->ocupacion, ['class' => 'form-control']) !!}
    </div>

    <!-- Intereses Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('intereses', 'Intereses actuales:') !!}
        {!! Form::text('intereses', $patient->patientInfo->intereses, ['class' => 'form-control']) !!}
    </div>

    <!-- Lee Escribe Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('¿Lee y escribe ahora?', '¿Lee y escribe ahora?:') !!}
        <select class="form-control" id="lee_escribe" name="lee_escribe">
            <option {{ $patient->patientInfo->lee_escribe == 'Si' ? 'selected':'' }}>Si</option>
            <option {{ $patient->patientInfo->lee_escribe == 'No' ? 'selected':'' }}>No</option>
        </select>
    </div>

</div>