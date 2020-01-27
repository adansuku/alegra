<table class="table dataTable " id="dataTable" width="100%" cellspacing="0">
    <thead class="thead-light">
        <tr>
            <th>Nombre</th>
            <th>Municipio</th>
            <th>Tipo de plaza</th>
            <th>Fecha</th>
            <th>Día</th>
            <th>Horario</th>
            <th>Observaciones</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $patient->patientSecondaryService; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $item->nom_servicio_sec; ?></td>
            <td><?php echo $item->municipio_sec; ?></td>
            <td><?php echo $item->tipo_plaza_sec; ?></td>
            <td><?php echo $item->fecha_sec; ?></td>
            <td><?php echo $item->dia_plaza_Sec; ?></td>
            <td><?php echo $item->hora_desde_Sec; ?> - <?php echo $item->hora_hasta_Sec; ?></td>
            <td><?php echo $item->observaciones; ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH /var/www/resources/views/patients/show/show_secondary_service.blade.php ENDPATH**/ ?>