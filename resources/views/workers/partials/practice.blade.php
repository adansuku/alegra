<div class="row mt-3">
    <div class="col-sm-6">
            <!-- Centro Acufade Field -->
            <div class="form-group ">
                {!! Form::label('centro_acufade', 'Centro Acufade:') !!}
                {!! Form::text('centro_acufade', null, ['class' => 'form-control']) !!}
            </div>
            <!-- Titulacion Curso Field -->
            <div class="form-group ">
                {!! Form::label('titulacion_curso', 'Titulacion | Curso:') !!}
                {!! Form::text('titulacion_curso', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Tutor Academico Field -->
            <div class="form-group ">
                {!! Form::label('tutor_academico', 'Tutor Academico:') !!}
                {!! Form::text('tutor_academico', null, ['class' => 'form-control']) !!}
            </div>
    </div>

    <div class="col-sm-6">
            <!-- Tutor Telefono Field -->
            <div class="form-group ">
                {!! Form::label('tutor_telefono', 'Teléfono tutor:') !!}
                {!! Form::number('tutor_telefono', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Tutor Email Field -->
            <div class="form-group ">
                {!! Form::label('tutor_email', 'Email tutor:') !!}
                {!! Form::email('tutor_email', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Persona Ref Acufade Field -->
            <div class="form-group ">
                {!! Form::label('persona_ref_Acufade', 'Persona de referencia en Acufade:') !!}
                {!! Form::text('persona_ref_Acufade', null, ['class' => 'form-control']) !!}
            </div>
    </div>
</div>