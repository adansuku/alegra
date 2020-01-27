<!-- Nombre Diagnostico Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nombre_diagnostico', 'Nombre Diagnostico:'); ?>

    <?php echo Form::text('nombre_diagnostico', null, ['class' => 'form-control']); ?>

</div>

<!-- Regimen Sanitario Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('regimen_sanitario', 'Regimen Sanitario:'); ?>

    <?php echo Form::select('regimen_sanitario', ['Envejecimiento Activo' => 'Envejecimiento Activo', 'Alzheimer' => 'Alzheimer', 'Demencia Cuerpos Lewy' => 'Demencia Cuerpos Lewy', 'Mixta' => 'Mixta', 'Ictus' => 'Ictus', 'Parkinson' => 'Parkinson', 'Otra Enfermedad Neurológica' => 'Otra Enfermedad Neurológica', 'Discapacidad Física' => 'Discapacidad Física', 'Discapacidad Sensorial' => 'Discapacidad Sensorial', 'Discapacidad Psíquica' => 'Discapacidad Psíquica'], null, ['class' => 'form-control']); ?>

</div>

<!-- Patient Id Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('patient_id', 'Patient Id:'); ?>

    <?php echo Form::text('patient_id', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('patientDiagnostics.index'); ?>" class="btn btn-default">Cancel</a>
</div>
<?php /**PATH /var/www/resources/views/patients/edit/diagnostic.blade.php ENDPATH**/ ?>