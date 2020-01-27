<?php $__env->startSection('title', "Edit"); ?>
<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 my-3 text-gray-800">Persona de Referencia</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edición</h6>
        </div>
        <div class="card-body">
            <?php echo Form::model($patientCarer, ['route' => ['patientCarers.update', $patientCarer->id], 'method' => 'patch']); ?>


            <?php echo $__env->make('patient_carers.fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php echo Form::close(); ?>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/patient_carers/edit.blade.php ENDPATH**/ ?>