<div class="row">

    <div class="col-lg-2">
        {!! Form::label('transporte', 'Transporte:') !!}
        <select class="form-control" id="trans_sel" name="transporte">
            <option value="" selected disabled hidden></option>
            <option {{ $patient->patientOther->transporte == 'Si' ? 'selected':'' }}>Si
            </option>
            <option {{ $patient->patientOther->transporte == 'No' ? 'selected':'' }} value="No">No</option>
        </select>
    </div>



    <div class="col-lg-3 direccion_transporte" style="display: none;">
        <!-- Transporte Field -->
        {!! Form::label('fecha_transporte', 'Fecha de alta:') !!}
        {!! Form::date('fecha_transporte', $patient->patientOther->fecha_transporte ,['class'=> 'form-control', 'id' =>
        'fecha_transporte']) !!}
    </div>

    <div class="col-lg-7 direccion_transporte" style="display: none;">
        <!-- Transporte Field -->
        {!! Form::label('dire_transporte', 'Domicilio de Recogida:') !!}
        {!! Form::text('dire_transporte', $patient->patientOther->dire_transporte , ['class' => 'form-control', 'id' =>
        'direccion_transporte']) !!}
    </div>

    <div class="col-lg-12 direccion_transporte mt-3" style="display: none;">
        <!-- Transporte Field -->
        {!! Form::label('obser_transporte', 'Observaciones transporte:') !!}
        {!! Form::text('obser_transporte', $patient->patientOther->obser_transporte , ['class' => 'form-control',
        'id' =>
        'obser_transporte']) !!}
    </div>




    @if ($patient->patientOther->transporte == 'Si')
    <div class="col-md-12 transporte_ficha pt-4">
        <button type="button" class="btn btn-secondary float-right" data-toggle="modal"
            data-target="#transport_modal">Añadir transporte <i class="fas fa-file-upload"></i>
        </button>
    </div>

    <div class="col-md-12 transporte_ficha mt-3">
        @include('patients.show.show_transport')
    </div>
    @else
    <div class="col-md-12 transporte_ficha pt-4" style="display: none">
        <button type="button" class="btn btn-secondary float-right" data-toggle="modal"
            data-target="#transport_modal">Añadir transporte <i class="fas fa-file-upload"></i>
        </button>
    </div>
    <div class="col-md-12 transporte_ficha mt-3" style="display: none">
        @include('patients.show.show_transport')
    </div>
    @endif
    <script>
        $('#trans_sel').on('change', function() {
            $('.transporte_ficha').css('display', 'none');
            if ($(this).val() === 'Si' || $(this).val() === '') {
                $('.transporte_ficha').css('display', 'block');
                $('.direccion_transporte').css('display', 'block');
            }else{
                $('.direccion_transporte').css('display', 'none');
            }
            
        });

    $(document).ready(function() {
        var selected_option = $('#trans_sel').val();
        if(selected_option == 'Si'){
            $('.transporte_ficha').css('display', 'block');
            $('.direccion_transporte').css('display', 'block');
        }
        console.log("ok" + selected_option);
     
    });
    </script>
</div>