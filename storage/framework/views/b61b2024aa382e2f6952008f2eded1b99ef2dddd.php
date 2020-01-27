<div class="row p-3 m-0">
    <!-- Patologia Field -->
    <div class="form-group col-sm-12">
        <?php echo Form::label('patologia', 'Patología:'); ?>

        <?php echo Form::select('patologia', [
                'Cardiopatías' => 'Cardiopatías',
                'Marcapasos' => 'Marcapasos',
                'Prob. respiratorios' => 'Prob. respiratorios',
                'Diabetes' => 'Diabetes',
                'Tensión arterial' => 'Tensión arterial',
                'Retinopatía diabética' => 'Retinopatía diabética',
                'Osteoporosis' => 'Osteoporosis',
                'Artrosis' => 'Artrosis',
                'Artritis' => 'Artritis',
                'Tumores óseos' => 'Tumores óseos',
                'Dolor crónico' => 'Dolor crónico',
                'Cáncer' => 'Cáncer',
                'Asma' => 'Asma',
                'Otitis' => 'Otitis',
                'Sordera' => 'Sordera',
                'Cataratas' => 'Cataratas',
                'Cataratas' => 'Cataratas',
                'Glaucoma' => 'Glaucoma',
                'Presbicia' => 'Presbicia',
                'Retinopatía diabética' => 'Retinopatía diabética',
                'Enfermedad de Crohn' => 'Enfermedad de Crohn',
                'Dermatitis atópicas' => 'Dermatitis atópicas',
                'Otras' => 'Otras'],
                null, ['class' => 'form-control select2', 'name' => 'patologia[]', 'onchange' => 'showInput(this.value, this.id);',
                'multiple' => 'multiple','required' => 'required']); ?>

    </div>

    <!-- Otro -->
        <div class="form-group col-sm-12" id="patologia_cont" hidden="hidden">
            <?php echo Form::label('patologiaOtro', 'Si no esta en la lista, especifica cual:'); ?>

            <?php echo Form::text('patologiaOtro', null, ['class' => 'form-control']); ?>

        </div>

    <!-- Nombre Pat Field -->
    <div class="form-group col-sm-12">
        <?php echo Form::label('nombre_pat', 'Observaciones:'); ?>

        <?php echo Form::text('nombre_pat', null, ['class' => 'form-control']); ?>

    </div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Añadir patología', ['class' => 'btn btn-primary float-right']); ?>

    <a href="<?php echo route('patientPatologies.index'); ?>" class="btn btn-default float-right" data-dismiss ='modal'>Cancelar</a>
</div>
<?php /**PATH /var/www/resources/views/patients/create/patology.blade.php ENDPATH**/ ?>