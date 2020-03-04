<div class="row">
    <!-- Prog Spapd Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('prog_spapd', 'Programa:') !!}
        <select class="form-control" id="prog_spapd" name="prog_spapd" required>
            <option value="" selected disabled hidden>Elige un programa</option>
            <option value="Estimulación Cognitiva (EC)">Estimulación Cognitiva (EC)</option>
            <option value="Fisioterapia">Fisioterapia</option>
            <option value="Apoyo Emocional">Apoyo Emocional</option>
            <option value="Terapia Ocupacional">Terapia Ocupacional</option>
            <option value="Logopedia">Logopedia</option>
            <option value="Otros">Otros</option>
        </select>
        <br>
        <!-- Otros Programa Field -->
        <div id="otros_programa" style="display: none;">
            {!! Form::label('otros_programa', 'Otros Programa:') !!}
            {!! Form::text('otros_programa', null, ['class' => 'form-control']) !!}
        </div>

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


    <div class="form-group col-sm-6">
        {!! Form::label('dur_spapd', 'Dururación:') !!}
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
    </div>


    <!-- Dur Spapd Field -->
    <div class="form-group col-sm-6">
        <!-- Num Sesiones Field -->
        {!! Form::label('num_sesiones', 'Número de Sesiones:') !!}
        {!! Form::number('num_sesiones', null, ['class' => 'form-control','required' => 'required']) !!}
    </div>

    <div class="form-group col-sm-6">
        {!! Form::label('worker_id', 'Trabajadora asociada:') !!}
        <select class="form-control select2" id="worker_id" name="worker_id" required>
            @foreach($workers as $worker)
            <option {{ $patient->worker_id == $worker->id ? 'selected':'' }} value="{{$worker->id}}">{{$worker->nombre}}
                {{$worker->apellido}}</option>
            @endforeach
        </select>
    </div>


    <div class="form-group col-sm-6">
        {!! Form::label('fecha_inicio', 'Hora de inicio:') !!}
        {!! Form::time('fecha_inicio', null, ['class' => 'form-control','required' => 'required']) !!}
    </div>

    <div class="form-group col-sm-6">
        {!! Form::label('dia_spapd', 'Dias programa:') !!}
        <select class="form-control select2" id="dias_serv" name="dia_spapd[]" multiple="multiple" required>
            <option value="Lunes">Lunes</option>
            <option value="Martes">Martes</option>
            <option value="Miercoles">Miercoles</option>
            <option value="Jueves">Jueves</option>
            <option value="Viernes">Viernes</option>
        </select>
    </div>

</div>
<!--end row-->

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Crear programa', ['class' => 'btn btn-primary float-right']) !!}

</div>