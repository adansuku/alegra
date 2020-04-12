<!--end buttons-->
<div class="row">
    <div class="col-sm-4">
        <div class="avatar" style="background-image:url({{asset("storage/$patient->foto_paciente") }})"></div>
    </div>
    <div class="col-sm-8">

        <!-- Nombre Field -->
        <small>Nombre:</small>
        <h6><strong>{!! $patient->nombre !!}</strong></h6>

        <!-- Apellido Field -->
        <small>Apellidos:</small>
        <h6><strong>{!! $patient->apellido !!}</strong></h6>

        <!-- Fecha Alta Paciente Field -->
        <small>Fecha Alta:</small>
        <h6><strong>{{ date('d / m / Y', strtotime($patient->fecha_alta_paciente)) }}</strong></h6>

        <!-- Numero Expediente Field -->
        <small>Numero Expediente:</small>
        <h6><strong>{!! $patient->numero_expediente !!}</strong></h6>

        <!-- Alias Field -->
        <small>Alias:</small>
        <h6><strong>{!! $patient->alias !!}</strong></h6>

        <small>Trabajadora social GESTORA CASO:</small>
        <h6><strong>{{$worker->nombre}} {{$worker->apellido}}</strong></h6>



        <table class="table dark" width="100%" cellspacing="0">
            <thead class="thead-dark">
                <tr>
                    <th>Pia en Vigor</th>
                    <th>Fecha máx. Elaboración y Entrega</th>
                </tr>
            </thead>




            @foreach($patient->patientPia->slice(0, 2) as $patientPia)
            <tr>
                <td>
                    {!! $patientPia->tipo_pia !!}
                </td>

                <td>
                    {{ date('d/m/Y', strtotime($patientPia->fecha_limite)) }}
                </td>
            </tr>
            @endforeach

        </table>



    </div>
</div>


<!--avatar-->

<ul class="nav nav-tabs tabs-marker tabs-dark bg-primary my-4" id="myTab" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#datospersonales" role="tab">Datos Personales</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#cuidador" role="tab">Personas de referencia</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#pias" role="tab">PIAS</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#demanda" role="tab">Demanda en vigor</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#otros_datos" role="tab">Otros datos relevantes</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#info_social" role="tab">Información social</a>
    </li>

    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#info_sanitaria" role="tab">Información Sanitaria</a>
    </li>

    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#documentacion" role="tab">Documentación</a>
    </li>

    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#historia" role="tab">Historial</a>
    </li>


</ul><!-- Tab panes -->


