<!-- Cat Documentos Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('cat_documentos', 'Cat Documentos:'); ?>

    <?php echo Form::select('cat_documentos', ['ct' => 'Contrato Trabajo', 'cm' => 'Contrato Mercantil Autónomo', 'cfgull' => 'ContratoFGULL', 'mod145' => 'Modelo 145', 'nopenal' => 'Declaración Jurada No Tener Delitos Penales', 'dni' => 'DNI', 'tssgg' => 'Tarjeta Sanitaria', 'titulo' => 'Título/Certificado Principal', 'cursos' => 'Cursos Complementarios', 'hab_san' => 'Habiltación Sanitaria', 'col' => 'Colegiación', 'cuenta' => 'Nª Cuenta', 'vida_lab' => 'Informe Vida Laboral', 'darde' => 'DARDE'], null, ['class' => 'form-control']); ?>

</div>

<!-- Url Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('url', 'Url:'); ?>

    <?php echo Form::file('url'); ?>

</div>
<div class="clearfix"></div>

<!-- Worker Id Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('worker_id', 'Worker Id:'); ?>

    <?php echo Form::text('worker_id', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('workerDocuments.index'); ?>" class="btn btn-default">Cancel</a>
</div>
<?php /**PATH /var/www/resources/views/worker_documents/fields.blade.php ENDPATH**/ ?>