@extends('layouts.home')
@section('title', "Show")
@section('content')

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Patient Medication</h1>
    <br>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Datos Generales</h6>
        </div>
        <div class="card-body">
            @include('patient_medications.show_fields')
            <a href="{!! route('patientMedications.index') !!}" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>
@endsection
