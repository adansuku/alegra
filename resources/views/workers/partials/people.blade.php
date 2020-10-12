<div class="row mt-3">
    <div class="col-sm-6">
        <div class="form-group ">
            {!! Form::label('personas_atendidas', 'Personas Atendidas:') !!}
            <select class="form-control select2" id="patient_served" name="patient_served[]" multiple="multiple">
                @foreach ($patients as $patient) 
                    <option value="{{ $patient->id }}">{{ $patient->nombre }} {{ $patient->apellido }}</option>
                @endforeach
                
            </select>
        </div>

    </div> 


</div>