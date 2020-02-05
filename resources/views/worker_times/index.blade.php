@extends('layouts.home')
@section('title', "Tables")
@push('css')
    <link href="{{mix('vendor/datatable/css/datatable.css')}}" rel="stylesheet">
@endpush
@section('content')

<!-- Modal Add Document-->
<div class="modal fade" id="worker_time_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Añadir hora de entrada</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
{{Auth::user()->id}}
            {!! Form::open(['url' => route('workerTimes.store', ['worker_id' => Auth::user()->id]),'method' => 'POST']) !!}
                @include('worker_times.fields')
            {!! Form::close() !!}

        

            </div>
        </div>
    </div>
</div>
<!--end modal add documents-->


<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Worker Times</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>

            <button type="button" class="btn btn-secondary float-right" 
            data-toggle="modal" data-target="#worker_time_modal">
                Entrada <i class="fas fa-file-upload"></i>
            </button>
            
            <h1 class="float-sm-right">
                <a class="btn btn-primary" style="margin-top: -10px;margin-bottom: 5px" href="#worker_time_modal">Add New</a>
            </h1>
            <div class="clearfix"></div>
            @include('flash::message')
        </div>
        <div class="card-body">
            <div class="table-responsive">
                @include('worker_times.table')
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
    <script src="{{mix('vendor/datatable/js/datatable.js')}}"></script>
    <script src="{{asset('vendor/datatable/js/datatables-init.js')}}"></script>
@endpush
