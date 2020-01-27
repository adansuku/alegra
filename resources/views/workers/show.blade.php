@extends('layouts.home')
@section('title', "Show")
@section('content')

<div class="container-fluid">
    <div class="card mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Mostrando trabajador/a</h6>
        </div>
        <div class="card-body p-4">
            @include('workers.show_fields')
            <a href="{!! route('workers.index') !!}" class="btn btn-primary float-right">Atrás</a>
        </div>
    </div>
</div>
@endsection
