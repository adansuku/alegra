

@extends('layouts.home')
@section('title', "Tables")
@section('content')
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow p-4">
        <div class="row">
            <div class="col-md-6">
                <h1 class="h3 mb-2 text-gray-800">Trabajadoras</h1>
            </div>
            <div class="col-md-6">
                <div class="float-sm-right">
                    <a class="btn btn-primary add-worker"
                        href="{!! route('workers.create') !!}">Añadir Trabajador</a>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        @include('flash::message')
                @include('workers.show.show_table')

    </div>
</div>
@endsection
