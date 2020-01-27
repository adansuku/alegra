<!-- Calle Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('calle', 'Calle:'); ?>

    <?php echo Form::text('calle', null, ['class' => 'form-control']); ?>

</div>

<!-- Num Calle Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('num_calle', 'Num Calle:'); ?>

    <?php echo Form::text('num_calle', null, ['class' => 'form-control']); ?>

</div>

<!-- Puerta Piso Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('puerta_piso', 'Puerta Piso:'); ?>

    <?php echo Form::text('puerta_piso', null, ['class' => 'form-control']); ?>

</div>

<!-- Cp Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('cp', 'Cp:'); ?>

    <?php echo Form::text('cp', null, ['class' => 'form-control']); ?>

</div>

<!-- Ciudad Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('ciudad', 'Ciudad:'); ?>

    <?php echo Form::text('ciudad', null, ['class' => 'form-control']); ?>

</div>

<!-- Isla Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('isla', 'Isla:'); ?>

    <?php echo Form::select('isla', [' Tenerife' => ' Tenerife', ' El Hierro' => ' El Hierro', ' La Palma' => ' La Palma', ' La Gomera' => ' La Gomera', ' Gran Canaria' => ' Gran Canaria', ' Fuerteventura' => ' Fuerteventura', ' Lanzarote' => ' Lanzarote'], null, ['class' => 'form-control']); ?>

</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('email', 'Email:'); ?>

    <?php echo Form::email('email', null, ['class' => 'form-control']); ?>

</div>

<!-- Whatsapp Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('whatsapp', 'Whatsapp:'); ?>

    <?php echo Form::select('whatsapp', [' Si' => ' Si', ' No' => ' No'], null, ['class' => 'form-control']); ?>

</div>

<!-- Telefono Domi Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('telefono_domi', 'Telefono Domi:'); ?>

    <?php echo Form::text('telefono_domi', null, ['class' => 'form-control']); ?>

</div>

<!-- Movil Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('movil', 'Movil:'); ?>

    <?php echo Form::text('movil', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('contactInfos.index'); ?>" class="btn btn-default">Cancel</a>
</div>
<?php /**PATH /var/www/resources/views/contact_infos/fields.blade.php ENDPATH**/ ?>