@extends('layouts.home')
@section('title', "Create")
@section('content')

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Personas atendidas</h1>
    @include('laradminbs4-templates::common.errors')
    <br>
    <div class="card mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Crear nueva Persona</h6>
        </div>
        <div class="card-body p-4">
            {!! Form::open(['route' => 'patients.store']) !!}
            @include('patients.create.create_patient')
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
