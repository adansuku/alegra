<?php $__env->startSection('title', "Edit"); ?>
<?php $__env->startSection('content'); ?>


<div class="container ">


  <div class="row pb-4">
    <div class="col-lg-12">
      <h1 class="text-center mt-5 mb-4 text-dark">Bienvenida a Alegra</h1>
      <h3 class="text-center"><i class="fas fa-heart"></i> Haz lo que amas <i class="fas fa-heart"></i></h3>
    </div>
  </div>

  <div class="row">

    <div class="col-lg-3 my-2">
      <a href="/workers" class="btn btn-sq-lg btn-dark p-5 w-100">
        <i class="fas fa-user fa-2x"></i><br />
        <p class="pt-3"> Lista <br>trabajadoras</p>
      </a>
    </div>

    <div class="col-lg-3 my-2">
      <a href="/workers/create" class="btn btn-sq-lg btn-dark p-5 w-100">
        <i class="fas fa-user-plus fa-2x"></i></i><br />
        <p class="pt-3">Añadir <br> trabajadora</p>
      </a>
    </div>

    <div class="col-lg-3 my-2">
      <a href="/patients" class="btn btn-sq-lg btn-dark p-5 w-100">
        <i class="fas fa-users fa-2x"></i><br />
        <p class="pt-3">Lista personas atendidas</p>
      </a>
    </div>

    <div class="col-lg-3 my-2">
      <a href="/patients/create" class="btn btn-sq-lg btn-dark text-white p-5 w-100">
        <i class="fas fa-users fa-2x"></i> <i class="fas fa-plus-square"></i><br />
        <p class="pt-3">Añadir persona atendida</p>
      </a>
    </div>



  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/layouts/dashboard.blade.php ENDPATH**/ ?>