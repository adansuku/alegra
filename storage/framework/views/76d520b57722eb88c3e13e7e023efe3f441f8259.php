<!-- Lab Servicio Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('lab_servicio', 'Lab Servicio:'); ?>

    <?php echo Form::text('lab_servicio', null, ['class' => 'form-control']); ?>

</div>

<!-- Lab Dias Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('lab_dias', 'Lab Dias:'); ?>

    <?php echo Form::select('lab_dias', [' Lunes' => ' Lunes', ' Martes' => ' Martes', ' Miércoles' => ' Miércoles', ' Jueves' => ' Jueves', ' Viernes' => ' Viernes', ' Sábado' => ' Sábado', ' Domingo' => ' Domingo'], null, ['class' => 'form-control']); ?>

</div>

<!-- Lab Horas Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('lab_horas', 'Lab Horas:'); ?>

    <?php echo Form::number('lab_horas', null, ['class' => 'form-control']); ?>

</div>

<!-- Lab Horas Semana Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('lab_horas_semana', 'Lab Horas Semana:'); ?>

    <?php echo Form::number('lab_horas_semana', null, ['class' => 'form-control']); ?>

</div>

<!-- Worker Id Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('worker_id', 'Worker Id:'); ?>

    <?php echo Form::text('worker_id', $worker->id, ['class' => 'form-control ']); ?>

</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('workerLabors.index'); ?>" class="btn btn-default">Cancel</a>
</div>



<?php /**PATH /var/www/resources/views/workers/partials/laboral.blade.php ENDPATH**/ ?>