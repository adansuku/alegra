<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Medicacion</th>
        <th>Pauta Medicacion</th>
        <th>Obs Medicacion</th>
        <th>Patient Id</th>
            <th>Action</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Medicacion</th>
        <th>Pauta Medicacion</th>
        <th>Obs Medicacion</th>
        <th>Patient Id</th>
            <th>Action</th>
        </tr>
    </tfoot>
    <tbody>
    <?php $__currentLoopData = $patientMedications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patientMedication): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $patientMedication->medicacion; ?></td>
            <td><?php echo $patientMedication->pauta_medicacion; ?></td>
            <td><?php echo $patientMedication->obs_medicacion; ?></td>
            <td><?php echo $patientMedication->patient_id; ?></td>
            <td>
                <?php echo Form::open(['route' => ['patientMedications.destroy', $patientMedication->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('patientMedications.show', [$patientMedication->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-eye"></i></a>
                    <a href="<?php echo route('patientMedications.edit', [$patientMedication->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-edit"></i></a>
                    <?php echo Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH /var/www/resources/views/patient_medications/table.blade.php ENDPATH**/ ?>