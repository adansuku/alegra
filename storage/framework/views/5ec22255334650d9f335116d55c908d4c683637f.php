<!--end buttons-->
<div class="row">
    <div class="col-sm-4">
        <div class="avatar" style="background-image:url(<?php echo e(asset("storage/$patient->foto_paciente")); ?>)"></div>
    </div>
    <div class="col-sm-8">

        <!-- Nombre Field -->
        <small>Nombre:</small>
        <h6><strong><?php echo $patient->nombre; ?></strong></h6>

        <!-- Apellido Field -->
        <small>Apellidos:</small>
        <h6><strong><?php echo $patient->apellido; ?></strong></h6>

        <!-- Fecha Alta Paciente Field -->
        <small>Fecha Alta:</small>
        <h6><strong><?php echo e(date('d / m / Y', strtotime($patient->fecha_alta_paciente))); ?></strong></h6>

        <!-- Numero Expediente Field -->
        <small>Numero Expediente:</small>
        <h6><strong><?php echo $patient->numero_expediente; ?></strong></h6>

        <!-- Alias Field -->
        <small>Alias:</small>
        <h6><strong><?php echo $patient->alias; ?></strong></h6>

        <small>Trabajadora social GESTORA CASO:</small>
        <h6><strong><?php echo e($worker->nombre); ?> <?php echo e($worker->apellido); ?></strong></h6>



        <table class="table dark" width="100%" cellspacing="0">
            <thead class="thead-dark">
                <tr>
                    <th>Pia en Vigor</th>
                    <th>Fecha máx. Elaboración y Entrega</th>
                </tr>
            </thead>




            <?php $__currentLoopData = $patient->patientPia->slice(0, 2); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patientPia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td>
                    <?php echo $patientPia->tipo_pia; ?>

                </td>

                <td>
                    <?php echo e(date('d/m/Y', strtotime($patientPia->fecha_limite))); ?>

                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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
                <h6><strong><?php echo $patient->genero; ?></strong></h6>

                <!-- Fecha Nacimiento Field -->
                <small>Fecha Nacimiento:</small>
                <h6><strong><?php echo e(date('d / m / Y', strtotime($patient->fecha_nacimiento ))); ?></strong></h6>

                <!-- Edad -->
                <small>Edad:</small>
                <?php
                $fecha = time() - strtotime($patient->fecha_nacimiento);
                $edad = floor($fecha / 31556926);
                ?>
                <h6><strong><?php echo $edad; ?> Años</strong></h6>

                <!-- Dni Field -->
                <small>Dni:</small>
                <h6><strong><?php echo $patient->dni; ?></strong></h6>

                <!-- Estado Civil Field -->
                <small>Estado Civil:</small>
                <h6><strong><?php echo $patient->estado_civil; ?></strong></h6>

                <!-- Direccion Field -->
                <small>Dirección (calle, avenida, plaza…):</small>
                <h6><strong><?php echo $patient->direccion; ?></strong></h6>

                <!-- Número Field -->
                <small>Número:</small>
                <h6><strong><?php echo $patient->num_direcion; ?></strong></h6>

                <!-- Bloque, Piso y/o puerta Field -->
                <small>Bloque, Piso y/o puerta:</small>
                <h6><strong><?php echo $patient->bloq_piso; ?></strong></h6>

                <!-- Codigo Postal Field -->
                <small>C.P.:</small>
                <h6><strong><?php echo $patient->codigo_postal; ?></strong></h6>

                <!-- Municipio Field -->
                <small>Municipio:</small>
                <h6><strong><?php echo $patient->Municipio; ?></strong></h6>
            </div>
            <!--end column-->

            <div class="col-sm-12 col-lg-4">

                <!-- Isla Field -->
                <small>Isla:</small>
                <h6><strong><?php echo $patient->Isla; ?></strong></h6>

                <!-- Observaciones Dirección Field -->
                <small>Observaciones Dirección:</small>
                <h6><strong><?php echo $patient->obs_direcion; ?></strong></h6>

                <!-- Telefono Field -->
                <small>Teléfono Fijo (de su residencia):</small>
                <h6><strong><?php echo $patient->telefono; ?></strong></h6>

                <!-- Telefono Movil Field -->
                <small>Telefono Movil Propio:</small>
                <h6><strong><?php echo $patient->telefono_movil; ?></strong></h6>


                <!-- Convive Con Field -->
                <small>Convive Con:</small>
                <h6>
                    <strong>
                        <?php if($patient->convive_con != null): ?>
                        <?php echo implode(', ', (array)$patient->convive_con); ?>

                        <?php echo $patient->otros_parentesco; ?>

                        <?php endif; ?>
                    </strong>
                </h6>

                <!-- Grado dependencia Field -->
                <small>Grado dependencia:</small>
                <h6><strong><?php echo $patient->grado_dep; ?></strong></h6>

                <!-- Trabajadora social Field -->
                <small>Trabajadora social GESTORA CASO:</small>
                <h6><strong>
                        <?php echo e($worker->nombre); ?> <?php echo e($worker->apellido); ?>

                    </strong></h6>

                <!-- PIA en vigor Field -->

                <?php $__currentLoopData = $patient->patientPia; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patientPia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <?php
                $today = Carbon\Carbon::now();
                ?>
                <?php if($today < $patientPia->fecha_limite): ?>{
                    Tipo pia: <?php echo $patientPia->tipo_pia; ?> <br>
                    Fecha máx. Elaboración y Entrega:<br>
                    Fecha Real Elaboración Completa:<br>
                    Fecha Real Entrega:<br>
                    Éxito PIA:<br>
                    Informe PIA:<br>
                    Documento Recepción PIA:<br>
                    Observaciones:<br>
                    <?php endif; ?>








                    <?php echo e(date('d/m/Y', strtotime($patientPia->fecha_real_entrega))); ?>


                    <?php if($patientPia->exito_pia == "Si"): ?>
                    <div style="background: green;text-align: center; color: white">
                        <?php else: ?>
                        <div style="background: red; text-align: center; color: white">
                            <?php endif; ?>
                            <?php echo $patientPia->exito_pia; ?>

                        </div>

                        <?php if($patientPia->url_pia == null ): ?>
                        Pia no disponible
                        <?php else: ?>

                        <a href="<?php echo e(asset("storage/$patientPia->url_pia")); ?>" target="_blank">
                            <i class="fas fa-download"></i> Ver documento
                        </a>
                        <?php endif; ?>

                        <?php if($patientPia->url_recepcion == null ): ?>
                        Pia recepción no disponible
                        <?php else: ?>

                        <a href="<?php echo e(asset("storage/$patientPia->url_recepcion")); ?>" target="_blank">
                            <i class="fas fa-download"></i> Ver documento
                        </a>
                        <?php endif; ?>


                        <?php if($loop->last): ?>
                        <div class="bg-secondary p-1">Pia en vigor</div>
                        <?php endif; ?>
                        <?php echo $patientPia->obs_pia; ?>


                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>





                        <!-- Tutor legal -->

                        <?php $__currentLoopData = $patient->patientCarers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <small>Nombre y Apellidos Tutor/a Legal</small>
                        <?php if($item->es_tutor == "Si"): ?>

                        <h6><strong> <?php echo e($item->nombre); ?> <?php echo e($item->apellidos); ?></strong></h6>
                        <small>Teléfono fijo Tutor legal</small>
                        <h6><strong> <?php echo e($item->car_tel); ?></strong></h6>
                        <small>Teléfono Móvil Tutor legal</small>
                        <h6><strong><?php echo e($item->movil_care); ?></strong></h6>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </strong></h6>

                    </div>
                    <!--end column-->

                    <div class="col-sm-12 col-lg-4">

                        <!-- Persona urgencias -->
                        <br>
                        <div class="bg-secondary p-3">
                            <h2><strong>En caso de urgencia</strong></h2>
                            <?php $__currentLoopData = $patient->patientCarers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($item->contactar_para != null): ?>
                            <?php if(in_array("Urgencias", $item->contactar_para)): ?>

                            <small>Nombre y apellidos:</small>
                            <h6><strong> <?php echo e($item->nombre); ?> <?php echo e($item->apellido); ?></strong></h6>

                            <small>Trabajo actual:</small>
                            <h6><strong>
                                    <?php if($item->trabajo_care != null): ?>
                                    <?php echo implode(', ', (array)$item->trabajo_care); ?>

                                    <?php if(in_array('Otro', $item->trabajo_care)): ?>
                                    <?php echo $item->otro_trabajo; ?>

                                    <?php endif; ?>
                                    <?php endif; ?>
                                </strong></h6>
                            <small>Teléfono:</small>
                            <h6><strong> <?php echo e($item->tel_care); ?> </strong></h6>
                            <small>Teléfono Móvil:</small>
                            <h6><strong> <?php echo e($item->movil_care); ?> </strong></h6>
                            <small>Parentesco:</small>
                            <h6>
                                <strong>
                                    <?php if($item->parentesco == "Otros"): ?>
                                    <?php echo $item->otro_paren; ?>

                                    <?php else: ?>
                                    <?php echo $item->parentesco; ?>

                                    <?php endif; ?>
                                </strong>
                            </h6>
                            <?php endif; ?>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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
                    <?php echo $__env->make('patients.show.show_diagnostic', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                </div><!-- end diagnosticos-->

                <div class="col-lg-6">
                    <h5><strong>Otras Patología/s Importantes</strong></h5>
                    <hr>
                    <?php echo $__env->make('patients.show.show_patology', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                </div><!-- end patologia-->

                <div class="col-sm-6">
                    <h5><strong>Alergia e Intolerancia </strong></h5>
                    <hr>
                    <?php echo $__env->make('patients.show.show_allergy', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                </div><!-- end diagnosticos-->

                <div class="col-sm-6">
                    <h5><strong>Médico</strong></h5>
                    <hr>
                    <?php echo $__env->make('patients.show.show_doctor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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

                            <?php $__currentLoopData = $patient->patientPia; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patientPia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <td>
                                <?php echo $patientPia->tipo_pia; ?>


                            </td>

                            <?php
                            $fecha_limite = strtotime($patientPia->fecha_limite);
                            $newformat = date('d/m/Y',$fecha_limite);
                            echo ' <td data-sort="'. $fecha_limite .'">'.$newformat .'</td>';
                            ?>

                            <td>
                                <?php if($patientPia->fecha_real != null ): ?>
                                <?php echo e(date('d/m/yy', strtotime($patientPia->fecha_real))); ?>

                                <?php endif; ?>
                            </td>

                            <td>

                                <?php if($patientPia->fecha_real != null ): ?>
                                <?php echo e(date('d/m/yy', strtotime($patientPia->fecha_real_entrega))); ?>

                                <?php endif; ?>
                            </td>


                            <td>
                                <?php if($patientPia->fecha_real != null): ?>
                                <?php if($patientPia->fecha_limite > $patientPia->fecha_real): ?>
                                <div style="background: green;text-align: center; color: white">Éxito</div>
                                <?php else: ?>
                                <div style="background: red; text-align: center; color: white">Fracaso</div>
                                <?php endif; ?>
                                <?php endif; ?>
                            </td>

                            <td>
                                <?php if($patientPia->url_pia == null ): ?>
                                Pia no disponible
                                <?php else: ?>

                                <a href="<?php echo e(asset("storage/$patientPia->url_pia")); ?>" target="_blank">
                                    <i class="fas fa-download"></i> Ver documento
                                </a>
                                <?php endif; ?>
                            </td>


                            <td>
                                <?php if($patientPia->url_recepcion == null ): ?>
                                Pia recepción no disponible
                                <?php else: ?>

                                <a href="<?php echo e(asset("storage/$patientPia->url_recepcion")); ?>" target="_blank">
                                    <i class="fas fa-download"></i> Ver documento
                                </a>
                                <?php endif; ?>
                            </td>


                            <td>

                                <?php
                                $today = Carbon\Carbon::now();
                                if ($today < $patientPia->fecha_limite){
                                    echo '<div class="bg-secondary p-1">Pia en vigor</div>';
                                    }
                                    ?>

                                    <?php echo $patientPia->obs_pia; ?>

                            </td>


                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                    <h6><strong><?php echo $patient->patientHealth->reg_sanitario; ?></strong></h6>

                    <small>Nª Afiliación:</small>
                    <h6><strong><?php echo $patient->patientHealth->num_afiliado; ?></strong></h6>

                    <small>Nombre y Apellidos Médico/a Cabecera:</small>
                    <h6><strong><?php echo $patient->patientHealth->med_cabecera; ?></strong></h6>

                    <small>Centro Referencia:</small>
                    <h6><strong><?php echo $patient->patientHealth->centro_salud; ?></strong></h6>

                    <small>Teléfono Centro Referencia:</small>
                    <h6><strong><?php echo $patient->patientHealth->tel_centro_salud; ?></strong></h6>
                </div>




                <div class="col-sm-12 col-lg-6 pt-3">
                    <h5><strong>Indicadores de salud</strong></h5>
                    <hr>
                    <small>Incontinencia:</small>
                    <h6><strong><?php echo $patient->patientHealth->incontinencia; ?></strong></h6>

                    <small>Riesgo de Caida:</small>
                    <h6><strong><?php echo $patient->patientHealth->caida; ?></strong></h6>

                    <small>Higiene:</small>
                    <h6><strong><?php echo $patient->patientHealth->higiene; ?></strong></h6>

                    <small>Ulcera por presión:</small>
                    <h6><strong><?php echo $patient->patientHealth->ulcera; ?></strong></h6>

                    <small>Deambulacion:</small>
                    <h6><strong><?php echo $patient->patientHealth->deambulacion; ?></strong></h6>

                    <small>Hidratación:</small>
                    <h6><strong><?php echo $patient->patientHealth->hidratacion; ?></strong></h6>

                    <small>Tiop de Dieta:</small>
                    <h6><strong><?php echo $patient->patientHealth->dieta; ?></strong></h6>

                    <small>Tipo de Dieta:</small>
                    <h6><strong><?php echo $patient->patientHealth->dieta_textura; ?></strong></h6>

                    <small>Observaciones dieta:</small>
                    <h6><strong><?php echo $patient->patientHealth->dieta_observ; ?></strong></h6>
                </div>





                <div class="col-sm-12 col-lg-6 pt-3">
                    <h5><strong>Medicación</strong></h5>
                    <hr>
                    <?php if($patient->patientHealth->med_centro == "Si"): ?>
                    <table class="table datatables dark pt-3" width="100%" cellspacing="0">
                        <thead class="thead-dark">
                            <tr>
                                <th>Medicación</th>
                                <th>Pauta Medicacion</th>
                                <th>Observaciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $patient->patientMedications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patientMedication): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo $patientMedication->medicacion; ?></td>
                                <td><?php echo $patientMedication->pauta_medicacion; ?></td>
                                <td><?php echo $patientMedication->obs_medicacion; ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <?php endif; ?>
                    <small>Medicación en Centro:</small>
                    <h6><strong><?php echo $patient->patientHealth->med_centro; ?></strong></h6>
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
                            <?php $__currentLoopData = $patient->patientDoctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo $item->nombre_doctor; ?></td>
                                <td><?php echo $item->observaciones_doctor; ?></td>

                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                    <h6><strong><?php echo $patient->patientInfo->miem_familia; ?></strong></h6>


                    <small>Hijos:</small>
                    <h6><strong><?php echo $patient->patientInfo->hijos; ?></strong></h6>

                    <small>Vivienda:</small>
                    <h6><strong><?php echo $patient->patientInfo->vivienda; ?></strong></h6>

                    <?php if($patient->patientInfo->vivienda == "Otros (especificar)"): ?>
                    <small>Vivienda otros:</small>
                    <h6><strong><?php echo $patient->patientInfo->vivienda_otros; ?></strong></h6>
                    <?php endif; ?>

                    <small>Ingresos mensuales:</small>
                    <h6><strong><?php echo $patient->patientInfo->ingresos_m; ?></strong></h6>

                    <small>Nivel educativo:</small>
                    <h6><strong><?php echo $patient->patientInfo->nivel_educativo; ?></strong></h6>

                    <small>Estudios terminados:</small>
                    <h6><strong><?php echo $patient->patientInfo->ingresos_m; ?></strong></h6>

                    <small>Ocupación anterior:</small>
                    <h6><strong><?php echo $patient->patientInfo->ocupacion; ?></strong></h6>

                    <small>Intereses actuales:</small>
                    <h6><strong><?php echo $patient->patientInfo->intereses; ?></strong></h6>

                    <small>Lee y Escribe ahora:</small>
                    <h6><strong><?php echo $patient->patientInfo->lee_escribe; ?></strong></h6>

                </div>
                <!--end col-->


                <div class="col-sm-12 col-lg-6">
                    <h5><strong>INFORMACIÓN LEY DEPENDENCIA</strong></h5>
                    <hr>

                    <small>Situación dependencia:</small>
                    <h6><strong><?php echo $patient->patientInfo->situacion_dep; ?></strong></h6>

                    <small>Gradon dependencia:</small>
                    <h6><strong><?php echo $patient->patientInfo->grado_dep; ?></strong></h6>

                    <small>Revisión de Grado:</small>
                    <h6><strong><?php echo $patient->patientInfo->grado_dep; ?></strong></h6>

                    <small>Tipo de ayuda:</small>
                    <h6><strong><?php echo $patient->patientInfo->ayuda_dep; ?></strong></h6>


                    <small>Nivel de dependencia:</small>
                    <h6><strong><?php echo $patient->patientInfo->nivel_dep; ?></strong></h6>


                    <small>Ayuda dependencia:</small>
                    <h6><strong><?php echo $patient->patientInfo->ayuda_dep; ?></strong></h6>

                    <small>Cuantía Resolución PIA:</small>
                    <h6><strong><?php echo $patient->patientInfo->cuantia; ?></strong></h6>

                    <small>Técnico dependencia:</small>
                    <h6><strong><?php echo $patient->patientInfo->tec_dependencia; ?></strong></h6>

                    <small>Guardadora de hecho:</small>
                    <h6><strong><?php echo $patient->patientInfo->guarda_hecho; ?></strong></h6>

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
                            <?php $__currentLoopData = $patient->patientDates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e(date('d/m/Y', strtotime($item->fecha_paciente))); ?></td>
                                <td><?php echo $item->desc_fecha_paciente; ?></td>
                                <td><?php echo $item->documento_fecha_paciente; ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
                <!--end col-->

                <div class="col-lg-6">
                    <h5><strong>OTRAS AYUDAS SOCIOSANITARIAS</strong></h5>
                    <hr>

                    <small>Tipo Ayudas:</small>
                    <h6><strong><?php echo $patient->patientInfo->ayuda_soc; ?></strong></h6>

                    <small>Certificado Discapacidad:</small>
                    <h6><strong><?php echo $patient->patientInfo->cert_disc; ?></strong></h6>

                    <small>Tipo Discapacidad:</small>
                    <h6><strong><?php echo $patient->patientInfo->tipo_disc; ?></strong></h6>

                    <small>Porcentaje Discapacidad:</small>
                    <h6><strong><?php echo $patient->patientInfo->grado_disc; ?></strong></h6>

                    <small>Fecha Resolución Grado Discapacidad:</small>
                    <h6><strong><?php echo $patient->patientInfo->fecha_res_disc; ?></strong></h6>


                </div>
                <!--end col-->

                <div class="col-lg-6">
                    <h5><strong>INFORMACIÓN LEGAL</strong></h5>
                    <hr>

                    <small>Situación Legal:</small>
                    <h6><strong><?php echo $patient->patientInfo->sit_legal; ?></strong></h6>




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
                    <h6><strong><?php echo $patient->patientOther->cesion_imagen; ?></strong></h6>

                    <!-- Med Centro Field -->
                    <small>Medicación en Centro:</small>
                    <h6><strong><?php echo $patient->patientHealth->med_centro; ?></strong></h6>

                    <!-- salir_centro -->
                    <small>Autorización Entrar y Salir Centro:</small>
                    <h6><strong><?php echo $patient->patientOther->salir_centro; ?></strong></h6>

                </div>

                <div class="col-sm-12 col-lg-4">
                    <!-- salida_externa -->
                    <small>Autorización Salida Externa::</small>
                    <h6><strong><?php echo $patient->patientOther->salida_externa; ?></strong></h6>

                    <!-- Guarda Hecho Field -->
                    <small>Socio:</small>
                    <h6><strong><?php echo $patient->patientOther->socio; ?></strong></h6>


                    <!-- Riesgo Caidas Field -->
                    <small>Riesgo de Caidas:</small>
                    <h6><strong><?php echo e($patient->patientOther->riesgo_caidas); ?></strong></h6>
                </div>

                <div class="col-sm-12 col-lg-4">



                    <!-- Salida Externa Field -->
                    <small>Salida Externa:</small>
                    <h6><strong><?php echo e($patient->patientOther->salida_externa); ?></strong></h6>

                    <!-- Socio Field -->
                    <small>Socio:</small>
                    <h6><strong><?php echo e($patient->patientOther->socio); ?></strong></h6>

                    <!-- No Socio Field -->
                    <small>Número de Socio:</small>
                    <h6><strong><?php echo e($patient->patientOther->no_socio); ?></strong></h6>



                </div>

            </div>
            <!--end row-->
        </div>
        <!--end tab 8-->



        <div class="tab-pane" id="cuidador" role="tabpanel">
            <div class="row py-4">

                <div class="col-sm-12">
                    <?php echo $__env->make('patients.show.show_carer_view', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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

                            <?php $__currentLoopData = $patient->patientPia; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patientPia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <td>
                                <?php echo $patientPia->tipo_pia; ?>


                            </td>

                            <td>
                                <?php echo e(date('d/m/Y', strtotime($patientPia->fecha_limite))); ?>

                            </td>


                            <td>
                                <?php if($patientPia->fecha_real != null ): ?>
                                <?php echo e(date('d/m/Y', strtotime($patientPia->fecha_real))); ?>

                                <?php endif; ?>
                            </td>



                            <td>
                                <?php echo e(date('d/m/Y', strtotime($patientPia->fecha_real_entrega))); ?>

                            </td>

                            <td>
                                <?php if($patientPia->exito_pia == "Si"): ?>
                                <div style="background: green;text-align: center; color: white">
                                    <?php else: ?>
                                    <div style="background: red; text-align: center; color: white">
                                        <?php endif; ?>
                                        <?php echo $patientPia->exito_pia; ?>

                                    </div>

                            </td>

                            <td>
                                <?php if($patientPia->url_pia == null ): ?>
                                Pia no disponible
                                <?php else: ?>

                                <a href="<?php echo e(asset("storage/$patientPia->url_pia")); ?>" target="_blank">
                                    <i class="fas fa-download"></i> Ver documento
                                </a>
                                <?php endif; ?>
                            </td>


                            <td>
                                <?php if($patientPia->url_recepcion == null ): ?>
                                Pia recepción no disponible
                                <?php else: ?>

                                <a href="<?php echo e(asset("storage/$patientPia->url_recepcion")); ?>" target="_blank">
                                    <i class="fas fa-download"></i> Ver documento
                                </a>
                                <?php endif; ?>
                            </td>





                            <td>
                                <?php if($loop->last): ?>
                                <div class="bg-secondary p-1">Pia en vigor</div>
                                <?php endif; ?>
                                <?php echo $patientPia->obs_pia; ?>

                            </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                <?php $__currentLoopData = $patient->patientServices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patientService): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-header bg-secondary text-dark">
                            <strong>Nombre del Servicio: </strong> <?php echo $patientService->nom_servicio; ?>

                        </div>
                        <div class="card-body">
                            <p>
                                <strong>Municipio:</strong> <?php echo $patientService->municipio_serv; ?><br>
                                
                                
                                <strong>Plaza Subencionada:</strong> <?php echo $patientService->plaza_sub_serv; ?><br>
                                <strong>Fecha formalización:</strong>
                                <?php echo e(date('d/m/Y', strtotime($patientService->fecha_form_serv ))); ?>


                            </p>

                            <?php $__currentLoopData = $patientService->serviceDates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <strong>Dia:</strong> <?php echo e($item->dia_servicio); ?><br>
                            <strong>Hora:</strong> <?php echo e($item->horario_servicio); ?><br>
                            <strong>Observaciones:</strong> <?php echo e($item->obs_servicio); ?><br>
                            <hr>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <!--end col-->



            <?php
            $spapd = 'SPAPD';
            $array = array();
            ?>

            <?php $__currentLoopData = $patient->patientServices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patientService): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
            $array = array($patientService->nom_servicio);
            ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php if(in_array($spapd, $array)): ?>

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
                            <?php $__currentLoopData = $patient->patientSpapd; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patientSpapd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <?php if($patientSpapd->prog_spapd == "Otros"): ?>
                                    <?php echo e($patientSpapd->otros_programa); ?>

                                    <?php else: ?>
                                    <?php echo e($patientSpapd->prog_spapd); ?>

                                    <?php endif; ?>
                                </td>

                                <td><?php echo $patientSpapd->num_sesiones; ?></td>

                                <td>
                                    <?php if($patientSpapd->dur_spapd == "Otros"): ?>
                                    <?php echo e($patientSpapd->otras_sesiones); ?>

                                    <?php else: ?>
                                    <?php echo e($patientSpapd->dur_spapd); ?>

                                    <?php endif; ?>

                                </td>

                                <td>
                                    <?php $__currentLoopData = $patientSpapd->dia_spapd; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <span class="bg-dark py-1 px-2 text-white"><?php echo e($item); ?></span>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>

                                <td><?php echo $patientSpapd->fecha_inicio; ?></td>
                                <td><?php echo $patientSpapd->worker_id; ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>

            </div>
            <!--end col-->
            <?php endif; ?>



            <!--transporte-->
            <?php if($patient->patientOther->transporte == "Si"): ?>
            <div class="row py-4">
                <div class="col-lg-12">
                    <h5><strong>Transporte</strong></h5>
                    <hr>
                </div>
                <div class="col-lg-12">
                    <small>Domicilio de recogida:</small>
                    <h6><strong><?php echo $patient->patientOther->dire_transporte; ?></strong></h6>
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
                            <?php $__currentLoopData = $patient->patientTransport; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patientTransport): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo $patientTransport->dia_trans; ?></td>
                                <td><?php echo $patientTransport->dom_recogida; ?></td>
                                <td><?php echo $patientTransport->tray_trans; ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!--end col-->
            <?php endif; ?>



            <!--Datos economicos-->
            <div class="row py-4">
                <div class="col-lg-12">
                    <h5><strong>Datos económicos</strong></h5>
                </div>
                <hr>

                <div class="col-sm-12 col-lg-4">
                    <small>Importe mensual servicio:</small>
                    <h6 id="num1"><strong><span id="num1"><?php echo $patient->patientOther->importe_serv; ?></span></strong>
                    </h6>

                    <small>Importe mensual transporte:</small>
                    <h6><strong><span id="num2"><?php echo $patient->patientOther->importe_trans; ?></span></strong></h6>

                    <div class="my-3 h5">Importe total a facturar:</div>
                    <span class="h3" id="spTotal"></span> €

                </div>
                <!--end col-->


                <div class="col-sm-12 col-lg-4">
                    <small>Forma de pago:</small>
                    <h6 id="num1"><strong><span id="num2"><?php echo $patient->patientOther->forma_pago; ?></span></strong>
                    </h6>

                    <small>Cuota de socio:</small>
                    <h6 id="num1"><strong><span id="num2"><?php echo $patient->patientOther->cuota_socio; ?></span></strong>
                    </h6>


                </div>
                <!--end col-->


                <div class="col-sm-12 col-lg-4">
                    <small>Forma pago Cuota Socio/a:</small>
                    <h6 id="num1"><strong><span id="num2"><?php echo $patient->patientOther->pago_socio; ?></span></strong>
                    </h6>

                    <small>Periodicidad:</small>
                    <h6 id="num1"><strong><span id="num2"><?php echo $patient->patientOther->periodicidad; ?></span></strong>
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
                            <?php $__currentLoopData = $patient->patientHistory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e(date('d / m / Y', strtotime($item->acc_fecha_reg ))); ?></td>
                                <td><?php echo e(date('d / m / Y', strtotime($item->acc_fecha_realiz ))); ?></td>
                                <td><?php echo $item->acc_tipo_accion; ?></td>
                                <td><?php echo $item->acc_subtipo_accion; ?></td>
                                <td><?php echo $item->acc_woker_accion; ?></td>
                                <td><?php echo $item->acc_descrip; ?></td>
                                <td><?php echo $item->acc_observaciones; ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                            <?php $__currentLoopData = $patient->patientDocuments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo $item->cat_documentos; ?></td>
                                <td><?php echo $item->nombre_doc; ?></td>

                                <td>
                                    <a class="btn btn-block btn-secondary btn-xs"
                                        href="<?php echo e(asset("storage/$item->url")); ?>" target="_blank"><i
                                            class="fas fa-download"></i> Ver / Descargar</a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div><!-- end documents-->

            <!--end row-->
        </div>
        <!--end tab 6-->





        <?php echo Form::open(['route' => ['patients.destroy', $patient->id], 'method' => 'delete']); ?>

        <div class='btn-group float-right'>
            <a href="<?php echo route('patients.edit', [$patient->id]); ?>" class='btn btn-primary btn-xs'>
                <i class="far fa-edit"></i> Editar
            </a>
            <?php echo Form::button('<i class="far fa-trash-alt"></i> Eliminar', ['type' => 'submit', 'class' => 'btn
            btn-danger
            btn-xs', 'onclick' => "return confirm('Vamos a proceder a eliminar un elemento. ¿Estas seguro/a?')"]); ?>

        </div>
        <?php echo Form::close(); ?>

    </div>
    <!--end content tab--><?php /**PATH /var/www/resources/views/patients/show_fields.blade.php ENDPATH**/ ?>