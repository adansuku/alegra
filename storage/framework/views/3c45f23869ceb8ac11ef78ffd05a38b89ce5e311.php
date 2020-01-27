<table class="table datatables" width="100%" cellspacing="0">

    <thead class="thead-light">
        <tr>
            <th>Patología</th>
            <th>Observaciones</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $patient->patientPatologies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo implode(', ', (array)$item->patologia); ?></td>
            <td><?php echo $item->nombre_pat; ?></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php /**PATH /var/www/resources/views/patients/show/show_patology.blade.php ENDPATH**/ ?>