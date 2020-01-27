<!-- Nom Servicio Sec Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nom_servicio_sec', 'Nom Servicio Sec:'); ?>

    <?php echo Form::select('nom_servicio_sec', ['SPAP' => 'SPAP', 'UEC' => 'UEC', 'CD' => 'CD', 'SPAPD' => 'SPAPD'], null, ['class' => 'form-control']); ?>

</div>

<!-- Municipio Sec Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('municipio_sec', 'Municipio Sec:'); ?>

    <?php echo Form::select('municipio_sec', ['La Matanza' => 'La Matanza', 'Granadilla Abona' => 'Granadilla Abona', 'La Orotava' => 'La Orotava', 'Tegueste' => 'Tegueste', ' Güimar' => ' Güimar'], null, ['class' => 'form-control']); ?>

</div>

<!-- Tipo Plaza Sec Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('tipo_plaza_sec', 'Tipo Plaza Sec:'); ?>

    <?php echo Form::select('tipo_plaza_sec', ['Privada' => 'Privada', 'Pública' => 'Pública', 'Subvencionada' => 'Subvencionada'], null, ['class' => 'form-control']); ?>

</div>

<!-- Fecha Sec Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('fecha_sec', 'Fecha Sec:'); ?>

    <?php echo Form::date('fecha_sec', null, ['class' => 'form-control','id'=>'fecha_sec']); ?>

</div>

<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript">
        $('#fecha_sec').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
<?php $__env->stopSection(); ?>

<!-- Dia Plaza Sec Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('dia_plaza_Sec', 'Dia Plaza Sec:'); ?>

    <?php echo Form::select('dia_plaza_Sec', ['Lunes' => 'Lunes', 'Martes' => 'Martes', 'Miércoles' => 'Miércoles', 'Jueves' => 'Jueves', 'Viernes' => 'Viernes', 'Sábado' => 'Sábado', 'Domingo' => 'Domingo'], null, ['class' => 'form-control']); ?>

</div>

<!-- Hora Desde Sec Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('hora_desde_Sec', 'Hora Desde Sec:'); ?>

    <?php echo Form::text('hora_desde_Sec', null, ['class' => 'form-control']); ?>

</div>

<!-- Hora Hasta Sec Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('hora_hasta_Sec', 'Hora Hasta Sec:'); ?>

    <?php echo Form::text('hora_hasta_Sec', null, ['class' => 'form-control']); ?>

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

    <a href="<?php echo route('patientSecondaryServs.index'); ?>" class="btn btn-default">Cancel</a>
</div>
<?php /**PATH /var/www/resources/views/patient_secondary_servs/fields.blade.php ENDPATH**/ ?>