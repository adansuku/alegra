<table class="table datatables dark" width="100%" cellspacing="0">
    <thead class="thead-dark">
        <tr>
            <th>Medicación</th>
            <th>Pauta Medicacion</th>
            <th>Observaciones</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $patient->patientMedications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patientMedication): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $patientMedication->medicacion; ?></td>
            <td><?php echo $patientMedication->pauta_medicacion; ?></td>
            <td><?php echo $patientMedication->obs_medicacion; ?></td>
            <td>
                <div class='btn-group'>
                    <a href="/medicationdelete/<?php echo e($patientMedication->id); ?>" 
                    data-token="<?php echo e(csrf_token()); ?>" 
                    class='btn btn-block btn-danger btn-xs' 
                    onclick="return confirm('¿Estas segura que quieres eliminar el la medicación?')">
                        <i class="fas fa-trash"></i> Eliminar
                    </a>

                </div>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH /var/www/resources/views/patients/show/show_medication.blade.php ENDPATH**/ ?>