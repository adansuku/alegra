<div class="row">
    <!-- Prog Spapd Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('prog_spapd', 'Programa:') !!}
        <select class="form-control" id="prog_centro" name="prog_centro" required>
            <option value="" selected disabled hidden>Elige un programa</option>
            <option value="Programa de Estimulación Cognitiva">Programa de Estimulación Cognitiva</option>
            <option value="Programa de Asesoramiento y Orientación (Apoyo Emocional)">Programa de Asesoramiento y Orientación (Apoyo Emocional)</option>
            <option value="Programa de promoción, mantenimiento y recuperación de la autonomía funcional">Programa de promoción, mantenimiento y recuperación de la autonomía funcional</option>
            <option value="Programa de asistencia y formación en tecnologías de apoyo y adaptaciones">Programa de asistencia y formación en tecnologías de apoyo y adaptaciones</option>
            <option value="Programa de Terapia Ocupacional">Programa de Terapia Ocupacional</option>                                                                                                    
            <option value="Programa de Apoyo Social">Programa de Apoyo Social</option>
            <option value="Programa de Formación en cuidados">Programa de Formación en cuidados</option>
            <option value="Programa de Hogar Accesible y Funcional">Programa de Hogar Accesible y Funcional</option>
            <option value="Programa de Asesoramiento Jurídico">Programa de Asesoramiento Jurídico</option>
            <option value="Manutención">Manutención</option>
            <option value="Transporte">Transporte</option>
            <option value="Atención Sanitaria">Atención Sanitaria</option>
            <option value="Atención social">Atención social</option>
        </select>
        
    </div>

    
    <div class="form-group col-sm-4">
        <!-- Num Sesiones Field -->
        {!! Form::label('num_sesiones', 'Número Total de Sesiones:') !!}
        {!! Form::number('num_sesiones', null, ['class' => 'form-control','required' => 'required', 'step' => '0.01']) !!}
    </div>

    <div class="form-group col-sm-4">
        {!! Form::label('worker_id', 'Trabajadora asociada:') !!}
        <select class="form-control select2" id="worker_id" name="worker_id" required>
            @foreach($workers as $worker)
            <option {{ $patient->worker_id == $worker->id ? 'selected':'' }} value="{{$worker->id}}">{{$worker->nombre}}
                {{$worker->apellido}}</option>
            @endforeach
        </select>
    </div>


    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        {!! Form::submit('Crear programa', ['class' => 'btn btn-primary float-right']) !!}
    
    </div>
    
</div>
<!--end row-->


