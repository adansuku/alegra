@extends('layouts.home')
@section('title', "Edit")
@section('content')


<div class="container ">


  <div class="row pb-4">
    <div class="col-lg-12">
      <h1 class="text-center mt-5 mb-4 text-dark">Bienvenida a Alegra</h1>
      <h3 class="text-center"><i class="fas fa-heart"></i> Haz lo que amas <i class="fas fa-heart"></i></h3>
    </div>
  </div>

  <div class="row">
    @if(in_array(Auth::user()->role_id,[1,3]))
    <div class="col-lg-3 my-2">
      <a href="/workers" class="btn btn-sq-lg btn-dark p-5 w-100">
        <i class="fas fa-user fa-2x"></i><br />
        <p class="pt-3"> Lista <br>trabajadoras</p>
      </a>
    </div>
    
      @if(Auth::user()->role_id==1)
        <div class="col-lg-3 my-2">
          <a href="/workers/create" class="btn btn-sq-lg btn-dark p-5 w-100">
            <i class="fas fa-user-plus fa-2x"></i></i><br />
            <p class="pt-3">Añadir <br> trabajadora</p>
          </a>
        </div>
      @endif
    @endif

    <div class="col-lg-3 my-2">
      <a href="/patients" class="btn btn-sq-lg btn-dark p-5 w-100">
        <i class="fas fa-users fa-2x"></i><br />
        <p class="pt-3">Lista personas atendidas</p>
      </a>
    </div>
    @if(Auth::user()->role_id == 2)
    <div class="col-lg-3 my-2">
      <a href="/patients/create" class="btn btn-sq-lg btn-dark text-white p-5 w-100">
        <i class="fas fa-users fa-2x"></i> <i class="fas fa-plus-square"></i><br />
        <p class="pt-3">Añadir persona atendida</p>
      </a>
    </div>
    @endif



  </div>
</div>

@endsection