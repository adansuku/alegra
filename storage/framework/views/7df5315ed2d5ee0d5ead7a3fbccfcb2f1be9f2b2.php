<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Nombre Completo</th>
        <th>Parentezco</th>
        <th>Dni</th>
        <th>Fecha Naci</th>
        <th>Edad</th>
        <th>Situacion Laboral</th>
        <th>Trabajo Actual</th>
        <th>Años Cuidando</th>
        <th>Servicios Apoyo Cuidadores</th>
        <th>Cesion Imagen</th>
        <th>Contactar Para</th>
            <th>Action</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Nombre Completo</th>
        <th>Parentezco</th>
        <th>Dni</th>
        <th>Fecha Naci</th>
        <th>Edad</th>
        <th>Situacion Laboral</th>
        <th>Trabajo Actual</th>
        <th>Años Cuidando</th>
        <th>Servicios Apoyo Cuidadores</th>
        <th>Cesion Imagen</th>
        <th>Contactar Para</th>
            <th>Action</th>
        </tr>
    </tfoot>
    <tbody>
    <?php $__currentLoopData = $keppers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kepper): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $kepper->nombre_completo; ?></td>
            <td><?php echo $kepper->parentezco; ?></td>
            <td><?php echo $kepper->dni; ?></td>
            <td><?php echo $kepper->fecha_naci; ?></td>
            <td><?php echo $kepper->edad; ?></td>
            <td><?php echo $kepper->situacion_laboral; ?></td>
            <td><?php echo $kepper->trabajo_actual; ?></td>
            <td><?php echo $kepper->años_cuidando; ?></td>
            <td><?php echo $kepper->servicios_apoyo_cuidadores; ?></td>
            <td><?php echo $kepper->cesion_imagen; ?></td>
            <td><?php echo $kepper->contactar_para; ?></td>
            <td>
                <?php echo Form::open(['route' => ['keppers.destroy', $kepper->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('keppers.show', [$kepper->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-eye"></i></a>
                    <a href="<?php echo route('keppers.edit', [$kepper->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-edit"></i></a>
                    <?php echo Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH /var/www/resources/views/keppers/table.blade.php ENDPATH**/ ?>