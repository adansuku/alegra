<div class="row p-3 m-0">

    <!-- Alergia Field -->
    <div class="form-group col-sm-12">
        <?php echo Form::label('alergia', 'Tipo de alergia:'); ?>

        <?php echo Form::select('alergia', [
        'Alérgenos aéreos' => 'Alérgenos aéreos',
        'Alimentarias' => 'Alimentarias',
        'Insectos' => 'Insectos',
        'medicamentos' => 'medicamentos',
        'Otras' => 'Otras'],
        null, ['class' => 'form-control select2', 'name' => 'alergia[]', 'onchange' => 'showInput(this.value, this.id);',
        'multiple' => 'multiple', 'required' => 'required']); ?>

    </div>

    <!-- Otro -->
    <div class="form-group col-sm-12" id="alergia_cont" hidden="hidden">
        <?php echo Form::label('alergiaOtro', 'Si no esta en la lista, especifica cual:'); ?>

        <?php echo Form::text('alergiaOtro', null, ['class' => 'form-control']); ?>

    </div>

    

     <!-- Nombre Alergia Field -->
     <div class="form-group col-sm-12">
        <?php echo Form::label('nombre_alergia', 'Observaciones:'); ?>

        <?php echo Form::text('nombre_alergia', null, ['class' => 'form-control']); ?>

    </div>

</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Añadir alergia', ['class' => 'btn btn-primary float-right']); ?>

    <a href="<?php echo route('patientAllergies.index'); ?>" class="btn btn-default float-right" data-dismiss ='modal'>Cancelar</a>
</div>
<?php /**PATH /var/www/resources/views/patients/create/allergy.blade.php ENDPATH**/ ?>