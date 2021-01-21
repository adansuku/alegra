@extends('layouts.home')
@section('title', "Show")
@section('content')

<div class="container-fluid">
    <!-- Page Heading -->    
    <div class="card mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Vista general persona atendida</h6>
        </div>
        <div class="card-body p-4">
            @include('patients.show_fields')
            <a href="{!! route('patients.index') !!}" class="btn btn-primary float-right">Atrás</a>
        </div>
    </div>
</div>
@endsection


