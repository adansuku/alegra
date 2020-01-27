<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Nombre Pat</th>
        <th>Patologia</th>
        <th>Patient Id</th>
            <th>Action</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Nombre Pat</th>
        <th>Patologia</th>
        <th>Patient Id</th>
            <th>Action</th>
        </tr>
    </tfoot>
    <tbody>
    <?php $__currentLoopData = $patientPatologies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patientPatology): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $patientPatology->nombre_pat; ?></td>
            <td><?php echo $patientPatology->patologia; ?></td>
            <td><?php echo $patientPatology->patient_id; ?></td>
            <td>
                <?php echo Form::open(['route' => ['patientPatologies.destroy', $patientPatology->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('patientPatologies.show', [$patientPatology->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-eye"></i></a>
                    <a href="<?php echo route('patientPatologies.edit', [$patientPatology->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-edit"></i></a>
                    <?php echo Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH /var/www/resources/views/patient_patologies/table.blade.php ENDPATH**/ ?>