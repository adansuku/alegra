<!-- Nombre Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nombre', 'Nombre:'); ?>

    <?php echo Form::text('nombre', null, ['class' => 'form-control']); ?>

</div>

<!-- Apellido Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('apellido', 'Apellido:'); ?>

    <?php echo Form::text('apellido', null, ['class' => 'form-control']); ?>

</div>

<!-- Parentesco Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('parentesco', 'Parentesco:'); ?>

    <?php echo Form::select('parentesco', ['Hija/o' => 'Hija/o', 'Hermana/o' => 'Hermana/o', 'Nuera' => 'Nuera', 'Yerno' => 'Yerno', 'Cuidador/a profesional' => 'Cuidador/a profesional', 'Nieta/o' => 'Nieta/o', 'Sobrina/o' => 'Sobrina/o'], null, ['class' => 'form-control']); ?>

</div>

<!-- Dni Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('dni', 'Dni:'); ?>

    <?php echo Form::text('dni', null, ['class' => 'form-control']); ?>

</div>

<!-- Fecha Nac Care Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('fecha_nac_care', 'Fecha Nac Care:'); ?>

    <?php echo Form::date('fecha_nac_care', null, ['class' => 'form-control','id'=>'fecha_nac_care']); ?>

</div>

<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript">
        $('#fecha_nac_care').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
<?php $__env->stopSection(); ?>

<!-- Direccion Care Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('direccion_care', 'Direccion Care:'); ?>

    <?php echo Form::text('direccion_care', null, ['class' => 'form-control']); ?>

</div>

<!-- Tel Care Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('tel_care', 'Tel Care:'); ?>

    <?php echo Form::number('tel_care', null, ['class' => 'form-control']); ?>

</div>

<!-- Movil Care Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('movil_care', 'Movil Care:'); ?>

    <?php echo Form::number('movil_care', null, ['class' => 'form-control']); ?>

</div>

<!-- Email Care Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('email_care', 'Email Care:'); ?>

    <?php echo Form::email('email_care', null, ['class' => 'form-control']); ?>

</div>

<!-- Whatsapp Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('whatsapp', 'Whatsapp:'); ?>

    <?php echo Form::select('whatsapp', ['Si' => 'Si', 'No' => 'No'], null, ['class' => 'form-control']); ?>

</div>

<!-- Sit Laboral Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('sit_laboral', 'Sit Laboral:'); ?>

    <?php echo Form::select('sit_laboral', ['Jubilación' => 'Jubilación', 'Ocupada' => 'Ocupada', 'Desempleada' => 'Desempleada'], null, ['class' => 'form-control']); ?>

</div>

<!-- Trabajo Care Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('trabajo_care', 'Trabajo Care:'); ?>

    <?php echo Form::text('trabajo_care', null, ['class' => 'form-control']); ?>

</div>

<!-- Ano Care Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('ano_care', 'Ano Care:'); ?>

    <?php echo Form::text('ano_care', null, ['class' => 'form-control']); ?>

</div>

<!-- Sit Apoyo Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('sit_apoyo', 'Sit Apoyo:'); ?>

    <?php echo Form::select('sit_apoyo', ['Apoyo Emocional' => 'Apoyo Emocional', 'Grupo Cuidadores' => 'Grupo Cuidadores', 'Respiro Familiar' => 'Respiro Familiar'], null, ['class' => 'form-control']); ?>

</div>

<!-- Cesion Care Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('cesion_care', 'Cesion Care:'); ?>

    <?php echo Form::select('cesion_care', ['Si' => 'Si', 'No' => 'No'], null, ['class' => 'form-control']); ?>

</div>

<!-- Contactar Para Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('contactar_para', 'Contactar Para:'); ?>

    <?php echo Form::select('contactar_para', ['URGENCIAS' => 'URGENCIAS', 'Seguimiento diario' => 'Seguimiento diario', 'contabilidad' => 'contabilidad'], null, ['class' => 'form-control']); ?>

</div>

<!-- Es Referencia Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('es_referencia', 'Es Referencia:'); ?>

    <?php echo Form::select('es_referencia', ['Si' => 'Si', 'No' => 'No'], null, ['class' => 'form-control']); ?>

</div>
<?php /**PATH /var/www/resources/views/patients/create/urgency.blade.php ENDPATH**/ ?>