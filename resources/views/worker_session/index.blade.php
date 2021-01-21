@extends('layouts.home')
@section('title', "Mi área personal")
@push('css')
    <link href="{{asset('vendor/datatable/css/datatable.css')}}" rel="stylesheet">
@endpush
@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-md-12">
            <h1 class="h3 mb-2 text-gray-800">Area Personal</h1>
        </div>
    </div>

    <br />
    <br />

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Sesiones Registradas</h6>

                        
            <h1 class="float-sm-right">
                
            </h1>
            <div class="clearfix"></div>
            @include('flash::message')
        </div>
        <div class="card-body">
            <div class="table-responsive">
                @include('worker_session.table')
            </div>
        </div>
    </div>
    
</div>
@endsection
@push('scripts')
    <script src="{{asset('vendor/datatable/js/datatable.js')}}"></script>
    <script src="{{asset('vendor/datatable/js/datatables-init.js')}}"></script>
@endpush
