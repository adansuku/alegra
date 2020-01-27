<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Cat Documentos</th>
        <th>Nombre Doc</th>
        <th>Url</th>
        <th>Patient Id</th>
            <th>Action</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Cat Documentos</th>
        <th>Nombre Doc</th>
        <th>Url</th>
        <th>Patient Id</th>
            <th>Action</th>
        </tr>
    </tfoot>
    <tbody>
    <?php $__currentLoopData = $patientDocuments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patientDocument): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $patientDocument->cat_documentos; ?></td>
            <td><?php echo $patientDocument->nombre_doc; ?></td>
            <td><?php echo $patientDocument->url; ?></td>
            <td><?php echo $patientDocument->patient_id; ?></td>
            <td>
                <?php echo Form::open(['route' => ['patientDocuments.destroy', $patientDocument->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('patientDocuments.show', [$patientDocument->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-eye"></i></a>
                    <a href="<?php echo route('patientDocuments.edit', [$patientDocument->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-edit"></i></a>
                    <?php echo Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH /var/www/resources/views/patient_documents/table.blade.php ENDPATH**/ ?>