<!-- Nombre Rol Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nombre_rol', 'Nombre Rol:'); ?>

    <?php echo Form::text('nombre_rol', null, ['class' => 'form-control']); ?>

</div>

<!-- Descripcion Rol Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('descripcion_rol', 'Descripcion Rol:'); ?>

    <?php echo Form::text('descripcion_rol', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('roles.index'); ?>" class="btn btn-default">Cancel</a>
</div>
<?php /**PATH /var/www/resources/views/roles/fields.blade.php ENDPATH**/ ?>