<table class="table datatables" width="100%" cellspacing="0">
    <thead class="thead-light">
        <tr>
            <th>Dias</th>
            <th>Trayecto</th>

            <th>Acción</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $patient->patientTransport; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patientTransport): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $patientTransport->dia_trans; ?></td>
            <td><?php echo $patientTransport->tray_trans; ?></td>
            <td>
                <div class='btn-group'>
                    <a href="/transportdelete/<?php echo e($patientTransport->id); ?>" data-token="<?php echo e(csrf_token()); ?>"
                        class='btn btn-block btn-danger btn-xs' data-confirm="Seguro que quieres eliminar este pia?"
                        onclick="return confirm('¿Estas segura que quieres eliminar el servicio?')">
                        <i class="fas fa-trash"></i> Eliminar
                    </a>
                </div>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH /var/www/resources/views/patients/show/show_transport.blade.php ENDPATH**/ ?>