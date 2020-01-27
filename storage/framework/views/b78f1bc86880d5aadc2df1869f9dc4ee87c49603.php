<?php $__env->startSection('title', "Edit"); ?>
<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mt-4 text-gray-800">Editando pia de <?php echo e($patientPia->patient->nombre); ?></h1>
    <div class="card shadow mb-4">
        <div class="card-body">
        <?php echo Form::model($patientPia, ['route' => ['patientPias.update', $patientPia->id], 'method' => 'patch', 'enctype' => 'multipart/form-data']); ?>

            <?php echo $__env->make('patient_pias.fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo Form::close(); ?>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/patient_pias/edit.blade.php ENDPATH**/ ?>