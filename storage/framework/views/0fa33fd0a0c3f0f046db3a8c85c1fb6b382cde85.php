<!-- Tipo Plaza Field -->
id: <?php echo e($patient_service->id); ?>

<div class="form-group col-sm-6">
    <?php echo Form::label('tipo_plaza', 'Tipo Plaza:'); ?>

    <?php echo Form::select('tipo_plaza', ['Privada' => 'Privada', 'Pública' => 'Pública', 'Subvencionada' => 'Subvencionada'], null, ['class' => 'form-control']); ?>

</div>

<!-- Fecha Nac Care Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('fecha_nac_care', 'Fecha Nac Care:'); ?>

    <?php echo Form::date('fecha_nac_care', null, ['class' => 'form-control','id'=>'fecha_nac_care']); ?>

</div>

<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript">
        $('#fecha_nac_care').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
<?php $__env->stopSection(); ?>

<!-- Fecha Plaza Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('fecha_plaza', 'Fecha Plaza:'); ?>

    <?php echo Form::text('fecha_plaza', null, ['class' => 'form-control']); ?>

</div>

<!-- Dias Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('dias', 'Dias:'); ?>

    <?php echo Form::select('dias', ['Lunes' => 'Lunes', 'Martes' => 'Martes', 'Miércoles' => 'Miércoles', 'Jueves' => 'Jueves', 'Viernes' => 'Viernes', 'Sábado' => 'Sábado', 'Domingo' => 'Domingo'], null, ['class' => 'form-control']); ?>

</div>

<!-- Horario Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('horario', 'Horario:'); ?>

    <?php echo Form::text('horario', null, ['class' => 'form-control']); ?>

</div>

<!-- Observaciones Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('observaciones', 'Observaciones:'); ?>

    <?php echo Form::textarea('observaciones', null, ['class' => 'form-control']); ?>

</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('patientHours.index'); ?>" class="btn btn-default">Cancel</a>
</div>
<?php /**PATH /var/www/resources/views/patients/create/hours.blade.php ENDPATH**/ ?>