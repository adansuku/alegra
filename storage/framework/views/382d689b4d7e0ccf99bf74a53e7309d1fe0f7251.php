<div class="row m-0 p-3">
    <!-- Reg Fecha registro Field -->
    <div class="form-group col-sm-6">
        <?php echo Form::label('acc_fecha_reg', 'Fecha de registro:'); ?>

        <?php echo Form::date('acc_fecha_reg', today(), ['class' => 'form-control','id'=>'reg_accion', 
        'required' => 'required', 'disabled' => 'disabled']); ?>

    </div>

    <?php $__env->startSection('scripts'); ?>
    <script type="text/javascript">
        $('#reg_accion').datetimepicker({
            format: 'dd-mm-YYYY',
            useCurrent: false
        })
    </script>
    <?php $__env->stopSection(); ?>

    <!-- Reg fecha realizacion Field -->
    <div class="form-group col-sm-6">
        <?php echo Form::label('acc_fecha_realiz', 'Fecha de la acción:'); ?>

        <?php echo Form::date('acc_fecha_realiz', null, ['class' => 'form-control','id'=>'rea_accion', 'required' =>
        'required']); ?>

    </div>

    <?php $__env->startSection('scripts'); ?>
    <script type="text/javascript">
        $('#rea_accion').datetimepicker({
            format: 'dd-mm-YYYY',
            useCurrent: false
        })
    </script>
    <?php $__env->stopSection(); ?>


    <!-- Tipo accion Field -->
    <div class="form-group col-sm-12">
        <?php echo Form::label('acc_tipo_accion', 'Tipo Acción/Tarea:'); ?>

        <?php echo Form::select('acc_tipo_accion', [
        null => 'Selecciona una:',
        'Solicitud Demandas' => 'Solicitud Demandas',
        'Formalización Demandas' => 'Formalización Demandas',
        'Intervenciones en Centro' => 'Intervenciones en Centro',
        'Intervenciones en Domicilio' => 'Intervenciones en Domicilio',
        'Seguimiento de Salud' => 'Seguimiento de Salud',
        'Documentación' => 'Documentación',
        'Contabilidad' => 'Contabilidad',
        'Valoraciones iniciales' => 'Valoraciones iniciales',
        'Otras' => 'Otras'],
        null, ['class' => 'form-control', 'required'=>'required', 'id' => 'acc_tipo_accion']); ?>

    </div>

     <script>
        $('#acc_tipo_accion').on('change', function() {
            if ($(this).val() === 'Solicitud Demandas' || $(this).val() === 'Formalización Demandas') {
                console.log('ok');
                $('#solic_demandas').css('display', 'block');
                $('#solic_demandas_opt').attr('required','required');
                $('#solic_demandas_opt').attr('name','acc_subtipo_accion');
            } else{
                $('#solic_demandas').css('display', 'none');
                $('#solic_demandas_opt').removeAttr('required', 'required');
                $('#solic_demandas_opt').removeAttr('name','acc_subtipo_accion');
            }

            if ($(this).val() === 'Tipo intervenciones en Centro') {
                $('#interv_centro').css('display', 'block');
                $('#interv_centro_opt').attr('required', 'required');
                $('#interv_centro_opt').attr('name','acc_subtipo_accion');
            } else{
                $('#interv_centro').css('display', 'none');
                $('#interv_centro_opt').removeAttr('required', 'required');
                $('#interv_centro_opt').removeAttr('name','acc_subtipo_accion');
            }

            if ($(this).val() === 'Intervenciones en Domicilio') {
                $('#interv_domic').css('display', 'block');
                $('#interv_domic_opt').attr('required', 'required');
                $('#interv_domic_opt').attr('name','acc_subtipo_accion');
            } else{
                $('#interv_domic').css('display', 'none');
                $('#interv_domic_opt').removeAttr('required', 'required');
                $('#interv_domic_opt').removeAttr('name','acc_subtipo_accion');
            }

            if ($(this).val() === 'Seguimiento de Salud') {
                $('#seg_salud').css('display', 'block');
                $('#seg_salud_opt').attr('required', 'required');
                $('#seg_salud_opt').attr('name','acc_subtipo_accion');
            } else{
                $('#seg_salud').css('display', 'none');
                $('#seg_salud_opt').removeAttr('required', 'required');
                $('#seg_salud_opt').removeAttr('name','acc_subtipo_accion');
            }

            if ($(this).val() === 'Documentación') {
                $('#docu_cont').css('display', 'block');
                $('#docu_cont_opt').attr('required', 'required');
                $('#docu_cont_opt').attr('name','acc_subtipo_accion');
            } else{
                $('#docu_cont').css('display', 'none');
                $('#docu_cont_opt').removeAttr('required', 'required');
                $('#docu_cont_opt').removeAttr('name','acc_subtipo_accion');
            }

            if ($(this).val() === 'Contabilidad') {
                $('#contab_cont').css('display', 'block');
                $('#contab_cont_opt').attr('required', 'required');
                $('#contab_cont_opt').attr('name','acc_subtipo_accion');
            } else{
                $('#contab_cont').css('display', 'none');
                $('#contab_cont_opt').removeAttr('required', 'required');
                $('#contab_cont_opt').removeAttr('name','acc_subtipo_accion');
            }

            if ($(this).val() === 'Valoraciones iniciales') {
                $('#valoracion_ini').css('display', 'block');
                $('#valoracion_ini_opt').attr('required', 'required');
                $('#valoracion_ini_opt').attr('name','acc_subtipo_accion');
            } else{
                $('#valoracion_ini').css('display', 'none');
                $('#valoracion_ini_opt').removeAttr('required', 'required');
                $('#valoracion_ini_opt').removeAttr('name','acc_subtipo_accion');
            }

            if ($(this).val() === 'Otras') {
                $('#acc_tipo_accion_otro').css('display', 'block');
                $('#acc_tipo_accion_otro_cont_id').attr('required','required');
                $('#acc_tipo_accion_otro_cont_id').attr('name','acc_subtipo_accion');
            } else{
                $('#acc_tipo_accion_otro_cont').css('display', 'none');
                $('#acc_tipo_accion_otro_cont_id').removeAttr('required', 'required');
                $('#acc_tipo_accion_otro_cont_id').removeAttr('name','acc_subtipo_accion');
            }
        });
    </script> 



    <!-- Tipo Subaccion solicitud demandas/formalizacion Field -->
    <div class="form-group col-sm-12 subtipo_acc" id="solic_demandas" style="display: none">
        <?php echo Form::label('', 'Subtipo Acción/Tarea:'); ?>

        <?php echo Form::select('', [
        null => 'Selecciona una opcion',
        'Alta' => 'Alta',
        'Cambio' => 'Cambio',
        'Suspensión' => 'Suspensión',
        'Baja' => 'Baja',
        'Apoyo Emocional' => 'Apoyo Emocional',
        'Intervención Familiar' => 'Intervención Familiar',
        'Asesoramiento fisico' => 'Asesoramiento Físico',
        'Asesoramiento social' => 'Asesoramiento Social',
        'Asesoramiento funcional' => 'Asesoramiento Funcional',
        'Asesoramiento cognitivo' => 'Asesoramiento Cognitivo',
        'Formación individual' => 'Formación individual',
        'Intervención familiar' => 'Intervención familiar',
        'Otras' => 'Otras (especificar)'],
        null, ['class' => 'form-control acc_subtipo_accion' , 'id' => 'solic_demandas_opt']); ?>

    </div>



    <!-- Tipo intervencion centro Field -->
    <div class="form-group col-sm-12 " id="interv_centro" style="display: none">
        <?php echo Form::label('', 'Subtipo Acción/Tarea:'); ?>

        <?php echo Form::select('', [
        null => 'Selecciona una opcion',
        'Valoración Trab.Social' => 'Valoración Trab.Social',
        'Visita Centro' => 'Visita Centro',
        'Acogida 1er Día' => 'Acogida 1er Día',
        'Entrega PIA' => 'Entrega PIA',
        'Apoyo Emocional' => 'Apoyo Emocional',
        'Asesoramiento Individual' => 'Asesoramiento Individual',
        'Asesoramiento Físico' => 'Aseoramiento Físico',
        'Asesoramiento Social' => 'Asesoramiento Social',
        'Asesoramiento Funcional' => 'Asesoramiento Funcional',
        'Asesoramiento Cognitivo' => 'Asesoramiento Cognitivo',
        'Formación Individual' => 'Formación Individual',
        'Intervención Familiar' => 'Intervención Familiar',
        'Intervención Física Individual' => 'Intervención Física Individual',
        'Intervención Funcional Individual' => 'Intervención Funcional Individual',
        'Otras' => 'Otras (especificar)'],
        null, ['class' => 'form-control acc_subtipo_accion', 'id' => 'interv_centro_opt']); ?>

    </div>




    <!-- Tipo intervencion domicilio Field -->
    <div class="form-group col-sm-12 " id="interv_domic" style="display: none">
        <?php echo Form::label('', 'Subtipo Acción/Tarea:'); ?>

        <?php echo Form::select('', [
        null => 'Selecciona una opcion',
        'Valoración Trab.Social' => 'Valoración Trab.Social',
        'Valoración Acogida Inicial Equipo' => 'Valoración Acogida Inicial Equipo',
        'Entrega PIA' => 'Entrega PIA',
        'Intervención/Mediación Familiar' => 'Intervención/Mediación Familiar',
        'Asesoramiento Individual' => 'Asesoramiento Individual',
        'Apoyo Emocional' => 'Apoyo Emocional',
        'Formación Individual' => 'Formación Individual',
        'Fisioterapia a cuidador/a' => 'Fisioterapia a cuidador/a',
        'Seguimiento Psicológico Mensual' => 'Seguimiento Psicológico Mensual',
        'Asesoramiento Físico' => 'Asesoramiento Físico',
        'Asesoramiento Social' => 'Asesoramiento Social',
        'Asesoramiento Funcional' => 'Asesoramiento Funcional',
        'Asesoramiento cognitivo' => 'Asesoramiento cognitivo',
        'Otras' => 'Otras (especificar)'],
        null, ['class' => 'form-control acc_subtipo_accion', 'id' => 'interv_domic_opt']); ?>

    </div>




    <!-- seguimiento salud Field -->
    <div class="form-group col-sm-12 " id="seg_salud" style="display: none">
        <?php echo Form::label('', 'Subtipo Acción/Tarea:'); ?>

        <?php echo Form::select('', [
            null => 'Selecciona una opcion',
        'Cambio valoración de Indicador salud' => 'Cambio valoración de Indicador salud',
        'Seguimiento Socio Familiar' => 'Seguimiento Socio Familiar',
        'Seguimiento Cognitivo' => 'Seguimiento Cognitivo',
        'Seguimiento Físico' => 'Seguimiento Físico',
        'Seguimiento Emocional' => 'Seguimiento Emocional',
        'Seguimiento Funcional' => 'Seguimiento Funcional',
        'Nuevo diagnóstico principal' => 'Nuevo diagnóstico principal',
        'Cambio importante salud' => 'Cambio importante salud',
        'Ficha de seguimiento de intervención' => 'Ficha de seguimiento de intervención',
        'Otras' => 'Otras (especificar)'],
        null, ['class' => 'form-control acc_subtipo_accion', 'id' => 'seg_salud_opt']); ?>

    </div>




    <!-- Documentacion Field -->
    <div class="form-group col-sm-12 " id="docu_cont" style="display: none">
        <?php echo Form::label('', 'Subtipo Acción/Tarea:'); ?>

        <?php echo Form::select('', [
            null => 'Selecciona una opcion',
        'Solicitud documento a Acufade' => 'Solicitud documento a Acufade',
        'Entrega documento Acufade (a familia)' => 'Entrega documento Acufade (a familia)',
        'Solicitud documento salud (a familia)' => 'Solicitud documento salud (a familia)',
        'Otras' => 'Otras (entregar)'],
        null, ['class' => 'form-control acc_subtipo_accion', 'id' => 'docu_cont_opt' ]); ?>

    </div>





    <!-- Contabilidad Field -->
    <div class="form-group col-sm-12 " id="contab_cont" style="display: none">
        <?php echo Form::label('', 'Subtipo Acción/Tarea:'); ?>

        <?php echo Form::select('', [
            null => 'Selecciona una opcion',
        'Comunicación impago a usuario/a' => 'Comunicación impago a usuario/a',
        'Comunicación impago a DGDD' => 'Comunicación impago a DGDD',
        'Cambio de forma de pago' => 'Cambio de forma de pago',
        'Cambio IBAN Bancario' => 'Cambio IBAN Bancario',
        'Cambio importe facturación' => 'Cambio importe facturación',
        'Cambio cuota socio' => 'Cambio cuota socio',
        'Situación impago' => 'Situación impago',
        'Abono de deuda' => 'Abono de deuda',
        'Otras' => 'Otras (especificar)'],
        null, ['class' => 'form-control acc_subtipo_accion', 'id' => 'contab_cont_opt']); ?>

    </div>




    <!-- Valoraciones iniciales -->
    <div class="form-group col-sm-12 " id="valoracion_ini" style="display: none">
        <?php echo Form::label('', 'Subtipo Acción/Tarea:'); ?>

        <?php echo Form::select('', [
            null => 'Selecciona una opcion',
        'Ficha de Acogida' => 'Ficha de Acogida',
        'Valoración Adaptación' =>'Valoración Adaptación' ,
        'Valoración Inicial de Indicador Salud' =>'Valoración Inicial de Indicador Salud' ,
        'Valoración Inicial Sociofamiliar' =>'Valoración Inicial Sociofamiliar' ,
        'Valoración Inicial Cognitiva' =>'Valoración Inicial Cognitiva' ,
        'Valoración Inicial Física' =>'Valoración Inicial Física' ,
        'Valoración Inicial Funcional' =>'Valoración Inicial Funcional' ,
        'Valoración Inicial Emocional' =>'Valoración Inicial Emocional' ,
        'Otras' => 'Otras (especificar)'],
        null, ['class' => 'form-control acc_subtipo_accion', 'id' => 'valoracion_ini_opt']); ?>

    </div>



    <!-- script otro accion -->
    <script>
        $('.acc_subtipo_accion').on('change', function() {
            if ($(this).val() === 'Otras') {
                $('#otro_acc_sub_id').css('display', 'block');
                $('#otro_acc_sub_cont_id').attr('required','required');
                $('#otro_acc_sub_cont_id').attr('name','acc_subtipo_accion');
            } else{
                $('#otro_acc_sub_id').css('display', 'none');
                $('#otro_acc_sub_cont_id').removeAttr('required', 'required');
                $('#otro_acc_sub_cont_id').removeAttr('name','acc_subtipo_accion');
            }
        });  
    </script>


    <!-- Otro tipo accion-->
    <div class="form-group col-sm-12 p-3 bg-secondary" id="acc_tipo_accion_otro" style="display: none">
        <?php echo Form::label('acc_tipo_accion_otro', 'Si no esta en la lista, especifica cual:'); ?>

        <?php echo Form::text('acc_tipo_accion_otro', null, ['class' => 'form-control', 'id' => 'acc_tipo_accion_otro_cont_id']); ?>

    </div>


    <!-- Otro subtipo accion-->
    <div class="form-group col-sm-12 p-3 bg-secondary" id="otro_acc_sub_id" style="display: none">
        <?php echo Form::label('otro_acc_sub', 'Si no esta en la lista, especifica cual:'); ?>

        <?php echo Form::text('otro_acc_sub', null, ['class' => 'form-control', 'id' => 'otro_acc_sub_cont_id']); ?>

    </div>





    <!-- Persona responsable Field -->
    <div class="form-group col-sm-12 col-lg-12">
        <?php echo Form::label('destinado_a', 'Destinado a:'); ?>


        <?php echo Form::select('destinado_a[]', [
        'Persona Usuaria' => 'Persona Usuaria',
        'Cuidadora Familiar' => 'Cuidadora Familiar',
        'Cuidadora Profesional' => 'Cuidadora Profesional',
        'Profesional Externa' => 'Profesional Externa',
        'Otras' => 'Otras'], null,
        ['class' => 'select2 form-control','id' => 'destinado_a','multiple' => 'multiple', 'required'=>'required']); ?>

    </div>



    <!-- Observaciones Field -->
    <div class="form-group col-sm-12 col-lg-12">
        <?php echo Form::label('acc_descrip', 'Descripción:'); ?>

        <?php echo Form::textarea('acc_descrip', null, ['class' => 'form-control', 'required'=>'required']); ?>

    </div>



    <!-- Persona responsable Field -->
    <div class="form-group col-sm-12 col-lg-12">
        <?php echo Form::label('persona_responsable', 'Profesional Responsable:'); ?>

        <?php echo Form::text('persona_responsable', null, ['class' => 'form-control', 'required'=>'required']); ?>

    </div>



    <!-- Observaciones Field -->
    <div class="form-group col-sm-12 col-lg-12">
        <?php echo Form::label('acc_observaciones', 'Observaciones:'); ?>

        <?php echo Form::text('acc_observaciones', null, ['class' => 'form-control']); ?>

    </div>




    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        <?php echo Form::submit('Añadir historia', ['class' => 'btn btn-primary float-right']); ?>

        <button type="button" class="btn btn-default float-right" data-dismiss="modal">Cancelar</button>
    </div>
</div>
<?php /**PATH /var/www/resources/views/patients/create/history.blade.php ENDPATH**/ ?>