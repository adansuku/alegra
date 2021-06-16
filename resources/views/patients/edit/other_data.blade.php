<ul class="nav nav-tabs bg-light mb-4" id="myTab" role="tablist" style="margin-top:-24px;">
    <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#otros_datos" role="tab"
            aria-controls="home" aria-selected="true">
             Otros Datos
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#excepciones_ppc" role="tab"
            aria-controls="contact" aria-selected="false"> Excepciones PPC
        </a>
    </li>
    
</ul>


<div class="tab-content" id="otrosTabContent">
    <div class="tab-pane fade show active" id="otros_datos" role="tabpanel" aria-labelledby="otros_datos">
        @include('patients.edit.other_data.other_data')
    </div>
    <div class="tab-pane fade" id="excepciones_ppc" role="tabpanel" aria-labelledby="excepciones_ppc">
        @include('patients.edit.other_data.exception_ppc')
     </div>
</div>

    <!-- Salida Externa Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('salida_externa', 'Autorización Salida Externa:') !!}
        <select class="form-control" id="salida_externa" name="salida_externa">
            <option value="">Selecciona una opción</option>
            <option {{ $patient->patientOther->salida_externa == 'Si' ? 'selected':'' }}>Si</option>
            <option {{ $patient->patientOther->salida_externa == 'No' ? 'selected':'' }}>No</option>
        </select>
    </div>
    
    <div class="form-group col-sm-6">
        {!! Form::label('producto_apoyo', 'Productos de apoyo:') !!}
        <select class="form-control select2" id="producto_apoyo" name="producto_apoyo[]" multiple="multiple">
            <option value="">Selecciona una opción</option>
            @foreach ($support_products as $sp)
                <option value="{{ $sp->id }}" {{ in_array($sp->id,$patient_sp) ? 'selected' : '' }}>{{ $sp->description }}</option>
            @endforeach
        </select>
    </div>

</div>