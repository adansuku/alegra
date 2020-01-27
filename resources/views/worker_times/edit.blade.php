@extends('layouts.home')
@section('title', "Edit")
@section('content')

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Worker Time</h1>
    <br>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edition</h6>
        </div>
        <div class="card-body">
            {!! Form::model($workerTime, ['route' => ['workerTimes.update', $workerTime->id], 'method' => 'patch']) !!}

            @include('worker_times.fields')

            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection