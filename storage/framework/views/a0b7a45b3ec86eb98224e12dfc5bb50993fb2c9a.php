<!-- Muestra los documentos adjuntos a este usuario -->
<table class="table display" id="" width="100%" cellspacing="0">
    <thead class="table-primary text-dark">
        <tr>
            <th width="45%">Categoría</th>
            <th width="45%">Nombre</th>
            <th width="10%">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $worker->workerDocuments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td>
                <?php echo e($item->cat_documentos); ?>

            </td>
            <td>
                <a href="<?php echo e(asset("storage/$item->url")); ?>" target="_blank">
                    <?php echo e($item->nombre_documento); ?>

                </a>
            </td>
            <td class="text-center">
                <a href="<?php echo e(asset("storage/$item->url")); ?>" target="_blank">
                    <i class="fas fa-download"></i>
                </a>
                |
                <a href="/workerdelete/<?php echo e($item->id); ?>" data-token="<?php echo e(csrf_token()); ?>" data-confirm="Are you sure?">
                    <i class="fas fa-trash"></i>
                </a>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH /var/www/resources/views/workers/show/show_documents.blade.php ENDPATH**/ ?>