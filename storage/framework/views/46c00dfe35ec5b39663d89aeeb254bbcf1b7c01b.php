<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Dia Trans</th>
        <th>Dom Recogida</th>
        <th>Tray Trans</th>
        <th>Patient Id</th>
            <th>Action</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Dia Trans</th>
        <th>Dom Recogida</th>
        <th>Tray Trans</th>
        <th>Patient Id</th>
            <th>Action</th>
        </tr>
    </tfoot>
    <tbody>
    <?php $__currentLoopData = $patientTransports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patientTransport): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $patientTransport->dia_trans; ?></td>
            <td><?php echo $patientTransport->dom_recogida; ?></td>
            <td><?php echo $patientTransport->tray_trans; ?></td>
            <td><?php echo $patientTransport->patient_id; ?></td>
            <td>
                <?php echo Form::open(['route' => ['patientTransports.destroy', $patientTransport->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('patientTransports.show', [$patientTransport->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-eye"></i></a>
                    <a href="<?php echo route('patientTransports.edit', [$patientTransport->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-edit"></i></a>
                    <?php echo Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH /var/www/resources/views/patient_transports/table.blade.php ENDPATH**/ ?>