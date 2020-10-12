<style>
    .dtr-details tr{
        border-bottom: 1px solid lightgrey;
        line-height: 30px;
    }
    </style>
    
    <table class="table datatables" width="100%" cellspacing="0">
        <thead class="thead-dark">
            <tr>
                <th class="all"><strong>Nombre</strong></th>
                <th class="all"><strong>Apellidos</strong></th>
                <th class="all"><strong>Parentesco</strong></th>
                <th class="none"><strong>Género</strong></th>
                <th class="none"><strong>DNI</strong></th>
                <th class="none"><strong>Fecha Nacimiento</strong></th>
                <th class="none"><strong>Edad</strong></th>
                <th class="none"><strong>Dirección</strong></th>
                <th class="none"><strong>Municipio</strong></th>
                <th class="all"><strong>Teléfono Fijo</strong></th>
                <th class="all"><strong>Teléfono Móvil</strong></th>
                <th class="all"><strong>Email</strong></th>
                <th class="none"><strong>Whatsapp</strong></th>
                <th class="none"><strong>Ocupación</strong></th>
                <th class="all"><strong>Trabajo Actual</strong></th>
                <th class="none"><strong>Nivel de estudios</strong></th>
                <th class="none"><strong>Fecha Inicio del Cuidado</strong></th>
                <th class="none"><strong>Años Cuidando</strong></th>
                <th class="none"><strong>Servicios Apoyo Recibe Actualmente</strong></th>
                <th class="none"><strong>Cesión de imagen</strong></th>
                <th class="none"><strong>Contactar Para</strong></th>
                <th class="all"><strong>¿Es Tutor/a Legal?</strong></th>

            </tr>
        </thead>
    
    
        <tbody>
        @foreach($patient->patientCarers as $item)
            <tr>
                <td>{!! $item->nombre !!}</td>
                
                <td>{!! $item->apellido !!}</td>
                
                @if ($item->parentesco == "Otros")
                    <td>{!! $item->otro_paren !!}</td>
                @else
                    <td>{!! $item->parentesco !!}</td>
                @endif
                
                <td>{!! $item->genero_carer !!}</td>
                <td>{!! $item->dni !!}</td>
                <td>{{ date('d / m / Y', strtotime($item->fecha_nac_care )) }}</td>
    
                <td>   
                    @php
                    $fecha = time() - strtotime($item->fecha_nac_care);
                    $edad = floor($fecha / 31556926);
                    @endphp
                    {!! $edad !!} Años
                </td>
    
                <td>{!! $item->direccion_care !!}</td>
                <td>{!! $item->municipio_carer !!}</td>
                <td>{!! $item->tel_care !!}</td>
                <td>{!! $item->movil_care !!}</td>
                <td>{!! $item->email_care !!}</td>
                <td>{!! $item->whatsapp !!}</td>
                
                <td>
                    @if ($item->sit_laboral== 'Otras')
                        {{ $item->otro_ocupacion }}
                    @else
                        {{ $item->sit_laboral }}
                    @endif
                </td>
    
              
                <td>
                    @if ($item->trabajo_care != null)
                        {!! implode(', ', (array)$item->trabajo_care) !!}
                        @if (in_array('Otro', $item->trabajo_care))
                            {!! $item->otro_trabajo !!}
                        @endif
                    @endif
                    
                </td>
    
                <td>{!! $item->estudios_carer !!}</td>
    
                <td>{{ date('d / m / Y', strtotime($item->ano_care)) }}</td>
    
                <td>
                    @php 
                        $fecha_cuidado = time() - strtotime($item->ano_care);
                        $edad_cuidado = floor($fecha_cuidado / 31556926);
                    @endphp
                    {{ $edad_cuidado }} años
                </td>
                
                <td>
                    @if ($item->sit_apoyo != null)
                        {!! implode(', ', (array)$item->sit_apoyo) !!}
                        @if (in_array('Otros', $item->sit_apoyo))
                            {!! $item->otro_serv_apoyo !!}
                        @endif
                    @endif
                </td>    
    
                <td>{!! $item->cesion_care !!}</td>
                
                <td>
                    @if ($item->contactar_para != null)
                        {!! implode(', ', (array)$item->contactar_para) !!}
                        @if(in_array('Otros', $item->contactar_para))
                            {!! $item->otro_contactar_para !!}
                        @endif
                    @endif
                </td>
    
                <td>{!! $item->es_tutor !!}</td>
    
            </tr>
            @endforeach
        </tbody>
    
        
         
    </table>