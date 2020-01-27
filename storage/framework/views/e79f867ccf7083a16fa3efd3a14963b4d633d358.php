<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Nombre Completo</th>
        <th>Parentezco</th>
        <th>Tutor Legal</th>
        <th>Tutor Nombre</th>
        <th>Tel Emerg 1</th>
        <th>Tel Emerg 2</th>
            <th>Action</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Nombre Completo</th>
        <th>Parentezco</th>
        <th>Tutor Legal</th>
        <th>Tutor Nombre</th>
        <th>Tel Emerg 1</th>
        <th>Tel Emerg 2</th>
            <th>Action</th>
        </tr>
    </tfoot>
    <tbody>
    <?php $__currentLoopData = $referencePeople; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $referencePerson): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $referencePerson->nombre_completo; ?></td>
            <td><?php echo $referencePerson->parentezco; ?></td>
            <td><?php echo $referencePerson->tutor_legal; ?></td>
            <td><?php echo $referencePerson->tutor_nombre; ?></td>
            <td><?php echo $referencePerson->tel_emerg_1; ?></td>
            <td><?php echo $referencePerson->tel_emerg_2; ?></td>
            <td>
                <?php echo Form::open(['route' => ['referencePeople.destroy', $referencePerson->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('referencePeople.show', [$referencePerson->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-eye"></i></a>
                    <a href="<?php echo route('referencePeople.edit', [$referencePerson->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-edit"></i></a>
                    <?php echo Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH /var/www/resources/views/reference_people/table.blade.php ENDPATH**/ ?>