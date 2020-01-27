<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Nombre Doctor</th>
        <th>Observaciones Doctor</th>
        <th>Patient Id</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Nombre Doctor</th>
        <th>Observaciones Doctor</th>
        <th>Patient Id</th>
            <th>Acción</th>
        </tr>
    </tfoot>
    <tbody>
    <?php $__currentLoopData = $patientDoctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patientDoctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $patientDoctor->nombre_doctor; ?></td>
            <td><?php echo $patientDoctor->observaciones_doctor; ?></td>
            <td><?php echo $patientDoctor->patient_id; ?></td>
            <td>
                <?php echo Form::open(['route' => ['patientDoctors.destroy', $patientDoctor->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('patientDoctors.show', [$patientDoctor->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-eye"></i></a>
                    <a href="<?php echo route('patientDoctors.edit', [$patientDoctor->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-edit"></i></a>
                    <?php echo Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH /var/www/resources/views/patient_doctors/table.blade.php ENDPATH**/ ?>