<!-- Id Field -->
<div class="form-group">
    <?php echo Form::label('id', 'Id:'); ?>

    <p><?php echo $patientPast->id; ?></p>
</div>

<!-- Antecedentes Field -->
<div class="form-group">
    <?php echo Form::label('antecedentes', 'Antecedentes:'); ?>

    <p><?php echo $patientPast->antecedentes; ?></p>
</div>

<!-- Antecedentes Obs Field -->
<div class="form-group">
    <?php echo Form::label('antecedentes_obs', 'Antecedentes Obs:'); ?>

    <p><?php echo $patientPast->antecedentes_obs; ?></p>
</div>

<!-- Antecedentes Anio Field -->
<div class="form-group">
    <?php echo Form::label('antecedentes_anio', 'Antecedentes Anio:'); ?>

    <p><?php echo $patientPast->antecedentes_anio; ?></p>
</div>

<!-- Created At Field -->
<div class="form-group">
    <?php echo Form::label('created_at', 'Created At:'); ?>

    <p><?php echo $patientPast->created_at; ?></p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    <?php echo Form::label('updated_at', 'Updated At:'); ?>

    <p><?php echo $patientPast->updated_at; ?></p>
</div>

<!-- Patient Id Field -->
<div class="form-group">
    <?php echo Form::label('patient_id', 'Patient Id:'); ?>

    <p><?php echo $patientPast->patient_id; ?></p>
</div>

<?php /**PATH /var/www/resources/views/patient_pasts/show_fields.blade.php ENDPATH**/ ?>