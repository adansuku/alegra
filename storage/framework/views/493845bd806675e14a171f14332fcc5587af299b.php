<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Lab Servicio</th>
        <th>Lab Dias</th>
        <th>Lab Horas</th>
        <th>Lab Horas Semana</th>
        <th>Worker Id</th>
            <th>Action</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Lab Servicio</th>
        <th>Lab Dias</th>
        <th>Lab Horas</th>
        <th>Lab Horas Semana</th>
        <th>Worker Id</th>
            <th>Action</th>
        </tr>
    </tfoot>
    <tbody>
    <?php $__currentLoopData = $workerLabors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $workerLabor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $workerLabor->lab_servicio; ?></td>
            <td><?php echo $workerLabor->lab_dias; ?></td>
            <td><?php echo $workerLabor->lab_horas; ?></td>
            <td><?php echo $workerLabor->lab_horas_semana; ?></td>
            <td><?php echo $workerLabor->worker_id; ?></td>
            <td>
                <?php echo Form::open(['route' => ['workerLabors.destroy', $workerLabor->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('workerLabors.show', [$workerLabor->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-eye"></i></a>
                    <a href="<?php echo route('workerLabors.edit', [$workerLabor->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-edit"></i></a>
                    <?php echo Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Vamos a proceder a eliminar un elemento. ¿Estas seguro/a?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH /var/www/resources/views/worker_labors/table.blade.php ENDPATH**/ ?>