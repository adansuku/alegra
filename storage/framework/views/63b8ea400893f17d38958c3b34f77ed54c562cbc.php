<table class="table datatables" width="100%" cellspacing="0">
<thead class="thead-light">
        <tr>
            <th>Nombre Doctor</th>
        <th>Observaciones Doctor</th>
  
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $patient->patientDoctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $item->nombre_doctor; ?></td>
            <td><?php echo $item->observaciones_doctor; ?></td>
      
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH /var/www/resources/views/patients/show/show_doctor.blade.php ENDPATH**/ ?>