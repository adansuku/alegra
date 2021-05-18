@extends('layouts.home')
@section('title', "Edit")
@section('content')

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 mt-2 text-gray-800">Editar Centro</h1>
    <br>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Editar</h6>
        </div>
        <div class="card-body">
            {!! Form::model($patientCentro, ['route' => ['patientCentro.update', $patientCentro->id], 'method' => 'patch']) !!}

            @include('patient_centros.fields')

            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection