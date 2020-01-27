<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Actividad</th>
        <th>Num Sesionesxmes</th>
        <th>Duracion Sesiones</th>
            <th>Action</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Actividad</th>
        <th>Num Sesionesxmes</th>
        <th>Duracion Sesiones</th>
            <th>Action</th>
        </tr>
    </tfoot>
    <tbody>
    <?php $__currentLoopData = $spapds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $spapd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $spapd->actividad; ?></td>
            <td><?php echo $spapd->num_sesionesXmes; ?></td>
            <td><?php echo $spapd->duracion_sesiones; ?></td>
            <td>
                <?php echo Form::open(['route' => ['spapds.destroy', $spapd->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('spapds.show', [$spapd->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-eye"></i></a>
                    <a href="<?php echo route('spapds.edit', [$spapd->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-edit"></i></a>
                    <?php echo Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH /var/www/resources/views/spapds/table.blade.php ENDPATH**/ ?>