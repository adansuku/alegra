<table class="table datatables" width="100%" cellspacing="0">
    <thead class="thead-light">
        <tr>
        <th>Alergia</th>
        <th>Observaciones</th>
    </thead>

    <tbody>
    <?php $__currentLoopData = $patient->patientAllergies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo implode(', ', (array)$item->alergia); ?></td>
            <td><?php echo $item->nombre_alergia; ?></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php /**PATH /var/www/resources/views/patients/show/show_allergy.blade.php ENDPATH**/ ?>