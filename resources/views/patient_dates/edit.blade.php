@extends('layouts.home')
@section('title', "Edit")
@section('content')

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Patient Date</h1>
    <br>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Editar</h6>
        </div>
        <div class="card-body">
            {!! Form::model($patientDate, ['route' => ['patientDates.update', $patientDate->id], 'method' => 'patch']) !!}

            @include('patient_dates.fields')

            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection