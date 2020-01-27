<?php $__env->startSection('title', "Create"); ?>
<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Trabajadores/as</h1>
    <?php echo $__env->make('laradminbs4-templates::common.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <br>
    <div class="card mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Nuevo trabajador/a</h6>
        </div>
        <div class="card-body p-4">
            <?php echo Form::open(['url' => route('workers.store', []),'method' => 'POST']); ?>      
            <?php echo $__env->make('workers.create.new_user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div class="form-group col-sm-12 px-0">
                    <?php echo Form::submit('Crear trabajador/a', ['class' => 'btn btn-primary float-right']); ?>

                    <a href="<?php echo route('workers.index'); ?>" class="btn btn-outline-danger float-right mx-2">Cancelar</a>
                </div>

            <?php echo Form::close(); ?>


        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/workers/create.blade.php ENDPATH**/ ?>