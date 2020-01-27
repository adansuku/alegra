<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Tipo Plaza</th>
        <th>Fecha Form</th>
        <th>Dia Plaza</th>
        <th>Hora Desde</th>
        <th>Hora Hasta</th>
        <th>Observaciones</th>
        <th>Patient Service Id</th>
            <th>Action</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Tipo Plaza</th>
        <th>Fecha Form</th>
        <th>Dia Plaza</th>
        <th>Hora Desde</th>
        <th>Hora Hasta</th>
        <th>Observaciones</th>
        <th>Patient Service Id</th>
            <th>Action</th>
        </tr>
    </tfoot>
    <tbody>
    <?php $__currentLoopData = $patientHours; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patientHour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $patientHour->tipo_plaza; ?></td>
            <td><?php echo $patientHour->fecha_form; ?></td>
            <td><?php echo $patientHour->dia_plaza; ?></td>
            <td><?php echo $patientHour->hora_desde; ?></td>
            <td><?php echo $patientHour->hora_hasta; ?></td>
            <td><?php echo $patientHour->observaciones; ?></td>
            <td><?php echo $patientHour->patient_service_id; ?></td>
            <td>
                <?php echo Form::open(['route' => ['patientHours.destroy', $patientHour->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('patientHours.show', [$patientHour->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-eye"></i></a>
                    <a href="<?php echo route('patientHours.edit', [$patientHour->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-edit"></i></a>
                    <?php echo Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH /var/www/resources/views/patient_hours/table.blade.php ENDPATH**/ ?>