<div class="row">
    @section('scripts')
    <script type="text/javascript">
        $('#fecha_real').datetimepicker({
            format: 'dd-mm-yyyy',
            useCurrent: false
        })
    </script>
    @endsection

    <!-- Tipo Pia Field -->
    <div class="form-group col-lg-6">
        {!! Form::label('tipo_pia', 'Tipo Pia:') !!}
        {!! Form::select('tipo_pia', ['Seguimiento' => 'Seguimiento'], 'null',
        ['class' => 'form-control', 'id' => 'tipo_pia','required' => 'required']) !!}
    </div>

    <!-- Url Pia Field -->
    <div class="form-group col-lg-6">
        {!! Form::label('url_pia', 'Archivo Pia:') !!}
        {!! Form::file('url_pia') !!}
    </div>
    <div class="clearfix"></div>

    <!-- Obs Pia Field -->
    <div class="form-group col-lg-12">
        {!! Form::label('obs_pia', 'Observaciones:') !!}
        {!! Form::textArea('obs_pia', null, ['class' => 'form-control']) !!}
    </div>


    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        {!! Form::submit('Crear nuevo pia', ['class' => 'btn btn-primary float-right', 'id' => 'save']) !!}
        {!! Form::submit('Cancelar', ['class' => 'btn btn-danger float-right', 'data-dismiss' => 'modal']) !!}

    </div>
</div>