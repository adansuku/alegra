@extends('layouts.home')
@section('title', "Edit")
@section('content')

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 my-3 text-gray-800">Persona de Referencia</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edición</h6>
        </div>
        <div class="card-body">
            {!! Form::model($patientCarer, ['route' => ['patientCarers.update', $patientCarer->id], 'method' => 'patch']) !!}

            @include('patient_carers.fields')

            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection