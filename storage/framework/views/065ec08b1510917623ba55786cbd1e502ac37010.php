<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Nivel Educativo</th>
        <th>Estudios End</th>
        <th>Ocupacion</th>
        <th>Intereses</th>
        <th>Lee Escribe</th>
        <th>Situacion Dep</th>
        <th>Grado Dep</th>
        <th>Nivel Dep</th>
        <th>Ayuda Dep</th>
        <th>Sol Grado</th>
        <th>Reso Grado</th>
        <th>Reso Presta</th>
        <th>Rev Grado</th>
        <th>Cuantia</th>
        <th>Tec Dependencia</th>
        <th>Guarda Hecho</th>
        <th>Ayuda Soc</th>
        <th>Cert Disc</th>
        <th>Grado Disc</th>
        <th>Fecha Res Disc</th>
        <th>Tipo Disc</th>
        <th>Sit Legal</th>
        <th>Patient Id</th>
            <th>Action</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Nivel Educativo</th>
        <th>Estudios End</th>
        <th>Ocupacion</th>
        <th>Intereses</th>
        <th>Lee Escribe</th>
        <th>Situacion Dep</th>
        <th>Grado Dep</th>
        <th>Nivel Dep</th>
        <th>Ayuda Dep</th>
        <th>Sol Grado</th>
        <th>Reso Grado</th>
        <th>Reso Presta</th>
        <th>Rev Grado</th>
        <th>Cuantia</th>
        <th>Tec Dependencia</th>
        <th>Guarda Hecho</th>
        <th>Ayuda Soc</th>
        <th>Cert Disc</th>
        <th>Grado Disc</th>
        <th>Fecha Res Disc</th>
        <th>Tipo Disc</th>
        <th>Sit Legal</th>
        <th>Patient Id</th>
            <th>Action</th>
        </tr>
    </tfoot>
    <tbody>
    <?php $__currentLoopData = $patientInfos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patientInfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $patientInfo->nivel_educativo; ?></td>
            <td><?php echo $patientInfo->estudios_end; ?></td>
            <td><?php echo $patientInfo->ocupacion; ?></td>
            <td><?php echo $patientInfo->intereses; ?></td>
            <td><?php echo $patientInfo->lee_escribe; ?></td>
            <td><?php echo $patientInfo->situacion_dep; ?></td>
            <td><?php echo $patientInfo->grado_dep; ?></td>
            <td><?php echo $patientInfo->nivel_dep; ?></td>
            <td><?php echo $patientInfo->ayuda_dep; ?></td>
            <td><?php echo $patientInfo->sol_grado; ?></td>
            <td><?php echo $patientInfo->reso_grado; ?></td>
            <td><?php echo $patientInfo->reso_presta; ?></td>
            <td><?php echo $patientInfo->rev_grado; ?></td>
            <td><?php echo $patientInfo->cuantia; ?></td>
            <td><?php echo $patientInfo->tec_dependencia; ?></td>
            <td><?php echo $patientInfo->guarda_hecho; ?></td>
            <td><?php echo $patientInfo->ayuda_soc; ?></td>
            <td><?php echo $patientInfo->cert_disc; ?></td>
            <td><?php echo $patientInfo->grado_disc; ?></td>
            <td><?php echo $patientInfo->fecha_res_disc; ?></td>
            <td><?php echo $patientInfo->tipo_disc; ?></td>
            <td><?php echo $patientInfo->sit_legal; ?></td>
            <td><?php echo $patientInfo->patient_id; ?></td>
            <td>
                <?php echo Form::open(['route' => ['patientInfos.destroy', $patientInfo->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('patientInfos.show', [$patientInfo->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-eye"></i></a>
                    <a href="<?php echo route('patientInfos.edit', [$patientInfo->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-edit"></i></a>
                    <?php echo Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH /var/www/resources/views/patient_infos/table.blade.php ENDPATH**/ ?>