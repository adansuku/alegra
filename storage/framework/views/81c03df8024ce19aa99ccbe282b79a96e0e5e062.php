<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Nombre Servicio</th>
        <th>Municipio</th>
        <th>Tipo Plaza</th>
        <th>Fecha Formalizacion</th>
        <th>Dias</th>
        <th>Horarios</th>
            <th>Action</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Nombre Servicio</th>
        <th>Municipio</th>
        <th>Tipo Plaza</th>
        <th>Fecha Formalizacion</th>
        <th>Dias</th>
        <th>Horarios</th>
            <th>Action</th>
        </tr>
    </tfoot>
    <tbody>
    <?php $__currentLoopData = $primaryServices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $primaryService): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $primaryService->nombre_servicio; ?></td>
            <td><?php echo $primaryService->municipio; ?></td>
            <td><?php echo $primaryService->tipo_plaza; ?></td>
            <td><?php echo $primaryService->fecha_formalizacion; ?></td>
            <td><?php echo $primaryService->dias; ?></td>
            <td><?php echo $primaryService->horarios; ?></td>
            <td>
                <?php echo Form::open(['route' => ['primaryServices.destroy', $primaryService->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('primaryServices.show', [$primaryService->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-eye"></i></a>
                    <a href="<?php echo route('primaryServices.edit', [$primaryService->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-edit"></i></a>
                    <?php echo Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH /var/www/resources/views/primary_services/table.blade.php ENDPATH**/ ?>