

@extends('layouts.home')
@section('title', "Mis Personas Atendidas")
@section('content')
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow p-4">
        <div class="row">
            <div class="col-md-6">
                <h1 class="h3 mb-2 text-gray-800">Personas Atendidas</h1>
            </div>
            <div class="col-md-6">
                
            </div>
        </div>
        <div class="clearfix"></div>
        @include('flash::message')
        @include('workers.show.show_patients_table')

    </div>
</div>
@endsection
