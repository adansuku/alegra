<!-- Fecha Trans Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('fecha_trans', 'Fecha Trans:'); ?>

    <?php echo Form::date('fecha_trans', null, ['class' => 'form-control','id'=>'fecha_trans']); ?>

</div>

<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript">
        $('#fecha_trans').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
<?php $__env->stopSection(); ?>

<!-- Transporte Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('transporte', 'Transporte:'); ?>

    <?php echo Form::text('transporte', null, ['class' => 'form-control']); ?>

</div>

<!-- Cesion Imagen Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('cesion_imagen', 'Cesion Imagen:'); ?>

    <?php echo Form::select('cesion_imagen', ['Si' => 'Si', 'No' => 'No'], null, ['class' => 'form-control']); ?>

</div>

<!-- Salir Centro Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('salir_centro', 'Salir Centro:'); ?>

    <?php echo Form::select('salir_centro', ['Si' => 'Si', 'No' => 'No'], null, ['class' => 'form-control']); ?>

</div>

<!-- Riesgo Caidas Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('riesgo_caidas', 'Riesgo Caidas:'); ?>

    <?php echo Form::select('riesgo_caidas', ['Sin Riesgo' => 'Sin Riesgo', 'Leve' => 'Leve', 'Moderado' => 'Moderado', 'Grave' => 'Grave'], null, ['class' => 'form-control']); ?>

</div>

<!-- Salida Externa Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('salida_externa', 'Salida Externa:'); ?>

    <?php echo Form::select('salida_externa', ['Si' => 'Si', 'No' => 'No'], null, ['class' => 'form-control']); ?>

</div>

<!-- Socio Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('socio', 'Socio:'); ?>

    <?php echo Form::select('socio', ['Si' => 'Si', 'No' => 'No'], null, ['class' => 'form-control']); ?>

</div>

<!-- No Socio Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('no_socio', 'No Socio:'); ?>

    <?php echo Form::text('no_socio', null, ['class' => 'form-control']); ?>

</div>

<!-- Pevs Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('pevs', 'Pevs:'); ?>

    <?php echo Form::select('pevs', ['Si' => 'Si', 'No' => 'No'], null, ['class' => 'form-control']); ?>

</div>

<!-- Tipo Sub Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('tipo_sub', 'Tipo Sub:'); ?>

    <?php echo Form::select('tipo_sub', ['Ayuntamiento' => 'Ayuntamiento', 'Cabildo' => 'Cabildo', 'Anillo Insular' => 'Anillo Insular', 'Otras' => 'Otras'], null, ['class' => 'form-control']); ?>

</div>

<!-- Forma Pago Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('forma_pago', 'Forma Pago:'); ?>

    <?php echo Form::select('forma_pago', ['Efectivo' => 'Efectivo', 'Transferencia' => 'Transferencia', 'Domiciliación' => 'Domiciliación', 'Subvencionada' => 'Subvencionada'], null, ['class' => 'form-control']); ?>

</div>

<!-- Patient Id Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('patient_id', 'Patient Id:'); ?>

    <?php echo Form::text('patient_id', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('patientOthers.index'); ?>" class="btn btn-default">Cancel</a>
</div>
<?php /**PATH /var/www/resources/views/patient_others/fields.blade.php ENDPATH**/ ?>