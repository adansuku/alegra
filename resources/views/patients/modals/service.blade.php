<!-- Modal Add Document-->
<div class="modal fade" id="service_modal" tabindex="-1" role="dialog" 
aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Añadir nuevo servicio</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {!! Form::open(['url' => route('patientServices.store', ['patient_id' => $patient->id]),'method' => 'POST']) !!}
                @include('patients.create.services')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
<!--end modal add documents-->