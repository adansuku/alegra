<!-- N Expediente Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('n_expediente', 'N Expediente:'); ?>

    <?php echo Form::text('n_expediente', null, ['class' => 'form-control']); ?>

</div>

<!-- Nombre Completo Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nombre_completo', 'Nombre Completo:'); ?>

    <?php echo Form::text('nombre_completo', null, ['class' => 'form-control']); ?>

</div>

<!-- Alias Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('alias', 'Alias:'); ?>

    <?php echo Form::text('alias', null, ['class' => 'form-control']); ?>

</div>

<!-- Genero Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('genero', 'Genero:'); ?>

    <?php echo Form::select('genero', [' Hombre' => ' Hombre', ' Mujer' => ' Mujer'], null, ['class' => 'form-control']); ?>

</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('people.index'); ?>" class="btn btn-default">Cancel</a>
</div>
<?php /**PATH /var/www/resources/views/people/create/create-people.blade.php ENDPATH**/ ?>