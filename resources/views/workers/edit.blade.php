@extends('layouts.home') @section('title', "Edit") @section('content')

<!-- Include -->
@include('workers.modals.documents_modal')
@include('workers.modals.labor_modal')
@include('workers.modals.history_modal')
@include('workers.modals.update_password')
<div class="container-fluid">
    <div class="card" id="editar_worker">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Editando trabajador/a</h6>

            {{ count($errors) > 0 ? dd($errors->all()) : ''}}
        </div>

        <div class="card-body p-4">
            {!! Form::model($worker, ['route' => ['workers.update', $worker->id], 'method' => 'patch', 'enctype' => 'multipart/form-data']) !!}

            <ul class="nav nav-pills flex-column flex-sm-row " role="tablist" id="myTab">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#generales" role="tab">Datos generales</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#voluntariado" role="tab">Prácticas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#otros" role="tab">Otros datos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#urgencia" role="tab">Contacto Urgencia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#laboral" role="tab">Relación laboral</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#documentation" role="tab">Documentación</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#history" role="tab">Historial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#people" role="tab">Personas Atendidas</a>
                </li>
            </ul>
            <!-- Tab panes -->

            <div class="tab-content">
                <div class="tab-pane active" id="generales" role="tabpanel">
                    @include('workers.partials.general_data')
                </div>

                <div class="tab-pane" id="voluntariado" role="tabpanel">
                    @include('workers.partials.practice')
                </div>

                <div class="tab-pane" id="otros" role="tabpanel">
                    @include('workers.partials.other_data')
                </div>

                <div class="tab-pane" id="urgencia" role="tabpanel">
                    @include('workers.partials.urgency')
                </div>

                <div class="tab-pane" id="laboral" role="tabpanel">
                    <div class="row">
                        <div class="col-sm-7">
                            <p class="my-3"><strong>Relación laboral del usuario:</strong> {{$worker->nombre}} {{$worker->apellido}}
                            </p>
                        </div>
                        <div class="col-sm-5 text-right">
                            <button type="button" class="btn-block btn btn-primary my-3 " data-toggle="modal" data-target="#labor_modal">
                                Añadir Relación Laboral <i class="fas fa-file-upload"></i>
                            </button>
                        </div>
                    </div>
                    <div class="">
                        @include('workers.partials.relation_lab') @include('workers.show.show_labors')
                    </div>
                </div>

                <div class="tab-pane" id="documentation" role="tabpanel">
                    <div class="row">
                        <div class="col-sm-9">
                            <p class="my-3"><strong>Documentos del usuario:</strong> {{$worker->nombre}} {{$worker->apellido}}
                            </p>
                        </div>
                        <div class="col-sm-3 text-right">
                            <button type="button" class="btn btn-primary my-3 " data-toggle="modal" data-target="#documents_modal">
                                Añadir documento <i class="fas fa-file-upload"></i>
                            </button>
                        </div>
                    </div>
                    <!--row-->
                    @include('workers.show.show_documents')

                </div>
                <!--tabpanel-->


                <div class="tab-pane" id="history" role="tabpanel">
                    <div class="row">
                        <div class="col-sm-9">
                            <p class="my-3"><strong>Historial de</strong> {{$worker->nombre}} {{$worker->apellido}}</p>
                        </div>
                        <div class="col-sm-3 text-right">
                            <button type="button" class="btn btn-primary my-3 " data-toggle="modal" data-target="#history_modal">
                                Añadir historial <i class="fas fa-file-upload"></i>
                            </button>
                        </div>
                        @include('workers.show.show_histories')
                    </div>
                </div>


                <div class="tab-pane" id="people" role="tabpanel">
                    @include('workers.partials.people')
                </div>
                <!--tabpanel-->
            </div>
            <!--end tab-content-->

            {!! Form::submit('Guardar', ['class' => 'btn btn-primary float-right', 'value' => 'guardar', 'name' => 'action']) !!} {!! Form::submit('Guardar y salir', ['class' => 'btn btn-secondary float-right', 'value' => 'guardar_y_salir', 'name' => 'action']) !!}
            {!! Form::close() !!}
            <button class="btn btn-default float-right" onclick="window.location.href='/workers'">Cancelar</button>
        </div>

    </div>
</div>
@endsection

<!-- Scripts -->
@push('scripts')
<script>
    // Añadir link tab
    var hash = document.location.hash;
    var prefix = "tab_";

    if (hash) {
        $('.nav-pills a[href="' + hash.replace(prefix, "") + '"]').tab('show');
    }

    // Change on page reload
    $('.nav-pills a').on('shown', function(e) {
        window.location.hash = e.target.hash.replace("#", "#" + prefix);
    });
</script>
@endpush