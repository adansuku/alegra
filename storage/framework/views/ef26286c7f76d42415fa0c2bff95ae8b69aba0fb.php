<table class="table datatables" width="100%" cellspacing="0">
    <thead class="thead-light">
        <tr>
            <th>Programa</th>
            <th>Duración de la sesión</th>
            <th>Días</th>
            <th>Inicio</th>
            <th>Trabajador asignado</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>


        <?php $__currentLoopData = $patient->patientSpapd; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patientSpapd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <tr>
            <td>
                <?php if($patientSpapd->prog_spapd == "Otros"): ?>
                <?php echo e($patientSpapd->otros_programa); ?>

                <?php else: ?>
                <?php echo e($patientSpapd->prog_spapd); ?>

                <?php endif; ?>
            </td>

            

            <td>
                <?php if($patientSpapd->dur_spapd == "Otros"): ?>
                <?php echo e($patientSpapd->otras_sesiones); ?>

                <?php else: ?>
                <?php echo e($patientSpapd->dur_spapd); ?>

                <?php endif; ?>

            </td>

            <td>
                <?php $__currentLoopData = $patientSpapd->dia_spapd; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <span class="bg-dark py-1 px-2 text-white"><?php echo e($item); ?></span>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </td>

            <td><?php echo $patientSpapd->fecha_inicio; ?></td>
            <td>
                <?php $__currentLoopData = $workers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $worker): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($worker->id == $patientSpapd->worker_id): ?>
                <?php echo e($worker->nombre); ?> <?php echo e($worker->apellido); ?>

                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </td>
            <td>
                <div class='btn-group'>
                    <a href="<?php echo route('patientSpapds.edit', [$patientSpapd->id]); ?>" class='btn btn-primary btn-xs'><i
                            class="far fa-edit"></i></a>

                    <a href="/spapddelete/<?php echo e($patientSpapd->id); ?>" data-token="<?php echo e(csrf_token()); ?>"
                        class='btn btn-block btn-danger btn-xs'
                        onclick="return confirm('¿Estas segura que quieres eliminar el servicio?')">
                        <i class="fas fa-trash"></i> Eliminar
                    </a>

                </div>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH /var/www/resources/views/patients/show/show_spapd.blade.php ENDPATH**/ ?>