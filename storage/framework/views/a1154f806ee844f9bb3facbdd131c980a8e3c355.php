<?php $__env->startSection('title', "Tables"); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow p-4">
        <div class="row">
            <div class="col-md-6">
                <h1 class="h3 mb-2 text-gray-800">Trabajadoras</h1>
            </div>
            <div class="col-md-6">
                <div class="float-sm-right">
                    <a class="btn btn-primary add-worker"
                        href="<?php echo route('workers.create'); ?>">Añadir Trabajador</a>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('workers.show.show_table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/workers/index.blade.php ENDPATH**/ ?>