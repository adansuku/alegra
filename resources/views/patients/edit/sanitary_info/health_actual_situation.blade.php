<div class="row">
    <div class="col-12 d-flex align-items-center justify-content-between">
        <h5><strong>Diagnósticos Principales</strong></h5>
        <button type="button" class="btn btn-secondary  float-right mb-3" data-toggle="modal" data-target="#diagnostic_modal">
            Añadir Diagnóstico <i class="fas fa-file-upload"></i>
        </button>

    </div>

    <div class="col-12">
        @include('patients.show.show_diagnostic')
    </div>

    <div class="col-12 d-flex align-items-center justify-content-between">
        <h5><strong>Alergia e intolerancia</strong></h5>
        <button type="button" class="btn btn-secondary float-right mb-3" data-toggle="modal" data-target="#allergy_modal">
            Añadir Alergia <i class="fas fa-file-upload"></i>
        </button>
    </div>

    <div class="col-12">
        @include('patients.show.show_allergy')
    </div>


    <div class="col-12 d-flex align-items-center justify-content-between">
        <h5><strong>Otras patologías Importantes</strong></h5>
        <button type="button" class="btn btn-secondary float-right mb-3" data-toggle="modal" data-target="#patology_modal">
            Añadir Patología <i class="fas fa-file-upload"></i>
        </button>
    </div>

    <div class="col-12">
        @include('patients.show.show_patology')
    </div>

    <div class="col-12">
        <h5><strong>{!! Form::label('observ_importantes', 'Observaciones Importantes:') !!}</strong></h5>
        {!! Form::textArea('observ_importantes', $patient->patientHealth->observ_importantes, ['class' => 'form-control', 'rows' => '4']) !!}
    </div>
</div>