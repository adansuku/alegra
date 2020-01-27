<!-- Centro Nombre Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('centro_nombre', 'Centro Nombre:'); ?>

    <?php echo Form::text('centro_nombre', null, ['class' => 'form-control']); ?>

</div>

<!-- Centro Datos Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('centro_datos', 'Centro Datos:'); ?>

    <?php echo Form::textarea('centro_datos', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('workerCenters.index'); ?>" class="btn btn-default">Cancel</a>
</div>
<?php /**PATH /var/www/resources/views/worker_centers/fields.blade.php ENDPATH**/ ?>