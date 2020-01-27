<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Nom Servicio</th>
        <th>Municipio Serv</th>
        <th>Tipo Plaza Serv</th>
        <th>Plaza Privada Serv</th>
        <th>Plaza Sub Serv</th>
        <th>Fecha Form Serv</th>
        <th>Patient Id</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Nom Servicio</th>
        <th>Municipio Serv</th>
        <th>Tipo Plaza Serv</th>
        <th>Plaza Privada Serv</th>
        <th>Plaza Sub Serv</th>
        <th>Fecha Form Serv</th>
        <th>Patient Id</th>
            <th>Acción</th>
        </tr>
    </tfoot>
    <tbody>
    <?php $__currentLoopData = $patientServices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patientService): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $patientService->nom_servicio; ?></td>
            <td><?php echo $patientService->municipio_serv; ?></td>
            <td><?php echo $patientService->tipo_plaza_serv; ?></td>
            <td><?php echo $patientService->plaza_privada_serv; ?></td>
            <td><?php echo $patientService->plaza_sub_serv; ?></td>
            <td><?php echo $patientService->fecha_form_serv; ?></td>
            <td><?php echo $patientService->patient_id; ?></td>
            <td>
                <?php echo Form::open(['route' => ['patientServices.destroy', $patientService->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('patientServices.show', [$patientService->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-eye"></i></a>
                    <a href="<?php echo route('patientServices.edit', [$patientService->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-edit"></i></a>
                    <?php echo Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH /var/www/resources/views/patient_services/table.blade.php ENDPATH**/ ?>