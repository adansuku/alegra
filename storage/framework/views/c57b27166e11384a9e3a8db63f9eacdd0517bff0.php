<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Nombre Diagnostico</th>
        <th>Regimen Sanitario</th>
        <th>Patient Id</th>
            <th>Action</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Nombre Diagnostico</th>
        <th>Regimen Sanitario</th>
        <th>Patient Id</th>
            <th>Action</th>
        </tr>
    </tfoot>
    <tbody>
    <?php $__currentLoopData = $patientDiagnostics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patientDiagnostic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $patientDiagnostic->nombre_diagnostico; ?></td>
            <td><?php echo $patientDiagnostic->diagnostico; ?></td>
            <td><?php echo $patientDiagnostic->patient_id; ?></td>
            <td>
                <?php echo Form::open(['route' => ['patientDiagnostics.destroy', $patientDiagnostic->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('patientDiagnostics.show', [$patientDiagnostic->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-eye"></i></a>
                    <a href="<?php echo route('patientDiagnostics.edit', [$patientDiagnostic->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-edit"></i></a>
                    <?php echo Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH /var/www/resources/views/patient_diagnostics/table.blade.php ENDPATH**/ ?>