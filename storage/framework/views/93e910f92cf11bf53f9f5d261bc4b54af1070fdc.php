<!-- Tipo Asistente Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('tipo_asistente', 'Tipo Asistente:'); ?>

    <?php echo Form::select('tipo_asistente', [' Técnico de Dependencia' => ' Técnico de Dependencia', ' Persona Guardadora de Hecho' => ' Persona Guardadora de Hecho'], null, ['class' => 'form-control']); ?>

</div>

<!-- Nombre Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nombre', 'Nombre:'); ?>

    <?php echo Form::text('nombre', null, ['class' => 'form-control']); ?>

</div>

<!-- Apellidos Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('apellidos', 'Apellidos:'); ?>

    <?php echo Form::text('apellidos', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('dependenceAssistants.index'); ?>" class="btn btn-default">Cancel</a>
</div>
<?php /**PATH /var/www/resources/views/dependence_assistants/fields.blade.php ENDPATH**/ ?>