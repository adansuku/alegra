<!-- Id Field -->
<div class="form-group">
    <?php echo Form::label('id', 'Id:'); ?>

    <p><?php echo $workerDocument->id; ?></p>
</div>

<!-- Cat Documentos Field -->
<div class="form-group">
    <?php echo Form::label('cat_documentos', 'Cat Documentos:'); ?>

    <p><?php echo $workerDocument->cat_documentos; ?></p>
</div>

<!-- Url Field -->
<div class="form-group">
    <?php echo Form::label('url', 'Url:'); ?>

    <p><?php echo $workerDocument->url; ?></p>
</div>

<!-- Created At Field -->
<div class="form-group">
    <?php echo Form::label('created_at', 'Created At:'); ?>

    <p><?php echo $workerDocument->created_at; ?></p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    <?php echo Form::label('updated_at', 'Updated At:'); ?>

    <p><?php echo $workerDocument->updated_at; ?></p>
</div>

<!-- Worker Id Field -->
<div class="form-group">
    <?php echo Form::label('worker_id', 'Worker Id:'); ?>

    <p><?php echo $workerDocument->worker_id; ?></p>
</div>

<?php /**PATH /var/www/resources/views/worker_documents/show_fields.blade.php ENDPATH**/ ?>