<?php $__env->startSection('title', "Create"); ?>
<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Añadir horas a servicio</h1>
    <?php echo $__env->make('laradminbs4-templates::common.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <br>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Insert Register</h6>
        </div>
        <div class="card-body">


        

            <?php echo Form::open(['route' => 'patientServiceDates.store']); ?>


            <?php echo $__env->make('patient_service_dates.fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php echo Form::close(); ?>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/patient_service_dates/create.blade.php ENDPATH**/ ?>