<!-- Modal Add Document-->
<div class="modal fade" id="allergy_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Añadir Alergias</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                {!! Form::open(['url' => route('patientAllergies.store', ['patient_id' => $patient->id]),'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                @include('patients.create.allergy')
                {!! Form::close() !!}

            </div>
        </div>
    </div>
</div>
<!--end modal add documents-->