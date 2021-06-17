<div class="row">
    <!-- Cesion Imagen Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('cesion_imagen', 'Cesión de Imagen:') !!}
        <select class="form-control" id="cesion_imagen" name="cesion_imagen">
            <option value="">Selecciona una opción</option>
            <option {{ $patient->patientOther->cesion_imagen == 'Si' ? 'selected':'' }}>Si</option>
            <option {{ $patient->patientOther->cesion_imagen == 'No' ? 'selected':'' }}>No</option>
        </select>
    </div>

    <!-- Salir Centro Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('salir_centro', 'Autorización Entrar y Salir Centro:') !!}
        <select class="form-control" id="salir_centro" name="salir_centro">
            <option value="">Selecciona una opción</option>
            <option {{ $patient->patientOther->salir_centro == 'Si' ? 'selected':'' }}>Si</option>
            <option {{ $patient->patientOther->salir_centro == 'No' ? 'selected':'' }}>No</option>
        </select>
    </div>

    <!-- Riesgo Caidas Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('riesgo_caidas', 'Riesgo Caidas:') !!}
        <select class="form-control" id="riesgo_caidas" name="riesgo_caidas">
            <option value="">Selecciona una opción</option>
            <option {{ $patient->patientOther->riesgo_caidas == 'Sin Riesgo' ? 'selected':'' }}>Sin Riesgo</option>
            <option {{ $patient->patientOther->riesgo_caidas == 'Leve' ? 'selected':'' }}>Leve</option>
            <option {{ $patient->patientOther->riesgo_caidas == 'Moderado' ? 'selected':'' }}>Moderado</option>
            <option {{ $patient->patientOther->riesgo_caidas == 'Grave' ? 'selected':'' }}>Grave</option>

        </select>
    </div>

    <!-- Salida Externa Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('salida_externa', 'Autorización Salida Externa:') !!}
        <select class="form-control" id="salida_externa" name="salida_externa">
            <option value="">Selecciona una opción</option>
            <option {{ $patient->patientOther->salida_externa == 'Si' ? 'selected':'' }}>Si</option>
            <option {{ $patient->patientOther->salida_externa == 'No' ? 'selected':'' }}>No</option>
        </select>
    </div>
    
    <div class="form-group col-sm-6">
        {!! Form::label('producto_apoyo', 'Productos de apoyo:') !!}
        <select class="form-control select2" id="producto_apoyo" name="producto_apoyo[]" multiple="multiple">
            <option value="">Selecciona una opción</option>
            @foreach ($support_products as $sp)
                <option value="{{ $sp->id }}" {{ in_array($sp->id,$patient_sp) ? 'selected' : '' }}>{{ $sp->description }}</option>
            @endforeach
        </select>
    </div>

</div>