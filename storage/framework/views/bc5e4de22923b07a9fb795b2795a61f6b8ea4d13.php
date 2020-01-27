<!-- Modal Add Document-->
<div class="modal fade" id="past_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Antecedentes</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <?php echo Form::open(['url' => route('patientPasts.store', ['patient_id' => $patient->id]),'method' => 'POST', 'enctype' => 'multipart/form-data']); ?>

                <?php echo $__env->make('patients.create.past', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo Form::close(); ?>


            </div>
        </div>
    </div>
</div>
<!--end modal add documents--><?php /**PATH /var/www/resources/views/patients/modals/past.blade.php ENDPATH**/ ?>