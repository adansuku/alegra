<div class="row">
    <div class="form-group col-sm-6">
        {!! Form::label('ppc_motivo', 'Motivo') !!}
        <select class="form-control select2" id="ppc_motivo" name="ppc_motivo[]" multiple="multiple">
            <option value="">Selecciona una opción</option>
            <option value="Demencia en fase avanzada" {{ $patient->patientOther->ppc_motivo != null ? in_array('Demencia en fase avanzada',$patient->patientOther->ppc_motivo) : false ? 'selected' : '' }}>Demencia en fase avanzada</option>
            <option value="Dificultades Auditivas" {{ $patient->patientOther->ppc_motivo != null ? in_array('Dificultades Auditivas',$patient->patientOther->ppc_motivo) : false ? 'selected' : '' }}>Dificultades Auditivas</option>
            <option value="Desorientación-Agitación" {{ $patient->patientOther->ppc_motivo != null ? in_array('Desorientación-Agitación',$patient->patientOther->ppc_motivo) : false ? 'selected' : '' }}>Desorientación-Agitación</option>
            <option value="Problemas de Salud específicos" {{ $patient->patientOther->ppc_motivo != null ? in_array('Problemas de Salud específicos',$patient->patientOther->ppc_motivo) : false ? 'selected' : '' }}>Problemas de Salud específicos</option>
            <option value="Recomendación Médica" {{ $patient->patientOther->ppc_motivo != null ? in_array('Recomendación Médica',$patient->patientOther->ppc_motivo) : false ? 'selected' : '' }}>Recomendación Médica</option>
            <option value="OTROS" {{ $patient->patientOther->ppc_motivo != null ? in_array('OTROS',$patient->patientOther->ppc_motivo) : false ? 'selected' : '' }}>OTROS</option>
        </select>
    </div>

    <hr />
    <div class="form-group col-sm-12">
        <h4 class="m-0 font-weight-bold text-primary">Tipo</h3>
    </div>

    <div class="form-group col-sm-6">
        {!! Form::label('ppc_retirada_epi', 'Retirada de EPI por parte del profesional') !!}
        <select class="form-control" id="ppc_retirada_epi" name="ppc_retirada_epi">
            <option value="">Selecciona una opción</option>
            <option value="Si" {{ $patient->patientOther->ppc_retirada_epi == 'Si' ? 'selected' : '' }}>Si</option>
            <option value="No" {{ $patient->patientOther->ppc_retirada_epi == 'No' ? 'selected' : '' }}>No</option>
        </select>
    </div>
    
    <div class="form-group col-sm-6" id="div_ppc_epi" @if($patient->patientOther->ppc_retirada_epi == 'Si') style="display:block;" @else style="display:none;" @endif>
        {!! Form::label('ppc_epi', 'EPI') !!}
        <select class="form-control" id="ppc_epi" name="ppc_epi" >
            <option value="">Selecciona una opción</option>
            <option value="Mascarilla" {{ $patient->patientOther->ppc_epi == 'Mascarilla' ? 'selected' : '' }}>Mascarilla</option>
            <option value="Pantalla" {{ $patient->patientOther->ppc_epi == 'Pantalla' ? 'selected' : '' }}>Pantalla</option>
            <option value="Guantes" {{ $patient->patientOther->ppc_epi == 'Guantes' ? 'selected' : '' }}>Guantes</option>
            <option value="Zapatos" {{ $patient->patientOther->ppc_epi == 'Zapatos' ? 'selected' : '' }}>Zapatos</option>
            <option value="Bata" {{ $patient->patientOther->ppc_epi == 'Bata' ? 'selected' : '' }}>Bata</option>
        </select>
    </div>

    <div class="form-group col-sm-6" id="div_ppc_retirada_mascarilla" @if($patient->patientOther->ppc_retirada_epi == 'Si') style="display:block;" @else style="display:none;" @endif>
        {!! Form::label('ppc_retirada_mascarilla', 'Retirada de la Mascarilla por parte de la usuaria') !!}
        <select class="form-control" id="ppc_retirada_mascarilla" name="ppc_retirada_mascarilla" >
            <option value="">Selecciona una opción</option>
            <option value="Si" {{ $patient->patientOther->ppc_retirada_mascarilla == 'Si' ? 'selected' : '' }}>Si</option>
            <option value="No" {{ $patient->patientOther->ppc_retirada_mascarilla == 'No' ? 'selected' : '' }}>No</option>
        </select>
    </div>


    <div class="form-group col-sm-6" id="div_ppc_retirada_pantalla" @if($patient->patientOther->ppc_retirada_epi == 'Si') style="display:block;" @else style="display:none;" @endif>
        {!! Form::label('ppc_retirada_pantalla', 'Retirada de la Pantalla facial') !!}
        <select class="form-control" id="ppc_retirada_pantalla" name="ppc_retirada_pantalla">
            <option value="">Selecciona una opción</option>
            <option value="Si" {{ $patient->patientOther->ppc_retirada_pantalla == 'Si' ? 'selected' : '' }}>Si</option>
            <option value="No" {{ $patient->patientOther->ppc_retirada_pantalla == 'No' ? 'selected' : '' }}>No</option>
        </select>
    </div>


    <hr />
    <div class="form-group col-sm-12">
        <h4 class="m-0 font-weight-bold text-primary">Vacunación</h3>
    </div>
    
    <div class="form-group col-sm-6">
        {!! Form::label('ppc_se_vacuno', 'Ha sido vacunada') !!}
        <select class="form-control" id="ppc_se_vacuno" name="ppc_se_vacuno">
            <option value="">Selecciona una opción</option>
            <option value="Si" {{ $patient->patientOther->ppc_se_vacuno == 'Si' ? 'selected' : '' }}>Si</option>
            <option value="No" {{ $patient->patientOther->ppc_se_vacuno == 'No' ? 'selected' : '' }}>No</option>
        </select>
    </div>

    <div class=" form-group col-sm-6" id="div_ppc_dosis_recibida" @if($patient->patientOther->ppc_se_vacuno == 'Si') style="display:block;" @else style="display:none;" @endif>
        {!! Form::label('ppc_dosis_recibida', 'Dosis recibidas:') !!}
        {!! Form::text('ppc_dosis_recibida', $patient->patientOther->ppc_dosis_recibida, ['class' => 'form-control']) !!}
    </div>

    <div class=" form-group col-sm-6" id="div_ppc_tipo_vacuna" @if($patient->patientOther->ppc_se_vacuno == 'Si') style="display:block;" @else style="display:none;" @endif>
        {!! Form::label('ppc_tipo_vacuna', 'Tipo Vacuna:') !!}
        {!! Form::text('ppc_tipo_vacuna', $patient->patientOther->ppc_tipo_vacuna, ['class' => 'form-control']) !!}
    </div>
    
</div>