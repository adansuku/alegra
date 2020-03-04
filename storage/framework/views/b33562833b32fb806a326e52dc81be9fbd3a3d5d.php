<?php $__currentLoopData = $patient->patientServices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patientService): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-lg-6">
    <!-- Default Card Example -->
    <div class="card mb-4">



        <?php if($patientService->es_primario == 'es_primario'): ?>
        <div class="bg-primary">Servicios primario</div>
        <?php endif; ?>
        <div class="card-header bg-secondary text-dark">

            <strong>Nombre del Servicio: </strong> <?php echo $patientService->nom_servicio; ?>

        </div>
        <div class="card-body">
            <p>
                <!-- <span id="servId"><?php echo $patientService->id; ?></span> -->
                <strong>Municipio:</strong> <?php echo $patientService->municipio_serv; ?><br>
                <strong>Tipo de plaza:</strong> <?php echo implode(', ', (array)$patientService->tipo_plaza_serv); ?><br>
                <strong>Plaza Privada:</strong> <?php echo implode(', ', (array)$patientService->plaza_privada_serv); ?><br>
                <strong>Plaza Subencionada:</strong> <?php echo $patientService->plaza_sub_serv; ?><br>
                <strong>Fecha formalización:</strong>
                <?php echo e(date('d/m/Y', strtotime($patientService->fecha_form_serv ))); ?><br>
                <strong>Trabajadora social encargada del caso</strong>
                <?php $__currentLoopData = $workers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $worker): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($worker->id == $patientService->service_worker_id ): ?>
                <?php echo e($worker->nombre); ?> <?php echo e($worker->apellido); ?>

                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><br>



            </p>

            <?php $__currentLoopData = $patientService->serviceDates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <strong>Dia:</strong> <?php echo e($item->dia_servicio); ?><br>
            <strong>Hora:</strong> <?php echo e($item->horario_servicio); ?><br>
            <strong>Observaciones:</strong> <?php echo e($item->obs_servicio); ?><br>
            <hr>

            <a href="<?php echo route('patientServicesDates.edit', [$item->id]); ?>" class='btn btn-block btn-primary btn-xs'>
                <i class="far fa-edit"></i> Editar
            </a>

            <a href="/servicedate_delete/<?php echo e($item->id); ?>" data-token="<?php echo e(csrf_token()); ?>"
                class='btn btn-block btn-danger btn-xs' data-confirm="Seguro que quieres eliminar este pia?"
                onclick="return confirm('¿Estas segura que quieres eliminar el horario?')">
                <i class="fas fa-trash"></i> Eliminar
            </a>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class='btn-group'>
            <a href="<?php echo route('patientServices.edit', [$patientService->id]); ?>" class='btn btn-primary btn-xs'><i
                    class="far fa-edit"></i> Editar</a>
        </div>
        <button type="button" class="btn btn btn-primary float-right" id="date_button" data-toggle="modal"
            data-target="#services_date_modal" data-id="<?php echo $patientService->id; ?>" onClick="ShowModal(this)">
            <i class="fas fa-clock"></i>
            Añadir Horario
        </button>

        <a href="/servicedelete/<?php echo e($patientService->id); ?>" data-token="<?php echo e(csrf_token()); ?>"
            class='btn btn-block btn-danger btn-xs' data-confirm="Seguro que quieres eliminar este pia?"
            onclick="return confirm('¿Estas segura que quieres eliminar el servicio?')">
            <i class="fas fa-trash"></i> Eliminar
        </a>


    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /var/www/resources/views/patients/show/show_services.blade.php ENDPATH**/ ?>