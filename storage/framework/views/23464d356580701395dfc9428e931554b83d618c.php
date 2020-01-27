<!-- Id Field -->
<div class="form-group">
    <?php echo Form::label('id', 'Id:'); ?>

    <p><?php echo $patientPia->id; ?></p>
</div>

<!-- Fecha Limite Field -->
<!-- <div class="form-group">
    <?php echo Form::label('fecha_limite', 'Fecha Limite:'); ?>

    <p><?php echo $patientPia->fecha_limite; ?></p>
</div> -->

<!-- Fecha Real Field -->
<!-- <div class="form-group">
    <?php echo Form::label('fecha_real', 'Fecha Real:'); ?>

    <p><?php echo $patientPia->fecha_real; ?></p>
</div> -->

<!-- Tipo Pia Field -->
<div class="form-group">
    <?php echo Form::label('tipo_pia', 'Tipo Pia:'); ?>

    <p><?php echo $patientPia->tipo_pia; ?></p>
</div>

<!-- Url Pia Field -->
<div class="form-group">
    <?php echo Form::label('url_pia', 'Url Pia:'); ?>

    <p><?php echo $patientPia->url_pia; ?></p>
</div>

<!-- Obs Pia Field -->
<div class="form-group">
    <?php echo Form::label('obs_pia', 'Observaciones:'); ?>

    <p><?php echo $patientPia->obs_pia; ?></p>
</div>

<!-- Created At Field -->
<div class="form-group">
    <?php echo Form::label('created_at', 'Created At:'); ?>

    <p><?php echo $patientPia->created_at; ?></p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    <?php echo Form::label('updated_at', 'Updated At:'); ?>

    <p><?php echo $patientPia->updated_at; ?></p>
</div>

<?php /**PATH /var/www/resources/views/patient_pias/show_fields.blade.php ENDPATH**/ ?>