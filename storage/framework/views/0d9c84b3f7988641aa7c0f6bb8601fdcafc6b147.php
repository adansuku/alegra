<div class="row">
    <div class="form-group col-sm-6">
        <?php echo Form::label('nom_servicio_sec', 'Nombre del Servicio:'); ?>

        <select class="form-control" id="type" name="nom_servicio_sec" required>
            <option value="">Selecciona una opcion</option>
            <option <?php echo e($patient->patientService->nom_servicio_sec == 'SPAP' ? 'selected':''); ?>>SPAP</option>
            <option <?php echo e($patient->patientService->nom_servicio_sec == 'UEC' ? 'selected':''); ?>>UEC</option>
            <option <?php echo e($patient->patientService->nom_servicio_sec == 'CD' ? 'selected':''); ?>>CD</option>
            <option <?php echo e($patient->patientService->nom_servicio_sec == 'SPAPD' ? 'selected':''); ?>>SPAPD</option>
        </select>
    </div>


<div class="form-group col-sm-6">
    <?php echo Form::label('municipio_sec', 'Municipio:'); ?>

    <?php echo Form::select('municipio_sec', ['' => 'Selecciona un municipio', 'La Matanza' => 'La Matanza', 'Granadilla Abona' => 'Granadilla Abona', 'La Orotava' => 'La Orotava', 'Tegueste' => 'Tegueste', ' Güimar' => ' Güimar'], null, ['class' => 'form-control' , 'required' => 'required']); ?>

</div>

<!-- Tipo Plaza Sec Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('tipo_plaza_sec', 'Tipo Plaza:'); ?>

    <?php echo Form::select('tipo_plaza_sec', ['' => 'Selecciona un tipo de plaza','Privada' => 'Privada', 'Pública' => 'Pública', 'Subvencionada' => 'Subvencionada'], null, ['class' => 'form-control', 'required' => 'required']); ?>

</div>

<!-- Fecha Sec Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('fecha_sec', 'Fecha:'); ?>

    <?php echo Form::date('fecha_sec', null, ['class' => 'form-control','id'=>'fecha_sec', 'required' => 'required']); ?>

</div>

<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript">
        $('#fecha_sec').datetimepicker({
            format: 'DD-MM-YYYY',
            useCurrent: false
        })
    </script>
<?php $__env->stopSection(); ?>

<!-- Dia Plaza Sec Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('dia_plaza_Sec', 'Dia:'); ?>

    <?php echo Form::select('dia_plaza_Sec', ['' => 'Selecciona un día' , 'Lunes' => 'Lunes', 'Martes' => 'Martes', 'Miércoles' => 'Miércoles', 'Jueves' => 'Jueves', 'Viernes' => 'Viernes', 'Sábado' => 'Sábado', 'Domingo' => 'Domingo'], null, ['class' => 'form-control', 'required' => 'required']); ?>

</div>

<!-- Hora Desde Sec Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('hora_desde_Sec', 'Desde:'); ?>

    <?php echo Form::time('hora_desde_Sec', null, ['class' => 'form-control', 'required' => 'required']); ?>

</div>

<!-- Hora Hasta Sec Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('hora_hasta_Sec', 'Hasta:'); ?>

    <?php echo Form::time('hora_hasta_Sec', null, ['class' => 'form-control', 'required' => 'required']); ?>

</div>

<!-- Observaciones Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('observaciones', 'Observaciones:'); ?>

    <?php echo Form::textarea('observaciones', null, ['class' => 'form-control']); ?>

</div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Guardar', ['class' => 'btn btn-primary float-right']); ?>

    <button type="button" class="btn btn-default float-right" data-dismiss="modal">Cancelar</button>

</div>
<?php /**PATH /var/www/resources/views/patients/create/secondary.blade.php ENDPATH**/ ?>