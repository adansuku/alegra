<div class="row">


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
            {!! Form::file('url_recepcion', null,['class' => 'form-control']) !!}
        </div>

        <!-- Obs Pia Field -->
        <div class="form-group col-sm-12">
            <div class="h6">
                <strong>{!! Form::label('fecha_real_entrega', 'Fecha real de entrega:') !!}</strong>
            </div>
            {!! Form::date('fecha_real_entrega', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Obs Pia Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('obs_pia', 'Observaciones:') !!} {!! Form::textArea('obs_pia', null, ['class' => 'form-control']) !!}
        </div>

        <!-- plan_cognitivo -->
        <div class="form-group col-sm-12">
            {!! Form::label('plan_cognitivo', 'Plan de Tratamiento cognitivo (actividades y ejercicios):') !!} 
            {!! Form::textArea('plan_cognitivo', null, ['class' => 'form-control']) !!}
        </div>

        <!-- rec_cognitivo -->
        <div class="form-group col-sm-12">
            {!! Form::label('rec_cognitivo', 'Recomendaciones cognitivas:') !!} 
            {!! Form::textArea('rec_cognitivo', null, ['class' => 'form-control']) !!}
        </div>

        <!-- plan_emocional -->
        <div class="form-group col-sm-12">
            {!! Form::label('plan_emocional', 'Plan de Tratamiento de apoyo emocional:') !!} 
            {!! Form::textArea('plan_emocional', null, ['class' => 'form-control']) !!}
        </div>

        <!-- rec_emocional -->
        <div class="form-group col-sm-12">
            {!! Form::label('rec_emocional', 'Recomendaciones apoyo emocional:') !!} 
            {!! Form::textArea('rec_emocional', null, ['class' => 'form-control']) !!}
        </div>

        <!-- plan_fisico -->
        <div class="form-group col-sm-12">
            {!! Form::label('plan_fisico', 'Plan de Tratamiento Físico:') !!} 
            {!! Form::textArea('plan_fisico', null, ['class' => 'form-control']) !!}
        </div>

        <!-- rec_fisico -->
        <div class="form-group col-sm-12">
            {!! Form::label('rec_fisico', 'Recomendaciones Físicas:') !!} 
            {!! Form::textArea('rec_fisico', null, ['class' => 'form-control']) !!}
        </div>

        <!-- plan_funcional -->
        <div class="form-group col-sm-12">
            {!! Form::label('plan_funcional', 'Plan de Tratamiento funcional:') !!} 
            {!! Form::textArea('plan_funcional', null, ['class' => 'form-control']) !!}
        </div>


        <!-- plan_funcional -->
        <div class="form-group col-sm-12">
            {!! Form::label('rec_funcional', 'Recomendaciones funcionales:') !!} 
            {!! Form::textArea('rec_funcional', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group col-sm-12">
            {!! Form::submit('Actualizar información Pia', ['class' => 'btn btn-primary']) !!}
            <a href="{!! route('patients.edit', $patientPia->patient->id) !!}" class="btn btn-default">Cancelar</a>
        </div>
</div>