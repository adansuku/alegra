<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Tipo Asistente</th>
        <th>Nombre</th>
        <th>Apellidos</th>
            <th>Action</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Tipo Asistente</th>
        <th>Nombre</th>
        <th>Apellidos</th>
            <th>Action</th>
        </tr>
    </tfoot>
    <tbody>
    <?php $__currentLoopData = $dependenceAssistants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dependenceAssistant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $dependenceAssistant->tipo_asistente; ?></td>
            <td><?php echo $dependenceAssistant->nombre; ?></td>
            <td><?php echo $dependenceAssistant->apellidos; ?></td>
            <td>
                <?php echo Form::open(['route' => ['dependenceAssistants.destroy', $dependenceAssistant->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('dependenceAssistants.show', [$dependenceAssistant->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-eye"></i></a>
                    <a href="<?php echo route('dependenceAssistants.edit', [$dependenceAssistant->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-edit"></i></a>
                    <?php echo Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH /var/www/resources/views/dependence_assistants/table.blade.php ENDPATH**/ ?>