<table class="table " id="" width="100%" cellspacing="0">
    <thead class="table-primary text-dark">
        <tr>
        <th>Categoria</th>
        <th>Tipo</th>
        <th>Respuesta</th>
        <th>Observaciones</th>
            
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $worker->workerHistories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $item->his_categoria; ?></td>
            <td><?php echo $item->his_tipo; ?></td>
            <td><?php echo $item->his_respuesta; ?></td>
            <td><?php echo $item->his_observaciones; ?></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>


<?php /**PATH /var/www/resources/views/workers/show/show_histories.blade.php ENDPATH**/ ?>