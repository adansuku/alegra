<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Centro Nombre</th>
        <th>Centro Datos</th>
            <th>Action</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Centro Nombre</th>
        <th>Centro Datos</th>
            <th>Action</th>
        </tr>
    </tfoot>
    <tbody>
    <?php $__currentLoopData = $workerCenters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $workerCenter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $workerCenter->centro_nombre; ?></td>
            <td><?php echo $workerCenter->centro_datos; ?></td>
            <td>
                <?php echo Form::open(['route' => ['workerCenters.destroy', $workerCenter->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('workerCenters.show', [$workerCenter->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-eye"></i></a>
                    <a href="<?php echo route('workerCenters.edit', [$workerCenter->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-edit"></i></a>
                    <?php echo Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH /var/www/resources/views/worker_centers/table.blade.php ENDPATH**/ ?>