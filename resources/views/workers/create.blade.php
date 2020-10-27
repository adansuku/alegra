@extends('layouts.home')
@section('title', "Create")
@section('content')

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Trabajadores/as</h1>
    @include('laradminbs4-templates::common.errors')
    <br>
    <div class="card mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Nuevo trabajador/a</h6>
        </div>
        <div class="card-body p-4">
            {!! Form::open(['url' => route('workers.store', []),'method' => 'POST']) !!}      
            @include('workers.create.new_user')

                <div class="form-group col-sm-12 px-0">
                    {!! Form::submit('Crear trabajador/a', ['class' => 'btn btn-primary float-right']) !!}
                    <a href="{!! route('workers.index') !!}" class="btn btn-outline-danger float-right mx-2">Cancelar</a>
                </div>

            {!! Form::close() !!}

        </div>
    </div>
</div>
@endsection
