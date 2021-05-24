<div class="row">
    <!-- Prog Spapd Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('prog_spapd', 'Programa:') !!}
        <select class="form-control" id="prog_spapd" name="prog_spapd" required>
            <option value="" selected disabled hidden>Elige un programa</option>
            <option value="Programa de Estimulación Cognitiva">Programa de Estimulación Cognitiva</option>
            <option value="Programa de promoción, mantenimiento y recuperación de la autonomía funcional">Programa de promoción, mantenimiento y recuperación de la autonomía funcional</option>
            <option value="Programa de Asesoramiento y Orientación (Apoyo Emocional)">Programa de Asesoramiento y Orientación (Apoyo Emocional)</option>
            <option value="Programa de asistencia y formación en tecnologías de apoyo y adaptaciones">Programa de asistencia y formación en tecnologías de apoyo y adaptaciones</option>
            <option value="Programa de Terapia Ocupacional">Programa de Terapia Ocupacional</option>
            <option value="Logopedia">Logopedia</option>
            <option value="PHAF ALIVIA">PHAF ALIVIA</option>
            <option value="Programa de Formación en cuidados">Programa de Formación en cuidados</option>
            <option value="Programa de Hogar Accesible y Funcional">Programa de Hogar Accesible y Funcional</option>
            <option value="Programa de Asesoramiento Jurídico">Programa de Asesoramiento Jurídico</option>
            <option value="Otros">Otros</option>
        </select>
        <script>
            $('#prog_spapd').on('change', function() {
                if ($(this).val() === 'Otros') {
                    $('#otros_programa').css('display','block');
                }else{
                    $('#otros_programa').css('display','none');
                }
            });
        </script>
    </div>

    {{-- <div class="form-group col-sm-3">
        {!! Form::label('dur_spapd', 'Duración:') !!}
        <select class="form-control" id="dur_spapd" name="dur_spapd" required>
            <option value="" selected disabled hidden>Elegir duración</option>
            <option value="50">50</option>
            <option value="60">60</option>
            <option value="75">75</option>
            <option value="100">100</option>
            <option value="150">150</option>
            <option value="Otros">Otros</option>
        </select>
        <br>

        <!-- Otros Programa Field -->
        <div id="otras_sesiones" style="display: none;">
            <!-- Otras Sesiones Field -->
            {!! Form::label('otras_sesiones', 'Otras Sesiones:') !!}
            {!! Form::number('otras_sesiones', null, ['class' => 'form-control']) !!}
        </div>

        <script>
            $('#dur_spapd').on('change', function() {
                if ($(this).val() === 'Otros') {
                    $('#otras_sesiones').css('display','block');
                }else{
                    $('#otras_sesiones').css('display','none');
                }
            });
        </script>
    </div> --}}

    <!-- Dur Spapd Field -->
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

    <!-- Otros Programa Field -->
    <div class="form-group col-sm-12">
        <div id="otros_programa" class="bg-secondary p-2" style="display: none;">
            {!! Form::label('otros_programa', 'Otro Programa:') !!}
            {!! Form::text('otros_programa', null, ['class' => 'form-control']) !!}
        </div>
    </div>

    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        {!! Form::submit('Crear programa', ['class' => 'btn btn-primary float-right']) !!}
    
    </div>
    
</div>
<!--end row-->


