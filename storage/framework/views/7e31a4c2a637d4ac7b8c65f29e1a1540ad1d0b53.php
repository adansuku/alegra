<?php $__env->startSection('title', "Show"); ?>
<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Patient Service Date</h1>
    <br>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Datos Generales</h6>
        </div>
        <div class="card-body">
            <?php echo $__env->make('patient_service_dates.show_fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <a href="<?php echo route('patientServiceDates.index'); ?>" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/patient_service_dates/show.blade.php ENDPATH**/ ?>