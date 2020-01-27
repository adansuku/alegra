 <!-- Cat Documentos Field -->
 <div class="form-group col-sm-6">
    <?php echo Form::label('cat_documentos', 'Cat Documentos:'); ?>

    <?php echo Form::select('cat_documentos', ['Contrato Trabajo' => 'Contrato Trabajo', 'Contrato Mercantil Autónomo' => 'Contrato Mercantil Autónomo', 'ContratoFGULL' => 'ContratoFGULL', 'Modelo 145' => 'Modelo 145', 'Declaración Jurada No Tener Delitos Penales' => 'Declaración Jurada No Tener Delitos Penales', 'DNI' => 'DNI', 'Tarjeta Sanitaria' => 'Tarjeta Sanitaria', 'Título/Certificado Principal' => 'Título/Certificado Principal', 'Cursos Complementarios' => 'Cursos Complementarios', 'Habiltación Sanitaria' => 'Habiltación Sanitaria', 'col' => 'Colegiación', 'Nª Cuenta' => 'Nª Cuenta', 'Informe Vida Laboral' => 'Informe Vida Laboral', 'DARDE' => 'DARDE'], null, ['class' => 'form-control']); ?>

</div>

<div class="form-group col-sm-6">
    <?php echo Form::label('nombre_documento', 'Nombre para el documento:'); ?>

    <?php echo Form::text('nombre_documento', null, ['class' => 'form-control']); ?>

</div>

<!-- Url Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('url', 'Url:'); ?>

    <?php echo Form::file('url', null, ['class' => 'form-control']); ?>

</div>
<div class="clearfix"></div>

<!-- Worker Id Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('worker_id', 'Worker Id:'); ?>

    <?php echo Form::text('worker_id', $worker->id, ['class' => 'form-control d-none']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('workerDocuments.index'); ?>" class="btn btn-default">Cancel</a>
</div>
<?php /**PATH /var/www/resources/views/workers/partials/documentos.blade.php ENDPATH**/ ?>