<!-- Modal Add Document-->
<div class="modal fade" id="services_date_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Añadir Horario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <?php echo Form::open(['url' => route('patientServicesDates.store', ['patient_service_id' => '']),'method' =>
                'POST', 'enctype' => 'multipart/form-data']); ?>

                <?php echo $__env->make('patients.create.services_dates', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo Form::close(); ?>


            </div>
        </div>
    </div>
</div>
<!--end modal add documents-->
<?php /**PATH /var/www/resources/views/patients/modals/service_dates.blade.php ENDPATH**/ ?>