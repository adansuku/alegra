<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Fecha Limite</th>
        <th>Fecha Real</th>
        <th>Tipo Pia</th>
        <th>Url Pia</th>
        <th>Obs Pia</th>
        <th>Patient Id</th>
            <th>Action</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Fecha Limite</th>
        <th>Fecha Real</th>
        <th>Tipo Pia</th>
        <th>Url Pia</th>
        <th>Obs Pia</th>
        <th>Patient Id</th>
            <th>Action</th>
        </tr>
    </tfoot>
    <tbody>
    <?php $__currentLoopData = $patientPias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patientPia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $patientPia->fecha_limite; ?></td>
            <td><?php echo $patientPia->fecha_real; ?></td>
            <td><?php echo $patientPia->tipo_pia; ?></td>
            <td><?php echo $patientPia->url_pia; ?></td>
            <td><?php echo $patientPia->obs_pia; ?></td>
            <td><?php echo $patientPia->patient_id; ?></td>
            <td>
                <?php echo Form::open(['route' => ['patientPias.destroy', $patientPia->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('patientPias.show', [$patientPia->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-eye"></i></a>
                    <a href="<?php echo route('patientPias.edit', [$patientPia->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-edit"></i></a>
                    <?php echo Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH /var/www/resources/views/patient_pias/table.blade.php ENDPATH**/ ?>