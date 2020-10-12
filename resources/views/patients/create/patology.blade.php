<div class="row p-3 m-0">
    <!-- Patologia Field -->
    <div class="form-group col-sm-12">
        {!! Form::label('patologia', 'Patología:') !!}
        {!! Form::select('patologia', [
                'Cardiopatías' => 'Cardiopatías',
                'Marcapasos' => 'Marcapasos',
                'Prob. respiratorios' => 'Prob. respiratorios',
                'Diabetes' => 'Diabetes',
                'Tensión arterial' => 'Tensión arterial',
                'Retinopatía diabética' => 'Retinopatía diabética',
                'Osteoporosis' => 'Osteoporosis',
                'Artrosis' => 'Artrosis',
                'Artritis' => 'Artritis',
                'Tumores óseos' => 'Tumores óseos',
                'Dolor crónico' => 'Dolor crónico',
                'Cáncer' => 'Cáncer',
                'Asma' => 'Asma',
                'Otitis' => 'Otitis',
                'Sordera' => 'Sordera',
                'Cataratas' => 'Cataratas',
                'Cataratas' => 'Cataratas',
                'Glaucoma' => 'Glaucoma',
                'Presbicia' => 'Presbicia',
                'Retinopatía diabética' => 'Retinopatía diabética',
                'Enfermedad de Crohn' => 'Enfermedad de Crohn',
                'Dermatitis atópicas' => 'Dermatitis atópicas',
                'Otras' => 'Otras'],
                null, ['class' => 'form-control select2', 'name' => 'patologia[]', 'onchange' => 'showInput(this.value, this.id);',
                'multiple' => 'multiple','required' => 'required'])
        !!}
    </div>

    <!-- Otro -->
        <div class="form-group col-sm-12" id="patologia_cont" hidden="hidden">
            {!! Form::label('patologiaOtro', 'Si no esta en la lista, especifica cual:') !!}
            {!! Form::text('patologiaOtro', null, ['class' => 'form-control']) !!}
        </div>

    <!-- Nombre Pat Field -->
    <div class="form-group col-sm-12">
        {!! Form::label('nombre_pat', 'Observaciones:') !!}
        {!! Form::text('nombre_pat', null, ['class' => 'form-control']) !!}
    </div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Añadir patología', ['class' => 'btn btn-primary float-right']) !!}
    <a href="{!! route('patientPatologies.index') !!}" class="btn btn-default float-right" data-dismiss ='modal'>Cancelar</a>
</div>
