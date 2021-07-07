<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="css/app.css" rel="stylesheet">
    </head>
    <body>

        <table style="width:100%;">
            <tr>
                <td style="width:80%; text-align:center;">
                    <h4>PLAN INDIVIDUALIZADO DE ATENCIÓN (PIA)</h4>
                    
                </td>
                <td style="width:20%;">
                    <img src="img/acufade.png" />
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
                    
                    <h5>Persona Usuaria</h5>
                    <hr />
                </td>
            </tr>
        </table>
        
        
        <table style="width:100%">
            <tr>
                <td style="width:100%">
                    <b>NOMBRE Y APELLIDOS:</b> {{$patient->nombre}} {{$patient->apellido}}
                </td>
            </tr>
        </table>
        
        <table style="width:100%">
            <tr>
                <td style="width:100%">
                    <b>NIF:</b> {{$patient->dni }}
                </td>
            </tr>
        </table>
        
        <table style="width:100%">
            <tr>
                <td style="width:50%">
                    <b>FECHA NACIMIENTO:</b> {{$fecha_nac }}
                </td>
                <td style="width:50%">
                    <b>EDAD:</b> {{$age }}
                </td>
            </tr>
        </table>
        
        <table style="width:100%">
            <tr>
                <td style="width:100%">
                    <b>DOMICILIO:</b> {{$patient->direccion }}, {{$patient->num_direcion }}, {{$patient->bloq_piso }} 
                </td>
            </tr>
        </table>

        <table style="width:100%">
            <tr>
                <td style="width:100%">
                    <b>MUNICIPIO:</b> {{$patient->Municipio }}, {{$patient->Isla }}
                </td>
            </tr>
        </table>

        <table style="width:100%">
            <tr>
                <td style="width:50%">
                    <b>ESTADO CIVIL:</b> {{$patient->estado_civil }}
                </td>
                <td style="width:50%">
                    <b>GENERO:</b> {{$patient->genero }}
                </td>
            </tr>
        </table>

        <table style="width:100%">
            <tr>
                <td style="width:50%">
                    <b>TELÉFONO FIJO:</b> {{$patient->telefono }}
                </td>
                <td style="width:50%">
                    <b>MÓVIL:</b> {{$patient->telefono_movil }}
                </td>
            </tr>
        </table>

        <table style="width:100%">
            <tr>
                <td style="width:100%">
                    <b>EMAIL:</b> {{$patient->email }}
                </td>
            </tr>
        </table>
        <hr />

        <table style="width:100%">
            <tr>
                <td style="width:100%">
                    <h6>PERSONAS DE REFERENCIA</h6>
                </td>
            </tr>

            @foreach($patient->patientCarers as $item)
                
                <tr>
                    <td style="width:100%" colspan=2>
                        <b>NOMBRE Y APELLIDO:</b> {{$item->nombre}} {{$item->apellido}} @if($item->cuidadora_principal === 'Si') <span style="color:#FF0000"><b>(PRINCIPAL)</b></span> @endif
                    </td>
                </tr>
                <tr>
                    <td style="width:50%">
                        <b>PARENTESCO:</b> {{$item->parentesco }}
                    </td>
                    <td style="width:50%">
                        <b>GENERO:</b> {{$item->genero_carer }}
                    </td>
                </tr>
                <tr>
                    <td style="width:100%" colspan=2>
                        <b>NIF:</b> {{$item->dni}}
                    </td>
                </tr>
                <tr>
                    <td style="width:50%">
                        <b>FECHA NACIMIENTO:</b> {{$item->fecha_nac_carer }}
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
                        <b>EDAD:</b> @if($age_carer) {{$age_carer }} @endif
                    </td>
                </tr>
                
                <tr>
                    <td style="width:100%" colspan=2>
                        <b>DOMICILIO:</b> {{$item->direccion_care }} 
                    </td>
                </tr>
        
                <tr>
                    <td style="width:100%" colspan=2>
                        <b>MUNICIPIO:</b> {{$item->municipio_carer }}
                    </td>
                </tr>
                <tr>
                    <td style="width:50%">
                        <b>TELÉFONO FIJO:</b> {{$item->tel_care }}
                    </td>
                    <td style="width:50%">
                        <b>MÓVIL:</b> {{$patient->movil_care }}
                    </td>
                </tr>
                <tr>
                    <td style="width:100%" colspan=2>
                        <b>EMAIL:</b> {{$item->email_care }}
                    </td>
                </tr>
                <tr>
                    <td style="width:50%">
                        <b>OCUPACIÓN:</b> @if($item->trabajo_care) implode (", ", $item->trabajo_care); @endif
                    </td>
                    <td style="width:50%">
                        <b>TRABAJO ACTUAL:</b> {{$patient->sit_laboral }}
                    </td>
                </tr>
                <tr>
                    <td style="width:100%" colspan=2>
                        <b>SERVICIO DE APOYO:</b> {{$item->otro_serv_apoyo }}
                    </td>
                </tr>
                <tr>
                    <td style="width:100%" colspan=2>
                        <b>OBSERVACIÓN:</b> 
                    </td>
                </tr>
                <hr />
            @endforeach
        </table>

        <table style="width:100%">
            <tr>
                <td style="width:100%">
                    <h6>2. SERVICIOS Y PROGRAMAS PRESTADOS</h6>
                </td>
            </tr>
            @foreach($patient->patientServices as $patientService)
                
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
                        @if($patientService->fecha_form_serv)
                            <b>FECHA DE FORMALIZACIÓN:</b> {{ date('d/m/Y', strtotime($patientService->fecha_form_serv )) }}
                        @else
                            <b>FECHA DE FORMALIZACIÓN:</b>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td style="width:50%">
                        @if($patientService->tipo_plaza_serv)
                            <b>TIPO DE PLAZA:</b> {!! implode(', ', (array)$patientService->tipo_plaza_serv) !!}
                        @else
                            <b>TIPO DE PLAZA:</b>
                        @endif
                    </td>
                    <td style="width:50%">
                        @if($patientService->plaza_privada_serv)
                            <b>PLAZA PRIVADA:</b> {!! implode(', ', (array)$patientService->plaza_privada_serv) !!}
                        @endif
                    </td>
                </tr>
                <tr>
                    <td style="width:100%" colspan=2>
                        <b>Observación:</b> 
                    </td>
                </tr>
                <hr />

            @endforeach
        </table>
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
                <tr>
                    <td style="width:100%" colspan=2>
                        <b>Sesiones:</b> {!! $patientSpapd->num_sesiones !!}
                    </td>
                </tr>
                <tr>
                    <td style="width:100%" colspan=2>
                        <b>Observación:</b> 
                    </td>
                </tr>
                <tr><td style="width:100%" colspan=2><hr /></td></tr>
            @endforeach
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
                    <td style="width:50%">
                        <b>NIF: {{ $worker->dni }}</b>
                    </td>
                    <td style="width:50%">
                        <b>Nº COLEGIACIÓN:</b> 
                    </td>
                </tr>
                <tr>
                    <td style="width:100%">
                        <b>NOMBRE Y APELLIDOS:</b> {{ $worker->nombre }} {{ $worker->apellido }}
                    </td>
                </tr>
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
            <tr>
                <td style="width:100%">
                    <b>PRIVADA:</b> @if($patient->patientHealth) {{ $patient->patientHealth->regimen_priv }} @endif
                </td>
            </tr>
            <tr>
                <td style="width:100%">
                    <b>Nº AFILIACIÓN:</b>@if($patient->patientHealth) {{ $patient->patientHealth->num_afiliado }} @endif
                </td>
            </tr>
            <tr>
                <td style="width:100%">
                    <b>MÉDICO DE CABECERA:</b>@if($patient->patientHealth) {{ $patient->patientHealth->med_cabecera }} @endif
                </td>
            </tr>
            <tr>
                <td style="width:50%">
                    <b>CENTRO DE REFERENCIA:</b>@if($patient->patientHealth) {{ $patient->patientHealth->centro_salud }} @endif
                </td>
                <td style="width:50%">
                    <b>TFNO. CENTRO REFERENCIA:</b>@if($patient->patientHealth) {{ $patient->patientHealth->tel_centro_salud }} @endif
                </td>
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
            <tr>
                <td><b>MEDICACIÓN EN CENTRO:</b>@if($patient->patientHealth) {{ $patient->patientHealth->med_centro }} @endif</td>
            </tr>
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
            <tr>
                <td><b>INCONTINENCIA:</b>@if($patient->patientHealth) {!! implode(', ', (array)$patient->patientHealth->incontinencia_opc) !!} @endif</td>
            </tr>
            <tr>
                <td><b>RIESGO DE CAÍDAS:</b>@if($patient->patientHealth) {{ $patient->patientHealth->caida }} @endif</td>
            </tr>
            <tr>
                <td><b>DIETA:</b>@if($patient->patientHealth) {{ $patient->patientHealth->dieta }} @endif</td>
            </tr>
            <tr>
                <td><b>HIGIENE PERSONAL:</b>@if($patient->patientHealth) {{ $patient->patientHealth->higiene }} @endif</td>
            </tr>
            <tr>
                <td><b>ÚLCERA POR PRESIÓN:</b>@if($patient->patientHealth) {{ $patient->patientHealth->ulcera }} @endif</td>
            </tr>
            <tr>
                <td><b>DEAMBULACIÓN ERRANTE:</b>@if($patient->patientHealth) {{ $patient->patientHealth->deambulacion }} @endif</td>
            </tr>
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
            <tr>
                <td style="width:100%">
                    <b>SITUACIÓN DE DEPENDENCIA:</b>@if($patient->patientInfo) {{ $patient->patientInfo->situacion_dep }} @endif
                </td>
            </tr>
            <tr>
                <td>
                    <b>GRADO DE DEPENDENCIA:</b>@if($patient->patientInfo) {{ $patient->patientInfo->grado_dep }} @endif
                </td>
            </tr>
            <tr>
                <td style="width:50%">
                    <b>TIPO DE AYUDA:</b>@if($patient->patientInfo) {{ $patient->patientInfo->ayuda_dep }} @endif
                </td>
                <td style="width:50%">
                    <b>CUANTÍA RESUELTA:</b>@if($patient->patientInfo) {{ $patient->patientInfo->cuantia }} @endif
                </td>
            </tr>
            <tr>
                <td>
                    <b>TÉCNICA DE DEPENDENCIA:</b> {{ $patient->patientInfo->tec_dependencia }}
                </td>
            </tr>
            <tr>
                <td>
                    <b>PERSONA GUARDADORA:</b> {{ $patient->patientInfo->guarda_hecho }}
                </td>
            </tr>
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
            <tr>
                <td style="width:100%">
                    <b>TIPO DE AYUDAS: @if($patient->patientInfo) {!! implode(', ', (array)$patient->patientInfo->ayuda_soc) !!} @endif</b>
                </td>
            </tr>
            <tr>
                <td style="width:100%">
                    <b>CERTIFICADO DE DISCAPACIDAD: </b>@if($patient->patientInfo) {!! $patient->patientInfo->cert_disc !!} @endif
                </td>
            </tr>
            <tr>
                <td>
                    <b>OBSERVACIONES:</b>
                </td>
            </tr>
        </table>
        <hr />

        <table style="width:100%">
            <tr>
                <td style="width:100%">
                    <strong>INFORMACIÓN LEGAL</strong>
                </td>
            </tr>
            <tr><td><hr /></td></tr>
            <tr>
                <td style="width:100%">
                    <b>SITUACIÓN LEGAL: </b>@if($patient->patientInfo) {{ $patient->patientInfo->sit_legal }} @endif
                </td>
            </tr>
            <tr>
                <td>
                    <b>OBSERVACIONES:</b>
                </td>
            </tr>
        </table>

        <hr />
        <table style="width:100%">
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
                <td><b>Programa de Estimulación Cognitiva</b></td>
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
                <td><b>Programa de Apoyo Emocional</b></td>
            </tr>
            <tr>
                <td>
                    <p><b>Objetivos</b></p>
                    <p><b>Valoración emocional</b></p>
                    <p><b>Plan de Tratamiento</b></p>
                    <p><b>Recomendaciones</b></p>
                </td>
            </tr>
            <tr><td><hr /></td></tr>
            <tr>
                <td><b>Programa de Autonomía (Fisioterapia)</b></td>
            </tr>
            <tr>
                <td>
                    <p><b>Objetivos</b></p>
                    <p><b>Valoración física</b></p>
                    <p><b>Plan de Tratamiento</b></p>
                    <p><b>Recomendaciones</b></p>
                </td>
            </tr>
            <tr><td><hr /></td></tr>
            <tr>
                <td><b>Programa de Terapia Ocupacional</b></td>
            </tr>
            <tr>
                <td>
                    <p><b>Objetivos</b></p>
                    <p><b>Valoración funcional</b></p>
                    <p><b>Plan de Tratamiento</b></p>
                    <p><b>Recomendaciones</b></p>
                </td>
            </tr>
            

        </table>
        <hr />
        <table style="width:100%">
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

        <table style="width:100%">
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