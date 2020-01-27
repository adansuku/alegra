<!-- Modal Add Document-->
<div class="modal fade" id="medication_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Añadir medicación</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <?php echo Form::open(['url' => route('patientMedications.store', ['patient_id' => $patient->id]),'method' => 'POST']); ?>

          
                       <div class="row">
                            <!-- Medicacion Field -->
                        <div class="form-group col-sm-6">
                            <?php echo Form::label('medicacion', 'Nombre Medicación:'); ?>

                            <?php echo Form::text('medicacion', null, ['class' => 'form-control', 'required' => 'required']); ?>

                        </div>

                        <!-- Pauta Medicacion Field -->
                        <div class="form-group col-sm-6">
                            <?php echo Form::label('pauta_medicacion', 'Pauta Medicación:'); ?>

                            <?php echo Form::text('pauta_medicacion', null, ['class' => 'form-control', 'required' => 'required']); ?>

                        </div>

                        <!-- Obs Medicacion Field -->
                        <div class="form-group col-sm-12">
                            <?php echo Form::label('obs_medicacion', 'Observaciones:'); ?>

                            <?php echo Form::text('obs_medicacion', null, ['class' => 'form-control']); ?>

                        </div>

                
                        <!-- Submit Field -->
                        <div class="form-group col-sm-12">
                            <?php echo Form::submit('Guardar', ['class' => 'btn btn-primary float-right']); ?>

                        </div>
                       </div>

                <?php echo Form::close(); ?>


            </div>
        </div>
    </div>
</div>
<!--end modal add documents--><?php /**PATH /var/www/resources/views/patients/modals/medication.blade.php ENDPATH**/ ?>