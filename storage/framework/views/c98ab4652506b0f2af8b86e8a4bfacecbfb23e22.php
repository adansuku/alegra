<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Nom Servicio Sec</th>
        <th>Municipio Sec</th>
        <th>Tipo Plaza Sec</th>
        <th>Fecha Sec</th>
        <th>Dia Plaza Sec</th>
        <th>Hora Desde Sec</th>
        <th>Hora Hasta Sec</th>
        <th>Observaciones</th>
        <th>Patient Id</th>
            <th>Action</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Nom Servicio Sec</th>
        <th>Municipio Sec</th>
        <th>Tipo Plaza Sec</th>
        <th>Fecha Sec</th>
        <th>Dia Plaza Sec</th>
        <th>Hora Desde Sec</th>
        <th>Hora Hasta Sec</th>
        <th>Observaciones</th>
        <th>Patient Id</th>
            <th>Action</th>
        </tr>
    </tfoot>
    <tbody>
    <?php $__currentLoopData = $patientSecondaryServs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patientSecondaryServ): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $patientSecondaryServ->nom_servicio_sec; ?></td>
            <td><?php echo $patientSecondaryServ->municipio_sec; ?></td>
            <td><?php echo $patientSecondaryServ->tipo_plaza_sec; ?></td>
            <td><?php echo $patientSecondaryServ->fecha_sec; ?></td>
            <td><?php echo $patientSecondaryServ->dia_plaza_Sec; ?></td>
            <td><?php echo $patientSecondaryServ->hora_desde_Sec; ?></td>
            <td><?php echo $patientSecondaryServ->hora_hasta_Sec; ?></td>
            <td><?php echo $patientSecondaryServ->observaciones; ?></td>
            <td><?php echo $patientSecondaryServ->patient_id; ?></td>
            <td>
                <?php echo Form::open(['route' => ['patientSecondaryServs.destroy', $patientSecondaryServ->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('patientSecondaryServs.show', [$patientSecondaryServ->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-eye"></i></a>
                    <a href="<?php echo route('patientSecondaryServs.edit', [$patientSecondaryServ->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-edit"></i></a>
                    <?php echo Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH /var/www/resources/views/patient_secondary_servs/table.blade.php ENDPATH**/ ?>