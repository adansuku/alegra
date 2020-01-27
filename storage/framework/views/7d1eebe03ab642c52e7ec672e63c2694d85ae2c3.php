<!-- Medicacion Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('medicacion', 'Medicacion:'); ?>

    <?php echo Form::text('medicacion', null, ['class' => 'form-control']); ?>

</div>

<!-- Pauta Medicacion Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('pauta_medicacion', 'Pauta Medicacion:'); ?>

    <?php echo Form::text('pauta_medicacion', null, ['class' => 'form-control']); ?>

</div>

<!-- Obs Medicacion Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('obs_medicacion', 'Obs Medicacion:'); ?>

    <?php echo Form::text('obs_medicacion', null, ['class' => 'form-control']); ?>

</div>

<!-- Patient Id Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('patient_id', 'Patient Id:'); ?>

    <?php echo Form::text('patient_id', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('patientMedications.index'); ?>" class="btn btn-default">Cancel</a>
</div>
<?php /**PATH /var/www/resources/views/patient_medications/fields.blade.php ENDPATH**/ ?>