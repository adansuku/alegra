<table class="table datatables" width="100%" cellspacing="0">
    <thead class="thead-light">
        <tr>
            <th>Diagnóstico</th>
            <th>Diagnostico Concreto</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $patient->patientDiagnostics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $item->diagnostico; ?></td>
            <td><?php echo implode(', ', (array)$item->diagnos_concreto); ?></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php /**PATH /var/www/resources/views/patients/show/show_diagnostic.blade.php ENDPATH**/ ?>