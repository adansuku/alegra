<!-- Fecha Entrada Field -->
<script>
var hoy = navigator.geolocation.getCurrentPosition;
console.log(hoy);
</script>

<div class="form-group col-sm-6">
    <?php echo Form::label('fecha_entrada', 'Fecha Entrada:'); ?>

    <?php echo Form::text('fecha_entrada', date('Y-m-d H:i:s'), [
        'class' => 'form-control',
        'id'=>'fecha_entrada',

        
        ]); ?>

</div>

<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript">
        $('#fecha_entrada').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
<?php $__env->stopSection(); ?>

<!-- Fecha Salida Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('fecha_salida', 'Fecha Salida:'); ?>

    <?php echo Form::text('fecha_salida', null, ['class' => 'form-control']); ?>

</div>

<!-- Latitud Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('latitud', 'Latitud:'); ?>

    <?php echo Form::text('latitud', null, ['class' => 'form-control']); ?>

</div>

<!-- Longitud Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('longitud', 'Longitud:'); ?>

    <?php echo Form::text('longitud', null, ['class' => 'form-control']); ?>

</div>

<!-- Dirección Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('dirección', 'Dirección:'); ?>

    <?php echo Form::text('dirección', null, ['class' => 'form-control']); ?>

</div>

<!-- Observaciones Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('observaciones', 'Observaciones:'); ?>

    <?php echo Form::text('observaciones', null, ['class' => 'form-control']); ?>

</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('workerTimes.index'); ?>" class="btn btn-default">Cancel</a>
</div>
<?php /**PATH /var/www/resources/views/worker_times/fields.blade.php ENDPATH**/ ?>