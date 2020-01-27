<!-- Des Accion Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('des_accion', 'Des Accion:'); ?>

    <?php echo Form::text('des_accion', null, ['class' => 'form-control']); ?>

</div>

<!-- Reg Accion Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('reg_accion', 'Reg Accion:'); ?>

    <?php echo Form::date('reg_accion', null, ['class' => 'form-control','id'=>'reg_accion']); ?>

</div>

<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript">
        $('#reg_accion').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
<?php $__env->stopSection(); ?>

<!-- Rea Accion Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('rea_accion', 'Rea Accion:'); ?>

    <?php echo Form::date('rea_accion', null, ['class' => 'form-control','id'=>'rea_accion']); ?>

</div>

<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript">
        $('#rea_accion').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
<?php $__env->stopSection(); ?>

<!-- Woker Accion Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('woker_accion', 'Woker Accion:'); ?>

    <?php echo Form::text('woker_accion', null, ['class' => 'form-control']); ?>

</div>

<!-- Observaciones Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('observaciones', 'Observaciones:'); ?>

    <?php echo Form::textarea('observaciones', null, ['class' => 'form-control']); ?>

</div>

<!-- Patient Id Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('patient_id', 'Patient Id:'); ?>

    <?php echo Form::text('patient_id', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('patientHistories.index'); ?>" class="btn btn-default">Cancel</a>
</div>
<?php /**PATH /var/www/resources/views/patient_histories/fields.blade.php ENDPATH**/ ?>