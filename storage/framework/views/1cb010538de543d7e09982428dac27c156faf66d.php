<style>
    .dtr-details tr{
        border-bottom: 1px solid lightgrey;
        line-height: 30px;
    }
    </style>
    
    <table class="table datatables" width="100%" cellspacing="0">
        <thead class="thead-dark">
            <tr>
                <th class="all"><strong>Nombre</strong></th>
                <th class="all"><strong>Apellidos</strong></th>
                <th class="all"><strong>Parentesco</strong></th>
                <th class="none"><strong>Género</strong></th>
                <th class="none"><strong>DNI</strong></th>
                <th class="none"><strong>Fecha Nacimiento</strong></th>
                <th class="none"><strong>Edad</strong></th>
                <th class="none"><strong>Dirección</strong></th>
                <th class="none"><strong>Municipio</strong></th>
                <th class="all"><strong>Teléfono Fijo</strong></th>
                <th class="all"><strong>Teléfono Móvil</strong></th>
                <th class="all"><strong>Email</strong></th>
                <th class="none"><strong>Whatsapp</strong></th>
                <th class="none"><strong>Ocupación</strong></th>
                <th class="all"><strong>Trabajo Actual</strong></th>
                <th class="none"><strong>Nivel de estudios</strong></th>
                <th class="none"><strong>Fecha Inicio del Cuidado</strong></th>
                <th class="none"><strong>Años Cuidando</strong></th>
                <th class="none"><strong>Servicios Apoyo Recibe Actualmente</strong></th>
                <th class="none"><strong>Cesión de imagen</strong></th>
                <th class="none"><strong>Contactar Para</strong></th>
                <th class="all"><strong>¿Es Tutor/a Legal?</strong></th>

            </tr>
        </thead>
    
    
        <tbody>
        <?php $__currentLoopData = $patient->patientCarers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo $item->nombre; ?></td>
                
                <td><?php echo $item->apellido; ?></td>
                
                <?php if($item->parentesco == "Otros"): ?>
                    <td><?php echo $item->otro_paren; ?></td>
                <?php else: ?>
                    <td><?php echo $item->parentesco; ?></td>
                <?php endif; ?>
                
                <td><?php echo $item->genero_carer; ?></td>
                <td><?php echo $item->dni; ?></td>
                <td><?php echo e(date('d / m / Y', strtotime($item->fecha_nac_care ))); ?></td>
    
                <td>   
                    <?php
                    $fecha = time() - strtotime($item->fecha_nac_care);
                    $edad = floor($fecha / 31556926);
                    ?>
                    <?php echo $edad; ?> Años
                </td>
    
                <td><?php echo $item->direccion_care; ?></td>
                <td><?php echo $item->municipio_carer; ?></td>
                <td><?php echo $item->tel_care; ?></td>
                <td><?php echo $item->movil_care; ?></td>
                <td><?php echo $item->email_care; ?></td>
                <td><?php echo $item->whatsapp; ?></td>
                
                <td>
                    <?php if($item->sit_laboral== 'Otras'): ?>
                        <?php echo e($item->otro_ocupacion); ?>

                    <?php else: ?>
                        <?php echo e($item->sit_laboral); ?>

                    <?php endif; ?>
                </td>
    
              
                <td>
                    <?php if($item->trabajo_care != null): ?>
                        <?php echo implode(', ', (array)$item->trabajo_care); ?>

                        <?php if(in_array('Otro', $item->trabajo_care)): ?>
                            <?php echo $item->otro_trabajo; ?>

                        <?php endif; ?>
                    <?php endif; ?>
                    
                </td>
    
                <td><?php echo $item->estudios_carer; ?></td>
    
                <td><?php echo e(date('d / m / Y', strtotime($item->ano_care))); ?></td>
    
                <td>
                    <?php 
                        $fecha_cuidado = time() - strtotime($item->ano_care);
                        $edad_cuidado = floor($fecha_cuidado / 31556926);
                    ?>
                    <?php echo e($edad_cuidado); ?> años
                </td>
                
                <td>
                    <?php if($item->sit_apoyo != null): ?>
                        <?php echo implode(', ', (array)$item->sit_apoyo); ?>

                        <?php if(in_array('Otros', $item->sit_apoyo)): ?>
                            <?php echo $item->otro_serv_apoyo; ?>

                        <?php endif; ?>
                    <?php endif; ?>
                </td>    
    
                <td><?php echo $item->cesion_care; ?></td>
                
                <td>
                    <?php if($item->contactar_para != null): ?>
                        <?php echo implode(', ', (array)$item->contactar_para); ?>

                        <?php if(in_array('Otros', $item->contactar_para)): ?>
                            <?php echo $item->otro_contactar_para; ?>

                        <?php endif; ?>
                    <?php endif; ?>
                </td>
    
                <td><?php echo $item->es_tutor; ?></td>
    
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    
        
         
    </table><?php /**PATH /var/www/resources/views/patients/show/show_carer_view.blade.php ENDPATH**/ ?>