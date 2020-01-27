<!-- Id Field -->
<div class="form-group">
    <?php echo Form::label('id', 'Id:'); ?>

    <p><?php echo $patientService->id; ?></p>
</div>

<!-- Nom Servicio Field -->
<div class="form-group">
    <?php echo Form::label('nom_servicio', 'Nom Servicio:'); ?>

    <p><?php echo $patientService->nom_servicio; ?></p>
</div>

<!-- Municipio Serv Field -->
<div class="form-group">
    <?php echo Form::label('municipio_serv', 'Municipio Serv:'); ?>

    <p><?php echo $patientService->municipio_serv; ?></p>
</div>

<!-- Tipo Plaza Serv Field -->
<div class="form-group">
    <?php echo Form::label('tipo_plaza_serv', 'Tipo Plaza Serv:'); ?>

    <p><?php echo $patientService->tipo_plaza_serv; ?></p>
</div>

<!-- Plaza Privada Serv Field -->
<div class="form-group">
    <?php echo Form::label('plaza_privada_serv', 'Plaza Privada Serv:'); ?>

    <p><?php echo $patientService->plaza_privada_serv; ?></p>
</div>

<!-- Plaza Sub Serv Field -->
<div class="form-group">
    <?php echo Form::label('plaza_sub_serv', 'Plaza Sub Serv:'); ?>

    <p><?php echo $patientService->plaza_sub_serv; ?></p>
</div>

<!-- Fecha Form Serv Field -->
<div class="form-group">
    <?php echo Form::label('fecha_form_serv', 'Fecha Form Serv:'); ?>

    <p><?php echo $patientService->fecha_form_serv; ?></p>
</div>

<!-- Created At Field -->
<div class="form-group">
    <?php echo Form::label('created_at', 'Created At:'); ?>

    <p><?php echo $patientService->created_at; ?></p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    <?php echo Form::label('updated_at', 'Updated At:'); ?>

    <p><?php echo $patientService->updated_at; ?></p>
</div>

<!-- Patient Id Field -->
<div class="form-group">
    <?php echo Form::label('patient_id', 'Patient Id:'); ?>

</div>

<?php /**PATH /var/www/resources/views/patient_services/show_fields.blade.php ENDPATH**/ ?>