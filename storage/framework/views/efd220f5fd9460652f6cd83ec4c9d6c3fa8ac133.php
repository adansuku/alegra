 <!-- Muestra los documentos adjuntos a este usuario -->
 <table class="table table-bordered" id="" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Categoría</th>
                                        <th>Nombre</th>
                                        <th>Descargar</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                            <?php $__currentLoopData = $worker->workerDocuments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td>
                                                        <?php echo e($item->cat_documentos); ?>

                                                    </td>
                                                    <td>
                                                        <a href="<?php echo e(asset("storage/$item->url")); ?>" target="_blank">
                                                        <?php echo e($item->nombre_documento); ?>

                                                        </a>

                                                    </td>
                                                    <td class="text-center">
                                                        <a href="<?php echo e(asset("storage/$item->url")); ?>" target="_blank">
                                                         <i class="fas fa-download"></i>
                                                        </a>

                                                        <?php echo Form::open(['route' => ['workerDocuments.destroy', $item->id], 'method' => 'delete']); ?>

                                                            <div class='btn-group'>
                                                                <?php echo Form::button('<i class="far fa-trash-alt"></i>', 
                                                                ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 
                                                                'onclick' => "return confirm('Are you sure?')"]); ?>

                                                            </div>
                                                        <?php echo Form::close(); ?>


                                                    </td>
                                                    <!-- <td>
                                                        <?php echo e($item->worker_id); ?>

                                                    </td> -->
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </tbody>
                        </table><?php /**PATH /var/www/resources/views/workers/show_fk/show_documents.blade.php ENDPATH**/ ?>