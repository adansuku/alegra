<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Calle</th>
        <th>Num Calle</th>
        <th>Puerta Piso</th>
        <th>Cp</th>
        <th>Ciudad</th>
        <th>Isla</th>
        <th>Email</th>
        <th>Whatsapp</th>
        <th>Telefono Domi</th>
        <th>Movil</th>
            <th>Action</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Calle</th>
        <th>Num Calle</th>
        <th>Puerta Piso</th>
        <th>Cp</th>
        <th>Ciudad</th>
        <th>Isla</th>
        <th>Email</th>
        <th>Whatsapp</th>
        <th>Telefono Domi</th>
        <th>Movil</th>
            <th>Action</th>
        </tr>
    </tfoot>
    <tbody>
    <?php $__currentLoopData = $contactInfos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contactInfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $contactInfo->calle; ?></td>
            <td><?php echo $contactInfo->num_calle; ?></td>
            <td><?php echo $contactInfo->puerta_piso; ?></td>
            <td><?php echo $contactInfo->cp; ?></td>
            <td><?php echo $contactInfo->ciudad; ?></td>
            <td><?php echo $contactInfo->isla; ?></td>
            <td><?php echo $contactInfo->email; ?></td>
            <td><?php echo $contactInfo->whatsapp; ?></td>
            <td><?php echo $contactInfo->telefono_domi; ?></td>
            <td><?php echo $contactInfo->movil; ?></td>
            <td>
                <?php echo Form::open(['route' => ['contactInfos.destroy', $contactInfo->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('contactInfos.show', [$contactInfo->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-eye"></i></a>
                    <a href="<?php echo route('contactInfos.edit', [$contactInfo->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-edit"></i></a>
                    <?php echo Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH /var/www/resources/views/contact_infos/table.blade.php ENDPATH**/ ?>