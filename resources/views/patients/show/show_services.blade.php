
    @foreach($patient->patientServices as $patientService)
    <div class="col-lg-6 pb-4">
        
        <div class="card">
            <div class="card-header row m-0" id="headingOne">
                <div class="col-sm-6 p-0">
                        <span><strong>Nombre del Servicio: </strong></span> 
                        <h5 class="mb-1">
                            <strong>{!! $patientService->nom_servicio !!}</strong>
                        </h5> 
                </div>
                
                <div class="col-sm-6 p-0 text-right">
                    <button type="button" class="btn btn-secondary" id="date_button" data-toggle="modal"
                    data-target="#services_date_modal" data-id="{!! $patientService->id !!}" onClick="ShowModal(this)">
                        <i class="fas fa-clock"></i>+
                    </button>
                    
                    <a href="{!! route('patientServices.edit', [$patientService->id]) !!}" class='btn btn-primary'><i class="far fa-edit"></i> </a>                    

                    <a href="/servicedelete/{{$patientService->id}}" data-token="{{csrf_token()}}"
                        class='btn  btn-danger btn-xs' data-confirm="Seguro que quieres eliminar este pia?"
                        onclick="return confirm('¿Estas segura que quieres eliminar el servicio?')">
                        <i class="fas fa-trash"></i> 
                    </a>
                </div>
            </div>
    
            
    
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body row">
                    <div class="col-sm-12">
                        <!-- <span id="servId">{!! $patientService->id !!}</span> -->
                        <strong>Municipio:</strong> {!! $patientService->municipio_serv !!}<br>
                        <strong>Tipo de plaza:</strong> {!! implode(', ', (array)$patientService->tipo_plaza_serv) !!}<br>
                        
                        @if($patientService->plaza_privada_serv)
                        <strong>Plaza Privada:</strong> {!! implode(', ', (array)$patientService->plaza_privada_serv) !!}<br>
                        @endif

                        @if($patientService->plaza_sub_serv)
                        <strong>Plaza Subencionada:</strong> {!! $patientService->plaza_sub_serv !!}<br>
                        @endif

                        @if($patientService->fecha_form_serv)
                        <strong>Fecha formalización:</strong>
                        {{ date('d/m/Y', strtotime($patientService->fecha_form_serv )) }}<br>
                        <strong>Trabajadora social encargada del caso:</strong><br>
                        @endif

                        @foreach($workers as $worker)
                            @if ($worker->id == $patientService->service_worker_id )
                            {{$worker->nombre}} {{$worker->apellido}}
                            @endif
                        @endforeach
                        <hr>
                    </div>

                  
                        
                    <div class="col-sm-12">
                        <h4><strong>Horarios:</strong></h4>
                    </div>
                    @foreach($patientService->serviceDates as $item)
                    <div class="col-sm-6">
                        <strong>Dia:</strong> {{$item->dia_servicio}}<br>
                        <strong>Hora:</strong> {{$item->horario_servicio}}<br>
                        <strong>Observaciones:</strong> {{$item->obs_servicio}}<br>
                    </div>

                    <div class="col-sm-6 text-right">
                        <a href="{!! route('patientServicesDates.edit', [$item->id]) !!}" class='btn btn-primary btn-xs'>
                            <i class="far fa-edit"></i> 
                        </a>
            
                        <a href="/servicedate_delete/{{$item->id}}" data-token="{{csrf_token()}}"
                            class='btn btn-danger btn-xs' data-confirm="Seguro que quieres eliminar este pia?"
                            onclick="return confirm('¿Estas segura que quieres eliminar el horario?')">
                            <i class="fas fa-trash"></i> 
                        </a>
                    </div>
                        
                    <div class="col-sm-12"><hr></div>
                    @endforeach

                    @if ($patientService->es_primario == 'es_primario')
                    <div class="col-sm-12" width="100%"><span class="bg-secondary p-2 pull-right">Servicio primario</span></div>
                    @endif

                </div>
            </div>
      </div>
    </div>
    @endforeach