<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Accion</th>
        <th>Tipo Accion</th>
        <th>Des Accion</th>
        <th>Reg Accion</th>
        <th>Rea Accion</th>
        <th>Woker Accion</th>
        <th>Observaciones</th>
        <th>Patient Id</th>
            <th>Action</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Accion</th>
        <th>Tipo Accion</th>
        <th>Des Accion</th>
        <th>Reg Accion</th>
        <th>Rea Accion</th>
        <th>Woker Accion</th>
        <th>Observaciones</th>
        <th>Patient Id</th>
            <th>Action</th>
        </tr>
    </tfoot>
    <tbody>
    <?php $__currentLoopData = $patientHistories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patientHistory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $patientHistory->accion; ?></td>
            <td><?php echo $patientHistory->tipo_accion; ?></td>
            <td><?php echo $patientHistory->des_accion; ?></td>
            <td><?php echo $patientHistory->reg_accion; ?></td>
            <td><?php echo $patientHistory->rea_accion; ?></td>
            <td><?php echo $patientHistory->woker_accion; ?></td>
            <td><?php echo $patientHistory->observaciones; ?></td>
            <td><?php echo $patientHistory->patient_id; ?></td>
            <td>
                <?php echo Form::open(['route' => ['patientHistories.destroy', $patientHistory->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('patientHistories.show', [$patientHistory->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-eye"></i></a>
                    <a href="<?php echo route('patientHistories.edit', [$patientHistory->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-edit"></i></a>
                    <?php echo Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH /var/www/resources/views/patient_histories/table.blade.php ENDPATH**/ ?>