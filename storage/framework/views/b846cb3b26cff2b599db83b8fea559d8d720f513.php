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
    <?php $__currentLoopData = $secondaryServices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $secondaryService): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $secondaryService->nombre_servicio; ?></td>
            <td><?php echo $secondaryService->municipio; ?></td>
            <td><?php echo $secondaryService->tipo_plaza; ?></td>
            <td><?php echo $secondaryService->fecha_formalizacion; ?></td>
            <td><?php echo $secondaryService->dias; ?></td>
            <td><?php echo $secondaryService->horarios; ?></td>
            <td>
                <?php echo Form::open(['route' => ['secondaryServices.destroy', $secondaryService->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('secondaryServices.show', [$secondaryService->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-eye"></i></a>
                    <a href="<?php echo route('secondaryServices.edit', [$secondaryService->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-edit"></i></a>
                    <?php echo Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH /var/www/resources/views/secondary_services/table.blade.php ENDPATH**/ ?>