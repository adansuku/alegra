@extends('layouts.home')
@section('title', "Edit")
@section('content')

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Patient Spapd</h1>
    <br>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edition</h6>
        </div>
        <div class="card-body">
            {!! Form::model($patientSpapd, ['route' => ['patientSpapds.update', $patientSpapd->id], 'method' => 'patch']) !!}

            @include('patient_spapds.fields')

            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection