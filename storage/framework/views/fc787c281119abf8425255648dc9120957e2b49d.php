<?php $__env->startSection('title', "Edit"); ?>
<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Patient Medication</h1>
    <br>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edition</h6>
        </div>
        <div class="card-body">
            <?php echo Form::model($patientMedication, ['route' => ['patientMedications.update', $patientMedication->id], 'method' => 'patch']); ?>


            <?php echo $__env->make('patient_medications.fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php echo Form::close(); ?>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/patient_medications/edit.blade.php ENDPATH**/ ?>