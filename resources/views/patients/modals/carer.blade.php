<!-- Modal Add Document-->
<div class="modal fade" id="carer_modal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Personas de referencia</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {!! Form::open(['url' => route('patientCarers.store', ['patient_id' => $patient->id]),'method' => 'POST', 'enctype' => 'multipart/form-data', 'id' => 'carer_form']) !!} @include('patients.create.carer') {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
<!--end modal add documents-->