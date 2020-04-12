<div class="row">


    <!-- Dia Trans Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('dia_trans', 'Dias:') !!}
        {!! Form::select('dia_trans', ['' => '', 'Lunes' => 'Lunes', 'Martes' => 'Martes', 'Miércoles' => 'Miércoles',
        'Jueves' => 'Jueves', 'Viernes' => 'Viernes', 'de Lunes a Viernes' => 'de Lunes a Viernes'], null, ['class' =>
        'form-control', 'required' => 'required']) !!}
    </div>

    <!-- Tray Trans Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('tray_trans', 'Trayecto Transporte:') !!}
        {!! Form::select('tray_trans', ['' => '', 'Ida' => 'Ida', 'Vuelta' => 'Vuelta', 'Ida y Vuelta' => 'Ida y
        Vuelta'], null, ['class' => 'form-control', 'required' => 'required']) !!}
    </div>

    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        {!! Form::submit('Añadir transporte', ['class' => 'btn btn-primary float-right' ]) !!}
        {!! Form::submit('Cancelar', ['class' => 'btn btn-danger float-right', 'data-dismiss' => 'modal']) !!}
    </div>
</div>