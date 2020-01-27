<!-- Tipo Plaza Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('tipo_plaza', 'Tipo Plaza:'); ?>

    <?php echo Form::select('tipo_plaza', ['Privada' => 'Privada', 'Pública' => 'Pública', 'Subvencionada ' => 'Subvencionada '], null, ['class' => 'form-control']); ?>

</div>

<!-- Fecha Form Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('fecha_form', 'Fecha Form:'); ?>

    <?php echo Form::date('fecha_form', null, ['class' => 'form-control','id'=>'fecha_form']); ?>

</div>

<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript">
        $('#fecha_form').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
<?php $__env->stopSection(); ?>

<!-- Dia Plaza Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('dia_plaza', 'Dia Plaza:'); ?>

    <?php echo Form::select('dia_plaza', ['Lunes' => 'Lunes', 'Martes' => 'Martes', 'Miércoles' => 'Miércoles', 'Jueves' => 'Jueves', 'Viernes' => 'Viernes'], null, ['class' => 'form-control']); ?>

</div>

<!-- Observaciones Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('observaciones', 'Observaciones:'); ?>

    <?php echo Form::textarea('observaciones', null, ['class' => 'form-control']); ?>

</div>

<!-- Patient Service Id Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('patient_service_id', 'Patient Service Id:'); ?>

    <?php echo Form::text('patient_service_id', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('patientHours.index'); ?>" class="btn btn-default">Cancel</a>
</div>
<?php /**PATH /var/www/resources/views/patient_hours/fields.blade.php ENDPATH**/ ?>