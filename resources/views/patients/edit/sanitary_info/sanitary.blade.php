<div class="row">
    <!-- Reg Sanitario Field -->
    <div class="form-group col-md-4">

        {!! Form::label('reg_sanitario', 'Cobertura privada:') !!}
        <select class="form-control" id="reg_sanitario" name="reg_sanitario">
            <option value="">Selecciona una opción</option>
            <option {{ $patient->patientHealth->reg_sanitario == 'Si' ? 'selected':'' }}>Si</option>
            <option {{ $patient->patientHealth->reg_sanitario == 'No' ? 'selected':'' }}>No</option>
        </select>

        <!-- Regimen Priv Field -->
        <div class="form-group bg-secondary p-3" id="centro_privado" style="display: none">
            {!! Form::label('regimen_priv', 'Nombre de Cobertura:') !!}
            {!! Form::text('regimen_priv', $patient->patientHealth->regimen_priv, ['class' => 'form-control']) !!}
        </div>
    </div>

    @push('scripts')
    <script>
        $('#reg_sanitario').on('change', function() {
            $('#centro_privado').css('display', 'none');
            if ($(this).val() === 'Si') {
                $('#centro_privado').css('display', 'block');
            }
        });

        $(document).ready(function() {
            if ($('#reg_sanitario').val() == 'Si')
                $('#centro_privado').show(); // Don't forget to surround the div id with quotes
        });
    </script>
    @endpush

    <div class="form-group col-md-4">
        {!! Form::label('num_afiliado', 'Nº Afiliación a la Seg Social:') !!}
        {!! Form::text('num_afiliado', $patient->patientHealth->num_afiliado, ['class' => 'form-control']) !!}

        {!! Form::label('med_cabecera', 'Nombre y Apellido Médico/a Cabecera:', ['class' => 'mt-3']) !!}
        {!! Form::text('med_cabecera', $patient->patientHealth->med_cabecera, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group col-md-4">
        {!! Form::label('centro_salud', 'Centro Referencia:') !!}
        {!! Form::text('centro_salud', $patient->patientHealth->centro_salud, ['class' => 'form-control']) !!}

        {!! Form::label('tel_centro_salud', 'Teléfono Centro Referencia:', ['class' => 'mt-3']) !!}
        {!! Form::text('tel_centro_salud', $patient->patientHealth->tel_centro_salud, ['class' => 'form-control ']) !!}

    </div>
</div>