<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Apellido</th>
        <th>Parentesco</th>
        <th>Dni</th>
        <th>Fecha Nac Care</th>
        <th>Direccion Care</th>
        <th>Tel Care</th>
        <th>Movil Care</th>
        <th>Email Care</th>
        <th>Whatsapp</th>
        <th>Sit Laboral</th>
        <th>Trabajo Care</th>
        <th>Ano Care</th>
        <th>Sit Apoyo</th>
        <th>Cesion Care</th>
        <th>Contactar Para</th>
        <th>Es Referencia</th>
        <th>Patient Id</th>
            <th>Action</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Nombre</th>
        <th>Apellido</th>
        <th>Parentesco</th>
        <th>Dni</th>
        <th>Fecha Nac Care</th>
        <th>Direccion Care</th>
        <th>Tel Care</th>
        <th>Movil Care</th>
        <th>Email Care</th>
        <th>Whatsapp</th>
        <th>Sit Laboral</th>
        <th>Trabajo Care</th>
        <th>Ano Care</th>
        <th>Sit Apoyo</th>
        <th>Cesion Care</th>
        <th>Contactar Para</th>
        <th>Es Referencia</th>
        <th>Patient Id</th>
            <th>Action</th>
        </tr>
    </tfoot>
    <tbody>
    <?php $__currentLoopData = $patientCarers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patientCarer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $patientCarer->nombre; ?></td>
            <td><?php echo $patientCarer->apellido; ?></td>
            <td><?php echo $patientCarer->parentesco; ?></td>
            <td><?php echo $patientCarer->dni; ?></td>
            <td><?php echo $patientCarer->fecha_nac_care; ?></td>
            <td><?php echo $patientCarer->direccion_care; ?></td>
            <td><?php echo $patientCarer->tel_care; ?></td>
            <td><?php echo $patientCarer->movil_care; ?></td>
            <td><?php echo $patientCarer->email_care; ?></td>
            <td><?php echo $patientCarer->whatsapp; ?></td>
            <td><?php echo $patientCarer->sit_laboral; ?></td>
            <td><?php echo $patientCarer->trabajo_care; ?></td>
            <td><?php echo $patientCarer->ano_care; ?></td>
            <td><?php echo $patientCarer->sit_apoyo; ?></td>
            <td><?php echo $patientCarer->cesion_care; ?></td>
            <td><?php echo $patientCarer->contactar_para; ?></td>
            <td><?php echo $patientCarer->es_referencia; ?></td>
            <td><?php echo $patientCarer->patient_id; ?></td>
            <td>
                <div class='btn-group'>
                    <a href="<?php echo route('patientCarers.show', [$patientCarer->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-eye"></i></a>
                    <a href="<?php echo route('patientCarers.edit', [$patientCarer->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-edit"></i></a>
                </div>
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH /var/www/resources/views/patient_carers/table.blade.php ENDPATH**/ ?>