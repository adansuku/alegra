<table class="table datatables" width="100%" cellspacing="0">
    <thead class="thead-light">
        <tr>
            <th>Categoría</th>
            <th>Nombre</th>
            <th>Abrir / Descargar</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $patient->patientDocuments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $item->cat_documentos; ?></td>
            <td><?php echo $item->nombre_doc; ?></td>

            <td>
                <a class="btn btn-block btn-secondary btn-xs" href="<?php echo e(asset("storage/$item->url")); ?>" target="_blank"><i class="fas fa-download"></i> Ver / Descargar</a>
                <a href="/deletedocument/<?php echo e($item->id); ?>" data-token="<?php echo e(csrf_token()); ?>" class='btn btn-block btn-danger btn-xs'
                data-confirm="Seguro que quieres eliminar este pia?" 
                onclick="return confirm('¿Estas segura que quieres el documento?')">
                    <i class="fas fa-trash"></i> Eliminar
                </a>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH /var/www/resources/views/patients/show/show_documents.blade.php ENDPATH**/ ?>