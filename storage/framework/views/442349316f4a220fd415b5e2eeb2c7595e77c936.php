<!-- Nom Servicio Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nom_servicio', 'Nom Servicio:'); ?>

    <?php echo Form::select('nom_servicio', ['SPAP' => 'SPAP', 'UEC' => 'UEC', 'CD' => 'CD', 'SPAPD' => 'SPAPD'], null, ['class' => 'form-control']); ?>

</div>

<!-- Municipio Serv Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('municipio_serv', 'Municipio Serv:'); ?>

    <?php echo Form::text('municipio_serv', null, ['class' => 'form-control']); ?>

</div>

<!-- Tipo Plaza Serv Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('tipo_plaza_serv', 'Tipo Plaza Serv:'); ?>

    <?php echo Form::select('tipo_plaza_serv', ['PRIVADA' => 'PRIVADA', 'PÚBLICA' => 'PÚBLICA', 'SUBVENCIONADA' => 'SUBVENCIONADA'], null, ['class' => 'form-control']); ?>

</div>

<!-- Plaza Privada Serv Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('plaza_privada_serv', 'Plaza Privada Serv:'); ?>

    <?php echo Form::select('plaza_privada_serv', ['Socixs' => 'Socixs', 'No Socixs' => 'No Socixs', 'PEVS' => 'PEVS'], null, ['class' => 'form-control']); ?>

</div>

<!-- Plaza Sub Serv Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('plaza_sub_serv', 'Plaza Sub Serv:'); ?>

    <?php echo Form::text('plaza_sub_serv', null, ['class' => 'form-control']); ?>

</div>

<!-- Fecha Form Serv Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('fecha_form_serv', 'Fecha Form Serv:'); ?>

    <?php echo Form::date('fecha_form_serv', null, ['class' => 'form-control','id'=>'fecha_form_serv']); ?>

</div>

<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript">
        $('#fecha_form_serv').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
<?php $__env->stopSection(); ?>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Guardar', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('patientServices.index'); ?>" class="btn btn-default">Cancel</a>
</div>
<?php /**PATH /var/www/resources/views/patient_services/fields.blade.php ENDPATH**/ ?>