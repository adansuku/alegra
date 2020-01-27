<?php $__env->startSection('title', "Edit"); ?>
<?php $__env->startSection('content'); ?>

<!-- Include -->
<?php echo $__env->make('workers.modals.documents_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('workers.modals.labor_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('workers.modals.history_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container-fluid">
    <div class="card" id="editar_worker">
      <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Editando trabajador/a</h6>
        </div>

        <div class="card-body p-4">
            <?php echo Form::model($worker, ['route' => ['workers.update', $worker->id], 'method' => 'patch',  'enctype' => 'multipart/form-data']); ?>


                <ul class="nav nav-pills flex-column flex-sm-row " role="tablist" id="myTab">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#generales" role="tab">Datos generales</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#voluntariado" role="tab">Prácticas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#otros" role="tab">Otros datos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#urgencia" role="tab">Contacto Urgencia</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#laboral" role="tab">Relación laboral</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#documentation" role="tab">Documentación</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#history" role="tab">Historial</a>
                        </li>
                </ul><!-- Tab panes -->

                <div class="tab-content">
                    <div class="tab-pane active" id="generales" role="tabpanel">
                        <?php echo $__env->make('workers.partials.general_data', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>                    
                    </div>

                    <div class="tab-pane" id="voluntariado" role="tabpanel">
                        <?php echo $__env->make('workers.partials.practice', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>

                    <div class="tab-pane" id="otros" role="tabpanel">
                        <?php echo $__env->make('workers.partials.other_data', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    
                    <div class="tab-pane" id="urgencia" role="tabpanel">
                        <?php echo $__env->make('workers.partials.urgency', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>

                    <div class="tab-pane" id="laboral" role="tabpanel">
                        <div class="row">
                            <div class="col-sm-7">
                                <p class="my-3"><strong>Relación laboral del usuario:</strong>  <?php echo e($worker->nombre); ?> <?php echo e($worker->apellido); ?></p>
                            </div>
                            <div class="col-sm-5 text-right">
                                <button type="button" class="btn-block btn btn-primary my-3 " data-toggle="modal" data-target="#labor_modal">
                                Añadir Relación Laboral <i class="fas fa-file-upload"></i>
                                </button>
                            </div>
                        </div>
                        <div class="">
                                <?php echo $__env->make('workers.partials.relation_lab', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php echo $__env->make('workers.show.show_labors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>

                    <div class="tab-pane" id="documentation" role="tabpanel">
                        <div class="row">
                            <div class="col-sm-9">
                                <p class="my-3"><strong>Documentos del usuario:</strong> <?php echo e($worker->nombre); ?> <?php echo e($worker->apellido); ?></p>
                            </div>
                            <div class="col-sm-3 text-right">
                                <button type="button" class="btn btn-primary my-3 " data-toggle="modal" data-target="#documents_modal">
                                Añadir documento <i class="fas fa-file-upload"></i>
                                </button>
                            </div>
                        </div><!--row-->
                        <?php echo $__env->make('workers.show.show_documents', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                       
                    </div><!--tabpanel-->


                    <div class="tab-pane" id="history" role="tabpanel">
                        <div class="row">
                            <div class="col-sm-9">
                                <p class="my-3"><strong>Historial de</strong> <?php echo e($worker->nombre); ?> <?php echo e($worker->apellido); ?></p>
                            </div>
                            <div class="col-sm-3 text-right">
                                        <button type="button" class="btn btn-primary my-3 " data-toggle="modal" data-target="#history_modal">
                                        Añadir historial <i class="fas fa-file-upload"></i>
                                        </button>
                            </div>
                            <?php echo $__env->make('workers.show.show_histories', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div><!--tabpanel-->
                </div><!--end tab-content-->

        <?php echo Form::submit('Guardar', ['class' => 'btn btn-primary float-right', 'value' => 'guardar', 'name' => 'action']); ?>  
        <?php echo Form::submit('Guardar y salir', ['class' => 'btn btn-secondary float-right', 'value' => 'guardar_y_salir', 'name' => 'action']); ?>  
        <button class="btn btn-default float-right" onclick="window.location.href='/workers'">Cancelar</button>
                                    
                
                <?php echo Form::close(); ?>

            </div>

    </div>
</div>
<?php $__env->stopSection(); ?>

<!-- Scripts -->
<?php $__env->startPush('scripts'); ?>
<script> 
    // Añadir link tab
    var hash = document.location.hash;
    var prefix = "tab_";

    if (hash) {$('.nav-pills a[href="'+hash.replace(prefix,"")+'"]').tab('show');} 

    // Change on page reload
    $('.nav-pills a').on('shown', function (e) {
        window.location.hash = e.target.hash.replace("#", "#" + prefix);
    });
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/workers/edit.blade.php ENDPATH**/ ?>