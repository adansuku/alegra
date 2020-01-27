<!-- Antecedentes Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('antecedentes', 'Antecedentes:'); ?>

    <?php echo Form::select('antecedentes', ['Cáncer' => 'Cáncer', 'Operación (escribir)' => 'Operación (escribir)', 'Caída (escribir)' => 'Caída (escribir)', 'Crisis epilepsia' => 'Crisis epilepsia', 'Cardiopatía' => 'Cardiopatía', 'Prob. respiratorios' => 'Prob. respiratorios', 'Otras (escribir)' => 'Otras (escribir)'], null, ['class' => 'form-control']); ?>

</div>

<!-- Antecedentes Obs Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('antecedentes_obs', 'Antecedentes Obs:'); ?>

    <?php echo Form::text('antecedentes_obs', null, ['class' => 'form-control']); ?>

</div>

<!-- Antecedentes Anio Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('antecedentes_anio', 'Antecedentes Anio:'); ?>

    <?php echo Form::date('antecedentes_anio', null, ['class' => 'form-control','id'=>'antecedentes_anio']); ?>

</div>

<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript">
        $('#antecedentes_anio').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
<?php $__env->stopSection(); ?>

<!-- Patient Id Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('patient_id', 'Patient Id:'); ?>

    <?php echo Form::text('patient_id', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('patientPasts.index'); ?>" class="btn btn-default">Cancel</a>
</div>
<?php /**PATH /var/www/resources/views/patient_pasts/fields.blade.php ENDPATH**/ ?>