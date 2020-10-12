@extends('layouts.home')
@section('title', "Create")
@section('content')

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Patient  Services  Date</h1>
    @include('laradminbs4-templates::common.errors')
    <br>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Insert Register</h6>
        </div>
        <div class="card-body">
            {!! Form::open(['route' => 'patientServicesDates.store']) !!}

            @include('patient__services__dates.fields')

            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
