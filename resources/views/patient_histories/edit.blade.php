@extends('layouts.home') @section('title', "Edit") @section('content')

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 my-3 text-gray-800">Editar Historial</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edición</h6>
        </div>


        <div class="card-body">


            {!! Form::model($patientHistory, ['route' => ['patientHistories.update', $patientHistory->id], 'method' => 'patch', 'enctype' => 'multipart/form-data']) !!} {{-- @php dd($patientHistory) @endphp --}}




            <div class="row m-0 p-3">


                @section('scripts')
                <script type="text/javascript">
                    $('#reg_accion').datetimepicker({
                        format: 'dd-mm-YYYY',
                        useCurrent: true
                    })
                </script>
                @endsection

                <!-- Reg fecha realizacion Field -->
                <div class="form-group col-sm-6">
                    {!! Form::label('acc_fecha_realiz', 'Fecha de la acción:') !!} {!! Form::date('acc_fecha_realiz', $patientHistory->acc_fecha_realiz, ['class' => 'form-control','id'=>'rea_accion', 'required' => 'required']) !!}
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
                    {!! Form::label('acc_tipo_accion', 'Tipo Acción/Tarea:') !!} {!! Form::select('acc_tipo_accion', [ null => 'Selecciona una:', 'Solicitud Demandas' => 'Solicitud Demandas', 'Formalización Demandas' => 'Formalización Demandas', 'Intervenciones en Centro'
                    => 'Intervenciones en Centro', 'Intervenciones en Domicilio' => 'Intervenciones en Domicilio', 'Seguimiento de Salud' => 'Seguimiento de Salud', 'Documentación' => 'Documentación', 'Contabilidad' => 'Contabilidad', 'Valoraciones iniciales'=>
                    'Valoraciones iniciales', 'Incidencias'=> 'Incidencias', 'Felicitaciones'=> 'Felicitaciones', 'Quejas y reclamaciones'=> 'Quejas y reclamaciones', 'Otras' => 'Otras'], null, ['class' => 'form-control', 'required'=>'required', 'id'
                    => 'acc_tipo_accion']) !!}
                </div>

                <script>
                    $('#acc_tipo_accion').on('change', function() {
                        change_value_history($('#acc_tipo_accion').val());
                    });

                    $(document).ready(function() {
                        change_value_history($('#acc_tipo_accion').val());
                    });

                    function change_value_history(value) {
                        console.log(value);
                        if ($("#acc_tipo_accion").val() === 'Solicitud Demandas' || $("#acc_tipo_accion").val() === 'Formalización Demandas') {
                            $('#solic_demandas').css('display', 'block');
                            $('#solic_demandas_opt').attr('required', 'required');
                            $('#solic_demandas_opt').attr('name', 'acc_subtipo_accion');
                        } else {
                            $('#solic_demandas').css('display', 'none');
                            $('#solic_demandas_opt').removeAttr('required', 'required');
                            $('#solic_demandas_opt').removeAttr('name', 'acc_subtipo_accion');
                        }

                        if (value == 'Tipo intervenciones en Centro') {
                            $('#interv_centro').css('display', 'block');
                            $('#interv_centro_opt').attr('required', 'required');
                            $('#interv_centro_opt').attr('name', 'acc_subtipo_accion');
                        } else {
                            $('#interv_centro').css('display', 'none');
                            $('#interv_centro_opt').removeAttr('required', 'required');
                            $('#interv_centro_opt').removeAttr('name', 'acc_subtipo_accion');
                        }

                        if (value == 'Intervenciones en Domicilio') {
                            $('#interv_domic').css('display', 'block');
                            $('#interv_domic_opt').attr('required', 'required');
                            $('#interv_domic_opt').attr('name', 'acc_subtipo_accion');
                        } else {
                            $('#interv_domic').css('display', 'none');
                            $('#interv_domic_opt').removeAttr('required', 'required');
                            $('#interv_domic_opt').removeAttr('name', 'acc_subtipo_accion');
                        }

                        if (value == 'Seguimiento de Salud') {
                            $('#seg_salud').css('display', 'block');
                            $('#seg_salud_opt').attr('required', 'required');
                            $('#seg_salud_opt').attr('name', 'acc_subtipo_accion');
                        } else {
                            $('#seg_salud').css('display', 'none');
                            $('#seg_salud_opt').removeAttr('required', 'required');
                            $('#seg_salud_opt').removeAttr('name', 'acc_subtipo_accion');
                        }

                        if (value == 'Documentación') {
                            $('#docu_cont').css('display', 'block');
                            $('#docu_cont_opt').attr('required', 'required');
                            $('#docu_cont_opt').attr('name', 'acc_subtipo_accion');
                        } else {
                            $('#docu_cont').css('display', 'none');
                            $('#docu_cont_opt').removeAttr('required', 'required');
                            $('#docu_cont_opt').removeAttr('name', 'acc_subtipo_accion');
                        }

                        if (value == 'Contabilidad') {
                            $('#contab_cont').css('display', 'block');
                            $('#contab_cont_opt').attr('required', 'required');
                            $('#contab_cont_opt').attr('name', 'acc_subtipo_accion');
                        } else {
                            $('#contab_cont').css('display', 'none');
                            $('#contab_cont_opt').removeAttr('required', 'required');
                            $('#contab_cont_opt').removeAttr('name', 'acc_subtipo_accion');
                        }

                        if (value == 'Valoraciones iniciales') {
                            $('#valoracion_ini').css('display', 'block');
                            $('#valoracion_ini_opt').attr('required', 'required');
                            $('#valoracion_ini_opt').attr('name', 'acc_subtipo_accion');
                        } else {
                            $('#valoracion_ini').css('display', 'none');
                            $('#valoracion_ini_opt').removeAttr('required', 'required');
                            $('#valoracion_ini_opt').removeAttr('name', 'acc_subtipo_accion');
                        }

                        if (value == 'Otras') {
                            $('#acc_tipo_accion_otro').css('display', 'block');
                            $('#acc_tipo_accion_otro_cont_id').attr('required', 'required');
                            $('#acc_tipo_accion_otro_cont_id').attr('name', 'acc_subtipo_accion');
                        } else {
                            $('#acc_tipo_accion_otro_cont').css('display', 'none');
                            $('#acc_tipo_accion_otro_cont_id').removeAttr('required', 'required');
                            $('#acc_tipo_accion_otro_cont_id').removeAttr('name', 'acc_subtipo_accion');
                        }
                    }
                </script>



                <!-- Tipo Subaccion solicitud demandas/formalizacion Field -->
                <div class="form-group col-sm-12 subtipo_acc" id="solic_demandas" style="display: none">
                    {!! Form::label('acc_subtipo_accion', 'Subtipo Acción/Tarea:') !!} {!! Form::select('acc_subtipo_accion', [ null => 'Selecciona una opcion', 'Alta' => 'Alta', 'Cambio' => 'Cambio', 'Suspensión' => 'Suspensión', 'Baja' => 'Baja', 'Apoyo Emocional' => 'Apoyo
                    Emocional', 'Intervención Familiar' => 'Intervención Familiar', 'Asesoramiento fisico' => 'Asesoramiento Físico', 'Asesoramiento social' => 'Asesoramiento Social', 'Asesoramiento funcional' => 'Asesoramiento Funcional', 'Asesoramiento
                    cognitivo' => 'Asesoramiento Cognitivo', 'Formación individual' => 'Formación individual', 'Intervención familiar' => 'Intervención familiar', 'Otras' => 'Otras (especificar)'], null, ['class' => 'form-control acc_subtipo_accion' ,
                    'id' => 'solic_demandas_opt']) !!}
                </div>



                <!-- Tipo intervencion centro Field -->
                <div class="form-group col-sm-12 " id="interv_centro" style="display: none">
                    {!! Form::label('acc_subtipo_accion', 'Subtipo Acción/Tarea:') !!} {!! Form::select('acc_subtipo_accion', [ null => 'Selecciona una opcion', 'Valoración Trab.Social' => 'Valoración Trab.Social', 'Visita Centro' => 'Visita Centro', 'Acogida 1er Día' =>
                    'Acogida 1er Día', 'Entrega PIA' => 'Entrega PIA', 'Apoyo Emocional' => 'Apoyo Emocional', 'Asesoramiento Individual' => 'Asesoramiento Individual', 'Asesoramiento Físico' => 'Aseoramiento Físico', 'Asesoramiento Social' => 'Asesoramiento
                    Social', 'Asesoramiento Funcional' => 'Asesoramiento Funcional', 'Asesoramiento Cognitivo' => 'Asesoramiento Cognitivo', 'Formación Individual' => 'Formación Individual', 'Intervención Familiar' => 'Intervención Familiar', 'Intervención
                    Física Individual' => 'Intervención Física Individual', 'Intervención Funcional Individual' => 'Intervención Funcional Individual', 'Otras' => 'Otras (especificar)'], null, ['class' => 'form-control acc_subtipo_accion', 'id' => 'interv_centro_opt'])
                    !!}
                </div>




                <!-- Tipo intervencion domicilio Field -->
                <div class="form-group col-sm-12 " id="interv_domic" style="display: none">
                    {!! Form::label('acc_subtipo_accion', 'Subtipo Acción/Tarea:') !!} {!! Form::select('acc_subtipo_accion', [ null => 'Selecciona una opcion', 'Valoración Trab.Social' => 'Valoración Trab.Social', 'Valoración Acogida Inicial Equipo' => 'Valoración Acogida
                    Inicial Equipo', 'Entrega PIA' => 'Entrega PIA', 'Intervención/Mediación Familiar' => 'Intervención/Mediación Familiar', 'Asesoramiento Individual' => 'Asesoramiento Individual', 'Apoyo Emocional' => 'Apoyo Emocional', 'Formación Individual'
                    => 'Formación Individual', 'Fisioterapia a cuidador/a' => 'Fisioterapia a cuidador/a', 'Seguimiento Psicológico Mensual' => 'Seguimiento Psicológico Mensual', 'Asesoramiento Físico' => 'Asesoramiento Físico', 'Asesoramiento Social'
                    => 'Asesoramiento Social', 'Asesoramiento Funcional' => 'Asesoramiento Funcional', 'Asesoramiento cognitivo' => 'Asesoramiento cognitivo', 'Otras' => 'Otras (especificar)'], null, ['class' => 'form-control acc_subtipo_accion', 'id'
                    => 'interv_domic_opt']) !!}
                </div>




                <!-- seguimiento salud Field -->
                <div class="form-group col-sm-12 " id="seg_salud" style="display: none">
                    {!! Form::label('acc_subtipo_accion', 'Subtipo Acción/Tarea:') !!} {!! Form::select('acc_subtipo_accion', [ null => 'Selecciona una opcion', 'Cambio valoración de Indicador salud' => 'Cambio valoración de Indicador salud', 'Seguimiento Socio Familiar'
                    => 'Seguimiento Socio Familiar', 'Seguimiento Cognitivo' => 'Seguimiento Cognitivo', 'Seguimiento Físico' => 'Seguimiento Físico', 'Seguimiento Emocional' => 'Seguimiento Emocional', 'Seguimiento Funcional' => 'Seguimiento Funcional',
                    'Nuevo diagnóstico principal' => 'Nuevo diagnóstico principal', 'Cambio importante salud' => 'Cambio importante salud', 'Ficha de seguimiento de intervención' => 'Ficha de seguimiento de intervención', 'Otras' => 'Otras (especificar)'],
                    null, ['class' => 'form-control acc_subtipo_accion', 'id' => 'seg_salud_opt']) !!}
                </div>




                <!-- Documentacion Field -->
                <div class="form-group col-sm-12 " id="docu_cont" style="display: none">
                    {!! Form::label('acc_subtipo_accion', 'Subtipo Acción/Tarea:') !!} {!! Form::select('acc_subtipo_accion', [ null => 'Selecciona una opcion', 'Solicitud documento a Acufade' => 'Solicitud documento a Acufade', 'Entrega documento Acufade (a familia)' =>
                    'Entrega documento Acufade (a familia)', 'Solicitud documento salud (a familia)' => 'Solicitud documento salud (a familia)', 'Otras' => 'Otras (entregar)'], null, ['class' => 'form-control acc_subtipo_accion', 'id' => 'docu_cont_opt'
                    ]) !!}
                </div>





                <!-- Contabilidad Field -->
                <div class="form-group col-sm-12 " id="contab_cont" style="display: none">
                    {!! Form::label('acc_subtipo_accion', 'Subtipo Acción/Tarea:') !!} {!! Form::select('acc_subtipo_accion', [ null => 'Selecciona una opcion', 'Comunicación impago a usuario/a' => 'Comunicación impago a usuario/a', 'Comunicación impago a DGDD' => 'Comunicación
                    impago a DGDD', 'Cambio de forma de pago' => 'Cambio de forma de pago', 'Cambio IBAN Bancario' => 'Cambio IBAN Bancario', 'Cambio importe facturación' => 'Cambio importe facturación', 'Cambio cuota socio' => 'Cambio cuota socio', 'Situación
                    impago' => 'Situación impago', 'Abono de deuda' => 'Abono de deuda', 'Otras' => 'Otras (especificar)'], null, ['class' => 'form-control acc_subtipo_accion', 'id' => 'contab_cont_opt']) !!}
                </div>




                <!-- Valoraciones iniciales -->
                <div class="form-group col-sm-12 " id="valoracion_ini" style="display: none">
                    {!! Form::label('acc_subtipo_accion', 'Subtipo Acción/Tarea:') !!} {!! Form::select('acc_subtipo_accion', [ null => 'Selecciona una opcion', 'Ficha de Acogida' => 'Ficha de Acogida', 'Valoración Adaptación' =>'Valoración Adaptación' , 'Valoración Inicial
                    de Indicador Salud' =>'Valoración Inicial de Indicador Salud' , 'Valoración Inicial Cognitiva' =>'Valoración Inicial Cognitiva' , 'Valoración Inicial Física' =>'Valoración Inicial Física' , 'Valoración Inicial Funcional' =>'Valoración
                    Inicial Funcional' , 'Valoración Inicial Emocional' =>'Valoración Inicial Emocional' , 'Otras' => 'Otras (especificar)'], null, ['class' => 'form-control acc_subtipo_accion', 'id' => 'valoracion_ini_opt']) !!}
                </div>



                <!-- script otro accion -->
                <script>
                    $('.acc_subtipo_accion').on('change', function() {
                        if ($(this).val() === 'Otras') {
                            $('#otro_acc_sub_id').css('display', 'block');
                            $('#otro_acc_sub_cont_id').attr('required', 'required');
                            $('#otro_acc_sub_cont_id').attr('name', 'acc_subtipo_accion');
                        } else {
                            $('#otro_acc_sub_id').css('display', 'none');
                            $('#otro_acc_sub_cont_id').removeAttr('required', 'required');
                            $('#otro_acc_sub_cont_id').removeAttr('name', 'acc_subtipo_accion');
                        }
                    });
                </script>


                <!-- Otro tipo accion-->
                <div class="form-group col-sm-12 p-3 bg-secondary" id="acc_tipo_accion_otro" style="display: none">
                    {!! Form::label('acc_tipo_accion_otro', 'Si no esta en la lista, especifica cual:') !!} {!! Form::text('acc_tipo_accion_otro', null, ['class' => 'form-control', 'id' => 'acc_tipo_accion_otro_cont_id']) !!}
                </div>


                <!-- Otro subtipo accion-->
                <div class="form-group col-sm-12 p-3 bg-secondary" id="otro_acc_sub_id" style="display: none">
                    {!! Form::label('otro_acc_sub', 'Si no esta en la lista, especifica cual:') !!} {!! Form::text('otro_acc_sub', null, ['class' => 'form-control', 'id' => 'otro_acc_sub_cont_id']) !!}
                </div>





                <!-- Persona responsable Field -->
                <div class="form-group col-sm-12 col-lg-12">
                    {!! Form::label('destinado_a', 'Destinado a:') !!} {!! Form::select('destinado_a[]', [ 'Persona Usuaria' => 'Persona Usuaria', 'Cuidadora Familiar' => 'Cuidadora Familiar', 'Cuidadora Profesional' => 'Cuidadora Profesional', 'Profesional Externa' => 'Profesional
                    Externa', 'Otras' => 'Otras'], null, ['class' => 'select2 form-control','id' => 'destinado_a','multiple' => 'multiple', 'required'=>'required']) !!}
                </div>

                <!-- Observaciones Field -->
                <div class="form-group col-sm-12 col-lg-12">
                    {!! Form::label('acc_descrip', 'Descripción:') !!} {!! Form::textarea('acc_descrip', null, ['class' => 'form-control', 'id' => 'acc_descrip']) !!}
                </div>



                <!-- Persona responsable Field -->
                <div class="form-group col-sm-12 col-lg-12">
                    {!! Form::label('persona_responsable', 'Profesional Responsable:') !!} {!! Form::text('persona_responsable', null, ['class' => 'form-control', 'required'=>'required']) !!}
                </div>



                <!-- Observaciones Field -->
                <div class="form-group col-sm-12 col-lg-12">
                    {!! Form::label('acc_observaciones', 'Observaciones:') !!} {!! Form::text('acc_observaciones', null, ['class' => 'form-control']) !!}
                </div>




                <!-- Submit Field -->
                <div class="form-group col-sm-12">
                    {!! Form::submit('Actualizar historial', ['class' => 'btn btn-primary float-right']) !!}
                    <a href="{!! route('patients.index') !!}" class="btn btn-default float-right">Cancelar</a>
                </div>
            </div>
            {!! Form::close() !!}


        </div>
    </div>
</div>
@endsection