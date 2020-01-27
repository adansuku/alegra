<table class="table dataTable" id="dataTable" width="100%" cellspacing="0">
    <thead class="thead-light">
        <tr>
            <th>Tipo de plaza</th>
            <th>Fecha</th>
            <th>Día </th>
            <th>Desde</th>
            <th>Hasta</th>
            <th>Observaciones</th>
        </tr>
    </thead>
    <tbody>
    
    <?php if(!empty($patient->patientService->serviceHours)): ?>
        <?php $__currentLoopData = $patient->patientService->serviceHours; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo $item->tipo_plaza; ?></td>
                <td><?php echo $item->fecha_form; ?></td>
                <td><?php echo $item->dia_plaza; ?></td>
                <td><?php echo $item->hora_desde; ?></td>
                <td><?php echo $item->hora_hasta; ?></td>
                <td><?php echo $item->observaciones; ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
        
    </tbody>
</table><?php /**PATH /var/www/resources/views/patients/show/show_primary_service.blade.php ENDPATH**/ ?>