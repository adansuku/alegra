<div class="row">
    <?php $__env->startSection('scripts'); ?>
    <script type="text/javascript">
        $('#fecha_real').datetimepicker({
            format: 'dd-mm-yyyy',
            useCurrent: false
        })
    </script>
    <?php $__env->stopSection(); ?>

    <!-- Tipo Pia Field -->
    <div class="form-group col-lg-6">
        <?php echo Form::label('tipo_pia', 'Tipo Pia:'); ?>

        <?php echo Form::select('tipo_pia', ['Seguimiento' => 'Seguimiento'], 'null',
        ['class' => 'form-control', 'id' => 'tipo_pia','required' => 'required']); ?>

    </div>

    <!-- Url Pia Field -->
    <div class="form-group col-lg-6">
        <?php echo Form::label('url_pia', 'Archivo Pia:'); ?>

        <?php echo Form::file('url_pia'); ?>

    </div>
    <div class="clearfix"></div>

    <!-- Obs Pia Field -->
    <div class="form-group col-lg-12">
        <?php echo Form::label('obs_pia', 'Observaciones:'); ?>

        <?php echo Form::textArea('obs_pia', null, ['class' => 'form-control']); ?>

    </div>


    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        <?php echo Form::submit('Crear nuevo pia', ['class' => 'btn btn-primary float-right', 'id' => 'save']); ?>

        <?php echo Form::submit('Cancelar', ['class' => 'btn btn-danger float-right', 'data-dismiss' => 'modal']); ?>


    </div>
</div><?php /**PATH /var/www/resources/views/patients/create/pias.blade.php ENDPATH**/ ?>