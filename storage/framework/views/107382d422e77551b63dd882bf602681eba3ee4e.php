<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Regimen Asistencia</th>
        <th>Nom Asist Privada</th>
        <th>Num Afiliacion</th>
        <th>Nom Med Cabecera</th>
        <th>Fecha Ultimo Inf Cab</th>
        <th>Centro Referencia</th>
        <th>Telefono Centro</th>
            <th>Action</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Regimen Asistencia</th>
        <th>Nom Asist Privada</th>
        <th>Num Afiliacion</th>
        <th>Nom Med Cabecera</th>
        <th>Fecha Ultimo Inf Cab</th>
        <th>Centro Referencia</th>
        <th>Telefono Centro</th>
            <th>Action</th>
        </tr>
    </tfoot>
    <tbody>
    <?php $__currentLoopData = $healthInfos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $healthInfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $healthInfo->regimen_asistencia; ?></td>
            <td><?php echo $healthInfo->nom_asist_privada; ?></td>
            <td><?php echo $healthInfo->num_afiliacion; ?></td>
            <td><?php echo $healthInfo->nom_med_cabecera; ?></td>
            <td><?php echo $healthInfo->fecha_ultimo_inf_cab; ?></td>
            <td><?php echo $healthInfo->centro_referencia; ?></td>
            <td><?php echo $healthInfo->telefono_centro; ?></td>
            <td>
                <?php echo Form::open(['route' => ['healthInfos.destroy', $healthInfo->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('healthInfos.show', [$healthInfo->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-eye"></i></a>
                    <a href="<?php echo route('healthInfos.edit', [$healthInfo->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-edit"></i></a>
                    <?php echo Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH /var/www/resources/views/health_infos/table.blade.php ENDPATH**/ ?>