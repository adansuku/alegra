<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>His Categoria</th>
        <th>His Tipo</th>
        <th>His Respuesta</th>
        <th>His Observaciones</th>
        <th>Worker Id</th>
            <th>Action</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>His Categoria</th>
        <th>His Tipo</th>
        <th>His Respuesta</th>
        <th>His Observaciones</th>
        <th>Worker Id</th>
            <th>Action</th>
        </tr>
    </tfoot>
    <tbody>
    <?php $__currentLoopData = $workerHistories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $workerHistory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $workerHistory->his_categoria; ?></td>
            <td><?php echo $workerHistory->his_tipo; ?></td>
            <td><?php echo $workerHistory->his_respuesta; ?></td>
            <td><?php echo $workerHistory->his_observaciones; ?></td>
            <td><?php echo $workerHistory->worker_id; ?></td>
            <td>
                <?php echo Form::open(['route' => ['workerHistories.destroy', $workerHistory->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('workerHistories.show', [$workerHistory->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-eye"></i></a>
                    <a href="<?php echo route('workerHistories.edit', [$workerHistory->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-edit"></i></a>
                    <?php echo Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Vamos a proceder a eliminar un elemento. ¿Estas seguro/a?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH /var/www/resources/views/worker_histories/table.blade.php ENDPATH**/ ?>