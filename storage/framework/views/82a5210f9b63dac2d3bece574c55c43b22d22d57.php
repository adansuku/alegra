<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Cat Documentos</th>
        <th>Url</th>
        <th>Worker Id</th>
            <th>Action</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Cat Documentos</th>
        <th>Url</th>
        <th>Worker Id</th>
            <th>Action</th>
        </tr>
    </tfoot>
    <tbody>
    <?php $__currentLoopData = $workerDocuments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $workerDocument): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $workerDocument->cat_documentos; ?></td>
            <td><?php echo $workerDocument->url; ?></td>
            <td><?php echo $workerDocument->worker_id; ?></td>
            <td>
                <?php echo Form::open(['route' => ['workerDocuments.destroy', $workerDocument->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('workerDocuments.show', [$workerDocument->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-eye"></i></a>
                    <a href="<?php echo route('workerDocuments.edit', [$workerDocument->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-edit"></i></a>
                    <?php echo Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Aestas seguro/a')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH /var/www/resources/views/worker_documents/table.blade.php ENDPATH**/ ?>