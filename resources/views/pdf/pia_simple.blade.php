<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="css/app.css" rel="stylesheet">
        <style>
        </style>
    </head>
    <body>

        <table style="width:100%;">
            <tr>
                <td style="width:10%;">
                    <img src="img/acufade.png" />
                </td>
            </tr>
            <tr>
                <td style="width:100%; text-align:center;">
                    <h5>
                        PLAN INDIVIDUALIZADO DE ATENCIÓN (PIA) <br />
                        @foreach($patient->patientServices as $patientService)
                            @if($patientService->es_primario == 'es_primario')
                                <strong>{{$patientService->nom_servicio}}</strong>
                            @endif
                        @endforeach
                        
                    </h5>
                    
                </td>
                
            </tr>
            <tr>
                <td style="text-align:center;" colspan="2">
                    <h4>VALORACIÓN INICIAL</h4>
                </td>
            </tr>
        </table>

        <table style="width:100%;">
            <tr>
                <td style="width:100%; text-align:right;">
                    <b>Fecha de elaboración: {{ date('d/m/Y') }}</b>
                </td>
            </tr>
        </table>
        

        <table style="width:100%">
            <tr>
                <td style="width:100%">
                    <h6>1. DATOS PERSONALES</h6>
                    
                    <h6>Persona Usuaria</h6>
                    <hr />
                </td>
            </tr>
        </table>
        
        @if($patient->nombre!='')
        <table style="width:100%">
            <tr>
                <td style="width:100%">
                    <b>NOMBRE Y APELLIDOS:</b> {{$patient->nombre}} {{$patient->apellido}}
                </td>
            </tr>
        </table>
        @endif
        @if($patient->dni!='')
        <table style="width:100%">
            <tr>
                <td style="width:100%">
                    <b>NIF:</b>  {{$patient->dni }} 
                </td>
            </tr>
        </table>
        @endif
        
        
        <table style="width:100%">
            <tr>
                @if($fecha_nac!='')
                    <td style="width:50%">
                        <b>FECHA NACIMIENTO:</b> {{$fecha_nac }}
                    </td>
                @endif
                @if($age!='')
                    <td style="width:50%">
                        <b>EDAD:</b> {{$age }}
                    </td>
                @endif
            </tr>
        </table>
        
        
        @if($patient->direccion!='')
        <table style="width:100%">
            <tr>
                <td style="width:100%">
                    <b>DOMICILIO:</b> {{$patient->direccion }}, {{$patient->num_direcion }}, {{$patient->bloq_piso }} 
                </td>
            </tr>
        </table>
        @endif

        @if($patient->Municipio!='')
        <table style="width:100%">
            <tr>
                <td style="width:100%">
                    <b>MUNICIPIO:</b> {{$patient->Municipio }}, {{$patient->Isla }}
                </td>
            </tr>
        </table>
        @endif
        
        <table style="width:100%">
            <tr>
                @if($patient->estado_civil!='')
                    <td style="width:50%">
                        <b>ESTADO CIVIL:</b> {{$patient->estado_civil }}
                    </td>
                @endif
                @if($patient->genero!='')
                    <td style="width:50%">
                        <b>GENERO:</b> {{$patient->genero }}
                    </td>
                @endif
            </tr>
        </table>

        <table style="width:100%">
            <tr>
                @if($patient->telefono!='')
                    <td style="width:50%">
                        <b>TELÉFONO FIJO:</b> {{$patient->telefono }}
                    </td>
                @endif
                @if($patient->telefono_movil!='')
                <td style="width:50%">
                    <b>MÓVIL:</b> {{$patient->telefono_movil }}
                </td>
                @endif
            </tr>
        </table>
        @if($patient->email!='')
        <table style="width:100%">
            <tr>
                <td style="width:100%">
                    <b>EMAIL:</b> {{$patient->email }}
                </td>
            </tr>
        </table>
        @endif
        <hr />

        <table style="width:100%">
            <tr>
                <td style="width:100%">
                    <h6>PERSONAS DE REFERENCIA</h6>
                </td>
            </tr>

            @foreach($patient->patientCarers as $item)
                @if($item->nombre!='')
                <tr>
                    <td style="width:100%" colspan=2>
                        <b>NOMBRE Y APELLIDO:</b> {{$item->nombre}} {{$item->apellido}} @if($item->cuidadora_principal === 'Si') <span style="color:#FF0000"><b>(PRINCIPAL)</b></span> @endif
                    </td>
                </tr>
                @endif
                <tr>
                    @if($item->parentesco!='')
                    <td style="width:50%">
                        <b>PARENTESCO:</b> {{$item->parentesco }}
                    </td>
                    @endif
                    @if($item->genero_carer!='')
                    <td style="width:50%">
                        <b>GENERO:</b> {{$item->genero_carer }}
                    </td>
                    @endif
                </tr>
                @if($item->dni!='')
                <tr>
                    <td style="width:100%" colspan=2>
                        <b>NIF:</b> {{$item->dni}}
                    </td>
                </tr>
                @endif
                <tr>
                    @if($item->fecha_nac_care!='')
                        <td style="width:50%">
                            <b>FECHA NACIMIENTO:</b> {{$item->fecha_nac_care }}
                        </td>
                    
                    
                        <td style="width:50%">
                            @php
                                $today = date('Y');
                                $fnac = $item->fecha_nac_care;
                                if($fnac){
                                    $tmp = explode("-", $fnac);
                                    $age_carer = $today - $tmp[0];
                                    $age_carer = date('m') > $tmp[1] ? $age_carer + 1 : $age_carer;
                                }
                            @endphp
                            <b>EDAD:</b> {{$age_carer }}
                        </td>
                    @endif
                </tr>
                @if($item->direccion_cares!='')
                <tr>
                    <td style="width:100%" colspan=2>
                        <b>DOMICILIO:</b> {{$item->direccion_care }} 
                    </td>
                </tr>
                @endif
                @if($item->municipio_carer!='')
                <tr>
                    <td style="width:100%" colspan=2>
                        <b>MUNICIPIO:</b> {{$item->municipio_carer }}
                    </td>
                </tr>
                @endif
                <tr>
                    @if($item->tel_care!='')
                        <td style="width:50%">
                            <b>TELÉFONO FIJO:</b> {{$item->tel_care }}
                        </td>
                    @endif

                    @if($item->movil_care!='')
                        <td style="width:50%">
                            <b>MÓVIL:</b> {{$item->movil_care }}
                        </td>
                    @endif
                </tr>
                @if($item->email_care!='')
                <tr>
                    <td style="width:100%" colspan=2>
                        <b>EMAIL:</b> {{$item->email_care }}
                    </td>
                </tr>
                @endif
                @if($item->trabajo_care!='')
                <tr>
                    
                        <td style="width:100%" colspan=2>
                            <b>OCUPACIÓN:</b> {{implode (", ", $item->trabajo_care)}} 
                        </td>
                    
                </tr>
                @endif
                @if($item->sit_laboral!='')
                <tr>
                    
                        <td style="width:100%" colspan=2>
                            <b>TRABAJO ACTUAL:</b> {{$patient->sit_laboral }}
                        </td>
                    
                </tr>
                @endif
                @if($item->otro_serv_apoyo!='')
                <tr>
                    <td style="width:100%" colspan=2>
                        <b>SERVICIO DE APOYO:</b> {{$item->otro_serv_apoyo }}
                    </td>
                </tr>
                @endif
                <tr>
                    <td style="width:100%" colspan=2>
                        <b>OBSERVACIÓN:</b> 
                    </td>
                </tr>
                <tr>
                    <td style="width:100%" colspan=2><br /></td>
                </tr>
            @endforeach
        </table>
        <hr />
        <table style="width:100%">
            <tr>
                <td style="width:100%">
                    <h6>2. SERVICIOS Y PROGRAMAS PRESTADOS</h6>
                </td>
            </tr>
            @if($main_service->nom_servicio == 'SPAPD')
                @foreach(   $patient->patientServices as $patientService)
                    
                    <tr>
                        <td style="width:100%" colspan=2>
                            @if ($patientService->es_primario == 'es_primario')
                                <b>Servicio Principal:</b> {!! $patientService->nom_servicio !!}
                            @else
                                <b>Servicio Secundario:</b> {!! $patientService->nom_servicio !!}
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td style="width:100%" colspan=2>
                            @if($patientService->fecha_form_serv!='')
                                <b>FECHA DE FORMALIZACIÓN:</b> {{ date('d/m/Y', strtotime($patientService->fecha_form_serv )) }}
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td style="width:50%">
                            @if($patientService->tipo_plaza_serv!='')
                                <b>TIPO DE PLAZA:</b> {!! implode(', ', (array)$patientService->tipo_plaza_serv) !!}
                            @endif
                        </td>
                        <td style="width:50%">
                            @if($patientService->plaza_privada_serv!='')
                                <b>PLAZA PRIVADA:</b> {!! implode(', ', (array)$patientService->plaza_privada_serv) !!}
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td style="width:100%" colspan=2>
                            <b>Observación:</b> 
                        </td>
                    </tr>
                    
                    

                @endforeach

                <table style="width:100%">
                    <tr>
                        <td style="width:100%">
                            <h6>PROGRAMAS CONTRATADOS</h6>
                        </td>
                    </tr>
                    @foreach($patient->patientSpapd as $patientSpapd)
                        <tr>
                            <td style="width:100%" colspan=2>
                                @if ($patientSpapd->prog_spapd == "Otros")
                                    <b>{{ strtoupper($patientSpapd->otros_programa)}} </b>
                                @else
                                    <b>{{ strtoupper($patientSpapd->prog_spapd) }} </b>
                                @endif 
                            </td>
                        </tr>
                        @if($patientSpapd->num_sesiones!='')
                            <tr>
                                <td style="width:100%" colspan=2>
                                    <b>Sesiones:</b> {!! intval($patientSpapd->num_sesiones) !!}
                                </td>
                            </tr>
                        @endif
                        <tr>
                            <td style="width:100%" colspan=2>
                                <b>Observación:</b> 
                            </td>
                        </tr>
                        <tr><td style="width:100%" colspan=2><hr /></td></tr>
                    @endforeach
                </table>
            @else
                @foreach($patient->patientCentro as $patientCentro)
                    <tr>
                        <td style="width:100%" colspan=2>
                            <b>Centro:</b> {!! $patientCentro->prog_centro !!}
                        </td>
                    </tr>
                    <tr>
                        <td style="width:50%">
                            <b>Num. Sesiones:</b> {{ $patientCentro->num_sesiones }}
                        </td>
                        <td style="width:50%">
                            <b>Trabajador:</b> {{ $patientCentro->worker->nombre }} {{ $patientCentro->worker->apellido }}
                        </td>
                    </tr>
                    <tr>
                        <td style="width:100%" colspan=2>
                            <b>Observación:</b> 
                        </td>
                    </tr>
                    <hr />
                @endforeach
            @endif
        </table>
        
        
        <table style="width:100%">
            <tr>
                <td style="width:100%">
                    <h6>3. EQUIPO DE VALORACIÓN</h6>
                </td>
            </tr>
            <tr>
                <td style="width:100%">
                    <strong>Trabajador(a) social del caso</strong>
                </td>
            </tr>
            @foreach($patient->worker_id as $wid)
                @php
                    $worker = \DB::table('workers')->where('id',$wid)->get()->first();
                @endphp
                <tr>
                    @if($worker->dni!='')
                    <td style="width:50%">
                        <b>NIF: {{ $worker->dni }}</b>
                    </td>
                    @endif
                    <td style="width:50%">
                        <b>Nº COLEGIACIÓN:</b> 
                    </td>
                    
                </tr>
                @if($worker->nombre!='')
                <tr>
                    <td style="width:100%">
                        <b>NOMBRE Y APELLIDOS:</b> {{ $worker->nombre }} {{ $worker->apellido }}
                    </td>
                </tr>
                @endif

                <tr>
                    <td style="width:100%">
                        <b>CATEGORÍA PROFESIONAL:</b>
                    </td>
                </tr>
                <tr><td><hr /></td></tr>
            @endforeach
        </table>

        <table style="width:100%">
            <tr>
                <td style="width:100%">
                    <h6>4. INFORMACIÓN SANITARIA</h6>
                </td>
            </tr>
        </table>
        <table style="width:100%">
            <tr>
                <td style="width:100%">
                    <strong>COBERTURA SANITARIA</strong>
                </td>
            </tr>
            @if(isset($patient->patientHealth))
                @if($patient->patientHealth->regimen_priv!='')
                <tr>
                    <td style="width:100%">
                        <b>PRIVADA:</b> {{ $patient->patientHealth->regimen_priv }} 
                    </td>
                </tr>
                @endif
                @if($patient->patientHealth->num_afiliado!='')
                <tr>
                    <td style="width:100%">
                        <b>Nº AFILIACIÓN:</b> {{ $patient->patientHealth->num_afiliado }}
                    </td>
                </tr>
                @endif
                @if($patient->patientHealth->med_cabecera!='')
                <tr>
                    <td style="width:100%">
                        <b>MÉDICO DE CABECERA:</b> {{ $patient->patientHealth->med_cabecera }}
                    </td>
                </tr>
                @endif
                <tr>
                    @if($patient->patientHealth->centro_salud!='')
                        <td style="width:50%">
                            <b>CENTRO DE REFERENCIA:</b>{{ $patient->patientHealth->centro_salud }}
                        </td>
                    @endif
                    @if($patient->patientHealth->tel_centro_salud!='')
                        <td style="width:50%">
                            <b>TFNO. CENTRO REFERENCIA:</b>{{ $patient->patientHealth->tel_centro_salud }}
                        </td>
                    @endif
                </tr>
                <tr>
                    <td style="width:50%">
                        <b>ESPECIALISTA:</b> 
                    </td>
                    <td style="width:50%">
                        <b>CENTRO DE ESPECIALIDADES:</b>
                    </td>
                </tr>
                <tr>
                    <td style="width:100%">
                        <b>OBSERVACIONES:</b> 
                    </td>
                </tr>
            @endif
        </table>
        <hr />
        <table style="width:100%">
            <tr>
                <td style="width:100%">
                    <strong>SITUACION ACTUAL DE SALUD</strong>
                </td>
            </tr>
            <tr>
                <td style="width:100%">
                    <b>DIAGNÓSTICO/S PRINCIPAL/ES DE SITUACIÓN DE DEPENDENCIA:</b> 
                    @foreach($patient->patientDiagnostics as $item)
                        <p><b>{!! $item->diagnostico !!}</b></p>
                        <p>{!! implode(', ', (array)$item->diagnos_concreto) !!}</p>
                    @endforeach
                </td>
            </tr>
            <tr><td><hr /></td></tr>
            <tr>
                <td style="width:100%">
                    <b>ALERGIAS E INTOLERANCIAS:</b> 
                    @foreach($patient->patientAllergies as $item)
                        <p>{!! implode(', ', (array)$item->alergia) !!}</p>
                        <p><b>{!! $item->nombre_alergia !!}</b></p>
                    @endforeach
                </td>
            </tr>
            <tr><td><hr /></td></tr>
            <tr>
                <td style="width:100%">
                    <b>OTRAS PATOLOGÍAS IMPORTANTES:</b>
                    @foreach($patient->patientPatologies as $item)
                        <p>{!! implode(', ', (array)$item->patologia) !!}</p>
                        <p><b>{!! $item->nombre_pat !!}</b></p>
                    @endforeach
                </td>
            </tr>
            <tr><td><hr /></td></tr>
            <tr>
                <td style="width:100%">
                    <b>OBSERVACIONES:</b> 
                </td>
            </tr>
        </table>
        <hr />
        <table style="width:100%">
            <tr>
                <td style="width:100%">
                    <strong>ANTECEDENTES</strong>
                </td>
            </tr>
            <tr>
                <td>
                    <table style="width:100%">
                        <tr>
                            <td><b>Antecedente</b></td>
                            <td><b>Fecha</b></td>
                            <td><b>Especificaciones</b></td>
                        </tr>
                        @foreach($patient->patientPasts as $patientPast)
                            <tr>
                                <td>{!! $patientPast->antecedentes !!}</td>
                                <td>
                                    {{ date('d/m/Y', strtotime($patientPast->antecedentes_anio)) }}
                                </td>
                                <td>{!! $patientPast->antecedentes_obs !!}</td>
                            </tr>
                        @endforeach
                    </table>
                </td>
                
            </tr>
        </table>
        <hr />
        <table style="width:100%">
            <tr>
                <td style="width:100%">
                    <strong>TRATAMIENTO FARMACOLOGICO</strong>
                </td>
            </tr>
            <tr><td><hr /></td></tr>
            @if($main_service->nom_servicio != 'SPAPD' && $patient->patientCentro->count() > 0)
                <tr>
                    <td><b>MEDICACIÓN EN CENTRO:</b>@if($patient->patientHealth) {{ $patient->patientHealth->med_centro }} @endif</td>
                </tr>
            @endif
            <tr>
                <table style="width:100%">
                    <tr>
                        <td><b>Medicación</b></td>
                        <td><b>Pautas</b></td>
                        <td><b>Observación</b></td>
                    </tr>
                    @foreach($patient->patientMedications as $patientMedication)
                    <tr>
                        <td>{!! $patientMedication->medicacion !!}</td>
                        <td>{!! $patientMedication->pauta_medicacion !!}</td>
                        <td>{!! $patientMedication->obs_medicacion !!}</td>
                    </tr>
                    @endforeach
                </table>
            </tr>
        </table>
        <hr />
        <table style="width:100%">
            <tr>
                <td style="width:100%">
                    <strong>INDICADORES DE SALUD (NIVEL Y APOYO)</strong>
                </td>
            </tr>
            <tr><td><hr /></td></tr>
            @if($patient->patientHealth)
                @if($patient->patientHealth->incontinencia_opc!='')
                    <tr>
                        <td><b>INCONTINENCIA:</b> {!! implode(', ', (array)$patient->patientHealth->incontinencia_opc) !!}</td>
                    </tr>
                @endif
                @if($patient->patientHealth->caida!='')
                <tr>
                    <td><b>RIESGO DE CAÍDAS:</b>{{ $patient->patientHealth->caida }}</td>
                </tr>
                @endif

                @if($patient->patientHealth->dieta!='')
                <tr>
                    <td><b>DIETA:</b>{{ $patient->patientHealth->dieta }}</td>
                </tr>
                @endif
                @if($patient->patientHealth->higiene!='')
                <tr>
                    <td><b>HIGIENE PERSONAL:</b>{{ $patient->patientHealth->higiene }} </td>
                </tr>
                @endif
                @if($patient->patientHealth->ulcera!='')
                    <tr>
                        <td><b>ÚLCERA POR PRESIÓN:</b>{{ $patient->patientHealth->ulcera }}</td>
                    </tr>
                @endif
                @if($patient->patientHealth->deambulacion!='')
                <tr>
                    <td><b>DEAMBULACIÓN ERRANTE:</b>{{ $patient->patientHealth->deambulacion }}</td>
                </tr>
                @endif
            @endif
        </table>
        <hr />
        <table style="width:100%">
            <tr>
                <td style="width:100%">
                    <h6>5. VALORACIÓN SOCIOFAMILIAR</h6>
                </td>
            </tr>
        </table>
        <table style="width:100%">
            <tr>
                <td style="width:100%">
                    <strong>INFORMACIÓN LEY DE DEPENDENCIA</strong>
                </td>
            </tr>
            <tr><td><hr /></td></tr>
            @if($patient->patientInfo)
                @if($patient->patientInfo->situacion_dep!='')
                    <tr>
                        <td style="width:100%">
                            <b>SITUACIÓN DE DEPENDENCIA:</b> {{ $patient->patientInfo->situacion_dep }}
                        </td>
                    </tr>
                @endif
                @if($patient->patientInfo->grado_dep!='')
                <tr>
                    <td>
                        <b>GRADO DE DEPENDENCIA:</b>{{ $patient->patientInfo->grado_dep }} 
                    </td>
                </tr>
                @endif
                
                <tr>
                    @if($patient->patientInfo->ayuda_dep!='')
                        <td style="width:50%">
                            <b>TIPO DE AYUDA:</b>{{ $patient->patientInfo->ayuda_dep }}
                        </td>
                    @endif
                    @if($patient->patientInfo->cuantia!='')
                    <td style="width:50%">
                        <b>CUANTÍA RESUELTA:</b>{{ $patient->patientInfo->cuantia }} 
                    </td>
                    @endif
                </tr>
                @if($patient->patientInfo->tec_dependencia!='')
                <tr>
                    <td>
                        <b>TÉCNICA DE DEPENDENCIA:</b> {{ $patient->patientInfo->tec_dependencia }}
                    </td>
                </tr>
                @endif

                @if($patient->patientInfo->guarda_hecho!='')
                <tr>
                    <td>
                        <b>PERSONA GUARDADORA:</b> {{ $patient->patientInfo->guarda_hecho }}
                    </td>
                </tr>
                @endif
            @endif
            <tr><td><hr /></td></tr>
            <tr>
                <td>
                    <p><b>FECHAS DEPENDENCIAS:</b></p>
                </td>
                <tr>
                    <td>
                        <table style="width:100%">
                            <tr>
                                <td><b>Fecha</b></td>
                                <td><b>Descripción</b></td>
                                <td><b>Documento</b></td>
                            </tr>
                            @foreach($patient->patientDates as $item)
                            <tr>
                                <td>{{ date('d/m/Y', strtotime($item->fecha_paciente)) }}</td>
                                <td>{!! $item->desc_fecha_paciente !!}</td>
                                <td>{!! $item->documento_fecha_paciente !!}</td>
                            </tr>
                            @endforeach
                        </table>
                    </td>
                </tr>
                
                
            </tr>
            <tr>
                <td>
                    <b>OBSERVACIONES:</b>
                </td>
            </tr>
        </table>

        <table style="width:100%">
            <tr>
                <td style="width:100%">
                    <strong>OTRAS AYUDAS SANITARIAS</strong>
                </td>
            </tr>
            <tr><td><hr /></td></tr>
            @if($patient->patientInfo)
                @if($patient->patientInfo->ayuda_soc!='')      
                    <tr>
                        <td style="width:100%">
                            <b>TIPO DE AYUDAS:  {!! implode(', ', (array)$patient->patientInfo->ayuda_soc) !!}</b>
                        </td>
                    </tr>
                @endif
                @if($patient->patientInfo->ayuda_cert_discsoc!='')      
                <tr>
                    <td style="width:100%">
                        <b>CERTIFICADO DE DISCAPACIDAD: </b> {!! $patient->patientInfo->cert_disc !!}
                    </td>
                </tr>
                @endif
                <tr>
                    <td>
                        <b>OBSERVACIONES:</b>
                    </td>
                </tr>
            @endif
        </table>
        <hr />

        <table style="width:100%">
            <tr>
                <td style="width:100%">
                    <strong>INFORMACIÓN LEGAL</strong>
                </td>
            </tr>
            <tr><td><hr /></td></tr>
            @if($patient->patientInfo && $patient->patientInfo->sit_legal!='')
            <tr>
                <td style="width:100%">
                    <b>SITUACIÓN LEGAL: </b> {{ $patient->patientInfo->sit_legal }}
                </td>
            </tr>
            @endif
            <tr>
                <td>
                    <b>OBSERVACIONES:</b>
                </td>
            </tr>
        </table>

        <hr />
        <table style="width:100%;text-align:justify;">
            <tr>
                <td style="width:100%">
                    <h6>6. PLAN DE VIDA ACUFADE</h6>
                </td>
            </tr>
            <tr><td><hr /></td></tr>
            <tr>
                <td>
                <p>A continuación se especificarán los objetivos, valoraciones, plan de tratamiento (actividades y ejercicios terapeúticos) y recomendaciones de cada uno de los programas de los servicios prestados.</p>
                </td>
            </tr>
            <tr>
                <td><b>Área Cognitiva</b></td>
            </tr>
            <tr>
                <td>
                    <p><b>Objetivos</b></p>
                    <p><b>Valoración cognitiva</b></p>
                    <p><b>Plan de Tratamiento (actividades y ejercicios)</b></p>
                </td>
            </tr>
            <tr><td><hr /></td></tr>
            <tr>
                <td><b>Área Emocional</b></td>
            </tr>
            <tr>
                <td>
                    <p><b>Objetivos</b></p>
                    <p><b>Valoración emocional</b></p>
                    <p><b>Plan de Tratamiento (actividades y ejercicios)</b></p>
                    <p><b>Recomendaciones</b></p>
                </td>
            </tr>
            <tr><td><hr /></td></tr>
            <tr>
                <td><b>Área Física(Fisioterapia)</b></td>
            </tr>
            <tr>
                <td>
                    <p><b>Objetivos</b></p>
                    <p><b>Valoración física</b></p>
                    <p><b>Plan de Tratamiento (actividades y ejercicios)</b></p>
                    <p><b>Recomendaciones</b></p>
                </td>
            </tr>
            <tr><td><hr /></td></tr>
            <tr>
                <td><b>Área Funcional</b></td>
            </tr>
            <tr>
                <td>
                    <p><b>Objetivos</b></p>
                    <p><b>Valoración funcional</b></p>
                    <p><b>Plan de Tratamiento (actividades y ejercicios)</b></p>
                    <p><b>Recomendaciones</b></p>
                </td>
            </tr>
            

        </table>
        <hr />
        <table style="width:100%; text-align:justify;">
            <tr>
                <td style="width:100%">
                    <h6>7. OTRAS CONSIDERACIONES RELEVANTES</h6>
                </td>
            </tr>
            <tr>
                <td>
                    <ul>
                        <li>
                        Según regula el RD 67-2012, y su modificación RD 154-2015, esta información será revisada y actualizada cada 6 meses, siempre y cuando no existan cambios significativos antes de esa fecha.
                        </li>
                        <li>
                        Por esta razón es importante que las familias recuerden la obligatoriedad de mantener actualizada la información de salud y el tratamiento farmacológico, así como cualquier otra documentación relacionada con la adecuada prestación de nuestros servicios. 
                        </li>
                        <li>
                        Debido a la situación de pandemia generada por el COVID-19, se recuerda la importancia del cumplimiento de nuestro Plan de Prevención de Contagios por parte de usuarias, familias y cuidadoras, para disminuir riesgos. 
                        </li>
                        <li>
                        Fecha Máxima de elaboración del informe PIA de SEGUIMIENTO: *+6 meses respecto de la fecha de este documento. 
                        </li>
                    </ul>
                </td>
            </tr>
        </table>

        <table style="width:100%;text-align:justify;">
            <tr>
                <td style="width:100%" colspan="2">
                    <h6>8. CONSENTIMIENTO INFORMADO</h6>
                </td>
            </tr>
            <tr><td><hr /></td></tr>
            <tr>
                <td style="width:100%" colspan="2">
                    <p>La persona usuaria y/o personas cuidadoras están informadas y están conformes con las  valoraciones y propuestas.</p>
                </td>
            </tr>
            <tr>
                <td style="width:100%" colspan="2">
                    <p>La persona usuaria y/o personas cuidadoras están informadas y están conformes con las  valoraciones y propuestas.</p>
                </td>
            </tr>
            <tr>
                <td style="text-align:right;" colspan="2">
                    En <b>{{$patient->Municipio}}</b> de persona usuaria, a <b>{{ date('d/m/Y') }}</b>
                </td>
            </tr>
            <tr>
                <td style="width:50%;">
                    <br /><br />
                    Fdo
                    <br />
                </td>
                <td style="width:50%;">
                    <br /><br />
                    Fdo
                    <br />
                </td>
            </tr>
            <tr>
                <td style="width:50%;text-align:center;">
                    <br /><br />
                    <b>{{ $patient->nombre }} {{$patient->apellido}}</b>
                    <br />
                </td>
                <td style="width:50%;text-align:center;">
                    <br /><br />
                    <br />
                </td>
            </tr>
            <tr>
                <td style="width:50%;">
                    <br /><br />
                    Fdo
                    <br />
                </td>
                <td style="width:50%;">
                    <br /><br />
                    Fdo
                    <br />
                </td>
            </tr>
            <tr>
                <td style="width:50%;text-align:center;">
                    <br /><br />
                    <b>TS GESTORA DE CASO</b>
                    <br />
                </td>
                <td style="width:50%;text-align:center;">
                    <br /><br />
                    <b>PROFESIONAL SERVICIO 1 nº colegiado/a</b>
                    <br />
                </td>
            </tr>
            <tr>
                <td style="width:50%;">
                    <br /><br />
                    Fdo
                    <br />
                </td>
                <td style="width:50%;">
                    <br /><br />
                    Fdo
                    <br />
                </td>
            </tr>
            <tr>
                <td style="width:50%;text-align:center;">
                    <br /><br />
                    <b>PROFESIONAL SERVICIO 2 nº colegiado/a</b>
                    <br />
                </td>
                <td style="width:50%;text-align:center;">
                    <br /><br />
                    <b>PROFESIONAL SERVICIO 3 nº colegiado/a</b>
                    <br />
                </td>
            </tr>
            <tr>
                <td style="width:50%;">
                    <br /><br />
                    Fdo
                    <br />
                </td>
                <td style="width:50%;">
                    <br /><br />
                    Fdo
                    <br />
                </td>
            </tr>
            <tr>
                <td style="width:50%;text-align:center;">
                    <br /><br />
                    <b>Profesional</b>
                    <br />
                </td>
                <td style="width:50%;text-align:center;">
                    <br /><br />
                    <b>Profesional</b>
                    <br />
                </td>
            </tr>
        </table>
    </body>
</html>