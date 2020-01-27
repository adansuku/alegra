<div class="buttons">

    <?php echo Form::open(['route' => ['workers.destroy', $worker->id], 'method' => 'delete']); ?>

    <div class='btn-group float-right'>
        <a href="<?php echo route('workers.show', [$worker->id]); ?>" class='btn btn-primary btn-xs'>
            <i class="far fa-eye"></i> Ver
        </a>
        <a href="<?php echo route('workers.edit', [$worker->id]); ?>" class='btn btn-primary btn-xs'>
            <i class="far fa-edit"></i> Editar
        </a>
        <?php echo Form::button('<i class="far fa-trash-alt"></i> Eliminar', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Vamos a proceder a eliminar un elemento. ¿Estas seguro/a?')"]); ?>

    </div>
    <?php echo Form::close(); ?>

</div>

<div class="avatar" style="background-image:url(<?php echo e(asset("storage/$worker->avatar")); ?>)"></div>


<div class="row">
    <div class="col-sm-12 col-lg-4 my-3 h-100">
        <div class="card h-100">
            <h5 class="card-header bg-dark text-white bg-dark text-white">Datos personales</h5>
            <div class="card-body">
                <!-- Nombre Field -->
                <strong>Nombre:</strong>
                <p><?php echo $worker->nombre; ?></p>

                <!-- Apellido Field -->
                <strong>Apellido:</strong>
                <p><?php echo $worker->apellido; ?></p>

                <!-- Fecha Nacimiento Field -->
                <strong>Fecha de nacimiento</strong>
                <p><?php echo e($worker->fecha_nacimiento->format('d/m/Y')); ?></p>

                <!-- Dni Field -->
                <strong>Dni</strong>
                <p><?php echo $worker->dni; ?></p>

                <!-- Direccion Field -->
                <strong>Direccion</strong>
                <p><?php echo $worker->direccion; ?></p>

                <!-- Telefono Field -->
                <strong>Teléfono personal:</strong>
                <p><?php echo $worker->telefono; ?></p>

                <!-- Telefono movil Field -->
                <strong>Teléfono móvil:</strong>
                <p><?php echo $worker->telefono_movil; ?></p>

                <strong>Email personal</strong>
                <p><?php echo $worker->email; ?></p>
            </div>
        </div>
    </div>

    <div class="col-sm-12 col-lg-4 my-3 ">
        <div class="card h-100">
            <h5 class="card-header bg-dark text-white bg-dark text-white">Datos académicos</h5>
            <div class="card-body">
                <strong>Categoría profesional:</strong>
                <p><?php echo $worker->cat_profesional; ?></p>

                <strong>Titulación:</strong>
                <p><?php echo $worker->titulacion; ?></p>

                <strong>Centro Acufade:</strong>
                <p><?php echo $worker->centro_acufade; ?></p>

                <strong>Categoría profesional</strong>
                <p><?php echo $worker->cat_profesional; ?></p>

                <strong>Titulación Curso</strong>
                <p><?php echo $worker->titulacion_curso; ?></p>
            </div>
        </div>
    </div>

    <div class="col-sm-12 col-lg-4 my-3">
        <div class="card h-100">
            <h5 class="card-header bg-dark text-white">Alumnos en prácticas</h5>
            <div class="card-body">
                <strong>Tutor Academico</strong>
                <p><?php echo $worker->tutor_academico; ?></p>

                <strong>Teléfono tutor</strong>
                <p><?php echo $worker->tutor_telefono; ?></p>

                <strong>Tutor Email</strong>
                <p><?php echo $worker->titulacion_curso; ?></p>
            </div>
        </div>
    </div>

</div>
<div class="row">
    <div class="col-sm-12 col-lg-4 my-3">
        <div class="card h-100">
            <h5 class="card-header bg-dark text-white">Otros Datos</h5>
            <div class="card-body">
                <p>
                    <strong>Cesión imagen:</strong>
                    <?php if($worker->cesion_imagen == "on"): ?>
                    Autorizado por el/la trabajador/a
                    <?php else: ?>
                    No autorizado
                    <?php endif; ?>
                </p>

                <strong>Alergias: </strong>
                <p><?php echo $worker->alergias; ?></p>

                <strong>Otras Alergias: </strong>
                <p><?php echo $worker->otras_alergias; ?></p>
            </div>
        </div>
    </div>

    <div class="col-sm-12 col-lg-4 my-3">
        <div class="card h-100">
            <h5 class="card-header bg-dark text-white">Urgencias</h5>
            <div class="card-body">
                <strong>Contacto urgencias: </strong>
                <p><?php echo $worker->urg_nom_ape; ?></p>

                <strong>Parentesco urgencias: </strong>
                <p><?php echo $worker->urg_parentesco; ?></p>

                <strong>Telefono urgencias: </strong>
                <p><?php echo $worker->urg_telefono; ?></p>
            </div>
        </div>
    </div>

    <div class="col-sm-12 col-lg-4 my-3">
        <div class="card h-100">
            <h5 class="card-header bg-dark text-white">Relación laboral</h5>
            <div class="card-body">
                <p><strong>Fecha alta : </strong>
                    <?php echo e($worker->fecha_alta->format('d/m/Y')); ?></p>

                <p><strong>Fecha Baja: </strong>
                    <?php echo e($worker->fecha_baja->format('d/m/Y')); ?></p>

                <strong>Email corporativo: </strong>
                <p><?php echo $worker->email_corporativo; ?></p>

                <strong>Numero Horas Contratadas: </strong>
                <p><?php echo $worker->numero_horas; ?></p>
            </div>
        </div>
    </div>

</div>

<div class="row">

    <div class="col-sm-12">
        <div class="card h-100">
            <h5 class="card-header bg-dark text-white">Documentación</h5>
            <div class="card-body">
                <?php echo $__env->make('workers.show.show_documents', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="card h-100">
            <h5 class="card-header bg-dark text-white">Relación laboral</h5>
            <div class="card-body">
                <?php echo $__env->make('workers.show.show_labors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="card h-100">
            <h5 class="card-header bg-dark text-white">Historial</h5>
            <div class="card-body">
                <?php echo $__env->make('workers.show.show_histories', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
</div>

<?php /**PATH /var/www/resources/views/workers/show/show_worker.blade.php ENDPATH**/ ?>