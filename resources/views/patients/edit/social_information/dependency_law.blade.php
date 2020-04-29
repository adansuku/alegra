<div class="row">
    <!-- Situacion Dep Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('situacion_dep', 'Situacion dependencia:') !!}
        <select class="form-control" id="type" name="situacion_dep">
            <option {{ $patient->patientInfo->situacion_dep == 'No Solicitada' ? 'selected':'' }}>No Solicitada
            </option>
            <option {{ $patient->patientInfo->situacion_dep == 'Solicitada' ? 'selected':'' }}>Solicitada</option>
            <option {{ $patient->patientInfo->situacion_dep == 'Resolución de Grado' ? 'selected':'' }}>Resolución
                de
                Grado</option>
            <option {{ $patient->patientInfo->situacion_dep == 'Espera PIA' ? 'selected':'' }}>Espera PIA</option>
            <option {{ $patient->patientInfo->situacion_dep == 'Disfruta Prestacíon/Servicio' ? 'selected':'' }}>
                Disfruta
                Prestación/Servicio</option>
        </select>
    </div>

    <!-- Grado Dep Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('grado_dep', 'Grado Dependencia:') !!}
        <select class="form-control" id="type" name="grado_dep">
            <option {{ $patient->patientInfo->grado_dep == 'Sin Grado' ? 'selected':'' }}>Sin Grado</option>
            <option {{ $patient->patientInfo->grado_dep == 'I' ? 'selected':'' }}>I</option>
            <option {{ $patient->patientInfo->grado_dep == 'II' ? 'selected':'' }}>II</option>
            <option {{ $patient->patientInfo->grado_dep == 'III' ? 'selected':'' }}>III</option>
        </select>
    </div>

    <!-- Revisión de Grado Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('grado_rev', 'Revisión de Grado:') !!}
        <select class="form-control" id="grado_rev" name="grado_rev">
            <option {{ $patient->patientInfo->grado_rev == 'SI' ? 'selected':'' }}>SI</option>
            <option {{ $patient->patientInfo->grado_rev == 'NO' ? 'selected':'' }}>NO</option>
        </select>
    </div>



    <!-- Ayuda Dep Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('ayuda_dep', 'Tipo de Ayuda:') !!} 
        {!! Form::select('ayuda_dep', 
        [null => '', 'PNC' => 'PNC','PEVS' => 'PEVS', 'PECEF' => 'PECEF', 'PEAE' => 'PEAE', 'Otras' => ' Otras'], $patient->patientInfo->ayuda_dep, 
        ['class' => 'form-control', 'id' => 'ayuda_dep']) !!} 
        
     


        {{-- @if ($patient->patientInfo->ayuda_dep != 'PEVS' || $patient->patientInfo->ayuda_dep != 'PECEF' || $patient->patientInfo->ayuda_dep != 'PEAE'  )
        <script>
            $(document).ready(function(){
                    $('#otras_ayudas_dep').css('display', 'block');
                    
                });
        </script>
        @endif




        <div class="p-3 bg-secondary" id="ayuda_dep_cont" style="display: none">
            {!! Form::label('ayudaDep2', 'Otros (especificar):') !!} 
            {!! Form::text('', $patient->patientInfo->ayuda_dep, ['class' => 'form-control', 'name' => 'ayuda_dep', 'placeholder' => 'Cuáles?', 'id' => 'otras_ayudas_dep']) !!}
        </div> --}}
    </div>






    <!-- Cuantia Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('cuantia', 'Cuantía Resolución PIA:') !!} {!! Form::text('cuantia', $patient->patientInfo->cuantia, ['class' => 'form-control']) !!}
    </div>

    <!-- Tec Dependencia Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('tec_dependencia', 'Técnico/a Dependencia:') !!} {!! Form::text('tec_dependencia', $patient->patientInfo->tec_dependencia, ['class' => 'form-control']) !!}
    </div>

    <!-- Guarda Hecho Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('guarda_hecho', 'Persona Guardadora:') !!} {!! Form::text('guarda_hecho', $patient->patientInfo->guarda_hecho, ['class' => 'form-control']) !!}
    </div>



    <div class="col-sm-12 my-3">
        <div class="row">
            <div class="col-lg-6">
                <h6><i class="fas fa-file-medical">
                    </i> Fechas Dependencia</h6>
            </div>
            <div class="col-lg-6">
                <button type="button" class="btn btn-secondary float-right" data-toggle="modal" data-target="#dates_modal">
                    Añadir nueva fecha <i class="fas fa-file-upload"></i>
                </button>
            </div>
        </div>


    </div>

    <div class="col-sm-12 my-3">
        <table class="table datatables" width="100%" cellspacing="0">
            <thead class="thead-dark">
                <tr>
                    <th>Fecha</th>
                    <th>Descripción</th>
                    <th>Documento</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach($patient->patientDates as $item)
                <tr>
                    <td>{{ date('d/m/Y', strtotime($item->fecha_paciente)) }}</td>
                    <td>{!! $item->desc_fecha_paciente !!}</td>
                    <td>{!! $item->documento_fecha_paciente !!}</td>
                    <td><a href="/deletedate/{{$item->id}}" data-token="{{csrf_token()}}" class='btn btn-danger btn-xs'
                        data-confirm="Seguro que quieres eliminar este pia?" 
                        onclick="return confirm('¿Estas segura que quieres la fecha?')">
                            <i class="fas fa-trash"></i>
                        </a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>