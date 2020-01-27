<!-- His Categoria Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('his_categoria', 'His Categoria:'); ?>

    <?php echo Form::select('his_categoria', [' Administrativas' => ' Administrativas', ' Recursos' => ' Recursos'], null, ['class' => 'form-control']); ?>

</div>

<!-- His Tipo Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('his_tipo', 'His Tipo:'); ?>

    <?php echo Form::select('his_tipo', [' Contratos' => ' Contratos', ' Nóminas' => ' Nóminas', ' Vacaciones' => ' Vacaciones', ' Ausencias' => ' Ausencias', ' Permisos' => ' Permisos', ' Horas Extra' => ' Horas Extra', ' Informes Mensuales SPAPD' => ' Informes Mensuales SPAPD'], null, ['class' => 'form-control']); ?>

</div>

<!-- His Respuesta Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('his_respuesta', 'His Respuesta:'); ?>

    <?php echo Form::textarea('his_respuesta', null, ['class' => 'form-control']); ?>

</div>

<!-- His Observaciones Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('his_observaciones', 'His Observaciones:'); ?>

    <?php echo Form::textarea('his_observaciones', null, ['class' => 'form-control']); ?>

</div>

<!-- Worker Id Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('worker_id', 'Worker Id:'); ?>

    <?php echo Form::text('worker_id', null, ['class' => 'form-control']); ?>

</div>

<?php $__currentLoopData = workers(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('workerHistories.index'); ?>" class="btn btn-default">Cancel</a>
</div>
<?php /**PATH /var/www/resources/views/worker_histories/fields.blade.php ENDPATH**/ ?>