@extends('layouts.home')
@section('title', "Edit")
@section('content')

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mt-4 text-gray-800">Editando pia de {{$patientPia->patient->nombre}}</h1>
    <div class="card shadow mb-4">
        <div class="card-body">
        {!! Form::model($patientPia, ['route' => ['patientPias.update', $patientPia->id], 'method' => 'patch', 'enctype' =>'multipart/form-data']) !!}
            @include('patient_pias.fields')
        {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection