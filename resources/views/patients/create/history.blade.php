<div class="row m-0 p-3">
    <!-- Reg Fecha registro Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('acc_fecha_reg', 'Fecha de registro:') !!} {!! Form::date('acc_fecha_reg', today(), ['class' =>
        'form-control','id'=>'reg_accion', 'required' => 'required', 'readonly' => 'readonly']) !!}
    </div>

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
        {!! Form::label('acc_fecha_realiz', 'Fecha de la acción:') !!} {!! Form::date('acc_fecha_realiz', null, ['class'
        => 'form-control','id'=>'rea_accion', 'required' => 'required']) !!}
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

        {!! Form::select('acc_tipo_accion', [ null =>
        'Selecciona una:', 'Solicitud Demandas' => 'Solicitud Demandas', 'Formalización Demandas' => 'Formalización
        Demandas', 'Intervenciones en Centro'
        => 'Intervenciones en Centro', 'Intervenciones en Domicilio' => 'Intervenciones en Domicilio', 'Seguimiento de
        Salud' => 'Seguimiento de Salud', 'Documentación' => 'Documentación', 'Contabilidad' => 'Contabilidad',
        'Valoraciones iniciales'=> 'Valoraciones
        iniciales', 'Incidencias'=> 'Incidencias', 'Felicitaciones'=> 'Felicitaciones', 'Quejas y reclamaciones'=>
        'Quejas y reclamaciones','Valoraciones de Seguimiento'=>'Valoraciones de Seguimiento', 
        'Seguimiento de Salud'=> 'Seguimiento de Salud',
        'Objetivos' => 'Objetivos',
        'Otras' => 'Otras'], null, ['class' => 'form-control', 'required'=>'required', 'id' =>
        'acc_tipo_accion']) !!}
    </div>

    <script>
        $('#acc_tipo_accion').on('change', function() {

            if ($(this).val() === 'Objetivos') {
                $('#objetivos').css('display', 'block');
                $('#objetivos_opt').attr('required', 'required');
                $('#objetivos_opt').attr('name', 'acc_subtipo_accion');
            } else {
                $('#objetivos').css('display', 'none');
                $('#objetivos_opt').removeAttr('required', 'required');
                $('#objetivos_opt').removeAttr('name', 'acc_subtipo_accion');
            }

            if ($(this).val() === 'Seguimiento de Salud') {
                $('#seg_salud').css('display', 'block');
                $('#seg_salud_opt').attr('required', 'required');
                $('#seg_salud_opt').attr('name', 'acc_subtipo_accion');
            } else {
                $('#seg_salud').css('display', 'none');
                $('#seg_salud_opt').removeAttr('required', 'required');
                $('#seg_salud_opt').removeAttr('name', 'acc_subtipo_accion');
            }

            if ($(this).val() === 'Valoraciones de Seguimiento') {
                $('#val_seguimiento').css('display', 'block');
                $('#val_seguimiento_opt').attr('required', 'required');
                $('#val_seguimiento_opt').attr('name', 'acc_subtipo_accion');
            } else {
                $('#val_seguimiento').css('display', 'none');
                $('#val_seguimiento_opt').removeAttr('required', 'required');
                $('#val_seguimiento_opt').removeAttr('name', 'acc_subtipo_accion');
            }


            if ($(this).val() === 'Solicitud Demandas' || $(this).val() === 'Formalización Demandas') {
                console.log('ok');
                $('#solic_demandas').css('display', 'block');
                $('#solic_demandas_opt').attr('required', 'required');
                $('#solic_demandas_opt').attr('name', 'acc_subtipo_accion');
            } else {
                $('#solic_demandas').css('display', 'none');
                $('#solic_demandas_opt').removeAttr('required', 'required');
                $('#solic_demandas_opt').removeAttr('name', 'acc_subtipo_accion');
            }

            if ($(this).val() === 'Tipo intervenciones en Centro') {
                $('#interv_centro').css('display', 'block');
                $('#interv_centro_opt').attr('required', 'required');
                $('#interv_centro_opt').attr('name', 'acc_subtipo_accion');
            } else {
                $('#interv_centro').css('display', 'none');
                $('#interv_centro_opt').removeAttr('required', 'required');
                $('#interv_centro_opt').removeAttr('name', 'acc_subtipo_accion');
            }

            if ($(this).val() === 'Intervenciones en Domicilio') {
                $('#interv_domic').css('display', 'block');
                $('#interv_domic_opt').attr('required', 'required');
                $('#interv_domic_opt').attr('name', 'acc_subtipo_accion');
            } else {
                $('#interv_domic').css('display', 'none');
                $('#interv_domic_opt').removeAttr('required', 'required');
                $('#interv_domic_opt').removeAttr('name', 'acc_subtipo_accion');
            }

            if ($(this).val() === 'Seguimiento de Salud') {
                $('#seg_salud').css('display', 'block');
                $('#seg_salud_opt').attr('required', 'required');
                $('#seg_salud_opt').attr('name', 'acc_subtipo_accion');
                $("#select-template").append(new Option("Valoración de vida accesible y funcional inicial","15"));
            } else {
                $('#seg_salud').css('display', 'none');
                $('#seg_salud_opt').removeAttr('required', 'required');
                $('#seg_salud_opt').removeAttr('name', 'acc_subtipo_accion');
                $("#select-template").find('option[value="15"]').remove();
            }

            if ($(this).val() === 'Documentación') {
                $('#docu_cont').css('display', 'block');
                $('#docu_cont_opt').attr('required', 'required');
                $('#docu_cont_opt').attr('name', 'acc_subtipo_accion');
            } else {
                $('#docu_cont').css('display', 'none');
                $('#docu_cont_opt').removeAttr('required', 'required');
                $('#docu_cont_opt').removeAttr('name', 'acc_subtipo_accion');
            }

            if ($(this).val() === 'Contabilidad') {
                $('#contab_cont').css('display', 'block');
                $('#contab_cont_opt').attr('required', 'required');
                $('#contab_cont_opt').attr('name', 'acc_subtipo_accion');
            } else {
                $('#contab_cont').css('display', 'none');
                $('#contab_cont_opt').removeAttr('required', 'required');
                $('#contab_cont_opt').removeAttr('name', 'acc_subtipo_accion');
            }

            if ($(this).val() === 'Valoraciones iniciales') {
                $('#valoracion_ini').css('display', 'block');
                $('#valoracion_ini_opt').attr('required', 'required');
                $('#valoracion_ini_opt').attr('name', 'acc_subtipo_accion');
                $("#select-template").append(new Option("Valoración de vida accesible y funcional inicial","14"));
            } else {
                $('#valoracion_ini').css('display', 'none');
                $('#valoracion_ini_opt').removeAttr('required', 'required');
                $('#valoracion_ini_opt').removeAttr('name', 'acc_subtipo_accion');
                $("#select-template").find('option[value="14"]').remove();
            }

            if ($(this).val() === 'Otras') {
                $('#acc_tipo_accion_otro').css('display', 'block');
                $('#acc_tipo_accion_otro_cont_id').attr('required', 'required');
                $('#acc_tipo_accion_otro_cont_id').attr('name', 'acc_subtipo_accion');
            } else {
                $('#acc_tipo_accion_otro_cont').css('display', 'none');
                $('#acc_tipo_accion_otro_cont_id').removeAttr('required', 'required');
                $('#acc_tipo_accion_otro_cont_id').removeAttr('name', 'acc_subtipo_accion');
            }
        });
    </script>

    <!-- Objetivos -->
    <div class="form-group col-sm-12 subtipo_acc" id="objetivos" style="display: none">
        {!! Form::label('', 'Subtipo Acción/Tarea:') !!} {!! Form::select('', [ null => 'Selecciona una opcion', 
        'Objetivos Cognitivos' => 'Objetivos Cognitivos',
        'Objetivos Emocionales' => 'Objetivos Emocionales',
        'Objetivos Físicos' => 'Objetivos Físicos',
        'Objetivos Funcionales' => 'Objetivos Funcionales'
        ], null, ['class' => 'form-control acc_subtipo_accion' , 'id' => 'objetivos_opt']) !!}
    </div>

    <!-- Seguimiento de Salud -->
    <div class="form-group col-sm-12 subtipo_acc" id="seg_salud" style="display: none">
        {!! Form::label('', 'Subtipo Acción/Tarea:') !!} {!! Form::select('', [ null => 'Selecciona una opcion', 
        'Seguimiento Sociofamiliar' => 'Seguimiento Sociofamiliar',
        'Seguimiento Cognitivo' => 'Seguimiento Cognitivo',
        'Seguimiento Físico' => 'Seguimiento Físico',
        'Seguimiento Emocional' => 'Seguimiento Emocional'
        ], null, ['class' => 'form-control acc_subtipo_accion' , 'id' => 'seg_salud_opt']) !!}
    </div>

    <!-- Valoraciones de seguimiento -->
    <div class="form-group col-sm-12 subtipo_acc" id="val_seguimiento" style="display: none">
        {!! Form::label('', 'Subtipo Acción/Tarea:') !!} {!! Form::select('', [ null => 'Selecciona una opcion', 
            'Seguimiento  Valoración social' => 'Seguimiento  Valoración social',
            'Seguimiento Valoración Cognitivo' => 'Seguimiento Valoración Cognitivo',
            'Seguimiento Valoración Emocional' => 'Seguimiento Valoración Emocional',
            'Seguimiento Valoración Físico' => 'Seguimiento Valoración Físico',
            'Seguimiento Valoración Funcional' => 'Seguimiento Valoración Funcional'
        ], null, ['class' => 'form-control acc_subtipo_accion' , 'id' => 'val_seguimiento_opt']) !!}
    </div>

    <!-- Tipo Subaccion solicitud demandas/formalizacion Field -->
    <div class="form-group col-sm-12 subtipo_acc" id="solic_demandas" style="display: none">
        {!! Form::label('', 'Subtipo Acción/Tarea:') !!} {!! Form::select('', [ null => 'Selecciona una opcion', 'Alta'
        => 'Alta', 'Cambio' => 'Cambio', 'Suspensión' => 'Suspensión', 'Baja' => 'Baja', 'Apoyo Emocional' => 'Apoyo
        Emocional', 'Intervención Familiar'
        => 'Intervención Familiar', 'Asesoramiento fisico' => 'Asesoramiento Físico', 'Asesoramiento social' =>
        'Asesoramiento Social', 'Asesoramiento funcional' => 'Asesoramiento Funcional', 'Asesoramiento cognitivo' =>
        'Asesoramiento Cognitivo', 'Formación
        individual' => 'Formación individual', 'Intervención familiar' => 'Intervención familiar', 'Programa de Hogar Accesible y Funcional (PHAF)'=>'Programa de Hogar Accesible y Funcional (PHAF)','Otras' => 'Otras
        (especificar)'], null, ['class' => 'form-control acc_subtipo_accion' , 'id' => 'solic_demandas_opt']) !!}
    </div>



    <!-- Tipo intervencion centro Field -->
    <div class="form-group col-sm-12 " id="interv_centro" style="display: none">
        {!! Form::label('', 'Subtipo Acción/Tarea:') !!} {!! Form::select('', [ null => 'Selecciona una opcion',
        'Valoración Trab.Social' => 'Valoración Trab.Social', 'Visita Centro' => 'Visita Centro', 'Acogida 1er Día' =>
        'Acogida 1er Día', 'Entrega PIA' =>
        'Entrega PIA', 'Apoyo Emocional' => 'Apoyo Emocional', 'Asesoramiento Individual' => 'Asesoramiento Individual',
        'Asesoramiento Físico' => 'Aseoramiento Físico', 'Asesoramiento Social' => 'Asesoramiento Social',
        'Asesoramiento Funcional' => 'Asesoramiento
        Funcional', 'Asesoramiento Cognitivo' => 'Asesoramiento Cognitivo', 'Formación Individual' => 'Formación
        Individual', 'Intervención Familiar' => 'Intervención Familiar', 'Intervención Física Individual' =>
        'Intervención Física Individual', 'Intervención
        Funcional Individual' => 'Intervención Funcional Individual', 'Otras' => 'Otras (especificar)'], null, ['class'
        => 'form-control acc_subtipo_accion', 'id' => 'interv_centro_opt']) !!}
    </div>




    <!-- Tipo intervencion domicilio Field -->
    <div class="form-group col-sm-12 " id="interv_domic" style="display: none">
        {!! Form::label('', 'Subtipo Acción/Tarea:') !!} {!! Form::select('', [ null => 'Selecciona una opcion',
        'Valoración Trab.Social' => 'Valoración Trab.Social', 'Valoración Acogida Inicial Equipo' => 'Valoración Acogida
        Inicial Equipo', 'Entrega PIA' =>
        'Entrega PIA', 'Intervención/Mediación Familiar' => 'Intervención/Mediación Familiar', 'Asesoramiento
        Individual' => 'Asesoramiento Individual', 'Apoyo Emocional' => 'Apoyo Emocional', 'Formación Individual' =>
        'Formación Individual', 'Fisioterapia
        a cuidador/a' => 'Fisioterapia a cuidador/a', 'Seguimiento Psicológico Mensual' => 'Seguimiento Psicológico
        Mensual', 'Asesoramiento Físico' => 'Asesoramiento Físico', 'Asesoramiento Social' => 'Asesoramiento Social',
        'Asesoramiento Funcional'
        => 'Asesoramiento Funcional', 'Asesoramiento cognitivo' => 'Asesoramiento cognitivo', 'Visita de Vida Accesible Inicial'=>'Visita de Vida Accesible Inicial','Visita de Vida Accesible de Seguimiento'=>'Visita de Vida Accesible de Seguimiento','Visita de Vida Accesible Puntual'=>'Visita de Vida Accesible Puntual' ,'Otras' => 'Otras
        (especificar)'], null, ['class' => 'form-control acc_subtipo_accion', 'id' => 'interv_domic_opt']) !!}
    </div>




    <!-- seguimiento salud Field -->
    <div class="form-group col-sm-12 " id="seg_salud" style="display: none">
        {!! Form::label('', 'Subtipo Acción/Tarea:') !!} {!! Form::select('', [ null => 'Selecciona una opcion', 'Cambio
        valoración de Indicador salud' => 'Cambio valoración de Indicador salud', 'Seguimiento Socio Familiar' =>
        'Seguimiento Socio Familiar', 'Seguimiento
        Cognitivo' => 'Seguimiento Cognitivo', 'Seguimiento Físico' => 'Seguimiento Físico', 'Seguimiento Emocional' =>
        'Seguimiento Emocional', 'Seguimiento Funcional' => 'Seguimiento Funcional', 'Nuevo diagnóstico principal' =>
        'Nuevo diagnóstico principal',
        'Cambio importante salud' => 'Cambio importante salud', 'Ficha de seguimiento de intervención' => 'Ficha de
        seguimiento de intervención', 'Seguimiento Vida accesible y funcional '=>'Seguimiento Vida accesible y funcional ','Otras' => 'Otras (especificar)'], null, ['class' => 'form-control
        acc_subtipo_accion', 'id' => 'seg_salud_opt'])
        !!}
    </div>




    <!-- Documentacion Field -->
    <div class="form-group col-sm-12 " id="docu_cont" style="display: none">
        {!! Form::label('', 'Subtipo Acción/Tarea:') !!} {!! Form::select('', [ null => 'Selecciona una opcion',
        'Solicitud documento a Acufade' => 'Solicitud documento a Acufade', 'Entrega documento Acufade (a familia)' =>
        'Entrega documento Acufade (a familia)',
        'Solicitud documento salud (a familia)' => 'Solicitud documento salud (a familia)', 'Otras' => 'Otras
        (entregar)'], null, ['class' => 'form-control acc_subtipo_accion', 'id' => 'docu_cont_opt' ]) !!}
    </div>





    <!-- Contabilidad Field -->
    <div class="form-group col-sm-12 " id="contab_cont" style="display: none">
        {!! Form::label('', 'Subtipo Acción/Tarea:') !!} {!! Form::select('', [ null => 'Selecciona una opcion',
        'Comunicación impago a usuario/a' => 'Comunicación impago a usuario/a', 'Comunicación impago a DGDD' =>
        'Comunicación impago a DGDD', 'Cambio de forma
        de pago' => 'Cambio de forma de pago', 'Cambio IBAN Bancario' => 'Cambio IBAN Bancario', 'Cambio importe
        facturación' => 'Cambio importe facturación', 'Cambio cuota socio' => 'Cambio cuota socio', 'Situación impago'
        => 'Situación impago', 'Abono
        de deuda' => 'Abono de deuda', 'Otras' => 'Otras (especificar)'], null, ['class' => 'form-control
        acc_subtipo_accion', 'id' => 'contab_cont_opt']) !!}
    </div>




    <!-- Valoraciones iniciales -->
    <div class="form-group col-sm-12 " id="valoracion_ini" style="display: none">
        {!! Form::label('', 'Subtipo Acción/Tarea:') !!} {!! Form::select('', [ null => 'Selecciona una opcion',
        'Primera Entrevista' =>'Primera Entrevista', 'Valoración Adaptación' =>'Valoración Adaptación' , 'Valoración
        Inicial de Indicador Salud' =>'Valoración
        Inicial de Indicador Salud' , 'Valoración Inicial Cognitiva' =>'Valoración Inicial Cognitiva' , 'Valoración
        Inicial Física' =>'Valoración Inicial Física' , 'Valoración Inicial Funcional' =>'Valoración Inicial Funcional'
        , 'Valoración Inicial Emocional'
        =>'Valoración Inicial Emocional' , 'Visita de Vida Accesible inicial '=>'Visita de Vida Accesible inicial ','Otras' => 'Otras (especificar)'], null, ['class' => 'form-control
        acc_subtipo_accion', 'id' => 'valoracion_ini_opt']) !!}
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
        {!! Form::label('acc_tipo_accion_otro', 'Si no esta en la lista, especifica cual:') !!} {!!
        Form::text('acc_tipo_accion_otro', null, ['class' => 'form-control', 'id' => 'acc_tipo_accion_otro_cont_id'])
        !!}
    </div>


    <!-- Otro subtipo accion-->
    <div class="form-group col-sm-12 p-3 bg-secondary" id="otro_acc_sub_id" style="display: none">
        {!! Form::label('otro_acc_sub', 'Si no esta en la lista, especifica cual:') !!} {!! Form::text('otro_acc_sub',
        null, ['class' => 'form-control', 'id' => 'otro_acc_sub_cont_id']) !!}
    </div>





    <!-- Persona responsable Field -->
    <div class="form-group col-sm-12 col-lg-12">
        {!! Form::label('destinado_a', 'Destinado a:') !!} {!! Form::select('destinado_a[]', [ 'Persona Usuaria' =>
        'Persona Usuaria', 'Cuidadora Familiar' => 'Cuidadora Familiar', 'Cuidadora Profesional' => 'Cuidadora
        Profesional', 'Profesional Externa' => 'Profesional
        Externa', 'Otras' => 'Otras'], null, ['class' => 'select2 form-control','id' => 'destinado_a','multiple' =>
        'multiple', 'required'=>'required']) !!}
    </div>


    @if(in_array( Auth::user()->role_id,[1,2,3]) )
    <div class="form-group col-md-12 col-lg-12">
        {!! Form::label('', 'Selecciona una plantilla para cargar:') !!}
        <div class="row">
            <div class="col-md-7 col-lg-8">
                {!! Form::select('', [ '' => 'Selecciona plantilla', '1' => 'Seguimiento Sociofamiliar', '2' =>
                'Segumiento cognitivo', '3' => 'Seguimiento Físico', '4' => 'Seguimiento Emocional', '5' => 'Seguimiento
                Funcional', '6' => 'Valoracion Inicial Emocional',
                '7' => 'Valoración inicial coginitiva', '8' => 'Valoración Inicial TO', '10' => 'Valoración Inicial
                Fisioterapéutica', '9' => 'Primera entrevista', '11' => 'Inicidencias', '12' => 'Felicitaciones', '13'
                => 'Quejas y reclamaciones'], null,
                ['class' => 'form-control', 'id' => 'select-template']) !!}
            </div>

            <div class="col-md-5 col-lg-4">
                <a class="btn btn-block btn-secondary" id="add-template"
                    onclick="return confirm('Al añadir una nueva plantilla, borrarás todo el contenido anterior')"
                    href="#">Añadir plantilla</a>
            </div>
        </div>
    </div>

    <script>
        $('#add-template').click(function() {
            switch (parseInt($('#select-template').val())) {
                case 1:
                    $(".note-editable").empty();
                    $('#acc_descrip').html(add_template_all() + add_template_1());
                    $('.note-editable').html(add_template_all() + add_template_1());
                    break;

                case 2:
                    $(".note-editable").empty();
                    $('#acc_descrip').html(add_template_all() + add_template_2());
                    $('.note-editable').html(add_template_all() + add_template_2());
                    break;

                case 3:
                    $(".note-editable").empty();
                    $('#acc_descrip').html(add_template_all() + add_template_3());
                    $('.note-editable').html(add_template_all() + add_template_3());
                    break;

                case 4:
                    $(".note-editable").empty();
                    $('#acc_descrip').html(add_template_all() + add_template_4());
                    $('.note-editable').html(add_template_all() + add_template_4());

                    break;

                case 5:
                    $(".note-editable").empty();
                    $('#acc_descrip').html(add_template_all() + add_template_5());
                    $('.note-editable').html(add_template_all() + add_template_5());

                    break;

                case 6:
                    $(".note-editable").empty();
                    $('#acc_descrip').html(add_template_all() + add_template_6());
                    $('.note-editable').html(add_template_all() + add_template_6());

                    break;

                case 7:
                    $(".note-editable").empty();
                    $('#acc_descrip').html(add_template_all() + add_template_7());
                    $('.note-editable').html(add_template_all() + add_template_7());

                    break;

                case 8:
                    $(".note-editable").empty();
                    $('#acc_descrip').html(add_template_all() + add_template_8());
                    $('.note-editable').html(add_template_all() + add_template_8());

                    break;

                case 9:
                    $(".note-editable").empty();
                    $('#acc_descrip').html(add_template_all() + add_template_9());
                    $('.note-editable').html(add_template_all() + add_template_9());
                    break;

                case 10:
                    $(".note-editable").empty();
                    $('#acc_descrip').html(add_template_all() + add_template_10());
                    $('.note-editable').html(add_template_all() + add_template_10());
                    break;

                case 11:
                    $(".note-editable").empty();
                    $('#acc_descrip').html(add_template_11());
                    $('.note-editable').html(add_template_11());
                    break;

                case 12:
                    $(".note-editable").empty();
                    $('#acc_descrip').html(add_template_11());
                    $('.note-editable').html(add_template_11());
                    break;

                case 13:
                    $(".note-editable").empty();
                    $('#acc_descrip').html(add_template_11());
                    $('.note-editable').html(add_template_11());
                    break;
                case 14:
                    $(".note-editable").empty();
                    $('#acc_descrip').html(add_template_12());
                    $('.note-editable').html(add_template_12());
                    break;
                case 15:
                    $(".note-editable").empty();
                    $('#acc_descrip').html(add_template_13());
                    $('.note-editable').html(add_template_13());
                    break;
                default:
            }

            function add_template_all() {
                return "<p>Los siguientes ítems son sólo una guía de apoyo para la valoración del profesional, completamente flexible y adaptable.</p><hr>";

            }

            function add_template_1() {
                return "<ul>" +
                    "<li><strong>Actualización de valoración socio-familiar: </strong></li>" +
                    "<ul>" +
                    "<li><strong>Información familiar (convivencia, relaciones familiares, apoyos…): </strong></li>" +
                    "<li><strong>Información social (redes de apoyos externos, otros servicios, tramitaciónn de la Ley de Dependencia, otras ayudas económicas y aspectos legales): </strong></li>" +
                    "</ul>" +
                    "</ul>";
            }

            function add_template_2() {
                return "<ul>" +
                    "<li><strong>Valoración cognitiva (cambios no registrados–sólo psicos): </strong></li>" +
                    "<li><strong>Ajuste de objetivos.: </strong></li>" +
                    "<li><strong>Adaptación al servicio (actitud, motivación, estado de ánimo): </strong></li>" +
                    "<li><strong>Fortalezas de la persona y su familia.: </strong></li>" +
                    "<li><strong>Mejoras conseguidas (en relación con los objetivos).: </strong></li>" +
                    "<li><strong>Propuestas de cambio de actividades (Propuestas de nuevas actividades, seguimiento de actividades puestas en marcha y cambios de rutinas).: </strong></li>" +
                    "<li><strong>ACTIVIDADES (¿qué se está haciendo? ¿con qué autonomía? ¿con qué resultados?): </strong></li>" +
                    "<ul>" +
                    "<li><strong>Ejemplo válido: </strong></li>" +
                    "Sumas y restas de dos cifras llevando. Puede realizarlo sola /necesita ayuda/no puede." +
                    "Probamos restas llevando: se hace un lío con la llevada.<br>" +
                    "Reconocimiento de imágenes de animales en la tablet. Acierta casi todos /necesita que le diga la primera letra.<br>" +
                    "Dictado. Escribe a buen ritmo frases enteras.<br>" +
                    "Copia de letras sueltas. Le cuesta mucho pero lo hace.<br>" +
                    "Juegos en la tablet de encontrar las parejas. Lo resuelve bien.<br>" +
                    "Hablamos de temas de antes, como cuando iba a vendimiar. Recuerda la época en la que era.<br>" +
                    "Recordamos la fecha de hoy: me dice el día de la semana pero no el mes ni el año.<br>" +
                    "Repasamos los pasos para hacer un potaje. Los recuerda pero dice que se le echa plátanos y peras." +
                    "<li><strong>Ejemplo no valido:</strong></li>" +
                    "Cálculo y dictado (concretar)<br>" +
                    "Conversación sobre la vendimia.(concretar)<br>" +
                    "Función ejecutiva.(concretar)<br>" +
                    "Uso de la tablet con ejercicios de memoria.(concretar)<br>" +
                    "</ul>" +
                    "</ul>";
            }

            function add_template_3() {
                return "<ul>" +
                    "<li><strong>Valoración física (cambios no registrados): </strong></li>" +
                    "<li><strong>Ajuste de objetivos: </strong></li>" +
                    "<li><strong>Adaptación al servicio (actitud, motivación, estado de ánimo): </strong></li>" +
                    "<li><strong>Fortalezas de la persona y su familia.: </strong></li>" +
                    "<li><strong>Mejoras conseguidas (en relación con los objetivos).: </strong></li>" +
                    "<li><strong>Recomendaciones y propuestas para la familia (necesidades de información, asesoramiento…): </strong></li><br>" +
                    "<li><strong>Recomendaciones para el trabajo en equipo.: </strong><lig>" +
                    "</ul>";
            }

            function add_template_4() {
                return "<ul>" +
                    "<li><strong>Valoración emocional (cambios no registrados): </strong></li>" +
                    "<li><strong>Ajuste de objetivos: </strong></li>" +
                    "<li><strong>Adaptación al servicio (actitud, motivación, estado de ánimo): </strong></li>" +
                    "<li><strong>Fortalezas de la persona y su familia.: </strong></li>" +
                    "<li><strong>Mejoras conseguidas (en relación con los objetivos).: </strong></li>" +
                    "<li><strong>Recomendaciones y propuestas para la familia (necesidades de información, asesoramiento…): </strong></li>" +
                    "<li><strong>Recomendaciones para el trabajo en equipo.: </strong></li>" +
                    "</ul>";
            }

            function add_template_5() {
                return "<ul>" +
                    "<li><strong>Valoración funcional (cambios no registrados): </strong></li>" +
                    "<li><strong>Ajuste de objetivos: </strong></li>" +
                    "<li><strong>Adaptación al servicio (actitud, motivación, estado de ánimo): </strong></li>" +
                    "<li><strong>Fortalezas de la persona y su familia.: </strong></li>" +
                    "<li><strong>Mejoras conseguidas (en relación con los objetivos).: </strong></li>" +
                    "<li><strong>Recomendaciones y propuestas para la familia (necesidades de información, asesoramiento…): </strong></li>" +
                    "<li><strong>Recomendaciones para el trabajo en equipo.: </strong></li>" +
                    "</ul>";
            }

            function add_template_6() {
                return "<ul>" +
                    "<li><strong>Estado de ánimo:</strong></li>" +
                    "<li><strong>Aspectos relacionales:</strong></li>" +
                    "<li><strong>Participación y actitud:</strong></li>" +
                    "<li><strong>Otras observaciones:</strong></li>" +
                    "</ul>";
            }

            function add_template_7() {
                return "<ul>" +
                    "<li><strong>MEMORIA (inmediata, reciente, autobiográfica, semántica...)</strong></li>" +
                    "<li><strong>ORIENTACIÓN (espacial, personal, temporal y comunitaria)</strong></li>" +
                    "<li><strong>PERCEPCIÓN (visual, auditiva, táctil)</strong></li>" +
                    "<li><strong>ATENCIÓN Y CONCENTRACIÓN:</strong></li>" +
                    "<li><strong>LENGUAJE (fluidez verbal, lectura, escritura...)</strong></li>" +
                    "<li><strong>RAZONAMIENTO (comprensión, abstracción...)</strong></li>" +
                    "<li><strong>CÁLCULO</strong></li>" +
                    "<li><strong>FUNCIÓN EJECUTIVA</strong></li>" +
                    "<li><strong>PRAXIAS (Constructiva, ideomotora, ideatoria...)</strong></li>" +
                    "<li><strong>GNOSIAS (visuales, auditivas, táctiles, esquema corporal...)</strong></li>" +
                    "<li><strong>OTRAS VALORACIONES:</strong></li>" +
                    "</ul>";
            }

            function add_template_8() {
                return "<p>Indicar descripción del grado de autonomía y productos de apoyo:<p>" +
                    "<p><strong>CTIVIDADES BÁSICAS DE LA VIDA DIARIA (fisio/TO)</strong></p>" +
                    "<ul>" +
                    "<li>Caminar</li>" +
                    "<li>Subir y bajar escaleras</li>" +
                    "<li>Transferencias</li>" +
                    "<li>Equilibrio</li>" +
                    "<li>Continencia</li>" +
                    "<li>Higiene y aseo personal</li>" +
                    "<li>Imagen personal</li>" +
                    "<li>Vestido</li>" +
                    "<li>Alimentación</li>" +
                    "<li>Actividad sexual</li>" +
                    "<li>Sueño y descanso</li>" +
                    "</ul>" +
                    "<p><strong>CTIVIDADES INSTRUMENTALES DE LA VIDA DIARIA (psico/TO)</strong></p>" +
                    "<ul>" +
                    "<li>Uso de transporte</li>" +
                    "<li>Elaboración de comidas</li>" +
                    "<li>Cuidado y limpieza del hogar</li>" +
                    "<li>Realización de compras</li>" +
                    "<li>Uso de sistemas de comunicación</li>" +
                    "<li>Cuidado de mascotas</li>" +
                    "<li>Medidas de seguridad en el hogar</li>" +
                    "<li>Cuidado de salud y manutención</li>" +
                    "<li>Toma de medicación</li>" +
                    "<li>Gestión económica</li>" +
                    "</ul>" +
                    "<p><strong>CTIVIDADES AVANZADAS DE LA VIDA DIARIA (psico/TO)</strong></p>" +
                    "<ul>" +
                    "<li>Participación en la comunidad</li>" +
                    "<li>Educación</li>" +
                    "<li>Ocio y tiempo libre</li>" +
                    "</ul>";
            }

            function add_template_9() {
                return "<p><strong>PRIMERA ENTREVISTA (VALORACIÓN SOCIOFAMILIAR)</strong></p>" +
                    "<p><strong>Demanda inicial:</strong></p>" +
                    "<p><strong>Datos sociofamiliares</strong></p>" +
                    "<ul>" +
                    "<li>Historia de vida:</li>" +
                    "<li>Educación, trabajos previos y ocupaciones actuales:</li>" +
                    "<li>Intereses, gustos, temas que le gusta conversar (antes y ahora):</li>" +
                    "<li>Fortalezas:</li>" +
                    "<li>Redes de apoyo familiar:</li>" +
                    "<li>Datos importantes sobre la cuidadora:</li>" +
                    "</ul>" +
                    "<p><strong>Datos de salud (pautas y necesidades específicas durante la intervención en domicilio)</strong></p>" +
                    "<ul>" +
                    "<li>Alimentación e hidratación:</li>" +
                    "<li>Movilidad:</li>" +
                    "<li>Incontinencia e higiene personal:</li>" +
                    "<li>Medicación:</li>" +
                    "<li>Alergias:</li>" +
                    "<li>Aspectos cognitivos:</li>" +
                    "<li>Otros datos importantes:</li>" +
                    "</ul>" +
                    "<p><strong>OTROS DATOS IMPORTANTES (pautas al equipo para las primeras sesiones, estado de tramitación de la ley de dependencia," +
                    "cesión de fotos, inclusión en grupos de whatsapp, otros aspectos importantes surgidos en la conversación, etc)." +
                    "</strong></p>";
            }

            function add_template_10() {
                return "<ul>" +
                    "<li><strong>BALANCES ARTICULARES (miembros superiores, inferiores y columna)</strong></li>" +
                    "<li><strong>BALANCES MUSCULARES (miembro superior, inferior y columna)</strong></li>" +
                    "<li><strong>SENSIBILIDAD (superficial y profunda)</strong></li>" +
                    "<li><strong>DOLOR (región, tipo de dolor, intensidad y duración).</strong></li>" +
                    "<li><strong>ESTADO DE LA PIEL</strong></li>" +
                    "<li><strong>MARCHA Y EQUILIBRIO (incluir desarrollo de la valoración en riesgo de caídas)</strong></li>" +
                    "</ul>";
            }

            function add_template_11() {
                return "<p>Recuerda, aquí se registra la incidencia,felicitación, quejas o reclamación que tenga que ver con la persona usuaria.</p>" + "<hr>" +
                    "<ul>" +
                    "<li><strong>Personal Responsable</strong></li>" +
                    "<li><strong>Descripción</strong></li>" +
                    "<li><strong>Posibles Causas</strong></li>" +
                    "<li><strong>Respuesta Inmediata</strong></li>" +
                    "<li><strong>Medidas Preventivas</strong></li>" +
                    "<li><strong>Fecha de Cierre</strong></li>" +
                    "<li><strong>Observaciones</strong></li>" +
                    "</ul>";
            }

            function add_template_12() {
                return "<p><strong>ACTIVIDADES BÁSICAS DE LA VIDA DIARIA</strong></p>" +
                "<ul>" +
                "<li>Deambulación</li>" +
                "<li>Subir y bajar escaleras</li>" +
                "<li>Transferencias</li>" +
                "<li>Continencia</li>" +
                "<li>Uso del inodoro</li>" +
                "<li>Aseo e higiene personal</li>" +
                "<li>Uso de ducha o bañera</li>" +
                "<li>Vestido</li>" +
                "<li>Comer</li>" +
                "<li>Alimentación</li>" +
                "<li>Actividad sexual</li>" +
                "<li>Descanso y sueño</li>" +
                "</ul>" +
                "<p><strong>ACTIVIDADES INSTRUMENTALES DE LA VIDA DIARIA</strong></p>" +
                "<ul>" +
                "<li>Movilidad en la comunidad</li>" +
                "<li>Uso de transporte</li>" +
                "<li>Elaboración de comidas</li>" +
                "<li>Cuidado y limpieza del hogar</li>" +
                "<li>Realización de compras</li>" +
                "<li>Uso de sistemas de comunicación</li>" +
                "<li>Toma de medicación</li>" +
                "<li>Manejo de asuntos económicos</li>" +
                "<li>Cuidado de mascotas</li>" +
                "<li>Cuidado de otros</li>" +
                "<li>Cuidado y mantenimiento de la salud</li>" +
                "<li>Mantenimiento de la seguridad y responder a la emergencia</li>" +
                "</ul>" +
                "<p><strong>ACTIVIDADES AVANZADAS DE LA VIDA DIARIA</strong></p>" +
                "<ul>" +
                "<li>Participación en la comunidad</li>" +
                "<li>Educación</li>" +
                "<li>Ocio y tiempo libre</li>" +
                "</ul>"+
                "<p><strong>PRODUCTOS DE APOYO</strong></p>" +
                "<ul>" +
                "<li>Productos de apoyo utilizados</li>" +
                "<li>Productos de apoyo subvencionables prescritos</li>" +
                "<li>Productos de apoyo no subvencionables recomendados</li>" +
                "</ul>"+
                "<p><strong>ENTORNO</strong></p>" +
                "<ul>" +
                "<li>Facilitadores del hogar</li>" +
                "<li>Barreras del hogar</li>" +
                "<li>Adaptaciones recomendadas</li>" +
                "<li>Fecha próximo seguimiento</li>" +
                "<li>Valoración de vida accesible y funcional: (cambios no registrados)</li>" +
                "<li>Recomendaciones llevadas a cabo</li>" +
                "<li>Mejoras conseguidas</li>" +
                "<li>Ajuste de objetivos</li>" +
                "<li>Nuevas recomendaciones y propuestas para la familia</li>" +
                "<li>Nuevas recomendaciones para el equipo multidisciplinar</li>" +
                "</ul>"
                ;

            }

            function add_template_13() {
                return "<p><strong>ACTIVIDADES BÁSICAS DE LA VIDA DIARIA</strong></p>" +
                "<ul>" +
                "<li>Deambulación</li>" +
                "<li>Subir y bajar escaleras</li>" +
                "<li>Transferencias</li>" +
                "<li>Continencia</li>" +
                "<li>Uso del inodoro</li>" +
                "<li>Aseo e higiene personal</li>" +
                "<li>Uso de ducha o bañera</li>" +
                "<li>Vestido</li>" +
                "<li>Comer</li>" +
                "<li>Alimentación</li>" +
                "<li>Actividad sexual</li>" +
                "<li>Descanso y sueño</li>" +
                "</ul>" +
                "<p><strong>ACTIVIDADES INSTRUMENTALES DE LA VIDA DIARIA</strong></p>" + 
                "<ul>" +
                "<li>Movilidad en la comunidad</li>" +
                "<li>Uso de transporte</li>" +
                "<li>Elaboración de comidas</li>" +
                "<li>Cuidado y limpieza del hogar</li>" +
                "<li>Realización de compras</li>" +
                "<li>Uso de sistemas de comunicación</li>" +
                "<li>Toma de medicación</li>" +
                "<li>Manejo de asuntos económicos</li>" +
                "<li>Cuidado de mascotas</li>" +
                "<li>Cuidado de otros</li>" +
                "<li>Cuidado y mantenimiento de la salud</li>" +
                "<li>Mantenimiento de la seguridad y responder a la emergencia</li>" +
                "</ul>" +
                "<p><strong>ACTIVIDADES AVANZADAS DE LA VIDA DIARIA</strong></p>" + 
                "<ul>" +
                "<li>Participación en la comunidad</li>" +
                "<li>Educación</li>" +
                "<li>Ocio y tiempo libre</li>" +
                "</ul>" +
                "<p><strong>PRODUCTOS DE APOYO</strong></p>" + 
                "<ul>" +
                "<li>Productos de apoyo utilizados</li>" +
                "<li>Productos de apoyo subvencionables prescritos</li>" +
                "<li>Productos de apoyo no subvencionables recomendados</li>" +
                "</ul>"+
                "<p><strong>ENTORNO</strong></p>" + 
                "<ul>" +
                "<li>Facilitadores del hogar</li>" +
                "<li>Barreras del hogar</li>" +
                "<li>Adaptaciones recomendadas</li>" +
                "<li>Fecha próximo seguimiento</li>" +
                "<li>Valoración de vida accesible y funcional: (cambios no registrados)</li>" +
                "<li>Recomendaciones llevadas a cabo</li>" +
                "<li>Mejoras conseguidas</li>" +
                "<li>Ajuste de objetivos</li>" +
                "<li>Nuevas recomendaciones y propuestas para la familia</li>" +
                "<li>Nuevas recomendaciones para el equipo multidisciplinar</li>" +
                "</ul>"
                ;
            }

        });
    </script>
    @endif


    <!-- Observaciones Field -->
    <div class="form-group col-sm-12 col-lg-12">
        {!! Form::label('acc_descrip', 'Descripción:') !!} {!! Form::textarea('acc_descrip', null, ['class' =>
        'form-control', 'id' => 'acc_descrip']) !!}
    </div>



    <!-- Persona responsable Field -->
    <div class="form-group col-sm-12 col-lg-12">
        {!! Form::label('persona_responsable', 'Profesional Responsable:') !!} {!! Form::text('persona_responsable',
        null, ['class' => 'form-control', 'required'=>'required']) !!}
    </div>



    <!-- Observaciones Field -->
    <div class="form-group col-sm-12 col-lg-12">
        {!! Form::label('acc_observaciones', 'Observaciones:') !!} {!! Form::text('acc_observaciones', null, ['class' =>
        'form-control']) !!}
    </div>




    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        {!! Form::submit('Añadir historia', ['class' => 'btn btn-primary float-right', 'id' => 'addHistory']) !!}
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
    </div>
</div>