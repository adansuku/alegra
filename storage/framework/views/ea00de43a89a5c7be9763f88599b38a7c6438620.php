<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Fecha Trans</th>
        <th>Transporte</th>
        <th>Cesion Imagen</th>
        <th>Salir Centro</th>
        <th>Riesgo Caidas</th>
        <th>Salida Externa</th>
        <th>Socio</th>
        <th>No Socio</th>
        <th>Pevs</th>
        <th>Tipo Sub</th>
        <th>Forma Pago</th>
        <th>Patient Id</th>
            <th>Action</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Fecha Trans</th>
        <th>Transporte</th>
        <th>Cesion Imagen</th>
        <th>Salir Centro</th>
        <th>Riesgo Caidas</th>
        <th>Salida Externa</th>
        <th>Socio</th>
        <th>No Socio</th>
        <th>Pevs</th>
        <th>Tipo Sub</th>
        <th>Forma Pago</th>
        <th>Patient Id</th>
            <th>Action</th>
        </tr>
    </tfoot>
    <tbody>
    <?php $__currentLoopData = $patientOthers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patientOther): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $patientOther->fecha_trans; ?></td>
            <td><?php echo $patientOther->transporte; ?></td>
            <td><?php echo $patientOther->cesion_imagen; ?></td>
            <td><?php echo $patientOther->salir_centro; ?></td>
            <td><?php echo $patientOther->riesgo_caidas; ?></td>
            <td><?php echo $patientOther->salida_externa; ?></td>
            <td><?php echo $patientOther->socio; ?></td>
            <td><?php echo $patientOther->no_socio; ?></td>
            <td><?php echo $patientOther->pevs; ?></td>
            <td><?php echo $patientOther->tipo_sub; ?></td>
            <td><?php echo $patientOther->forma_pago; ?></td>
            <td><?php echo $patientOther->patient_id; ?></td>
            <td>
                <?php echo Form::open(['route' => ['patientOthers.destroy', $patientOther->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('patientOthers.show', [$patientOther->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-eye"></i></a>
                    <a href="<?php echo route('patientOthers.edit', [$patientOther->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-edit"></i></a>
                    <?php echo Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH /var/www/resources/views/patient_others/table.blade.php ENDPATH**/ ?>