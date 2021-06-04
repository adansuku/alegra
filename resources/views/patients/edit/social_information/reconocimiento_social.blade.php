<div class="row">  

    <div class="form-group col-sm-12">
        <h4 class="m-0 font-weight-bold text-primary">Discapacidad</h3>
    </div>

    <div class="form-group col-sm-6">
        {!! Form::label('rs_grado', 'Grado') !!}
        <select class="form-control" id="rs_grado" name="rs_grado">
            <option value="">Selecciona una opción</option>
            <option value="Solicitada" {{ $patient->patientInfo->grado == 'Solicitada' ? 'selected':'' }}>Solicitada</option>
            <option value="Resuelta" {{ $patient->patientInfo->grado == 'Resuelta' ? 'selected':'' }}>Resuelta</option>
        </select>
    </div>

    <div class="form-group col-sm-6">
        {!! Form::label('rs_revision', 'Revisión') !!}
        <select class="form-control" id="rs_revision" name="rs_revision">
            <option value="">Selecciona una opción</option>
            <option value="Solicitada" {{ $patient->patientInfo->revision == 'Solicitada' ? 'selected':'' }}>Solicitada</option>
            <option value="Resuelta" {{ $patient->patientInfo->revision == 'Resuelta' ? 'selected':'' }}>Resuelta</option>
        </select>
    </div>

    <div class="form-group col-sm-6">
        {!! Form::label('rs_reclamacion', 'Reclamación') !!}
        <select class="form-control" id="rs_reclamacion" name="rs_reclamacion">
            <option value="">Selecciona una opción</option>
            <option value="Si" {{ $patient->patientInfo->reclamacion == 'Si' ? 'selected':'' }}>Si</option>
            <option value="No" {{ $patient->patientInfo->reclamacion == 'No' ? 'selected':'' }}>No</option>
        </select>
    </div>

    <div class="form-group col-sm-6">
        {!! Form::label('rs_tipo_ayuda', 'Tipo de ayuda:') !!}
        <select class="form-control select2" id="rs_tipo_ayuda" name="rs_tipo_ayuda[]" multiple="multiple">
            <option value="">Selecciona una opción</option>
            <option value="Plaza en centro" {{ $patient->patientInfo->rs_tipo_ayuda != null ? in_array('Plaza en centro',$patient->patientInfo->rs_tipo_ayuda) : false ? 'selected' : '' }}>Plaza en centro</option>
            <option value="Ayudas subsidios económicos" {{ $patient->patientInfo->rs_tipo_ayuda != null ? in_array('Ayudas subsidios económicos',$patient->patientInfo->rs_tipo_ayuda) : false ? 'selected' : '' }}>Ayudas subsidios económicos</option>
            <option value="Prestaciones Sociales" {{ $patient->patientInfo->rs_tipo_ayuda != null ? in_array('Prestaciones Sociales',$patient->patientInfo->rs_tipo_ayuda) : false ? 'selected' : '' }}>Prestaciones Sociales</option>
            <option value="Tarjeta de aparcamiento" {{ $patient->patientInfo->rs_tipo_ayuda != null ? in_array('Tarjeta de aparcamiento',$patient->patientInfo->rs_tipo_ayuda) : false ? 'selected' : '' }}>Tarjeta de aparcamiento</option>
            <option value="Otras" {{ $patient->patientInfo->rs_tipo_ayuda != null ? in_array('Otras',$patient->patientInfo->rs_tipo_ayuda) : false ? 'selected' : '' }}>Otras</option>
        </select>
    </div>

    <div class="form-group col-sm-6"">
        {!! Form::label('rs_otros', 'Otros:') !!}
        {!! Form::text('rs_otros', $patient->patientInfo->rs_otros, ['class' => 'form-control']) !!}
    </div>

    <hr />
    <div class="form-group col-sm-12">
        <h4 class="m-0 font-weight-bold text-primary">Fechas de trámites relacionados</h3>
    </div>

    <div class="form-group col-sm-6">
        {!! Form::label('rs_ultimo_tramite', 'Último trámite realizado:') !!}
        <select class="form-control select2" id="rs_ultimo_tramite" name="rs_ultimo_tramite[]" multiple="multiple">
            <option value="">Selecciona una opción</option>
            <option value="Solicitud Reconocimiento Depedencia" {{ $patient->patientInfo->rs_ultimo_tramite != null ? in_array('Solicitud Reconocimiento Depedencia',$patient->patientInfo->rs_ultimo_tramite) : false ? 'selected' : '' }}>Solicitud Reconocimiento Depedencia</option>
            <option value="Solicitud Reconocimiento Discapacidad" {{ $patient->patientInfo->rs_ultimo_tramite != null ? in_array('Solicitud Reconocimiento Discapacidad',$patient->patientInfo->rs_ultimo_tramite) : false ? 'selected' : '' }}>Solicitud Reconocimiento Discapacidad</option>
            <option value="Solicitud Revisión de Grado Dependencia" {{ $patient->patientInfo->rs_ultimo_tramite != null ? in_array('Solicitud Revisión de Grado Dependencia',$patient->patientInfo->rs_ultimo_tramite) : false ? 'selected' : '' }}>Solicitud Revisión de Grado Dependencia</option>
            <option value="Solicitud Revisión de Grado Discapacidad" {{ $patient->patientInfo->rs_ultimo_tramite != null ? in_array('Solicitud Revisión de Grado Discapacidad',$patient->patientInfo->rs_ultimo_tramite) : false ? 'selected' : '' }}>Solicitud Revisión de Grado Discapacidad</option>
            <option value="Solicitud Cambio de PIA" {{ $patient->patientInfo->rs_ultimo_tramite != null ? in_array('Solicitud Cambio de PIA',$patient->patientInfo->rs_ultimo_tramite) : false ? 'selected' : '' }}>Solicitud Cambio de PIA</option>
            <option value="Reclamación ante la DGDD" {{ $patient->patientInfo->rs_ultimo_tramite != null ? in_array('Reclamación ante la DGDD',$patient->patientInfo->rs_ultimo_tramite) : false ? 'selected' : '' }}>Reclamación ante la DGDD</option>
        </select>
    </div>

    <div class="form-group col-sm-6">
    {!! Form::label('rs_fecha_registro', 'Fecha de registro de entrada:') !!}
        {!! Form::text('rs_fecha_registro', $patient->patientInfo->rs_fecha_registro, ['class' =>
        'form-control','id'=>'rs_fecha_registro']) !!}
    </div>

    <div class="form-group col-sm-6">
        {!! Form::label('rs_proximo_tramite', 'Próximo trámite:') !!}
        <select class="form-control select2" id="rs_proximo_tramite" name="rs_proximo_tramite[]" multiple="multiple">
            <option value="">Selecciona una opción</option>
            <option value="Solicitud Reconocimiento Depedencia" {{ $patient->patientInfo->rs_proximo_tramite != null ? in_array('Solicitud Reconocimiento Depedencia',$patient->patientInfo->rs_proximo_tramite) : false ? 'selected' : '' }}>Solicitud Reconocimiento Depedencia</option>
            <option value="Solicitud Reconocimiento Discapacidad" {{ $patient->patientInfo->rs_proximo_tramite != null ? in_array('Solicitud Reconocimiento Discapacidad',$patient->patientInfo->rs_proximo_tramite) : false ? 'selected' : '' }}>Solicitud Reconocimiento Discapacidad</option>
            <option value="Solicitud Revisión de Grado Dependencia" {{ $patient->patientInfo->rs_proximo_tramite != null ? in_array('Solicitud Revisión de Grado Dependencia',$patient->patientInfo->rs_proximo_tramite) : false ? 'selected' : '' }}>Solicitud Revisión de Grado Dependencia</option>
            <option value="Solicitud Revisión de Grado Discapacidad" {{ $patient->patientInfo->rs_proximo_tramite != null ? in_array('Solicitud Revisión de Grado Discapacidad',$patient->patientInfo->rs_proximo_tramite) : false ? 'selected' : '' }}>Solicitud Revisión de Grado Discapacidad</option>
            <option value="Solicitud Cambio de PIA" {{ $patient->patientInfo->rs_proximo_tramite != null ? in_array('Solicitud Cambio de PIA',$patient->patientInfo->rs_proximo_tramite) : false ? 'selected' : '' }}>Solicitud Cambio de PIA</option>
            <option value="Reclamación ante la DGDD" {{ $patient->patientInfo->rs_proximo_tramite != null ? in_array('Reclamación ante la DGDD',$patient->patientInfo->rs_proximo_tramite) : false ? 'selected' : '' }}>Reclamación ante la DGDD</option>
        </select>
    </div>
    
</div>