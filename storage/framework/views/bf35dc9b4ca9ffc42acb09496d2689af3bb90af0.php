<?php $__env->startSection('title', "Show"); ?>
<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <div class="card mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Mostrando trabajador/a</h6>
        </div>
        <div class="card-body p-4">
            <?php echo $__env->make('workers.show_fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <a href="<?php echo route('workers.index'); ?>" class="btn btn-primary float-right">Atrás</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/workers/show.blade.php ENDPATH**/ ?>