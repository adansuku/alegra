<div class="row m-0 p-3">
<!-- Tipo Plaza Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('tipo_plaza', 'Tipo Plaza:'); ?>

    <?php echo Form::select('tipo_plaza', ['' => 'Selecciona una opción', 'Privada' => 'Privada', 'Pública' => 'Pública', 'Subvencionada ' => 'Subvencionada '], null, ['class' => 'form-control', 'required' => 'required']); ?>

</div>

<!-- Fecha Form Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('fecha_form', 'Fecha Form:'); ?>

    <?php echo Form::date('fecha_form', null, ['class' => 'form-control','id'=>'fecha_form', 'required' => 'required']); ?>

</div>

<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript">
        $('#fecha_form').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: false
        })
    </script>
<?php $__env->stopSection(); ?>

<!-- Dia Plaza Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('dia_plaza', 'Dia Plaza:'); ?>

    <?php echo Form::select('dia_plaza', ['' => 'Selecciona un día', 'Lunes' => 'Lunes', 'Martes' => 'Martes', 'Miércoles' => 'Miércoles', 'Jueves' => 'Jueves', 'Viernes' => 'Viernes'], null, ['class' => 'form-control', 'required' => 'required']); ?>

</div>

<div class="form-group col-sm-6">
    <?php echo Form::label('hora_desde', 'Desde:'); ?>

    <?php echo Form::time('hora_desde', null, ['class' => 'form-control', 'required' => 'required']); ?>

</div>

<div class="form-group col-sm-6">
    <?php echo Form::label('hora_hasta', 'Hasta:'); ?>

    <?php echo Form::time('hora_hasta', null, ['class' => 'form-control' ,'required' => 'required']); ?>

</div>

<!-- Observaciones Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('observaciones', 'Observaciones:'); ?>

    <?php echo Form::textarea('observaciones', null, ['class' => 'form-control']); ?>

</div>

</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Añadir horario', ['class' => 'btn btn-primary float-right']); ?>

    <button type="button" class="btn btn-default float-right" data-dismiss="modal">Cancelar</button>
</div>
<?php /**PATH /var/www/resources/views/patients/create/hour.blade.php ENDPATH**/ ?>