<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Dia Servicio</th>
        <th>Horario Servicio</th>
        <th>Obs Servicio</th>
        <th>Service Id</th>
            <th>Action</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Dia Servicio</th>
        <th>Horario Servicio</th>
        <th>Obs Servicio</th>
        <th>Service Id</th>
            <th>Action</th>
        </tr>
    </tfoot>
    <tbody>
    <?php $__currentLoopData = $patientServicesDates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patientServicesDate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $patientServicesDate->dia_servicio; ?></td>
            <td><?php echo $patientServicesDate->horario_servicio; ?></td>
            <td><?php echo $patientServicesDate->obs_servicio; ?></td>
            <td><?php echo $patientServicesDate->service_id; ?></td>
            <td>
                <?php echo Form::open(['route' => ['patientServicesDates.destroy', $patientServicesDate->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('patientServicesDates.show', [$patientServicesDate->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-eye"></i></a>
                    <a href="<?php echo route('patientServicesDates.edit', [$patientServicesDate->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-edit"></i></a>
                    <?php echo Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH /var/www/resources/views/patient__services__dates/table.blade.php ENDPATH**/ ?>