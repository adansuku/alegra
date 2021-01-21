@extends('layouts.home')
@section('title', "Tables")
@push('css')
    <link href="{{mix('vendor/datatable/css/datatable.css')}}" rel="stylesheet">
@endpush
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Patient Services</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            <h1 class="float-sm-right">
                <a class="btn btn-primary" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('patientServices.create') !!}">Add New</a>
            </h1>
            <div class="clearfix"></div>
            @include('flash::message')
        </div>
    <div class="card-body">
        <div class="table-responsive">
            @include('patient_services.table')
        </div>
    </div>
    </div>
</div>
@endsection
@push('scripts')
    <script src="{{mix('vendor/datatable/js/datatable.js')}}"></script>
    <script src="{{asset('vendor/datatable/js/datatables-init.js')}}"></script>
@endpush