<div class="tab-content">

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
                <small>Edad:</small>
                @php
                $fecha = time() - strtotime($patient->fecha_nacimiento);
                $edad = floor($fecha / 31556926);
                @endphp
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

                <!-- Trabajadora social Field -->
                <small>Trabajadora social GESTORA CASO:</small>
                <h6><strong>
                        {{$worker->nombre}} {{$worker->apellido}}
                    </strong></h6>

                <!-- PIA en vigor Field -->

                @foreach($patient->patientPia as $patientPia)

                @php
                $today = Carbon\Carbon::now();
                @endphp
                @if ($today < $patientPia->fecha_limite){
                    Tipo pia: {!! $patientPia->tipo_pia !!} <br>
                    Fecha máx. Elaboración y Entrega:<br>
                    Fecha Real Elaboración Completa:<br>
                    Fecha Real Entrega:<br>
                    Éxito PIA:<br>
                    Informe PIA:<br>
                    Documento Recepción PIA:<br>
                    Observaciones:<br>
                    @endif








                    {{ date('d/m/Y', strtotime($patientPia->fecha_real_entrega)) }}

                    @if ($patientPia->exito_pia == "Si")
                    <div style="background: green;text-align: center; color: white">
                        @else
                        <div style="background: red; text-align: center; color: white">
                            @endif
                            {!! $patientPia->exito_pia !!}
                        </div>

                        @if($patientPia->url_pia == null )
                        Pia no disponible
                        @else

                        <a href="{{ asset("storage/$patientPia->url_pia") }}" target="_blank">
                            <i class="fas fa-download"></i> Ver documento
                        </a>
                        @endif

                        @if($patientPia->url_recepcion == null )
                        Pia recepción no disponible
                        @else

                        <a href="{{ asset("storage/$patientPia->url_recepcion") }}" target="_blank">
                            <i class="fas fa-download"></i> Ver documento
                        </a>
                        @endif


                        @if ($loop->last)
                        <div class="bg-secondary p-1">Pia en vigor</div>
                        @endif
                        {!! $patientPia->obs_pia !!}

                        @endforeach





                        <!-- Tutor legal -->

                        @foreach($patient->patientCarers as $item)
                        <small>Nombre y Apellidos Tutor/a Legal</small>
                        @if ($item->es_tutor == "Si")

                        <h6><strong> {{$item->nombre}} {{$item->apellidos }}</strong></h6>
                        <small>Teléfono fijo Tutor legal</small>
                        <h6><strong> {{$item->car_tel}}</strong></h6>
                        <small>Teléfono Móvil Tutor legal</small>
                        <h6><strong>{{$item->movil_care }}</strong></h6>
                        @endif
                        @endforeach
                        </strong></h6>

                    </div>
                    <!--end column-->

                    <div class="col-sm-12 col-lg-4">

                        <!-- Persona urgencias -->
                        <br>
                        <div class="bg-secondary p-3">
                            <h2><strong>En caso de urgencia</strong></h2>
                            @foreach($patient->patientCarers as $item)
                            @if ($item->contactar_para != null)
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
                            @endif
                            @endif
                            @endforeach

                        </div>


                    </div>
                    <!--end column-->
            </div>
        </div>
        <!--end tab 1-->

        <div class="tab-pane" id="info_sanitaria" role="tabpanel">
            <div class="row py-4">
                <div class="col-lg-6">
                    <h5><strong>Diagnósticos principales</strong></h5>
                    <hr>
                    @include('patients.show.show_diagnostic')

                </div><!-- end diagnosticos-->

                <div class="col-lg-6">
                    <h5><strong>Otras Patología/s Importantes</strong></h5>
                    <hr>
                    @include('patients.show.show_patology')

                </div><!-- end patologia-->

                <div class="col-sm-6">
                    <h5><strong>Alergia e Intolerancia </strong></h5>
                    <hr>
                    @include('patients.show.show_allergy')

                </div><!-- end diagnosticos-->

                <div class="col-sm-6">
                    <h5><strong>Médico</strong></h5>
                    <hr>
                    @include('patients.show.show_doctor')

                </div><!-- end diagnosticos-->

            </div><!-- end patologia-->


            <div class="row py-4">

                <div class="col-lg-12">
                    <h5><strong>Antecedentes Salud Importantes</strong></h5>
                    <table class="table datatables" width="100%" cellspacing="0">
                        <thead class="thead-light">
                            <tr>
                                <th>Tipo Pia</th>
                                <th>Fecha máx. Elaboración y Entrega</th>
                                <th>Fecha Real Elaboración Completa</th>
                                <th>Fecha Real Entrega</th>
                                <th>Éxito PIA</th>
                                <th>Informe PIA</th>
                                <th>Documento Recepción PIA</th>
                                <th>Observaciones</th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach($patient->patientPia as $patientPia)

                            <td>
                                {!! $patientPia->tipo_pia !!}

                            </td>

                            @php
                            $fecha_limite = strtotime($patientPia->fecha_limite);
                            $newformat = date('d/m/Y',$fecha_limite);
                            echo ' <td data-sort="'. $fecha_limite .'">'.$newformat .'</td>';
                            @endphp

                            <td>
                                @if($patientPia->fecha_real != null )
                                {{ date('d/m/yy', strtotime($patientPia->fecha_real)) }}
                                @endif
                            </td>

                            <td>

                                @if($patientPia->fecha_real != null )
                                {{ date('d/m/yy', strtotime($patientPia->fecha_real_entrega)) }}
                                @endif
                            </td>


                            <td>
                                @if ($patientPia->fecha_real != null)
                                @if ($patientPia->fecha_limite > $patientPia->fecha_real)
                                <div style="background: green;text-align: center; color: white">Éxito</div>
                                @else
                                <div style="background: red; text-align: center; color: white">Fracaso</div>
                                @endif
                                @endif
                            </td>

                            <td>
                                @if($patientPia->url_pia == null )
                                Pia no disponible
                                @else

                                <a href="{{ asset("storage/$patientPia->url_pia") }}" target="_blank">
                                    <i class="fas fa-download"></i> Ver documento
                                </a>
                                @endif
                            </td>


                            <td>
                                @if($patientPia->url_recepcion == null )
                                Pia recepción no disponible
                                @else

                                <a href="{{ asset("storage/$patientPia->url_recepcion") }}" target="_blank">
                                    <i class="fas fa-download"></i> Ver documento
                                </a>
                                @endif
                            </td>


                            <td>

                                @php
                                $today = Carbon\Carbon::now();
                                if ($today < $patientPia->fecha_limite){
                                    echo '<div class="bg-secondary p-1">Pia en vigor</div>';
                                    }
                                    @endphp

                                    {!! $patientPia->obs_pia !!}
                            </td>


                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!--end col-->

                <div class="col-lg-12">
                    <hr>
                </div>


                <div class="col-lg-6 pt-3">
                    <h5><strong>Cobertura Sanitaria</strong></h5>
                    <hr>

                    <small>Régimen Asistencia Sanitaria:</small>
                    <h6><strong>{!! $patient->patientHealth->reg_sanitario !!}</strong></h6>

                    <small>Nª Afiliación:</small>
                    <h6><strong>{!! $patient->patientHealth->num_afiliado !!}</strong></h6>

                    <small>Nombre y Apellidos Médico/a Cabecera:</small>
                    <h6><strong>{!! $patient->patientHealth->med_cabecera !!}</strong></h6>

                    <small>Centro Referencia:</small>
                    <h6><strong>{!! $patient->patientHealth->centro_salud !!}</strong></h6>

                    <small>Teléfono Centro Referencia:</small>
                    <h6><strong>{!! $patient->patientHealth->tel_centro_salud !!}</strong></h6>
                </div>




                <div class="col-sm-12 col-lg-6 pt-3">
                    <h5><strong>Indicadores de salud</strong></h5>
                    <hr>
                    <small>Incontinencia:</small>
                    <h6><strong>{!! $patient->patientHealth->incontinencia !!}</strong></h6>

                    <small>Riesgo de Caida:</small>
                    <h6><strong>{!! $patient->patientHealth->caida !!}</strong></h6>

                    <small>Higiene:</small>
                    <h6><strong>{!! $patient->patientHealth->higiene !!}</strong></h6>

                    <small>Ulcera por presión:</small>
                    <h6><strong>{!! $patient->patientHealth->ulcera !!}</strong></h6>

                    <small>Deambulacion:</small>
                    <h6><strong>{!! $patient->patientHealth->deambulacion !!}</strong></h6>

                    <small>Hidratación:</small>
                    <h6><strong>{!! $patient->patientHealth->hidratacion !!}</strong></h6>

                    <small>Tiop de Dieta:</small>
                    <h6><strong>{!! $patient->patientHealth->dieta !!}</strong></h6>

                    <small>Tipo de Dieta:</small>
                    <h6><strong>{!! $patient->patientHealth->dieta_textura !!}</strong></h6>

                    <small>Observaciones dieta:</small>
                    <h6><strong>{!! $patient->patientHealth->dieta_observ !!}</strong></h6>
                </div>





                <div class="col-sm-12 col-lg-6 pt-3">
                    <h5><strong>Medicación</strong></h5>
                    <hr>
                    @if ($patient->patientHealth->med_centro == "Si")
                    <table class="table datatables dark pt-3" width="100%" cellspacing="0">
                        <thead class="thead-dark">
                            <tr>
                                <th>Medicación</th>
                                <th>Pauta Medicacion</th>
                                <th>Observaciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($patient->patientMedications as $patientMedication)
                            <tr>
                                <td>{!! $patientMedication->medicacion !!}</td>
                                <td>{!! $patientMedication->pauta_medicacion !!}</td>
                                <td>{!! $patientMedication->obs_medicacion !!}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                    <small>Medicación en Centro:</small>
                    <h6><strong>{!! $patient->patientHealth->med_centro !!}</strong></h6>
                </div>
                <!--end col-->

                <div class="col-sm-12 col-lg-6 pt-3">
                    <h5><strong>Especialistas</strong></h5>
                    <hr>
                    <table class="table datatables" width="100%" cellspacing="0">
                        <thead class="thead-dark">
                            <tr>
                                <th>Nombre Doctor</th>
                                <th>Centro de referencia</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($patient->patientDoctors as $item)
                            <tr>
                                <td>{!! $item->nombre_doctor !!}</td>
                                <td>{!! $item->observaciones_doctor !!}</td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>




            </div>
            <!--end row-->


        </div>
        <!--end tab 3-->

        <div class="tab-pane" id="info_social" role="tabpanel">

            <div class="row py-4">

                <div class="col-sm-12 col-lg-6">
                    <h5><strong>VALORACIÓN SOCIAL</strong></h5>
                    <hr>

                    <small>Miembros en la unidad familiar:</small>
                    <h6><strong>{!! $patient->patientInfo->miem_familia !!}</strong></h6>


                    <small>Hijos:</small>
                    <h6><strong>{!! $patient->patientInfo->hijos !!}</strong></h6>

                    <small>Vivienda:</small>
                    <h6><strong>{!! $patient->patientInfo->vivienda !!}</strong></h6>

                    @if ($patient->patientInfo->vivienda == "Otros (especificar)")
                    <small>Vivienda otros:</small>
                    <h6><strong>{!! $patient->patientInfo->vivienda_otros !!}</strong></h6>
                    @endif

                    <small>Ingresos mensuales:</small>
                    <h6><strong>{!! $patient->patientInfo->ingresos_m !!}</strong></h6>

                    <small>Nivel educativo:</small>
                    <h6><strong>{!! $patient->patientInfo->nivel_educativo !!}</strong></h6>

                    <small>Estudios terminados:</small>
                    <h6><strong>{!! $patient->patientInfo->ingresos_m !!}</strong></h6>

                    <small>Ocupación anterior:</small>
                    <h6><strong>{!! $patient->patientInfo->ocupacion !!}</strong></h6>

                    <small>Intereses actuales:</small>
                    <h6><strong>{!! $patient->patientInfo->intereses !!}</strong></h6>

                    <small>Lee y Escribe ahora:</small>
                    <h6><strong>{!! $patient->patientInfo->lee_escribe !!}</strong></h6>

                </div>
                <!--end col-->


                <div class="col-sm-12 col-lg-6">
                    <h5><strong>INFORMACIÓN LEY DEPENDENCIA</strong></h5>
                    <hr>

                    <small>Situación dependencia:</small>
                    <h6><strong>{!! $patient->patientInfo->situacion_dep !!}</strong></h6>

                    <small>Gradon dependencia:</small>
                    <h6><strong>{!! $patient->patientInfo->grado_dep !!}</strong></h6>

                    <small>Revisión de Grado:</small>
                    <h6><strong>{!! $patient->patientInfo->grado_dep !!}</strong></h6>

                    <small>Tipo de ayuda:</small>
                    <h6><strong>{!! $patient->patientInfo->ayuda_dep !!}</strong></h6>


                    <small>Nivel de dependencia:</small>
                    <h6><strong>{!! $patient->patientInfo->nivel_dep !!}</strong></h6>


                    <small>Ayuda dependencia:</small>
                    <h6><strong>{!! $patient->patientInfo->ayuda_dep !!}</strong></h6>

                    <small>Cuantía Resolución PIA:</small>
                    <h6><strong>{!! $patient->patientInfo->cuantia !!}</strong></h6>

                    <small>Técnico dependencia:</small>
                    <h6><strong>{!! $patient->patientInfo->tec_dependencia !!}</strong></h6>

                    <small>Guardadora de hecho:</small>
                    <h6><strong>{!! $patient->patientInfo->guarda_hecho !!}</strong></h6>

                </div>
                <!--end col-->
            </div>
            <!--end row-->


            <!--fechas-->
            <div class="row py-4">
                <div class="col-lg-6">
                    <h5><strong>FECHAS LEY DEPENDENCIA</strong></h5>
                    <hr>
                    <table class="table datatables" width="100%" cellspacing="0">
                        <thead class="thead-dark">
                            <tr>
                                <th>Fecha Paciente</th>
                                <th>Descripción de la fecha añadida</th>
                                <th>Documento</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($patient->patientDates as $item)
                            <tr>
                                <td>{{ date('d/m/Y', strtotime($item->fecha_paciente)) }}</td>
                                <td>{!! $item->desc_fecha_paciente !!}</td>
                                <td>{!! $item->documento_fecha_paciente !!}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!--end col-->

                <div class="col-lg-6">
                    <h5><strong>OTRAS AYUDAS SOCIOSANITARIAS</strong></h5>
                    <hr>

                    <small>Tipo Ayudas:</small>
                    <h6><strong>{!! $patient->patientInfo->ayuda_soc !!}</strong></h6>

                    <small>Certificado Discapacidad:</small>
                    <h6><strong>{!! $patient->patientInfo->cert_disc !!}</strong></h6>

                    <small>Tipo Discapacidad:</small>
                    <h6><strong>{!! $patient->patientInfo->tipo_disc !!}</strong></h6>

                    <small>Porcentaje Discapacidad:</small>
                    <h6><strong>{!! $patient->patientInfo->grado_disc !!}</strong></h6>

                    <small>Fecha Resolución Grado Discapacidad:</small>
                    <h6><strong>{!! $patient->patientInfo->fecha_res_disc !!}</strong></h6>


                </div>
                <!--end col-->

                <div class="col-lg-6">
                    <h5><strong>INFORMACIÓN LEGAL</strong></h5>
                    <hr>

                    <small>Situación Legal:</small>
                    <h6><strong>{!! $patient->patientInfo->sit_legal !!}</strong></h6>




                </div>
                <!--end col-->


            </div>
            <!--end row-->





        </div>


        <div class="tab-pane" id="otros_datos" role="tabpanel">
            <div class="row py-4">


                <div class="col-sm-12 col-lg-4">

                    <!-- cesion_imagen -->
                    <small>Cesión de imagen:</small>
                    <h6><strong>{!! $patient->patientOther->cesion_imagen !!}</strong></h6>

                    <!-- Med Centro Field -->
                    <small>Medicación en Centro:</small>
                    <h6><strong>{!! $patient->patientHealth->med_centro !!}</strong></h6>

                    <!-- salir_centro -->
                    <small>Autorización Entrar y Salir Centro:</small>
                    <h6><strong>{!! $patient->patientOther->salir_centro !!}</strong></h6>

                </div>

                <div class="col-sm-12 col-lg-4">
                    <!-- salida_externa -->
                    <small>Autorización Salida Externa::</small>
                    <h6><strong>{!! $patient->patientOther->salida_externa !!}</strong></h6>

                    <!-- Guarda Hecho Field -->
                    <small>Socio:</small>
                    <h6><strong>{!! $patient->patientOther->socio !!}</strong></h6>


                    <!-- Riesgo Caidas Field -->
                    <small>Riesgo de Caidas:</small>
                    <h6><strong>{{ $patient->patientOther->riesgo_caidas }}</strong></h6>
                </div>

                <div class="col-sm-12 col-lg-4">



                    <!-- Salida Externa Field -->
                    <small>Salida Externa:</small>
                    <h6><strong>{{ $patient->patientOther->salida_externa }}</strong></h6>

                    <!-- Socio Field -->
                    <small>Socio:</small>
                    <h6><strong>{{ $patient->patientOther->socio }}</strong></h6>

                    <!-- No Socio Field -->
                    <small>Número de Socio:</small>
                    <h6><strong>{{ $patient->patientOther->no_socio }}</strong></h6>



                </div>

            </div>
            <!--end row-->
        </div>
        <!--end tab 8-->



        <div class="tab-pane" id="cuidador" role="tabpanel">
            <div class="row py-4">

                <div class="col-sm-12">
                    @include('patients.show.show_carer_view')
                </div>

            </div>
            <!--end row-->
        </div>
        <!--end tab 8-->


        <div class="tab-pane" id="pias" role="tabpanel">
            <div class="row py-4">

                <div class="col-sm-12 ">


                    <table class="table datatables" width="100%" cellspacing="0">
                        <thead class="thead-dark">
                            <tr>
                                <th>Tipo Pia</th>
                                <th>Fecha máx. Elaboración y Entrega</th>
                                <th>Fecha Real Elaboración Completa</th>
                                <th>Fecha Real Entrega</th>
                                <th>Éxito PIA</th>
                                <th>Adjunto Informe PIA</th>
                                <th>Adjunto Documento Recepción PIA</th>
                                <th>Observaciones</th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach($patient->patientPia as $patientPia)

                            <td>
                                {!! $patientPia->tipo_pia !!}

                            </td>

                            <td>
                                {{ date('d/m/Y', strtotime($patientPia->fecha_limite)) }}
                            </td>


                            <td>
                                @if($patientPia->fecha_real != null )
                                {{ date('d/m/Y', strtotime($patientPia->fecha_real)) }}
                                @endif
                            </td>



                            <td>
                                {{ date('d/m/Y', strtotime($patientPia->fecha_real_entrega)) }}
                            </td>

                            <td>
                                @if ($patientPia->exito_pia == "Si")
                                <div style="background: green;text-align: center; color: white">
                                    @else
                                    <div style="background: red; text-align: center; color: white">
                                        @endif
                                        {!! $patientPia->exito_pia !!}
                                    </div>

                            </td>

                            <td>
                                @if($patientPia->url_pia == null )
                                Pia no disponible
                                @else

                                <a href="{{ asset("storage/$patientPia->url_pia") }}" target="_blank">
                                    <i class="fas fa-download"></i> Ver documento
                                </a>
                                @endif
                            </td>


                            <td>
                                @if($patientPia->url_recepcion == null )
                                Pia recepción no disponible
                                @else

                                <a href="{{ asset("storage/$patientPia->url_recepcion") }}" target="_blank">
                                    <i class="fas fa-download"></i> Ver documento
                                </a>
                                @endif
                            </td>





                            <td>
                                @if ($loop->last)
                                <div class="bg-secondary p-1">Pia en vigor</div>
                                @endif
                                {!! $patientPia->obs_pia !!}
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>

            </div>
            <!--end row-->
        </div>
        <!--end tab 9-->


        <div class="tab-pane" id="demanda" role="tabpanel">
            <!-- Tipos de servicio -->
            <div class="row py-4">
                <div class="col-lg-12">
                    <h5><strong>Tipos servicio</strong></h5>
                    <hr>
                </div>
                @foreach($patient->patientServices as $patientService)
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-header bg-secondary text-dark">
                            <strong>Nombre del Servicio: </strong> {!! $patientService->nom_servicio !!}
                        </div>
                        <div class="card-body">
                            <p>
                                <strong>Municipio:</strong> {!! $patientService->municipio_serv !!}<br>
                                {{-- <strong>Tipo de plaza:</strong> {!! implode(', ', (array)$patientService->tipo_plaza_serv) !!}<br> --}}
                                {{-- <strong>Plaza Privada:</strong> {!! $patientService->plaza_privada_serv !!}<br> --}}
                                <strong>Plaza Subencionada:</strong> {!! $patientService->plaza_sub_serv !!}<br>
                                <strong>Fecha formalización:</strong>
                                {{ date('d/m/Y', strtotime($patientService->fecha_form_serv )) }}

                            </p>

                            @foreach($patientService->serviceDates as $item)
                            <strong>Dia:</strong> {{$item->dia_servicio}}<br>
                            <strong>Hora:</strong> {{$item->horario_servicio}}<br>
                            <strong>Observaciones:</strong> {{$item->obs_servicio}}<br>
                            <hr>

                            @endforeach
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!--end col-->



            @php
            $spapd = 'SPAPD';
            $array = array();
            @endphp

            @foreach($patient->patientServices as $patientService)
            @php
            $array = array($patientService->nom_servicio);
            @endphp
            @endforeach

            @if(in_array($spapd, $array))

            <!-- SPAPD -->
            <div class="row py-4">
                <div class="col-lg-12">
                    <h5><strong>Especificaciones SPAPD</strong></h5>
                    <hr>
                </div>

                <div class="col-lg-12">
                    <table class="table datatables" width="100%" cellspacing="0">
                        <thead class="thead-light">
                            <tr>
                                <th>Programa</th>
                                <th>Numero de sesiones Totales en el programa</th>
                                <th>Duración de la sesión</th>
                                <th>Días</th>
                                <th>Inicio</th>
                                <th>Trabajador asignado</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($patient->patientSpapd as $patientSpapd)
                            <tr>
                                <td>
                                    @if ($patientSpapd->prog_spapd == "Otros")
                                    {{$patientSpapd->otros_programa}}
                                    @else
                                    {{$patientSpapd->prog_spapd}}
                                    @endif
                                </td>

                                <td>{!! $patientSpapd->num_sesiones !!}</td>

                                <td>
                                    @if ($patientSpapd->dur_spapd == "Otros")
                                    {{$patientSpapd->otras_sesiones}}
                                    @else
                                    {{$patientSpapd->dur_spapd}}
                                    @endif

                                </td>

                                <td>
                                    @foreach($patientSpapd->dia_spapd as $item)
                                    <span class="bg-dark py-1 px-2 text-white">{{$item}}</span>
                                    @endforeach
                                </td>

                                <td>{!! $patientSpapd->fecha_inicio !!}</td>
                                <td>{!! $patientSpapd->worker_id !!}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
            <!--end col-->
            @endif



            <!--transporte-->
            @if ($patient->patientOther->transporte == "Si")
            <div class="row py-4">
                <div class="col-lg-12">
                    <h5><strong>Transporte</strong></h5>
                    <hr>
                </div>
                <div class="col-lg-12">
                    <small>Domicilio de recogida:</small>
                    <h6><strong>{!! $patient->patientOther->dire_transporte !!}</strong></h6>
                </div>

                <div class="col-lg-12 pt-4">
                    <table class="table datatables" width="100%" cellspacing="0">
                        <thead class="thead-dark">
                            <tr>
                                <th>Dias</th>
                                <th>Domicilio</th>
                                <th>Trayecto</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($patient->patientTransport as $patientTransport)
                            <tr>
                                <td>{!! $patientTransport->dia_trans !!}</td>
                                <td>{!! $patientTransport->tray_trans !!}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!--end col-->
            @endif



            <!--Datos economicos-->
            <div class="row py-4">
                <div class="col-lg-12">
                    <h5><strong>Datos económicos</strong></h5>
                </div>
                <hr>

                <div class="col-sm-12 col-lg-4">
                    <small>Importe mensual servicio:</small>
                    <h6 id="num1"><strong><span id="num1">{!! $patient->patientOther->importe_serv !!}</span></strong>
                    </h6>

                    <small>Importe mensual transporte:</small>
                    <h6><strong><span id="num2">{!! $patient->patientOther->importe_trans !!}</span></strong></h6>

                    <div class="my-3 h5">Importe total a facturar:</div>
                    <span class="h3" id="spTotal"></span> €

                </div>
                <!--end col-->


                <div class="col-sm-12 col-lg-4">
                    <small>Forma de pago:</small>
                    <h6 id="num1"><strong><span id="num2">{!! $patient->patientOther->forma_pago !!}</span></strong>
                    </h6>

                    <small>Cuota de socio:</small>
                    <h6 id="num1"><strong><span id="num2">{!! $patient->patientOther->cuota_socio !!}</span></strong>
                    </h6>


                </div>
                <!--end col-->


                <div class="col-sm-12 col-lg-4">
                    <small>Forma pago Cuota Socio/a:</small>
                    <h6 id="num1"><strong><span id="num2">{!! $patient->patientOther->pago_socio !!}</span></strong>
                    </h6>

                    <small>Periodicidad:</small>
                    <h6 id="num1"><strong><span id="num2">{!! $patient->patientOther->periodicidad !!}</span></strong>
                    </h6>

                </div>
                <!--end col-->

            </div>
            <!--end row-->
        </div>
        <!--end tab 6-->


        <div class="tab-pane" id="historia" role="tabpanel">
            <div class="row py-4">
                <div class="col-lg-12">
                    <table class="table datatables" width="100%" cellspacing="0">
                        <thead class="thead-dark">
                            <tr>
                                <th>Fecha Registro</th>
                                <th>Fecha realizacion</th>
                                <th>Tipo Acción/Tarea</th>
                                <th>Subtipo Acción/Tarea</th>
                                <th>Profesional Responsable</th>
                                <th>Descripción</th>
                                <th>Observaciones</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($patient->patientHistory as $item)
                            <tr>
                                <td>{{ date('d / m / Y', strtotime($item->acc_fecha_reg )) }}</td>
                                <td>{{ date('d / m / Y', strtotime($item->acc_fecha_realiz )) }}</td>
                                <td>{!! $item->acc_tipo_accion !!}</td>
                                <td>{!! $item->acc_subtipo_accion !!}</td>
                                <td>{!! $item->acc_woker_accion !!}</td>
                                <td>{!! $item->acc_descrip !!}</td>
                                <td>{!! $item->acc_observaciones !!}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div><!-- end history-->
        </div>
        <!--end tab 6-->


        <div class="tab-pane" id="documentacion" role="tabpanel">
            <div class="row py-4">
                <div class="col-lg-12">
                    <table class="table datatables" width="100%" cellspacing="0">
                        <thead class="thead-dark">
                            <tr>
                                <th>Categoría</th>
                                <th>Nombre</th>
                                <th>Ver / Descargar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($patient->patientDocuments as $item)
                            <tr>
                                <td>{!! $item->cat_documentos !!}</td>
                                <td>{!! $item->nombre_doc !!}</td>

                                <td>
                                    <a class="btn btn-block btn-secondary btn-xs"
                                        href="{{ asset("storage/$item->url") }}" target="_blank"><i
                                            class="fas fa-download"></i> Ver / Descargar</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div><!-- end documents-->

            <!--end row-->
        </div>
        <!--end tab 6-->





        {!! Form::open(['route' => ['patients.destroy', $patient->id], 'method' => 'delete']) !!}
        <div class='btn-group float-right'>
            <a href="{!! route('patients.edit', [$patient->id]) !!}" class='btn btn-primary btn-xs'>
                <i class="far fa-edit"></i> Editar
            </a>
            {!! Form::button('<i class="far fa-trash-alt"></i> Eliminar', ['type' => 'submit', 'class' => 'btn
            btn-danger
            btn-xs', 'onclick' => "return confirm('Vamos a proceder a eliminar un elemento. ¿Estas seguro/a?')"]) !!}
        </div>
        {!! Form::close() !!}
    </div>
    <!--end content tab-->