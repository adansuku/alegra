<!-- Lab Servicio Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('lab_servicio', 'Centro/Servicio/Proyecto:'); ?>

    <?php echo Form::text('lab_servicio', null, ['class' => 'form-control', 'required' => 'required']); ?>

</div>

<!-- Lab Dias Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('lab_dias', 'Días:'); ?>

    <?php echo Form::select('lab_dias', [' Lunes' => ' Lunes', ' Martes' => ' Martes', ' Miércoles' => ' Miércoles', ' Jueves' => ' Jueves', ' Viernes' => ' Viernes', ' Sábado' => ' Sábado', ' Domingo' => ' Domingo'], null, ['class' => 'form-control',  'required' => 'required']); ?>

</div>

<!-- Lab Horas Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('lab_horas', 'Horas:'); ?>

    <?php echo Form::number('lab_horas', null, ['class' => 'form-control',  'required' => 'required']); ?>

</div>

<!-- Lab Horas Semana Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('lab_horas_semana', 'Nº Horas/Semanal:'); ?>

    <?php echo Form::number('lab_horas_semana', null, ['class' => 'form-control',  'required' => 'required']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Añadir relación laboral', ['class' => 'btn btn-primary']); ?>

    <?php echo Form::submit('Cancelar', ['class' => 'btn btn-danger float-right', 'data-dismiss' => 'modal']); ?>

</div>



<?php /**PATH /var/www/resources/views/workers/create/laboral.blade.php ENDPATH**/ ?>