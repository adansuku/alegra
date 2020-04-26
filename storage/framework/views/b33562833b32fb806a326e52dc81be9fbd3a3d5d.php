
    <?php $__currentLoopData = $patient->patientServices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patientService): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-lg-6 pb-4">
        
        <div class="card">
            <div class="card-header row m-0" id="headingOne">
                <div class="col-sm-6 p-0">
                        <span><strong>Nombre del Servicio: </strong></span> 
                        <h5 class="mb-1">
                            <strong><?php echo $patientService->nom_servicio; ?></strong>
                        </h5> 
                </div>
                
                <div class="col-sm-6 p-0 text-right">
                    <button type="button" class="btn btn-secondary" id="date_button" data-toggle="modal"
                    data-target="#services_date_modal" data-id="<?php echo $patientService->id; ?>" onClick="ShowModal(this)">
                        <i class="fas fa-clock"></i>+
                    </button>
                    
                    <a href="<?php echo route('patientServices.edit', [$patientService->id]); ?>" class='btn btn-primary'><i class="far fa-edit"></i> </a>                    

                    <a href="/servicedelete/<?php echo e($patientService->id); ?>" data-token="<?php echo e(csrf_token()); ?>"
                        class='btn  btn-danger btn-xs' data-confirm="Seguro que quieres eliminar este pia?"
                        onclick="return confirm('¿Estas segura que quieres eliminar el servicio?')">
                        <i class="fas fa-trash"></i> 
                    </a>
                </div>
            </div>
    
            
    
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body row">
                    <div class="col-sm-12">
                        <!-- <span id="servId"><?php echo $patientService->id; ?></span> -->
                        <strong>Municipio:</strong> <?php echo $patientService->municipio_serv; ?><br>
                        <strong>Tipo de plaza:</strong> <?php echo implode(', ', (array)$patientService->tipo_plaza_serv); ?><br>
                        
                        <?php if($patientService->plaza_privada_serv): ?>
                        <strong>Plaza Privada:</strong> <?php echo implode(', ', (array)$patientService->plaza_privada_serv); ?><br>
                        <?php endif; ?>

                        <?php if($patientService->plaza_sub_serv): ?>
                        <strong>Plaza Subencionada:</strong> <?php echo $patientService->plaza_sub_serv; ?><br>
                        <?php endif; ?>

                        <?php if($patientService->fecha_form_serv): ?>
                        <strong>Fecha formalización:</strong>
                        <?php echo e(date('d/m/Y', strtotime($patientService->fecha_form_serv ))); ?><br>
                        <strong>Trabajadora social encargada del caso:</strong><br>
                        <?php endif; ?>

                        <?php $__currentLoopData = $workers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $worker): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($worker->id == $patientService->service_worker_id ): ?>
                            <?php echo e($worker->nombre); ?> <?php echo e($worker->apellido); ?>

                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <hr>
                    </div>

                  
                        
                    <div class="col-sm-12">
                        <h4><strong>Horarios:</strong></h4>
                    </div>
                    <?php $__currentLoopData = $patientService->serviceDates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-sm-6">
                        <strong>Dia:</strong> <?php echo e($item->dia_servicio); ?><br>
                        <strong>Hora:</strong> <?php echo e($item->horario_servicio); ?><br>
                        <strong>Observaciones:</strong> <?php echo e($item->obs_servicio); ?><br>
                    </div>

                    <div class="col-sm-6 text-right">
                        <a href="<?php echo route('patientServicesDates.edit', [$item->id]); ?>" class='btn btn-primary btn-xs'>
                            <i class="far fa-edit"></i> 
                        </a>
            
                        <a href="/servicedate_delete/<?php echo e($item->id); ?>" data-token="<?php echo e(csrf_token()); ?>"
                            class='btn btn-danger btn-xs' data-confirm="Seguro que quieres eliminar este pia?"
                            onclick="return confirm('¿Estas segura que quieres eliminar el horario?')">
                            <i class="fas fa-trash"></i> 
                        </a>
                    </div>
                        
                    <div class="col-sm-12"><hr></div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php if($patientService->es_primario == 'es_primario'): ?>
                    <div class="col-sm-12" width="100%"><span class="bg-secondary p-2 pull-right">Servicio primario</span></div>
                    <?php endif; ?>

                </div>
            </div>
      </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /var/www/resources/views/patients/show/show_services.blade.php ENDPATH**/ ?>