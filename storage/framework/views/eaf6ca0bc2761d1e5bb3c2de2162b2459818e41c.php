<?php $__env->startSection('scripts'); ?>
                    <script type="text/javascript">

                    </script>
                <?php $__env->stopSection(); ?>

<table class="table table-bordered display responsive nowrap" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th class=" control">Nombre</th>
        <th><strong>Apellido</strong></th>
        <th><strong>Fecha Nacimiento</strong></th>
        <th><strong>Dni</strong></th>
        <th><strong>Direccion</strong></th>
        <th><strong>Telefono</strong></th>
        <th><strong>Telefono Movil</strong></th>
        <th><strong>Email</strong></th>
        <th><strong>Categoría Profesional</strong></th>
        <th><strong>Titulación</strong></th>
        <th><strong>Centro Acufade</strong></th>
        <th><strong>Titulación Curso</strong></th>
        <th><strong>Tutor Academico</strong></th>
        <th><strong>Tutor Teléfono</strong></th>
        <th><strong>Tutor Email</strong></th>
        <th><strong>Persona Referencia Acufade</strong></th>
        <th><strong>Cesión Imagen</strong></th>
        <th><strong>Alergias</strong></th>
        <th><strong>Otras Alergias</strong></th>
        <th><strong>Urgencia Nombre</strong></th>
        <th><strong>Urgencia Parentesco</strong></th>
        <th><strong>Urgencia Telefono</strong></th>
        <th><strong>Email Corporativo</strong></th>
        <th><strong>Numero Horas</strong></th>
        <th></th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Fecha Nacimiento</th>
            <th>Dni</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Telefono Movil</th>
            <th>Email</th> 
            <th>Cat Profesional</th>
            <th>Titulacion</th>
            <th>Centro Acufade</th>
            <th>Titulacion Curso</th>
            <th>Tutor Academico</th>
            <th>Tutor Telefono</th>
            <th>Tutor Email</th>
            <th>Persona Ref Acufade</th>
            <th>Cesion Imagen</th>
            <th>Alergias</th>
            <th>Otras Alergias</th>
            <th>Urg Nom Ape</th>
            <th>Urg Parentesco</th>
            <th>Urg Telefono</th>
            <th>Email Corporativo</th>
            <th>Numero Horas</th>
            <th></th>
        </tr>
    </tfoot>
    <tbody>
    <?php $__currentLoopData = $workers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $worker): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $worker->nombre; ?></td>
            <td><?php echo $worker->apellido; ?></td>
            <td><?php echo e($worker->fecha_nacimiento->format('d/m/Y')); ?></td>
            <td><?php echo $worker->dni; ?></td>
            <td><?php echo $worker->direccion; ?></td>
            <td><?php echo $worker->telefono; ?></td>
            <td><?php echo $worker->telefono_movil; ?></td>
            <td><?php echo $worker->email; ?></td>
            <td><?php echo $worker->cat_profesional; ?></td>
            <td><?php echo $worker->titulacion; ?></td>
            <td><?php echo $worker->centro_acufade; ?></td>
            <td><?php echo $worker->titulacion_curso; ?></td>
            <td><?php echo $worker->tutor_academico; ?></td>
            <td><?php echo $worker->tutor_telefono; ?></td>
            <td><?php echo $worker->tutor_email; ?></td>
            <td><?php echo $worker->persona_ref_Acufade; ?></td>
            <td><?php echo $worker->cesion_imagen; ?></td>
            <td><?php echo $worker->alergias; ?></td>
            <td><?php echo $worker->otras_alergias; ?></td>
            <td><?php echo $worker->urg_nom_ape; ?></td>
            <td><?php echo $worker->urg_parentesco; ?></td>
            <td><?php echo $worker->urg_telefono; ?></td>
            <td><?php echo $worker->email_personal; ?></td>
            <td><?php echo $worker->numero_horas; ?></td>
            <td>
                <?php echo Form::open(['route' => ['workers.destroy', $worker->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('workers.show', [$worker->id]); ?>" class='btn btn-primary btn-xs'>
                        <i class="far fa-eye"></i> Ver
                    </a>
                    <a href="<?php echo route('workers.edit', [$worker->id]); ?>" class='btn btn-primary btn-xs'>
                        <i class="far fa-edit"></i> Editar
                    </a>
                    <?php echo Form::button('<i class="far fa-trash-alt"></i> Eliminar', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Vamos a proceder a eliminar un elemento. ¿Estas seguro/a?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH /var/www/resources/views/workers/table.blade.php ENDPATH**/ ?>