<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Fecha Entrada</th>
        <th>Fecha Salida</th>
        <th>Latitud</th>
        <th>Longitud</th>
        <th>Dirección</th>
        <th>Observaciones</th>
        <th>Worker Id</th>
            <th>Action</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Fecha Entrada</th>
        <th>Fecha Salida</th>
        <th>Latitud</th>
        <th>Longitud</th>
        <th>Dirección</th>
        <th>Observaciones</th>
        <th>Worker Id</th>
            <th>Action</th>
        </tr>
    </tfoot>
    <tbody>
    <?php $__currentLoopData = $workerTimes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $workerTime): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $workerTime->fecha_entrada; ?></td>
            <td><?php echo $workerTime->fecha_salida; ?></td>
            <td><?php echo $workerTime->latitud; ?></td>
            <td><?php echo $workerTime->longitud; ?></td>
            <td><?php echo $workerTime->dirección; ?></td>
            <td><?php echo $workerTime->observaciones; ?></td>
            <td><?php echo $workerTime->worker_id; ?></td>
            <td>
                <?php echo Form::open(['route' => ['workerTimes.destroy', $workerTime->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('workerTimes.show', [$workerTime->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-eye"></i></a>
                    <a href="<?php echo route('workerTimes.edit', [$workerTime->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-edit"></i></a>
                    <?php echo Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH /var/www/resources/views/worker_times/table.blade.php ENDPATH**/ ?>