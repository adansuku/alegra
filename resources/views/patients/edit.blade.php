@extends('layouts.home')
@section('title', "Edit")
@section('content')


<!-- Modals -->
@include('patients.modals.patology')
@include('patients.modals.allergy')
@include('patients.modals.diagnostic')
@include('patients.modals.carer')
@include('patients.modals.history')
@include('patients.modals.documents')
@include('patients.modals.pias')
@include('patients.modals.service')
@include('patients.modals.service_dates')
@include('patients.modals.spapd')
@include('patients.modals.spapd_days')
@include('patients.modals.transport')
@include('patients.modals.dates')
@include('patients.modals.doctor')
@include('patients.modals.past')
@include('patients.modals.medication')


<div class="container-fluid">

    <div class="card p-5">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Editando Persona atendida</h4>
        </div>
        {!! Form::model($patient, ['route' => ['patients.update', $patient->id], 'method' => 'patch', 'enctype' =>
        'multipart/form-data']) !!}

        <div class="col-sm-12 p-0">
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
                    @include('patients.edit.personal_data')
                </div>

                <div class="tab-pane" id="social_info" role="tabpanel">
                    @include('patients.edit.social_info')
                </div>

                <div class="tab-pane" id="other_data" role="tabpanel">
                    @include('patients.edit.other_data')
                </div>

                <div class="tab-pane" id="diagnostic" role="tabpanel">


                    @include('patients.edit.health_info')






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

                    @include('patients.show.show_carer')


                </div>

                <div class="tab-pane" id="services" role="tabpanel">

                    <ul class="nav nav-tabs bg-light" id="myTab" role="tablist" style="margin-top:-24px;">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#tipos_servicio" role="tab"
                                aria-controls="home" aria-selected="true">Tipo de servicio</a>
                        </li>

                        @php ($servicios = array())
                        @php ($spapd = 'SPAPD')
                        
                        @foreach($patient->patientServices as $patientService)
                            @php (array_push($servicios,$patientService->nom_servicio))
                        @endforeach

                        @if(in_array($spapd, $servicios)) 
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#especificaciones" role="tab"
                                    aria-controls="profile" aria-selected="false">Especificaciones SPAPD</a>
                            </li>
                        @endif

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
                                @include('patients.show.show_services')
                            </div>
                        </div>

                        <div class="tab-pane fade" id="especificaciones" role="tabpanel" aria-labelledby="profile-tab">
                            
                            @include('patients.show.show_spapd')
                        </div>

                        <div class="tab-pane fade" id="transporte" role="tabpanel" aria-labelledby="contact-tab">

                            @include('patients.edit.transport')

                        </div>

                        <div class="tab-pane fade" id="economicos" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="py-4">Datos económicos</h3>
                                </div>

                                @include('patients.edit.add_economy')
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end tab pane -->

                <div class="tab-pane" id="history" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-12">
                            <button type="button" class="btn btn-secondary my-3 float-right" data-toggle="modal"
                                data-target="#history_modal" data-id={{$patient->id}}>
                                Añadir historial <i class="fas fa-file-upload"></i>
                            </button>
                        </div>

                    </div>
                    @include('patients.show.show_history')
                </div>

                <div class="tab-pane" id="documents" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-12">
                            <button type="button" class="btn btn-secondary my-3 float-right" data-toggle="modal"
                                data-target="#documents_modal" data-id={{$patient->id}}>
                                Añadir documento <i class="fas fa-file-upload"></i>
                            </button>
                        </div>
                    </div>
                    @include('patients.show.show_documents')
                </div>

                <div class="tab-pane" id="pias" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-12">
                            <button type="button" class="btn btn-secondary my-3 float-right" data-toggle="modal"
                                data-target="#pias_modal" data-id={{$patient->id}}>
                                Añadir pia <i class="fas fa-file-upload"></i>
                            </button>
                        </div>
                    </div>

                    @include('patients.show.show_pias')

                </div>
            </div>
            <!--tabpanel-->
        </div>

        <!-- Submit Field -->
        <div class="col-sm-12">
            {!! Form::submit('Guardar', ['class' => 'btn btn-primary float-right', 'value' => 'guardar', 'name' =>
            'action']) !!}
            {!! Form::submit('Guardar y salir', ['class' => 'btn btn-secondary float-right', 'value' =>
            'guardar_y_salir', 'name' => 'action']) !!}
            <a class="float-right btn btn-danger " href="/patients">Cancelar</a>
            {!! Form::close() !!}
        </div>

    </div>

</div>
<!--end container-->
@endsection

@push('scripts')
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
        var url = "{{ url('/patientSpapdDays') }}" + "?patient_spapd_id=" +  $(this).attr('data-id');
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


@endpush