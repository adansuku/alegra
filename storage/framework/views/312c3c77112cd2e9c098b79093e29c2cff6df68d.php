<?php $__env->startSection('title', "Tables"); ?>
<?php $__env->startPush('css'); ?>
    <link href="<?php echo e(mix('vendor/datatable/css/datatable.css')); ?>" rel="stylesheet">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Contact Infos</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            <h1 class="float-sm-right">
                <a class="btn btn-primary" style="margin-top: -10px;margin-bottom: 5px" href="<?php echo route('contactInfos.create'); ?>">Add New</a>
            </h1>
            <div class="clearfix"></div>
            <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    <div class="card-body">
        <div class="table-responsive">
            <?php echo $__env->make('contact_infos.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(mix('vendor/datatable/js/datatable.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/datatable/js/datatables-init.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/contact_infos/index.blade.php ENDPATH**/ ?>