<!-- Modal Add Document-->

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Servicio</th>
        <th>Nom Servicio</th>
        <th>Municipio</th>
        <th>Patient Id</th>
            <th>Action</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Servicio Secundario</th>
            <th>Nom Servicio</th>
            <th>Municipio</th>
            <th>Patient Id</th>
            <th>Action</th>
        </tr>
    </tfoot>
    <tbody>
    <?php $__currentLoopData = $patient->patientServices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($item->servicio  != 'Servicio Principal'): ?>
        <tr>
            <td><?php echo $item->servicio; ?></td>
            <td><?php echo $item->nom_servicio; ?></td>
            <td><?php echo $item->municipio; ?></td>
            <td><?php echo $item->patient_id; ?></td>
            
            <td>
                

               <?php echo e($item->patient_id); ?>

            </td>
        </tr>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH /var/www/resources/views/patients/show/show_secondary.blade.php ENDPATH**/ ?>