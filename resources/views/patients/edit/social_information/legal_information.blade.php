<!-- Sit Legal Field -->
<div class="form-group col-sm-4">
    {!! Form::label('sit_legal', 'Situación Legal:') !!}
    <select class="form-control" id="sit_legal" name="sit_legal">
        <option {{ $patient->patientInfo->sit_legal == '' ? 'selected':'' }}></option>
        <option {{ $patient->patientInfo->sit_legal == 'Autónoma' ? 'selected':'' }}>Autónoma</option>
        <option {{ $patient->patientInfo->sit_legal == 'Tutela' ? 'selected':'' }}>Tutela</option>
        <option {{ $patient->patientInfo->sit_legal == 'Curatela' ? 'selected':'' }}>Curatela</option>
        <option {{ $patient->patientInfo->sit_legal == 'Guarda de Hecho' ? 'selected':'' }}>Guarda de Hecho
        </option>
    </select>
</div>