<!-- Muestra los documentos adjuntos a este usuario -->
<table class="table " width="100%" cellspacing="0" id="">
                                    <thead class="table-primary text-dark">
                                    <tr>
                                        <th>Categoría</th>
                                        <th>Días</th>
                                        <th>Horas</th>
                                        <th>Horas semana</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                            <?php $__currentLoopData = $worker->workerLabors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td>
                                                        <?php echo e($item->lab_servicio); ?>

                                                    </td>
                                                    <td>
                                                        <?php echo e($item->lab_dias); ?> 
                                                    </td>
                                                    <td>
                                                         <?php echo e($item->lab_horas); ?>

                                                    </td>
                                                    <td>
                                                        <?php echo e($item->lab_horas_semana); ?>

                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="3" style="text-align:right">Total horas semanales:
                                            
                                            </th>
                                            <th> </th>
                                        </tr>
                                    </tfoot>
                        </table>

                        <script>
                                          
                                        </script> <?php /**PATH /var/www/resources/views/workers/show/show_labors.blade.php ENDPATH**/ ?>