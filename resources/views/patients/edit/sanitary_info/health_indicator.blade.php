<div class="row">

    <!-- Incontinencia Field -->
    <div class="form-group col-md-4">
        {!! Form::label('incontinencia', 'Atención a la incontinencia:') !!}
        <select class="form-control" id="incontinencia" name="incontinencia"
            onchange="indicadores_multi(this.value, this.id);">
            <option value="">Selecciona una opción</option>
            <option {{ $patient->patientHealth->incontinencia == 'Ninguna' ? 'selected':'' }}>Ninguna</option>
            <option {{ $patient->patientHealth->incontinencia == 'Riesgo Incontinencia Leve' ? 'selected':'' }}>Riesgo
                Incontinencia Leve</option>
            <option {{ $patient->patientHealth->incontinencia == 'Riesgo Incontinencia Moderado' ? 'selected':'' }}>
                Riesgo Incontinencia Moderado</option>
            <option {{ $patient->patientHealth->incontinencia == 'Riesgo Incontinencia Grave' ? 'selected':'' }}>Riesgo
                Incontinencia Grave</option>
        </select>

        @if (!$patient->patientHealth->incontinencia == "")
        <script>
            $(document).ready(function(){
                    $('#incontinencia_multi_content').removeAttr('hidden');
                        });
        </script>
        @endif

        <!-- Opciones multiples de incontinencia -->
        <div class="form-group p-3 bg-secondary" id="incontinencia_multi_content" hidden="hidden">
            {!! Form::label('incontinencia_opc', 'Atención A La Incontinencia Opciones:') !!}
            {!! Form::select('incontinencia_opc[]', [
            'Autónomo/a' => 'Autónomo/a',
            'Supervision' => 'Supervision',
            'Recordatorio con instrucción verbal' => 'Recordatorio con instrucción verbal',
            'Ayuda fí­sica parcial' => 'Ayuda fí­sica parcial',
            'Ayuda fí­sica total' => 'Ayuda fí­sica total',
            'Usuario/a de sonda' => 'Usuario/a de sonda'],
            $patient->patientHealth->incontinencia_opc, ['class' => 'form-control select2', 'multiple' => 'multiple'])!!}
        </div>
    </div>

    <!-- Caida Field -->
    <div class="form-group col-md-4">
        {!! Form::label('caida', 'Riesgo caida:') !!}
        <select class="form-control" id="caida" name="caida" onchange="indicadores_multi(this.value, this.id);">
            <option value="">Selecciona una opción</option>
            <option {{ $patient->patientHealth->caida == 'Ninguna' ? 'selected':'' }}>Ninguna</option>
            <option {{ $patient->patientHealth->caida == 'Riesgo Caída Leve' ? 'selected':'' }}>Riesgo Caí­da Leve
            </option>
            <option {{ $patient->patientHealth->caida == 'Riesgo Caí­da Moderado' ? 'selected':'' }}>Riesgo Caí­da
                Moderado</option>
            <option {{ $patient->patientHealth->caida == 'Riesgo Caí­da Grave' ? 'selected':'' }}>Riesgo Caí­da Grave
            </option>
        </select>

        @if (!$patient->patientHealth->caida == "")
        <script>
            $(document).ready(function(){
                    $('#riesgo_caida_multi_content').removeAttr('hidden');
                        });
        </script>
        @endif

        <!-- Opciones multiples de Riesgo caí­da -->
        <div class="form-group bg-secondary p-3" id="riesgo_caida_multi_content" hidden="hidden">
            {!! Form::label('riesgo_caida_opc', 'Riesgo Caida Opciones:') !!}
            {!! Form::select('riesgo_caida_opc[]', [
            'Autónomo/a' => 'Autónomo/a',
            'Supervisión en la Deambulación' => 'Supervisión en la Deambulación',
            'Ayuda fí­sica parcial' => 'Ayuda fí­sica parcial',
            'Ayuda fí­sica total' => 'Ayuda fí­sica total',
            'Usuario/a con andador' => 'Usuario/a con andador',
            'Usuario/a con baston' => 'Usuario/a con bastón',
            'Usuario/a de silla de ruedas' => 'Usuario/a de silla de ruedas'],
            $patient->patientHealth->riesgo_caida_opc, ['class' => 'form-control select2', 'multiple' => 'multiple'])!!}
        </div>
    </div>


    <!-- Dieta Field -->
    <div class="form-group col-md-4">
        {!! Form::label('dieta', 'Dieta:') !!}

        <select class="form-control" id="dieta" name="dieta" onchange="indicadores_multi(this.value, this.id);">
            <option value="">Selecciona una opción</option>
            <option {{ $patient->patientHealth->dieta == 'Basal' ? 'selected':'' }}>Basal</option>
            <option {{ $patient->patientHealth->dieta == 'Diabética' ? 'selected':'' }}>Diabética</option>
            <option {{ $patient->patientHealth->dieta == 'Hiposódica' ? 'selected':'' }}>Hiposódica</option>
            <option {{ $patient->patientHealth->dieta == 'Baja en Grasas' ? 'selected':'' }}>Baja en Grasas</option>
        </select>

        @if (!$patient->patientHealth->dieta == "")
        <script>
            $(document).ready(function(){
                    $('#dieta_textura_content').removeAttr('hidden');
                    $('#dieta_observ_cont').removeAttr('hidden');
                        });
        </script>
        @endif

        <!-- Opciones multiples de dieta -->
        <div class="form-group p-3 bg-secondary" id="dieta_textura_content" hidden="hidden">
            {!! Form::label('dieta_textura', 'Textura:') !!}
            {!! Form::select('dieta_textura', [
            'Sólida' => 'Sólida',
            'Molida' => 'Molida',
            'Molida con espesante' => 'Molida con espesante',
            'Líquida' => 'Líquida',
            'Líquida con sonda' => 'Lí­quida con sonda',
            'Triturada' => 'Triturada'],
            null, ['class' => 'form-control'])!!}
        </div>

        <!-- Observaciones -->
        <div class="form-group p-3 bg-secondary" id="dieta_observ_cont" hidden="hidden">
            {!! Form::label('dieta_observ', 'Observaciones:') !!}
            {!! Form::text('dieta_observ', $patient->patientHealth->dieta_observ, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<div class="row">

    <!-- Higiene Field -->
    <div class="form-group col-md-4">
        {!! Form::label('higiene', 'Higiene personal:') !!}
        <select class="form-control" id="higiene" name="higiene" onchange="indicadores_multi(this.value, this.id);">
            <option value="">Selecciona una opción</option>
            <option {{ $patient->patientHealth->higiene == 'Autónoma/o' ? 'selected':'' }}>Autónoma/o</option>
            <option {{ $patient->patientHealth->higiene == 'Dependencia Leve' ? 'selected':'' }}>Dependencia Leve
            </option>
            <option {{ $patient->patientHealth->higiene == 'Dependencia Moderada' ? 'selected':'' }}>Dependencia
                Moderada</option>
            <option {{ $patient->patientHealth->higiene == 'Dependencia Grave' ? 'selected':'' }}>Dependencia Grave
            </option>
        </select>


        @if (!$patient->patientHealth->higiene == "")
        <script>
            $(document).ready(function(){
                    $('#higiene_multi_content').removeAttr('hidden');
                        });
        </script>
        @endif

        <!-- Opciones multiples de higiene -->
        <div class="form-group p-3 bg-secondary" id="higiene_multi_content" hidden="hidden">
            {!! Form::label('higiene_opc', 'Opciones Higiene Personal:') !!}
            {!! Form::select('higiene_opc[]', [
            'Ninguna' => 'Ninguna',
            'Apoyo con Instrucción Verbal' => 'Apoyo con Instrucción Verbal',
            'Ayuda fí­sica parcial' => 'Ayuda fí­sica parcial',
            'Ayuda fí­sica total' => 'Ayuda física total'],
            $patient->patientHealth->higiene_opc, ['class' => 'form-control select2', 'multiple' => 'multiple'])!!}
        </div>
    </div>


    <!-- Ulcera Field -->
    <div class="form-group col-md-4">
        {!! Form::label('ulcera', 'Ulcera por presión:') !!}
        <select class="form-control" id="ulcera" name="ulcera">
            <option value="">Selecciona una opción</option>
            <option {{ $patient->patientHealth->ulcera == 'Sin Riesgo' ? 'selected':'' }}>Sin Riesgo</option>
            <option {{ $patient->patientHealth->ulcera == 'Medidas Preventivas' ? 'selected':'' }}>Medidas Preventivas
            </option>
            <option {{ $patient->patientHealth->ulcera == 'Medidas de Cuidado - tratamiento' ? 'selected':'' }}>Medidas
                de Cuidado - tratamiento</option>
        </select>
    </div>

    <!-- Deambulacion Field -->
    <div class="form-group col-md-4">
        {!! Form::label('deambulacion', 'Deambulación Errante:') !!}
        <select class="form-control" id="deambulacion" name="deambulacion">
            <option value="">Selecciona una opción</option>
            <option {{ $patient->patientHealth->deambulacion == 'Si' ? 'selected':'' }}>Si</option>
            <option {{ $patient->patientHealth->deambulacion == 'No' ? 'selected':'' }}>No</option>
        </select>
    </div>

</div>

<div class="row">
    <!-- Hidratación Field -->
    <div class="form-group col-md-4">
        {!! Form::label('hidratacion', 'Hidratación:') !!}
        <select class="form-control" id="hidratacion" name="hidratacion"
            onchange="indicadores_multi(this.value, this.id);">
            <option value="">Selecciona una opción</option>
            <option
                {{ $patient->patientHealth->hidratacion == 'Hidratación Según Pauta General Servicio' ? 'selected':'' }}>
                Hidratación Según Pauta General Servicio</option>
            <option {{ $patient->patientHealth->hidratacion == 'Hidratación Extra' ? 'selected':'' }}>Hidratación
                Extra</option>
        </select>

        @if (!$patient->patientHealth->hidratacion == "")
        <script>
            $(document).ready(function(){
                    $('#hidratacion_observ_cont').removeAttr('hidden');
                        });
        </script>
        @endif


        <!-- Observaciones Hidratación -->
        <div class="form-group bg-secondary p-3" id="hidratacion_observ_cont" hidden="hidden">
            {!! Form::label('hidratacion_observ', 'Observaciones:') !!}
            {!! Form::text('hidratacion_observ', $patient->patientHealth->hidratacion_observ, ['class' => 'form-control']) !!}
        </div>
    </div>

</div>