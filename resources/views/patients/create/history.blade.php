<div class="row m-0 p-3">

    <!-- Reg Fecha registro Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('acc_fecha_reg', 'Fecha de registro:') !!}
        {!! Form::date('acc_fecha_reg', null, ['class' => 'form-control','id'=>'reg_accion', 'required' => 'required'])
        !!}
    </div>

    @section('scripts')
    <script type="text/javascript">
        $('#reg_accion').datetimepicker({
            format: 'dd-mm-YYYY',
            useCurrent: false
        })
    </script>
    @endsection

    <!-- Reg fecha realizacion Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('acc_fecha_realiz', 'Fecha realización:') !!}
        {!! Form::date('acc_fecha_realiz', null, ['class' => 'form-control','id'=>'rea_accion', 'required' =>
        'required']) !!}
    </div>

    @section('scripts')
    <script type="text/javascript">
        $('#rea_accion').datetimepicker({
            format: 'dd-mm-YYYY',
            useCurrent: false
        })
    </script>
    @endsection

    <!-- Tipo accion Field -->
    <div class="form-group col-sm-12">
        {!! Form::label('acc_tipo_accion', 'Tipo Acción/Tarea:') !!}
        {!! Form::select('acc_tipo_accion', [
        '' => 'Selecciona una:',
        'Solicitud Demandas' => 'Solicitud Demandas',
        'Formalización Demandas' => 'Formalización Demandas',
        'Tipo intervenciones en Centro' => 'Tipo intervenciones en Centro',
        'Tipo de intervenciones en Domicilio' => 'Tipo de intervenciones en Domicilio',
        'Seguimiento de Salud' => 'Seguimiento de Salud',
        'Documentación' => 'Documentación',
        'Contabilidad' => 'Contabilidad',
        'Otras' => 'Otras'],
        null, ['class' => 'form-control', 'onchange' => 'histo_accion(this.value, this.id);']) !!}
    </div>


    <!-- Tipo Subaccion solicitud demandas/formalizacion Field -->
    <div class="form-group col-sm-12 flagy" id="solic_demandas_cont" hidden="hidden">
        {!! Form::label('acc_subtipo_accion', 'Subtipo Acción/Tarea:') !!}
        {!! Form::select('acc_subtipo_accion', [
        '' => 'Selecciona una:',
        'Alta' => 'Alta',
        'Cambio' => 'Cambio',
        'Suspensión' => 'Suspensión',
        'Baja' => 'Baja',
        'Información y Asesoramiento' => 'Información y Asesoramiento',
        'Apoyo Emocional' => 'Apoyo Emocional',
        'Intervención Familiar' => 'Intervención Familiar',
        'Otras (especificar)' => 'Otras (especificar)'],
        null, ['class' => 'form-control flag']) !!}
    </div>

    <!-- Tipo intervencion centro Field -->
    <div class="form-group col-sm-12 flagy" id="interv_centro_cont" hidden="hidden">
        {!! Form::label('acc_subtipo_accion', 'Subtipo Acción/Tarea:') !!}
        {!! Form::select('acc_subtipo_accion', [
        '' => 'Selecciona una:',
        'Valoración Trab.Social' => 'Valoración Trab.Social',
        'Visita Centro' => 'Visita Centro',
        'Acogida 1er Día' => 'Acogida 1er Día',
        'Entrega PIA' => 'Entrega PIA',
        'Apoyo Emocional' => 'Apoyo Emocional',
        'Intervención/Mediación Familiar' => 'Intervención/Mediación Familiar',
        'Asesoramiento Individual' => 'Asesoramiento Individual',
        'Otras (especificar)' => 'Otras (especificar)'],
        null, ['class' => 'form-control flag']) !!}
    </div>

    <!-- Tipo intervencion domicilio Field -->
    <div class="form-group col-sm-12 flagy" id="interv_domic_cont" hidden="hidden">
        {!! Form::label('acc_subtipo_accion', 'Subtipo Acción/Tarea:') !!}
        {!! Form::select('acc_subtipo_accion', [
        'Valoración Trab.Social' => 'Valoración Trab.Social',
        'Valoración Acogida Inicial Equipo' => 'Valoración Acogida Inicial Equipo',
        'Entrega PIA' => 'Entrega PIA',
        'Intervención/Mediación Familiar' => 'Intervención/Mediación Familiar',
        'Asesoramiento Individual' => 'Asesoramiento Individual',
        'Apoyo Emocional' => 'Apoyo Emocional',
        'Formación Individual' => 'Formación Individual',
        'Fisioterapia a cuidador/a' => 'Fisioterapia a cuidador/a',
        'Otras (especificar)' => 'Otras (especificar)'],
        null, ['class' => 'form-control flag']) !!}
    </div>

    <!-- seguimiento salud Field -->
    <div class="form-group col-sm-12 flagy" id="seg_salud_cont" hidden="hidden">
        {!! Form::label('acc_subtipo_accion', 'Subtipo Acción/Tarea:') !!}
        {!! Form::select('acc_subtipo_accion', [
        'Cambio valoración de Indicador salud' => 'Cambio valoración de Indicador salud',
        'Nuevo diagnóstico principal' => 'Nuevo diagnóstico principal',
        'Cambio importante salud' => 'Cambio importante salud',
        'Otras (especificar)' => 'Otras (especificar)'],
        null, ['class' => 'form-control flag']) !!}
    </div>

    <!-- Documentacion Field -->
    <div class="form-group col-sm-12 flagy" id="docu_cont" hidden="hidden">
        {!! Form::label('acc_subtipo_accion', 'Subtipo Acción/Tarea:') !!}
        {!! Form::select('acc_subtipo_accion', [
        'Solicitud documento a Acufade' => 'Solicitud documento a Acufade',
        'Entrega documento Acufade (a familia)' => 'Entrega documento Acufade (a familia)',
        'Solicitud documento salud (a familia)' => 'Solicitud documento salud (a familia)',
        'Otras (entregar)' => 'Otras (entregar)'],
        null, ['class' => 'form-control flag']) !!}
    </div>

    <!-- Contabilidad Field -->
    <div class="form-group col-sm-12 flagy" id="contab_cont" hidden="hidden">
        {!! Form::label('acc_subtipo_accion', 'Subtipo Acción/Tarea:') !!}
        {!! Form::select('acc_subtipo_accion', [
        'Comunicación impago a usuario/a' => 'Comunicación impago a usuario/a',
        'Comunicación impago a DGDD' => 'Comunicación impago a DGDD',
        'Cambio de forma de pago' => 'Cambio de forma de pago',
        'Cambio IBAN Bancario' => 'Cambio IBAN Bancario',
        'Cambio importe facturación' => 'Cambio importe facturación',
        'Cambio cuota socio' => 'Cambio cuota socio',
        'Situación impago' => 'Situación impago',
        'Abono de deuda' => 'Abono de deuda',
        'Otros (especificar)' => 'Otros (especificar)'],
        null, ['class' => 'form-control flag']) !!}
    </div>

    <!-- Otro -->
    <div class="form-group col-sm-12" id="acc_subtipo_accion_otro_cont" hidden="hidden">
        {!! Form::label('acc_subtipo_accion_otro', 'Si no esta en la lista, especifica cual:') !!}
        {!! Form::text('acc_subtipo_accion_otro', null, ['class' => 'form-control', 'name' => 'acc_subtipo_accion']) !!}
    </div>

    <!-- Woker Accion Field -->
    <div class="form-group col-sm-12">
        {!! Form::label('acc_woker_accion', 'Acción del trabajador:') !!}
        {!! Form::text('acc_woker_accion', null, ['class' => 'form-control', 'required' => 'required']) !!}
    </div>

    <!-- Observaciones Field -->
    <div class="form-group col-sm-12 col-lg-12">
        {!! Form::label('acc_descrip', 'Descripción:') !!}
        {!! Form::textarea('acc_descrip', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Observaciones Field -->
    <div class="form-group col-sm-12 col-lg-12">
        {!! Form::label('acc_observaciones', 'Observaciones:') !!}
        {!! Form::textarea('acc_observaciones', null, ['class' => 'form-control']) !!}
    </div>


    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        {!! Form::submit('Añadir historia', ['class' => 'btn btn-primary float-right']) !!}
        <button type="button" class="btn btn-default float-right" data-dismiss="modal">Cancelar</button>
    </div>
</div>
