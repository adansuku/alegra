<?php $__env->startSection('title', "Edit"); ?>
<?php $__env->startSection('content'); ?>


<!-- Modals -->
<?php echo $__env->make('patients.modals.patology', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('patients.modals.allergy', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('patients.modals.diagnostic', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('patients.modals.carer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('patients.modals.history', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('patients.modals.documents', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('patients.modals.pias', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('patients.modals.service', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('patients.modals.service_dates', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('patients.modals.spapd', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('patients.modals.spapd_days', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('patients.modals.transport', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('patients.modals.dates', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('patients.modals.doctor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('patients.modals.past', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('patients.modals.medication', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<div class="container-fluid">

    <div class="card p-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Editando Persona atendida</h4>
        </div>
        <?php echo Form::model($patient, ['route' => ['patients.update', $patient->id], 'method' => 'patch', 'enctype' =>
        'multipart/form-data']); ?>


        <div class="col-sm-12 py-3">
            <ul class="nav nav-tabs tabs-marker tabs-dark bg-primary my-4" role="tablist" id="myTab">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#general" role="tab">Datos personales</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#carer" role="tab">Personas de referencia</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#pias" role="tab">PIA</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#services" role="tab">Demanda en vigor</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#other_data" role="tab">Otros Datos relevantes</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#social_info" role="tab">Información Social</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#diagnostic" role="tab">Info. Sanitaria</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#documents" role="tab">Documentación</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#history" role="tab">Historial</a>
                </li>


            </ul><!-- Tab panes -->


            <div class="tab-content">
                <div class="tab-pane active" id="general" role="tabpanel">
                    <?php echo $__env->make('patients.edit.personal_data', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>

                <div class="tab-pane" id="social_info" role="tabpanel">
                    <?php echo $__env->make('patients.edit.social_info', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>

                <div class="tab-pane" id="other_data" role="tabpanel">
                    <?php echo $__env->make('patients.edit.other_data', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>

                <div class="tab-pane" id="diagnostic" role="tabpanel">


                    <?php echo $__env->make('patients.edit.health_info', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>






                </div>

                <div class="tab-pane" id="carer" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-12 float-right mb-3">
                            <button type="button" class="btn btn-secondary float-right" data-toggle="modal"
                                data-target="#carer_modal">
                                Añadir Persona de Referencia <i class="fas fa-file-upload"></i>
                            </button>
                        </div>
                    </div>

                    <?php echo $__env->make('patients.show.show_carer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


                </div>

                <div class="tab-pane" id="services" role="tabpanel">

                    <ul class="nav nav-tabs bg-light mb-3" id="myTab" role="tablist" style="margin-top:-24px;">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#tipos_servicio" role="tab"
                                aria-controls="home" aria-selected="true">Tipo de servicio</a>
                        </li>

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
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#especificaciones" role="tab"
                                aria-controls="profile" aria-selected="false">Especificaciones SPAPD</a>
                        </li>
                        <?php endif; ?>



                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#transporte" role="tab"
                                aria-controls="contact" aria-selected="false">Transporte</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#economicos" role="tab"
                                aria-controls="contact" aria-selected="false">Datos económicos</a>
                        </li>
                    </ul>


                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="tipos_servicio" role="tabpanel"
                            aria-labelledby="home-tab">
                            <div class="row">

                                <div class="col-lg-12">
                                    <button type="button" class="btn btn-secondary my-3 float-right" data-toggle="modal"
                                        data-target="#service_modal">
                                        Añadir Servicio <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="row">
                                <?php echo $__env->make('patients.show.show_services', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="especificaciones" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="button" class="btn btn-secondary my-3 float-right" data-toggle="modal"
                                        data-target="#spapd_modal">
                                        Añadir programa <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <?php echo $__env->make('patients.show.show_spapd', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>

                        <div class="tab-pane fade" id="transporte" role="tabpanel" aria-labelledby="contact-tab">

                            <?php echo $__env->make('patients.edit.transport', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        </div>

                        <div class="tab-pane fade" id="economicos" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="py-4">Datos económicos</h3>
                                </div>

                                <?php echo $__env->make('patients.edit.add_economy', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end tab pane -->

                <div class="tab-pane" id="history" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-12">
                            <button type="button" class="btn btn-secondary my-3 float-right" data-toggle="modal"
                                data-target="#history_modal" data-id=<?php echo e($patient->id); ?>>
                                Añadir historial <i class="fas fa-file-upload"></i>
                            </button>
                        </div>

                    </div>
                    <?php echo $__env->make('patients.show.show_history', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>

                <div class="tab-pane" id="documents" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-12">
                            <button type="button" class="btn btn-secondary my-3 float-right" data-toggle="modal"
                                data-target="#documents_modal" data-id=<?php echo e($patient->id); ?>>
                                Añadir documento <i class="fas fa-file-upload"></i>
                            </button>
                        </div>
                    </div>
                    <?php echo $__env->make('patients.show.show_documents', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>

                <div class="tab-pane" id="pias" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-12">
                            <button type="button" class="btn btn-secondary my-3 float-right" data-toggle="modal"
                                data-target="#pias_modal" data-id=<?php echo e($patient->id); ?>>
                                Añadir pia <i class="fas fa-file-upload"></i>
                            </button>
                        </div>
                    </div>

                    <?php echo $__env->make('patients.show.show_pias', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                </div>
            </div>
            <!--tabpanel-->
        </div>

        <!-- Submit Field -->
        <div class="col-sm-12">
            <?php echo Form::submit('Guardar', ['class' => 'btn btn-primary float-right', 'value' => 'guardar', 'name' =>
            'action']); ?>

            <?php echo Form::submit('Guardar y salir', ['class' => 'btn btn-secondary float-right', 'value' =>
            'guardar_y_salir', 'name' => 'action']); ?>

            <a class="float-right btn btn-danger " href="/patients">Cancelar</a>
            <?php echo Form::close(); ?>

        </div>

    </div>

</div>
<!--end container-->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
    // Añadir link tab
    var hash = document.location.hash;
    var prefix = "tab_";
    if (hash) {
        $('.nav-tabs a[href="' + hash.replace(prefix, "") + '"]').tab('show');
    }
    // Change on page reload
    $('.nav-tabs a').on('shown', function(e) {
        window.location.hash = e.target.hash.replace("#", "#" + prefix);
    });
</script>

<script type="text/javascript">
    $('.time_picker').datetimepicker({
        format: 'HH:mm'
    });

    $(".spapd_add_day").click(function(){
        var url = "<?php echo e(url('/patientSpapdDays')); ?>" + "?patient_spapd_id=" +  $(this).attr('data-id');
        $("#frm_spapd_days").attr('action',url);
        $("#spadp_title").html($(this).attr('data-title'));
        $("#spapd_dia_modal").modal('show');
    })

    $(".day_check").click(function(){
        if($(this).is(':checked')){
            $($(this).attr('data-ref')).prop('disabled', false);
        }else{
            $($(this).attr('data-ref')).prop('disabled', true);
        }
    });

    $("#btnSubmitSpadpDay").click(function(){
        var url = $("#frm_spapd_days").attr('action');
        var data = $("#frm_spapd_days").serialize();
        $.post(url, data).done(function(response) {
            if(response.success){
                alert("Horas añadida correctamente");
                location.reload();
            }else{
                alert("No se puede añadir los horarios");
            }
            
        });
    })
</script>

<!-- SHOWUP -->
<script type="text/javascript">
    function showInput(val, id) {
        switch (true) {
            case id == 'ayuda_dep':
                if (val !== "Otras") {
                    $("#ayudaDep").removeAttr('name');
                    $("#ayuda_dep_cont").attr('hidden', 'hidden').hide();
                } else {
                    $("#ayuda_dep_cont").removeAttr('hidden').show();
                    $("#ayudaDep").attr('name', 'ayuda_dep');
                }
                break;
            case id == 'ayuda_soc':
                if (val !== "Otros") {
                    $("#ayudaSoc").removeAttr('name');
                    $("#ayuda_soc_cont").attr('hidden', 'hidden').hide();
                } else {
                    $("#ayuda_soc_cont").removeAttr('hidden').show();
                    $("#ayudaSoc").attr('name', 'ayuda_soc');
                }
                break;
            case id == 'nivel_educativo':
                if (val !== "Otros") {
                    $("#nivelEducativo").removeAttr('name');
                    $("#nivel_educativo_cont").attr('hidden', 'hidden').hide();
                } else {
                    $("#nivel_educativo_cont").removeAttr('hidden').show();
                    $("#nivelEducativo").attr('name', 'nivel_educativo');
                }
                break;
            case id == 'tipo_vivienda':
                if (val !== "Otros (especificar)") {
                    $("#tipoVivienda").removeAttr('name');
                    $("#tipo_vivienda_cont").attr('hidden', 'hidden').hide();
                } else {
                    $("#tipo_vivienda_cont").removeAttr('hidden').show();
                    $("#tipoVivienda").attr('name', 'tipo_vivienda');
                }
                break;
            case id == 'alergia':
                if (val !== "Otras") {
                    // $("#alergiaOtro").removeAttr('name');
                    $("#alergia_cont").attr('hidden', 'hidden').hide();
                } else {
                    $("#alergia").removeAttr('name');
                    $("#alergia_cont").removeAttr('hidden').show();
                    $("#alergiaOtro").attr('name', 'alergia[]');
                }
                break;
            case id == 'patologia':
                if (val !== "Otras") {
                    $("#patologia_cont").attr('hidden', 'hidden').hide();
                } else {
                    $("#patologia").removeAttr('name');
                    $("#patologia_cont").removeAttr('hidden').show();
                    $("#patologiaOtro").attr('name', 'patologia[]');
                }
                break;
            default:
                console.log('YA PASO');
                break;
        }
    }
</script>

<script>
    function ShowModal(elem) {
        var dataId = $(elem).data("id");
        $('input[name="patient_service_id"]').val(dataId);
    }
</script>

<script>
    function diagCon(val, id) {
        var aux = document.querySelectorAll(".flagg");
                aux.forEach(element => {
                    element.removeAttribute("name");
                });
        var aux2 = document.querySelectorAll(".flaggy");
                aux2.forEach(element => {
                    element.setAttribute("hidden", "hidden");
                });
        switch (true) {
            case val == 'Demencias':
                    $("#demencia_content").removeAttr('hidden').show();
                    $("#demencia_content select").attr('name', 'diagnos_concreto[]');
                    const element = document.querySelector('div#demencia_content select');
                    element.addEventListener('change', (e) => {
                        if(e.target.value != 'Otras') {
                            $("#diagnos_concreto_otro").removeAttr('name');
                            $("#diagnos_concreto_cont").attr('hidden', 'hidden').hide();
                        } else {
                            $("#diagnos_concreto_cont").removeAttr('hidden').show();
                            $("#diagnos_concreto_otro").attr('name', 'diagnos_concreto[]');
                        }
                    });
            break;
            case val == 'Neurológico':
                    $("#neuro_content").removeAttr('hidden').show();
                    $("#neuro_content select").attr('name', 'diagnos_concreto[]');
                    const element2 = document.querySelector('div#neuro_content #diagnos_concreto');
                    element2.addEventListener('change', (e) => {
                    if(e.target.value != 'Otras') {
                        $("#diagnos_concreto_otro").removeAttr('name');
                        $("#diagnos_concreto_cont").attr('hidden', 'hidden').hide();
                    } else {
                        $("#diagnos_concreto_cont").removeAttr('hidden').show();
                        $("#diagnos_concreto_otro").attr('name', 'diagnos_concreto[]');
                    }
                });
            break;
            case val == 'Diversidad Física':
                    $("#diver_fisica_content").removeAttr('hidden').show();
                    $("#diver_fisica_content select").attr('name', 'diagnos_concreto[]');
                    const element3 = document.querySelector('div#diver_fisica_content #diagnos_concreto');
                    element3.addEventListener('change', (e) => {
                    if(e.target.value != 'Otras') {
                        $("#diagnos_concreto_otro").removeAttr('name');
                        $("#diagnos_concreto_cont").attr('hidden', 'hidden').hide();
                    } else {
                        $("#diagnos_concreto_cont").removeAttr('hidden').show();
                        $("#diagnos_concreto_otro").attr('name', 'diagnos_concreto[]');
                    }
                    });
            break;
            case val == 'Diversidad Intelectual':
                    $("#diversidad_intel_content").removeAttr('hidden').show();
                    $("#diversidad_intel_content select").attr('name', 'diagnos_concreto[]');
                    const element4 = document.querySelector('div#diversidad_intel_content #diagnos_concreto');
                    element4.addEventListener('change', (e) => {
                    if(e.target.value != 'Otras') {
                        $("#diagnos_concreto_otro").removeAttr('name');
                        $("#diagnos_concreto_cont").attr('hidden', 'hidden').hide();
                    } else {
                        $("#diagnos_concreto_cont").removeAttr('hidden').show();
                        $("#diagnos_concreto_otro").attr('name', 'diagnos_concreto[]');
                    }
                    });
            break;
            case val == 'Diversidad Psíquico-Afectivo':
                    $("#diver_psiqAfect_content").removeAttr('hidden').show();
                    $("#diver_psiqAfect_content select").attr('name', 'diagnos_concreto[]');
                    const element5 = document.querySelector('div#diver_psiqAfect_content #diagnos_concreto');
                    element5.addEventListener('change', (e) => {
                    if(e.target.value != 'Otras') {
                        $("#diagnos_concreto_otro").removeAttr('name');
                        $("#diagnos_concreto_cont").attr('hidden', 'hidden').hide();
                    } else {
                        $("#diagnos_concreto_cont").removeAttr('hidden').show();
                        $("#diagnos_concreto_otro").attr('name', 'diagnos_concreto[]');
                    }
                    });
            break;
            case val == 'Cardiopatías':
                    $("#cardio_content").removeAttr('hidden').show();
                    $("#cardio_content select").attr('name', 'diagnos_concreto[]');
                    const element6 = document.querySelector('div#cardio_content #diagnos_concreto');
                    element6.addEventListener('change', (e) => {
                    if(e.target.value != 'Otras') {
                        $("#diagnos_concreto_otro").removeAttr('name');
                        $("#diagnos_concreto_cont").attr('hidden', 'hidden').hide();
                    } else {
                        $("#diagnos_concreto_cont").removeAttr('hidden').show();
                        $("#diagnos_concreto_otro").attr('name', 'diagnos_concreto[]');
                    }
                    });
            break;
            case val == 'Prob. Respiratorios':
                    $("#prob_resp_content").removeAttr('hidden').show();
                    $("#prob_resp_content select").attr('name', 'diagnos_concreto[]');
                    const element7 = document.querySelector('div#prob_resp_content #diagnos_concreto');
                    element7.addEventListener('change', (e) => {
                    if(e.target.value != 'Otras') {
                        $("#diagnos_concreto_otro").removeAttr('name');
                        $("#diagnos_concreto_cont").attr('hidden', 'hidden').hide();
                    } else {
                        $("#diagnos_concreto_cont").removeAttr('hidden').show();
                        $("#diagnos_concreto_otro").attr('name', 'diagnos_concreto[]');
                    }
                    });
            break;
            default:
                console.log('Default!!');
            break;
    }
}
</script>

<script type="text/javascript">
    function indicadores_multi(val, id) {
        switch (true) {
        case id == 'incontinencia':
            if (val == "" || val == "Ninguna") {
                $("#incontinencia_multi_content").attr('hidden', 'hidden').hide();
            } else {
                $("#incontinencia_multi_content").removeAttr('hidden').show();
            }
        break;
        case id == 'caida':
            if (val == "" || val == "Ninguna") {
                $("#riesgo_caida_multi_content").attr('hidden', 'hidden').hide();
            } else {
                $("#riesgo_caida_multi_content").removeAttr('hidden').show();
            }
        break;
        case id == 'dieta':
            if (val == "" || val == "Ninguna") {
                $("#dieta_textura_content").attr('hidden', 'hidden').hide();
                $("#dieta_observ_cont").attr('hidden', 'hidden').hide();
            } else {
                $("#dieta_textura_content").removeAttr('hidden').show();
                $("#dieta_observ_cont").removeAttr('hidden').show();
            }
        break;
        case id == 'higiene':
            if (val == "" || val == "Ninguna") {
                $("#higiene_multi_content").attr('hidden', 'hidden').hide();
            } else {
                $("#higiene_multi_content").removeAttr('hidden').show();
            }
        break;
        case id == 'hidratacion':
            if (val == "" || val == "Ninguna") {
                $("#hidratacion_observ_cont").attr('hidden', 'hidden').hide();
            } else {
                $("#hidratacion_observ_cont").removeAttr('hidden').show();
            }
        break;
        default:
        console.log('YA PASO');
        break;
        }
    }
</script>

<script type="text/javascript">
    function histo_accion(val, id) {
        var aux = document.querySelectorAll(".flag");
                    aux.forEach(element => {
                    element.removeAttribute("name");
                    });
        var aux2 = document.querySelectorAll(".flagy");
                aux2.forEach(element => {
                element.setAttribute("hidden", "hidden");
                });
        console.log(val + ' ' + id);
        switch (true) {
            case val == 'Solicitud Demandas' || val == 'Formalización Demandas':
                    $("#solic_demandas_cont").removeAttr('hidden').show();
                    $("#solic_demandas_cont select").attr('name', 'acc_subtipo_accion');
                    const element = document.querySelector('div#solic_demandas_cont #acc_subtipo_accion');
                    element.addEventListener('change', (e) => {
                        if(e.target.value != 'Otras (especificar)') {
                            $("#acc_subtipo_accion_otro").removeAttr('name');
                            $("#acc_subtipo_accion_otro_cont").attr('hidden', 'hidden').hide();
                        } else {
                            $("#acc_subtipo_accion_otro_cont").removeAttr('hidden').show();
                            $("#acc_subtipo_accion_otro").attr('name', 'acc_subtipo_accion');
                        }
                    });
            break;
            case val == 'Tipo intervenciones en Centro':
                    $("#interv_centro_cont").removeAttr('hidden').show();
                    $("#interv_centro_cont select").attr('name', 'acc_subtipo_accion');
                    const element2 = document.querySelector('div#interv_centro_cont #acc_subtipo_accion');
                    element2.addEventListener('change', (e) => {
                    if(e.target.value != 'Otras (especificar)') {
                        $("#acc_subtipo_accion_otro").removeAttr('name');
                        $("#acc_subtipo_accion_otro_cont").attr('hidden', 'hidden').hide();
                    } else {
                        $("#acc_subtipo_accion_otro_cont").removeAttr('hidden').show();
                        $("#acc_subtipo_accion_otro").attr('name', 'acc_subtipo_accion');
                    }
                });
            break;
            case val == 'Tipo de intervenciones en Domicilio':
                    $("#interv_domic_cont").removeAttr('hidden').show();
                    $("#interv_domic_cont select").attr('name', 'acc_subtipo_accion');
                    const element3 = document.querySelector('div#interv_domic_cont #acc_subtipo_accion');
                    element3.addEventListener('change', (e) => {
                    if(e.target.value != 'Otras (especificar)') {
                        $("#acc_subtipo_accion_otro").removeAttr('name');
                        $("#acc_subtipo_accion_otro_cont").attr('hidden', 'hidden').hide();
                    } else {
                        $("#acc_subtipo_accion_otro_cont").removeAttr('hidden').show();
                        $("#acc_subtipo_accion_otro").attr('name', 'acc_subtipo_accion');
                    }
                    });
            break;
            case val == 'Seguimiento de Salud':
                    $("#seg_salud_cont").removeAttr('hidden').show();
                    $("#seg_salud_cont select").attr('name', 'acc_subtipo_accion');
                    const element4 = document.querySelector('div#seg_salud_cont #acc_subtipo_accion');
                    element4.addEventListener('change', (e) => {
                    if(e.target.value != 'Otras (especificar)') {
                        $("#acc_subtipo_accion_otro").removeAttr('name');
                        $("#acc_subtipo_accion_otro_cont").attr('hidden', 'hidden').hide();
                    } else {
                        $("#acc_subtipo_accion_otro_cont").removeAttr('hidden').show();
                        $("#acc_subtipo_accion_otro").attr('name', 'acc_subtipo_accion');
                    }
                    });
            break;
            case val == 'Documentación':
                    $("#docu_cont").removeAttr('hidden').show();
                    $("#docu_cont select").attr('name', 'acc_subtipo_accion');
                    const element5 = document.querySelector('div#docu_cont #acc_subtipo_accion');
                    element5.addEventListener('change', (e) => {
                    if(e.target.value != 'Otras (entregar)') {
                        $("#acc_subtipo_accion_otro").removeAttr('name');
                        $("#acc_subtipo_accion_otro_cont").attr('hidden', 'hidden').hide();
                    } else {
                        $("#acc_subtipo_accion_otro_cont").removeAttr('hidden').show();
                        $("#acc_subtipo_accion_otro").attr('name', 'acc_subtipo_accion');
                    }
                    });
            break;
            case val == 'Contabilidad':
                    $("#contab_cont").removeAttr('hidden').show();
                    $("#contab_cont select").attr('name', 'acc_subtipo_accion');
                    const element6 = document.querySelector('div#contab_cont #acc_subtipo_accion');
                    element6.addEventListener('change', (e) => {
                    if(e.target.value != 'Otros (especificar)') {
                        $("#acc_subtipo_accion_otro").removeAttr('name');
                        $("#acc_subtipo_accion_otro_cont").attr('hidden', 'hidden').hide();
                    } else {
                        $("#acc_subtipo_accion_otro_cont").removeAttr('hidden').show();
                        $("#acc_subtipo_accion_otro").attr('name', 'acc_subtipo_accion');
                    }
                    });
            break;
            case val == 'Otras':
            break;
            default:
                console.log('Default!!')
            break;
    }
}

//Default 'Otras Default' en tipo accion
const element7 = document.querySelector('#acc_tipo_accion');
element7.addEventListener('change', (e) => {
    if(e.target.value != 'Otras') {
        $("#acc_subtipo_accion_otro").removeAttr('name');
        $("#acc_subtipo_accion_otro_cont").attr('hidden', 'hidden').hide();
    } else {
        $("#acc_subtipo_accion_otro_cont").removeAttr('hidden').show();
        $("#acc_subtipo_accion_otro").attr('name', 'acc_tipo_accion');
    }
});
</script>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/patients/edit.blade.php ENDPATH**/ ?>