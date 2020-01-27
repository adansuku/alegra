<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Nombre Alergia</th>
        <th>Alergia</th>
        <th>Tratamiento</th>
        <th>Patient Id</th>
            <th>Action</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Nombre Alergia</th>
        <th>Alergia</th>
        <th>Tratamiento</th>
        <th>Patient Id</th>
            <th>Action</th>
        </tr>
    </tfoot>
    <tbody>
    <?php $__currentLoopData = $patientAllergies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patientAllergy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $patientAllergy->nombre_alergia; ?></td>
            <td><?php echo $patientAllergy->alergia; ?></td>
            <td><?php echo $patientAllergy->tratamiento; ?></td>
            <td><?php echo $patientAllergy->patient_id; ?></td>
            <td>
                <?php echo Form::open(['route' => ['patientAllergies.destroy', $patientAllergy->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('patientAllergies.show', [$patientAllergy->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-eye"></i></a>
                    <a href="<?php echo route('patientAllergies.edit', [$patientAllergy->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-edit"></i></a>
                    <?php echo Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH /var/www/resources/views/patient_allergies/table.blade.php ENDPATH**/ ?>