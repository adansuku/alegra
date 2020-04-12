@foreach($patient->patientServices as $patientService)
<div class="col-lg-6">
    <!-- Default Card Example -->
    <div class="card mb-4">



        @if ($patientService->es_primario == 'es_primario')
        <div class="bg-primary">Servicios primario</div>
        @endif
        <div class="card-header bg-secondary text-dark">

            <strong>Nombre del Servicio: </strong> {!! $patientService->nom_servicio !!}
        </div>
        <div class="card-body">
            <p>
                <!-- <span id="servId">{!! $patientService->id !!}</span> -->
                <strong>Municipio:</strong> {!! $patientService->municipio_serv !!}<br>
                <strong>Tipo de plaza:</strong> {!! implode(', ', (array)$patientService->tipo_plaza_serv) !!}<br>
                <strong>Plaza Privada:</strong> {!! implode(', ', (array)$patientService->plaza_privada_serv) !!}<br>
                <strong>Plaza Subencionada:</strong> {!! $patientService->plaza_sub_serv !!}<br>
                <strong>Fecha formalización:</strong>
                {{ date('d/m/Y', strtotime($patientService->fecha_form_serv )) }}<br>
                <strong>Trabajadora social encargada del caso</strong>
                @foreach($workers as $worker)
                @if ($worker->id == $patientService->service_worker_id )
                {{$worker->nombre}} {{$worker->apellido}}
                @endif
                @endforeach<br>



            </p>

            @foreach($patientService->serviceDates as $item)
            <strong>Dia:</strong> {{$item->dia_servicio}}<br>
            <strong>Hora:</strong> {{$item->horario_servicio}}<br>
            <strong>Observaciones:</strong> {{$item->obs_servicio}}<br>
            <hr>

            <a href="{!! route('patientServicesDates.edit', [$item->id]) !!}" class='btn btn-block btn-primary btn-xs'>
                <i class="far fa-edit"></i> Editar
            </a>

            <a href="/servicedate_delete/{{$item->id}}" data-token="{{csrf_token()}}"
                class='btn btn-block btn-danger btn-xs' data-confirm="Seguro que quieres eliminar este pia?"
                onclick="return confirm('¿Estas segura que quieres eliminar el horario?')">
                <i class="fas fa-trash"></i> Eliminar
            </a>

            @endforeach
        </div>
        <div class='btn-group'>
            <a href="{!! route('patientServices.edit', [$patientService->id]) !!}" class='btn btn-primary btn-xs'><i
                    class="far fa-edit"></i> Editar</a>
        </div>
        <button type="button" class="btn btn btn-primary float-right" id="date_button" data-toggle="modal"
            data-target="#services_date_modal" data-id="{!! $patientService->id !!}" onClick="ShowModal(this)">
            <i class="fas fa-clock"></i>
            Añadir Horario
        </button>

        <a href="/servicedelete/{{$patientService->id}}" data-token="{{csrf_token()}}"
            class='btn btn-block btn-danger btn-xs' data-confirm="Seguro que quieres eliminar este pia?"
            onclick="return confirm('¿Estas segura que quieres eliminar el servicio?')">
            <i class="fas fa-trash"></i> Eliminar
        </a>


    </div>
</div>
@endforeach