<div class="row">


{{-- @php(var_dump($patientPia->patient->url_pia)); --}}
    <div class="col-sm-6">
        <!-- Url Pia Field -->
        <div class="form-group col-sm-12">
            <div class="h6">
                <strong>{!! Form::label('url_pia', 'Adjunto Informe PIA') !!}</strong>
            </div>
            {!! Form::file('url_pia', null,['class' => 'form-control']) !!}
        </div>

        <div class="form-group col-sm-12">
            <div class="h6">
                <strong>{!! Form::label('url_recepcion', 'Adjunto Documento Recepción PIA') !!}</strong>
            </div>
            {!! Form::file('url_recepcion') !!}
        </div>

        <!-- Obs Pia Field -->
        <div class="form-group col-sm-12">
            <div class="h6">
                <strong>{!! Form::label('fecha_real_entrega', 'Fecha real de entrega:') !!}</strong>
            </div>
            {!! Form::date('fecha_real_entrega', null, ['class' => 'form-control']) !!}
        </div>

        <!--<div class="form-group col-sm-12">
            <div class="h6">
                <strong>{!! Form::label('exito_pia', 'Éxito PIA') !!}</strong>
            </div>
            {!! Form::select('exito_pia', [
            "" => '',
            "Si" => 'Si',
            "No" => 'No'
            ], null, ['class' => 'form-control']) !!}
        </div>-->
        <!-- Submit Field -->


        <div class="form-group col-sm-12">
            {!! Form::submit('Actualizar información Pia', ['class' => 'btn btn-primary']) !!}
            <a href="{!! route('patients.edit', $patientPia->patient->id) !!}" class="btn btn-default">Cancelar</a>
        </div>
    </div>

    <div class="col-sm-6">

        <!-- Obs Pia Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('obs_pia', 'Observaciones:') !!}
            {!! Form::textArea('obs_pia', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>