<!-- Modal Add Document-->
<div class="modal fade" id="centro_modal" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Añadir nuevo programa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                {!! Form::open(['url' => route('patientCentro.store', ['patient_id' => $patient->id]),'method' =>
                'POST', 'enctype' => 'multipart/form-data']) !!}
                @include('patients.create.centro')
                {!! Form::close() !!}

            </div>
        </div>
    </div>
</div>
<!--end modal add documents-->