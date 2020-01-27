@extends('layouts.home')
@section('title', "Edit")
@section('content')

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Patient Service</h1>
    <br>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edition</h6>
        </div>
        <div class="card-body">
            {!! Form::model($patientService, ['route' => ['patientServices.update', $patientService->id], 'method' => 'patch']) !!}

            @include('patient_services.fields')

            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection