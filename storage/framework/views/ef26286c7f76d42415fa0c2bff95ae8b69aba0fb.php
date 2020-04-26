

<div class="row">
    <?php $sesiones = 0; ?>

    <?php $__currentLoopData = $patient->patientSpapd; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patientSpapd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $sesiones = (int)$sesiones + (int)$patientSpapd->num_sesiones ;
        
        ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <div class="col-sm-6 text-left d-flex align-items-center " >
        <div class="bg-secondary p-2">
            <strong>Número total de sesiones contratadas:</strong> <?php echo e($sesiones); ?>

        </div>
    </div>

    <div class="col-lg-6">
        <button type="button" class="btn btn-secondary my-3 float-right" data-toggle="modal"
            data-target="#spapd_modal">
            Añadir programa <i class="fas fa-plus"></i>
        </button>
    </div>

</div>

<div class="row">
<?php $__currentLoopData = $patient->patientSpapd; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patientSpapd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-sm-6 pb-4">
    <div class="card">
        <div class="card-header row m-0" id="headingOne">
            <div class="col-sm-6 p-0">
                
                    <h5 class="mb-1">
                        <strong>
                        <?php if($patientSpapd->prog_spapd == "Otros"): ?>
                            <?php echo e($patientSpapd->otros_programa); ?>

                        <?php else: ?>
                            <?php echo e($patientSpapd->prog_spapd); ?>

                        <?php endif; ?>
                        </strong>
                    </h5> 
               
    
                <strong>Sesiones: </strong> <?php echo $patientSpapd->num_sesiones; ?>

                <br/>
                <strong>Trabajadora: </strong>
                <?php $__currentLoopData = $workers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $worker): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if( $patientSpapd->worker_id == $worker->id): ?>
                        <?php echo e($worker->nombre); ?> <?php echo e($worker->apellido); ?>

                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
            </div>
            
            <div class="col-sm-6 p-0 text-right">
                <button type="button" class="btn btn-secondary btn-xs spapd_add_day" data-title='<?php if($patientSpapd->prog_spapd == "Otros"): ?> <?php echo e($patientSpapd->otros_programa); ?> <?php else: ?> <?php echo e($patientSpapd->prog_spapd); ?> <?php endif; ?>' data-id="<?php echo e($patientSpapd->id); ?>">
                    <i class="fas fa-plus"></i> 
                </button>
                <a href="<?php echo route('patientSpapds.edit', [$patientSpapd->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-edit"></i></a>

                <a href="/spapddelete/<?php echo e($patientSpapd->id); ?>" data-token="<?php echo e(csrf_token()); ?>" class='btn btn-danger btn-xs' onclick="return confirm('¿Estas segura que quieres eliminar el servicio?')">
                    <i class="fas fa-trash"></i> 
                </a>
            </div>
            

            
        </div>

        

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">

                <table width="100%"> 
                    <tr>
                    <th>Día</th>
                    <th>Duración</th>
                    <th>Inicio</th>
                    <th></th>
                    </tr>
                    <?php $__currentLoopData = $patientSpapd->patient_spapd_dias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $psd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr style="height: 50px; border-bottom: 1px solid lightgrey;">
                        <td width="20%"><?php echo e($psd->dia_spapd); ?></td>
                        <td width="25%"><?php echo e($psd->duracion_spapd); ?> min</td>
                        <td width="45%"><?php echo e($psd->fecha_inicio); ?></th></td>
                        <td width="10%" style="text-align:right;">
                            <a href="<?php echo e(url('/spapddiadelete')); ?>/<?php echo e($psd->id); ?>" data-token="<?php echo e(csrf_token()); ?>" class='btn btn-danger btn-xs' onclick="return confirm('¿Estas seguro(a) que quieres eliminar el spapd?')">
                                <i class="fas fa-trash"></i> 
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>


            </div>
        </div>
  </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>


<?php /**PATH /var/www/resources/views/patients/show/show_spapd.blade.php ENDPATH**/ ?>