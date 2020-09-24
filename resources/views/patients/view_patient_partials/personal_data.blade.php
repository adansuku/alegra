<div class="tab-pane active" id="datospersonales" role="tabpanel">
    <div class="row py-4">
        <div class="col-sm-12 col-lg-4">
            <!-- Genero Field -->
            <small>Género:</small>
            <h6><strong>{!! $patient->genero !!}</strong></h6>

            <!-- Fecha Nacimiento Field -->
            <small>Fecha Nacimiento:</small>
            <h6><strong>{{ date('d / m / Y', strtotime($patient->fecha_nacimiento )) }}</strong></h6>

            <!-- Edad -->
            <small>Edad:</small> @php $fecha = time() - strtotime($patient->fecha_nacimiento); $edad = floor($fecha /
            31556926); @endphp
            <h6><strong>{!! $edad !!} Años</strong></h6>

            <!-- Dni Field -->
            <small>Dni:</small>
            <h6><strong>{!! $patient->dni !!}</strong></h6>

            <!-- Estado Civil Field -->
            <small>Estado Civil:</small>
            <h6><strong>{!! $patient->estado_civil !!}</strong></h6>

            <!-- Direccion Field -->
            <small>Dirección (calle, avenida, plaza…):</small>
            <h6><strong>{!! $patient->direccion !!}</strong></h6>

            <!-- Número Field -->
            <small>Número:</small>
            <h6><strong>{!! $patient->num_direcion !!}</strong></h6>

            <!-- Bloque, Piso y/o puerta Field -->
            <small>Bloque, Piso y/o puerta:</small>
            <h6><strong>{!! $patient->bloq_piso !!}</strong></h6>

            <!-- Codigo Postal Field -->
            <small>C.P.:</small>
            <h6><strong>{!! $patient->codigo_postal !!}</strong></h6>

            <!-- Municipio Field -->
            <small>Municipio:</small>
            <h6><strong>{!! $patient->Municipio !!}</strong></h6>
        </div>
        <!--end column-->

        <div class="col-sm-12 col-lg-4">
            <!-- Isla Field -->
            <small>Isla:</small>
            <h6><strong>{!! $patient->Isla !!}</strong></h6>

            <!-- Observaciones Dirección Field -->
            <small>Observaciones Dirección:</small>
            <h6><strong>{!! $patient->obs_direcion !!}</strong></h6>

            <!-- Telefono Field -->
            <small>Teléfono Fijo (de su residencia):</small>
            <h6><strong>{!! $patient->telefono !!}</strong></h6>

            <!-- Telefono Movil Field -->
            <small>Telefono Movil Propio:</small>
            <h6><strong>{!! $patient->telefono_movil !!}</strong></h6>

            <!-- Convive Con Field -->
            <small>Convive Con:</small>
            <h6>
                <strong>
                    @if ($patient->convive_con != null)
                    {!! implode(', ', (array)$patient->convive_con) !!}
                    {!! $patient->otros_parentesco !!}
                    @endif
                </strong>
            </h6>

            <!-- Grado dependencia Field -->
            <small>Grado dependencia:</small>
            <h6><strong>{!! $patient->grado_dep !!}</strong></h6>


            <!-- PIA en vigor Field -->
            {{-- @foreach($patient->patientPia as $patientPia) @php $today = Carbon\Carbon::now(); @endphp @if ($today
< $patientPia->fecha_limite){ Tipo pia: {!! $patientPia->tipo_pia !!} <br> Fecha máx. Elaboración y Entrega:<br> Fecha Real Elaboración Completa:<br> Fecha Real Entrega:<br> Éxito PIA:<br> Informe PIA:<br> Documento Recepción PIA:<br> Observaciones:
<br> @endif {{ date('d/m/Y', strtotime($patientPia->fecha_real_entrega)) }} @if ($patientPia->exito_pia == "Si")
            <div style="background: green;text-align: center; color: white">
                @else
                <div style="background: red; text-align: center; color: white">
                    @endif {!! $patientPia->exito_pia !!}
                </div>

                @if($patientPia->url_pia == null ) Pia no disponible @else

                <a href="{{ asset(" storage/$patientPia->url_pia") }}" target="_blank">
                    <i class="fas fa-download"></i> Ver documento
                </a> @endif @if($patientPia->url_recepcion == null ) Pia recepción no disponible @else

                <a href="{{ asset(" storage/$patientPia->url_recepcion") }}" target="_blank">
                    <i class="fas fa-download"></i> Ver documento
                </a> @endif @if ($loop->last)
                <div class="bg-secondary p-1">Pia en vigor</div>
                @endif {!! $patientPia->obs_pia !!} @endforeach --}}

                <!-- Tutor legal -->
                @foreach($patient->patientCarers as $item)
                <small>Nombre y Apellidos Tutor/a Legal</small> @if ($item->es_tutor == "Si")

                <h6><strong> {{$item->nombre}} {{$item->apellidos }}</strong></h6>
                <small>Teléfono fijo Tutor legal</small>
                <h6><strong> {{$item->car_tel}}</strong></h6>
                <small>Teléfono Móvil Tutor legal</small>
                <h6><strong>{{$item->movil_care }}</strong></h6>
                @endif @endforeach
                </strong>
                </h6>

            </div>
            <!--end column-->

            <div class="col-sm-12 col-lg-4">

                <!-- Persona urgencias -->
                <br>
                <div class="bg-secondary p-3">
                    <h2><strong>En caso de urgencia</strong></h2>
                    @foreach($patient->patientCarers as $item) @if ($item->contactar_para != null)
                    @if(in_array("Urgencias", $item->contactar_para))

                    <small>Nombre y apellidos:</small>
                    <h6><strong> {{$item->nombre}} {{$item->apellido}}</strong></h6>

                    <small>Trabajo actual:</small>
                    <h6><strong>
                            @if ($item->trabajo_care != null)
                            {!! implode(', ', (array)$item->trabajo_care) !!}
                            @if (in_array('Otro', $item->trabajo_care))
                            {!! $item->otro_trabajo !!}
                            @endif
                            @endif
                        </strong></h6>
                    <small>Teléfono:</small>
                    <h6><strong> {{$item->tel_care}} </strong></h6>
                    <small>Teléfono Móvil:</small>
                    <h6><strong> {{$item->movil_care}} </strong></h6>
                    <small>Parentesco:</small>
                    <h6>
                        <strong>
                            @if ($item->parentesco == "Otros")
                            {!! $item->otro_paren !!}
                            @else
                            {!! $item->parentesco !!}
                            @endif
                        </strong>
                    </h6>
                    @endif @endif @endforeach

                </div>

            </div>
        </div>
    </div>