<div class="row">
    <div class="col-md-6">
        <h5>Diagnósticos Principales</h5>
        <button type="button" class="btn btn-secondary  float-right mb-3" data-toggle="modal"
            data-target="#diagnostic_modal">
            Añadir Diagnóstico <i class="fas fa-file-upload"></i>
        </button>
        @include('patients.show.show_diagnostic')
    </div>

    <div class="col-md-6">
        <h5>Alergia e intolerancia</h5>
        <button type="button" class="btn btn-secondary float-right mb-3" data-toggle="modal"
            data-target="#allergy_modal">
            Añadir Alergia <i class="fas fa-file-upload"></i>
        </button>
        @include('patients.show.show_allergy')
    </div>


    <div class="col-md-6">
        <hr class="pb_4">
        <h5>Otras patología/s Importantes</h5>
        <button type="button" class="btn btn-secondary float-right mb-3" data-toggle="modal"
            data-target="#patology_modal">
            Añadir Patología <i class="fas fa-file-upload"></i>
        </button>
        @include('patients.show.show_patology')
    </div>



    <div class="col-md-6">
        <hr class="pb_4">
        {!! Form::label('observ_importantes', 'Observaciones Importantes:') !!}
        {!! Form::textArea('observ_importantes', $patient->patientHealth->observ_importantes, ['class' => 'form-control']) !!}
    </div>
</div>