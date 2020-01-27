<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Prog Spapd</th>
        <th>Otros Programa</th>
        <th>Num Sesiones</th>
        <th>Otras Sesiones</th>
        <th>Dur Spapd</th>
        <th>Worker Id</th>
        <th>Patient Id</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Prog Spapd</th>
        <th>Otros Programa</th>
        <th>Num Sesiones</th>
        <th>Otras Sesiones</th>
        <th>Dur Spapd</th>
        <th>Worker Id</th>
        <th>Patient Id</th>
            <th>Acción</th>
        </tr>
    </tfoot>
    <tbody>
    <?php $__currentLoopData = $patientSpapds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patientSpapd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $patientSpapd->prog_spapd; ?></td>
            <td><?php echo $patientSpapd->otros_programa; ?></td>
            <td><?php echo $patientSpapd->num_sesiones; ?></td>
            <td><?php echo $patientSpapd->otras_sesiones; ?></td>
            <td><?php echo $patientSpapd->dur_spapd; ?></td>
            <td><?php echo $patientSpapd->worker_id; ?></td>
            <td><?php echo $patientSpapd->patient_id; ?></td>
            <td>
                <div class='btn-group'>
                    <a href="<?php echo route('patientSpapds.show', [$patientSpapd->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-eye"></i></a>
                    <a href="<?php echo route('patientSpapds.edit', [$patientSpapd->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-edit"></i></a>
                </div>
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH /var/www/resources/views/patient_spapds/table.blade.php ENDPATH**/ ?>