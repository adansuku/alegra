<div class="buttons">

    <?php echo Form::open(['route' => ['workers.destroy', $worker->id], 'method' => 'delete']); ?>

            <div class='btn-group float-right'>
                <a href="<?php echo route('workers.edit', [$worker->id]); ?>" class='btn btn-primary btn-xs'>
                    <i class="far fa-edit"></i> Editar
                </a>
                <?php echo Form::button('<i class="far fa-trash-alt"></i> Eliminar', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Vamos a proceder a eliminar un elemento. ¿Estas seguro/a?')"]); ?>

            </div>
            <?php echo Form::close(); ?>

</div>

<div class="avatar" style="background-image:url(<?php echo e(asset("storage/$worker->avatar")); ?>)"></div>


<style>
.row {
    background: #fbf5f5;
    padding: 20px 20px 10px 20px;
    margin: 20px 0px;
}
</style>
















<div class="row">

<div class="col-lg-12"><h5><strong>Datos personales</strong></h5><hr></div>
    <div class="col-sm-12 col-lg-4 my-3 h-100">
        
        
        <!-- Nombre Field -->
        <small>Fecha Alta:</small>
        <h6><strong><?php echo e(date('d / m / Y', strtotime($worker->fecha_alta))); ?></strong></h6>

        <small>Nombre:</small>
        <h6><strong><?php echo $worker->nombre; ?></strong></h6>

        <!-- Apellido Field -->
        <small>Apellido:</small>
        <h6><strong><?php echo $worker->apellido; ?></strong></h6>

    
    </div>




    <div class="col-sm-12 col-lg-4 my-3 h-100">
       
        <!-- Fecha Nacimiento Field -->
        <small>Fecha de nacimiento</small>
        <h6><strong><?php echo e($worker->fecha_nacimiento->format('d/m/Y')); ?></strong></h6>

        <!-- Dni Field -->
        <small>Dni</small>
        <h6><strong><?php echo $worker->dni; ?></strong></h6>

        <!-- Direccion Field -->
        <small>Direccion</small>
        <h6><strong><?php echo $worker->direccion; ?></strong></h6>
    </div>




    <div class="col-sm-12 col-lg-4 my-3 h-100">
      
        <!-- Telefono Field -->
        <small>Teléfono personal:</small>
        <h6><strong><?php echo $worker->telefono; ?></strong></h6>

        <!-- Telefono movil Field -->
        <small>Teléfono móvil:</small>
        <h6><strong><?php echo $worker->telefono_movil; ?></strong></h6>

        <small>Email personal</small>
        <h6><strong><?php echo $worker->email; ?></strong></h6>
    </div>

</div>



<div class="row">



    <div class="col-sm-12 col-lg-4 my-3">

        <h5><strong>Otros Datos</strong></h5>
        <hr>

        <small>Cesión imagen:</small>
        <?php if($worker->cesion_imagen == "on"): ?>
        <h6><strong>Autorizado por el/la trabajador/a</strong></h6>
        <?php else: ?>
        <h6><strong>No autorizado</strong></h6>
        <?php endif; ?>
        <br />

        <small>Alergias: </small>
        <h6><strong><?php echo $worker->alergias; ?></strong></h6>

        <small>Otras Alergias: </small>
        <h6><strong><?php echo $worker->otras_alergias; ?></strong></h6>

    </div>

    <div class="col-sm-12 col-lg-4 my-3">

        <h5><strong>Urgencias</strong></h5>
        <hr>
        <small>Contacto urgencias: </small>
        <h6><strong><?php echo $worker->urg_nom_ape; ?></strong></h6>

        <small>Parentesco urgencias: </small>
        <h6><strong><?php echo $worker->urg_parentesco; ?></strong></h6>

        <small>Telefono urgencias: </small>
        <h6><strong><?php echo $worker->urg_telefono; ?></strong></h6>

    </div>

    <div class="col-sm-12 col-lg-4 my-3">

        <h5><strong>Relación laboral</strong></h5>
        <hr>
        <small>Fecha Alta:</small>
        <h6><strong><?php echo e(date('d / m / Y', strtotime($worker->fecha_alta))); ?></strong></h6>


        <small>Fecha Baja: </small>
        <h6><strong><?php echo e(date('d / m / Y', strtotime($worker->fecha_baja))); ?></strong></h6>


        <small>Email corporativo: </small>
        <h6><strong><?php echo $worker->email_corporativo; ?></strong></h6>

        <small>Numero Horas Contratadas: </small>
        <h6><strong><?php echo $worker->numero_horas; ?></strong></h6>

    </div>

</div>

<div class="row">
<div class="col-sm-12 col-lg-4 my-3 ">
        <h5><strong>Datos académicos</strong></h5>
        <hr>
        <small>Categoría profesional:</small>
        <h6><strong><?php echo $worker->cat_profesional; ?></strong></h6>

        <small>Titulación:</small>
        <h6><strong><?php echo $worker->titulacion; ?></strong></h6>

        <small>Centro Acufade:</small>
        <h6><strong><?php echo $worker->centro_acufade; ?></strong></h6>

        <small>Categoría profesional</small>
        <h6><strong><?php echo $worker->cat_profesional; ?></strong></h6>

        <small>Titulación Curso</small>
        <h6><strong><?php echo $worker->titulacion_curso; ?></strong></h6>
    </div>

    <div class="col-sm-12 col-lg-4 my-3">
        <h5><strong>Alumnos en prácticas</strong></h5>
        <hr>
        <small>Tutor Academico</small>
        <h6><strong><?php echo $worker->tutor_academico; ?></strong></h6>

        <small>Teléfono tutor</small>
        <h6><strong><?php echo $worker->tutor_telefono; ?></strong></h6>

        <small>Tutor Email</small>
        <h6><strong><?php echo $worker->titulacion_curso; ?></strong></h6>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 my-3">

        <h5><strong>Personas atendidas asignadas</strong></h5>
        <hr>



        <table class="table" id="" width="100%" cellspacing="0">
            <thead class="table-primary text-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Nombre</th>
                    <th>Ver</th>

                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $worker->patients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>
                        <h6><strong><?php echo $item->nombre; ?>

                    </td>
                    <td>
                        <h6><strong><?php echo $item->apellidos; ?>

                    </td>
                    <td><a href="/patients/<?php echo e($item->id); ?>">Ver datos de la persona</a></td>

                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>




    </div>

    </div>

<div class="row">


    <div class="col-sm-12 my-3">

        <h5><strong>Documentación</strong></h5>
        <hr>

        <?php echo $__env->make('workers.show.show_documents', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>

    </div>

<div class="row">

    <div class="col-sm-12 my-3">

        <h5>Relación laboral</strong></h5>
        <hr>

        <?php echo $__env->make('workers.show.show_labors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>

    </div>

<div class="row">

    <div class="col-sm-12 my-3">

        <h5><strong>Historial</strong></h5>
        <hr>

        <?php echo $__env->make('workers.show.show_histories', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>

</div><?php /**PATH /var/www/resources/views/workers/show_fields.blade.php ENDPATH**/ ?>