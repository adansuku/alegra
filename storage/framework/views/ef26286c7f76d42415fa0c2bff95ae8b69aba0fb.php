<?php $__currentLoopData = $patient->patientSpapd; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patientSpapd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <table class="table" width="100%" cellspacing="0">
        <thead class="thead-light">
            <tr>
                <th width="10%">Programa</th>
                <th width="40%">Numero de sesiones Totales en el programa</th>
                <th width="20%">Duración de la sesión</th>
                <th width="15%">Trabajador asignado</th>
                <th width="20%">Acción</th>
            </tr>
        </thead>
        <tbody>
            
            <tr>
                <td>
                    <?php if($patientSpapd->prog_spapd == "Otros"): ?>
                    <?php echo e($patientSpapd->otros_programa); ?>

                    <?php else: ?>
                    <?php echo e($patientSpapd->prog_spapd); ?>

                    <?php endif; ?>
                </td>

                <td style="text-align:center;"><?php echo $patientSpapd->num_sesiones; ?></td>

                <td style="text-align:center;">
                    <?php if($patientSpapd->dur_spapd == "Otros"): ?>
                    <?php echo e($patientSpapd->otras_sesiones); ?>

                    <?php else: ?>
                    <?php echo e($patientSpapd->dur_spapd); ?>

                    <?php endif; ?>

                </td>

                <td style="text-align:center;">
                    <?php $__currentLoopData = $workers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $worker): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if( $patientSpapd->worker_id == $worker->id): ?>
                        <?php echo e($worker->nombre); ?> <?php echo e($worker->apellido); ?>

                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php echo $patientSpapd->worker_id; ?>

                </td>

                <td>
                    <div class='btn-group'>
                        <button type="button" class="btn btn-secondary btn-xs spapd_add_day" data-title='<?php if($patientSpapd->prog_spapd == "Otros"): ?> <?php echo e($patientSpapd->otros_programa); ?> <?php else: ?> <?php echo e($patientSpapd->prog_spapd); ?> <?php endif; ?>' data-id="<?php echo e($patientSpapd->id); ?>">
                            <i class="fas fa-plus"></i> 
                        </button>
                        <a href="<?php echo route('patientSpapds.edit', [$patientSpapd->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-edit"></i></a>

                        <a href="/spapddelete/<?php echo e($patientSpapd->id); ?>" data-token="<?php echo e(csrf_token()); ?>" class='btn btn-block btn-danger btn-xs' onclick="return confirm('¿Estas segura que quieres eliminar el servicio?')">
                            <i class="fas fa-trash"></i> Eliminar
                        </a>

                    </div>
                </td>
            </tr>
            
        </tbody>
    </table>
    <table class="table" width="100%" cellspacing="0">
        <thead>
            <?php $__currentLoopData = $patientSpapd->patient_spapd_dias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $psd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td width="10%">Dia</th>
                    <td width="20%"><?php echo e($psd->dia_spapd); ?></th>
                    <td width="10%">Inicio</th>
                    <td width="20%"><?php echo e($psd->fecha_inicio); ?></th>
                    <td width="20%" style="text-align:right;">
                        <a href="<?php echo e(url('/spapddiadelete')); ?>/<?php echo e($psd->id); ?>" data-token="<?php echo e(csrf_token()); ?>" class='btn btn-danger btn-xs' onclick="return confirm('¿Estas seguro(a) que quieres eliminar el spapd?')">
                            <i class="fas fa-trash"></i> Eliminar
                        </a>
                    </th>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </thead>
        <tbody>
    </table>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /var/www/resources/views/patients/show/show_spapd.blade.php ENDPATH**/ ?>