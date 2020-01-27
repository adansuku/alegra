<table class="table datatables" width="100%" cellspacing="0">
    <thead class="thead-light">
        <tr>
            <th>Tipo Pia</th>
            <th>Fecha máx. Elaboración y Entrega</th>
            <th>Fecha Real Elaboración Completa</th>
            <th>Fecha Real Entrega</th>
            <th>Éxito PIA</th>
            <th>Informe PIA</th>
            <th>Documento Recepción PIA</th>
            <th>Observaciones</th>
            <th>Acción</th>
        </tr>
    </thead>

    <tbody>

        <?php $__currentLoopData = $patient->patientPia; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patientPia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <td>
            <?php echo $patientPia->tipo_pia; ?>


        </td>

        <?php
        $fecha_limite = strtotime($patientPia->fecha_limite);
        $newformat = date('d/m/Y',$fecha_limite);
        echo ' <td data-sort="'. $fecha_limite .'">'.$newformat .'</td>';
        ?>

        <td>
            <?php if($patientPia->fecha_real != null ): ?>
            <?php echo e(date('d/m/yy', strtotime($patientPia->fecha_real))); ?>

            <?php endif; ?>
        </td>

        <td>

            <?php if($patientPia->fecha_real != null ): ?>
            <?php echo e(date('d/m/yy', strtotime($patientPia->fecha_real_entrega))); ?>

            <?php endif; ?>
        </td>


        <td>
            <?php if($patientPia->fecha_real != null): ?>
            <?php if($patientPia->fecha_limite > $patientPia->fecha_real): ?>
            <div style="background: green;text-align: center; color: white">Éxito</div>
            <?php else: ?>
            <div style="background: red; text-align: center; color: white">Fracaso</div>
            <?php endif; ?>
            <?php endif; ?>
        </td>

        <td>
            <?php if($patientPia->url_pia == null ): ?>
            Pia no disponible
            <?php else: ?>

            <a href="<?php echo e(asset("storage/$patientPia->url_pia")); ?>" target="_blank">
                <i class="fas fa-download"></i> Ver documento
            </a>
            <?php endif; ?>
        </td>


        <td>
            <?php if($patientPia->url_recepcion == null ): ?>
            Pia recepción no disponible
            <?php else: ?>

            <a href="<?php echo e(asset("storage/$patientPia->url_recepcion")); ?>" target="_blank">
                <i class="fas fa-download"></i> Ver documento
            </a>
            <?php endif; ?>
        </td>


        <td>

            <?php
            $today = Carbon\Carbon::now();
            if ($today < $patientPia->fecha_limite){
                echo '<div class="bg-secondary p-1">Pia en vigor</div>';
                }
                ?>

                <?php echo $patientPia->obs_pia; ?>

        </td>

        <td>
            <a href="<?php echo route('patientPias.edit', [$patientPia->id]); ?>" class='btn  btn-secondary btn-xs'>
                <i class="far fa-edit"></i>
            </a>

            <?php if( $patientPia->tipo_pia != 'Inicial'): ?>
            <a href="/piadelete/<?php echo e($patientPia->id); ?>" data-token="<?php echo e(csrf_token()); ?>" class='btn  btn-danger btn-xs'
                data-confirm="Seguro que quieres eliminar este pia?"
                onclick="return confirm('¿Estas segura que quieres eliminar el pia?')">
                <i class="fas fa-trash"></i>
            </a>
            <?php endif; ?>


        </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH /var/www/resources/views/patients/show/show_pias.blade.php ENDPATH**/ ?>