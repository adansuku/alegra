<div class="row">
    <div class="col-lg-12">
        <button type="button" class="btn btn-secondary my-3 float-right" data-toggle="modal" data-target="#centro_modal">
            Añadir programa <i class="fas fa-plus"></i>
        </button>
    </div>

</div>


<div class="row">
    @foreach($patient->patientCentro as $patientCentro)
    <div class="col-sm-6 pb-4">
        <div class="card">
            <div class="card-header row m-0" id="headingOne">
                <div class="col-sm-6 p-0">

                    <h5 class="mb-1">
                        <strong>
                            
                            {{$patientCentro->prog_centro}}
                            
                        </strong>
                    </h5>


                    <strong>Sesiones: </strong> {!! $patientCentro->num_sesiones !!}
                    <br />
                    <strong>Trabajadora: </strong>
                    @foreach($workers as $worker)
                        @if( $patientCentro->worker_id == $worker->id)
                        {{$worker->nombre}} {{$worker->apellido}}
                        @endif
                    @endforeach
                    
                </div>

                <div class="col-sm-6 p-0 text-right">
                    <button type="button" class="btn btn-secondary btn-xs centro_add_day"
                        data-title='{{ $patientCentro->prog_centro }}'
                        data-id="{{ $patientCentro->id }}">
                        <i class="fas fa-plus"></i>
                    </button>
                    <a href="{!! route('patientCentro.edit', [$patientCentro->id]) !!}" class='btn btn-primary btn-xs'><i
                            class="far fa-edit"></i></a>

                    <a href="/centrodelete/{{$patientCentro->id}}" data-token="{{csrf_token()}}"
                        class='btn btn-danger btn-xs'
                        onclick="return confirm('¿Estas segura que quieres eliminar el servicio?')">
                        <i class="fas fa-trash"></i>
                    </a>
                </div>



            </div>

            @if (!empty( $patientCentro->patient_centro_dias[0] ))

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">

                    <table width="100%">
                        <tr>
                            <th>Día</th>
                            <th>Horario</th>
                            <th></th>
                        </tr>
                        @foreach($patientCentro->patient_centro_dias as $psd)
                        <tr style="height: 50px; border-bottom: 1px solid lightgrey;">
                            <td width="20%">{{ $psd->dia_centro }}</td>
                            <td width="25%">{{ $psd->horario }} min</td>
                            </td>
                            <td width="10%" style="text-align:right;">
                                <a href="{{ url('/centrodiadelete') }}/{{$psd->id}}" data-token="{{csrf_token()}}"
                                    class='btn btn-danger btn-xs'
                                    onclick="return confirm('¿Estas seguro(a) que quieres eliminar el centro?')">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </table>


                </div>
            </div>
            @endif
            
        </div>
    </div>
    @endforeach
</div>