<table class="table datatables dark" width="100%" cellspacing="0">
    <thead class="thead-dark">
        <tr>
            <th>Antecedentes</th>
            <th>Año</th>
            <th>Especificaciones</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $patient->patientPasts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patientPast): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $patientPast->antecedentes; ?></td>
            <td>
                <?php echo e(date('d/m/Y', strtotime($patientPast->antecedentes_anio))); ?>

            </td>
            <td><?php echo $patientPast->antecedentes_obs; ?></td>
            <td>
                <div class='btn-group'>
                    <a href="/pastdelete/<?php echo e($patientPast->id); ?>" data-token="<?php echo e(csrf_token()); ?>"
                        class='btn btn-block btn-danger btn-xs' data-confirm="Seguro que quieres eliminar este pia?"
                        onclick="return confirm('¿Estas segura que quieres eliminar el antecedente?')">
                        <i class="fas fa-trash"></i> Eliminar
                    </a> </div>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH /var/www/resources/views/patients/show/show_past.blade.php ENDPATH**/ ?>