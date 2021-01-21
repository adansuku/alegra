@extends('layouts.home')
@section('title', "Edit")
@section('content')

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mt-4 pl-2 text-gray-800">Editar servicio</h1>
    <br>
    <div class="card shadow mb-4">
        <div class="card-body">
            {!! Form::model($patientService, ['route' => ['patientServices.update', $patientService->id], 'method' =>
            'patch']) !!}

            @include('patient_services.fields')

            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection