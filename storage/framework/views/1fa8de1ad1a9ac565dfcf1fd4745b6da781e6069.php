<!-- Id Field -->
<div class="form-group">
    <?php echo Form::label('id', 'Id:'); ?>

    <p><?php echo $roles->id; ?></p>
</div>

<!-- Nombre Rol Field -->
<div class="form-group">
    <?php echo Form::label('nombre_rol', 'Nombre Rol:'); ?>

    <p><?php echo $roles->nombre_rol; ?></p>
</div>

<!-- Descripcion Rol Field -->
<div class="form-group">
    <?php echo Form::label('descripcion_rol', 'Descripcion Rol:'); ?>

    <p><?php echo $roles->descripcion_rol; ?></p>
</div>

<!-- Created At Field -->
<div class="form-group">
    <?php echo Form::label('created_at', 'Created At:'); ?>

    <p><?php echo $roles->created_at; ?></p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    <?php echo Form::label('updated_at', 'Updated At:'); ?>

    <p><?php echo $roles->updated_at; ?></p>
</div>

<?php /**PATH /var/www/resources/views/roles/show_fields.blade.php ENDPATH**/ ?>