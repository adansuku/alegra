<table class="table datatables" width="100%" cellspacing="0">
    <thead class="thead-light">
        <tr>
            <th width="15%">Fecha Registro</th>
            <th width="15%">Fecha de la acción</th>
            <th width="20%">Tipo Acción/Tarea</th>
            <th width="10%">Subtipo Acción/Tarea</th>
            <th width="10%">Destinado a</th>
            <th width="10%">Descripción</th>
            <th width="19%">Profesional Responsable</th>
            <th width="1%">Observaciones</th>
        </tr>
    </thead>

    <tbody>
        <?php $__currentLoopData = $patient->patientHistory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e(date('d / m / Y', strtotime($item->acc_fecha_reg ))); ?></td>
                <td><?php echo e(date('d / m / Y', strtotime($item->acc_fecha_realiz ))); ?></td>
                <td><?php echo $item->acc_tipo_accion; ?></td>
                <td><?php echo $item->acc_subtipo_accion; ?></td>
                <td>
                    <?php $__currentLoopData = $item->destinado_a; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item_destinado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    - <?php echo $item_destinado; ?> <br/>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </td>
                <td><?php echo $item->acc_descrip; ?></td>
                <td><?php echo $item->persona_responsable; ?></td>
                <td><?php echo $item->acc_observaciones; ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH /var/www/resources/views/patients/show/show_history.blade.php ENDPATH**/ ?>