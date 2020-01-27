<!-- 'bootstrap / Toggle Switch Cesion Imagen Field' -->
<div class="form-group col-sm-6">
    <!-- <?php echo Form::label('cesion_imagen', 'Cesion Imagen:'); ?>

    <label class="checkbox-inline">
   <?php echo Form::checkbox('cesion_imagen', 1, true,  ['data-toggle' => 'toggle']); ?>

    </label> -->
    <div class="custom-control custom-switch">
  <input type="checkbox" class="custom-control-input" id="customSwitch1" name="cesion_imagen">
  <label class="custom-control-label" for="customSwitch1">Cesión de imagen</label>
</div>
</div>




<!-- Alergias Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('alergias', 'Alergias:'); ?>

    <?php echo Form::text('alergias', null, ['class' => 'form-control']); ?>

</div>

<!-- Otras Alergias Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('otras_alergias', 'Otras Alergias:'); ?>

    <?php echo Form::text('otras_alergias', null, ['class' => 'form-control']); ?>

</div><?php /**PATH /var/www/resources/views/workers/partials/otros.blade.php ENDPATH**/ ?>