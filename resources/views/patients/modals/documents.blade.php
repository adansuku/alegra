<!-- Modal Add Document-->
<div class="modal fade" id="documents_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="exampleModalLabel">Documentos de la persona atendida</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body px-4 py-3">

                {!! Form::open(['url' => route('patientDocuments.store', ['patient_id' => $patient->id]),'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                @include('patients.create.documents')
                {!! Form::close() !!}

            </div>
        </div>
    </div>
</div>
<!--end modal add documents-->