<div class="row p-3 m-0">

    <!-- Nombre Doctor Field -->
    <div class="form-group col-sm-12">
        <?php echo Form::label('nombre_doctor', 'Nombre Especialista:'); ?>

        <?php echo Form::text('nombre_doctor', null, ['class' => 'form-control', 'required' => 'required']); ?>

    </div>

    <!-- Observaciones Doctor Field -->
    <div class="form-group col-sm-12">
        <?php echo Form::label('observaciones_doctor', 'Centro de Referencia:'); ?>

        <?php echo Form::text('observaciones_doctor', null, ['class' => 'form-control']); ?>

    </div>

</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Guardar', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('patientDoctors.index'); ?>" class="btn btn-default">Cancelar</a>
</div><?php /**PATH /var/www/resources/views/patients/create/doctors.blade.php ENDPATH**/ ?>