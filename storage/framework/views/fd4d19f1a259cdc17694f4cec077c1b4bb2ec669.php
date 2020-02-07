<table class="table datatables" width="100%" cellspacing="0">
    <thead class="thead-light">
        <tr>
            <th>Fecha Registro</th>
            <th>Fecha realizacion</th>
            <th>Tipo Acción/Tarea</th>
            <th>Subtipo Acción/Tarea</th>
            <th>Profesional Responsable</th>
            <th>Descripción</th>
            <th>Observaciones</th>
        </tr>
    </thead>

    <tbody>
        <?php $__currentLoopData = $patient->patientHistory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e(date('d / m / Y', strtotime($item->acc_fecha_reg ))); ?></td>
            <td><?php echo e(date('d / m / Y', strtotime($item->acc_fecha_realiz ))); ?></td>
            <td><?php echo $item->acc_tipo_accion; ?></td>
            <td><?php echo $item->acc_subtipo_accion; ?></td>
            <td><?php echo $item->acc_woker_accion; ?></td>
            <td><?php echo $item->acc_descrip; ?></td>
            <td><?php echo $item->acc_observaciones; ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH /var/www/resources/views/patients/show/show_history.blade.php ENDPATH**/ ?>