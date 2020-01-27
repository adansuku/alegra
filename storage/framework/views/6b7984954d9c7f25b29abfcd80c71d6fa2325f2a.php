<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>N Expediente</th>
        <th>Fecha Alta Acufade</th>
        <th>Foto</th>
        <th>Nombre Completo</th>
        <th>Alias</th>
        <th>Genero</th>
        <th>Fecha Naci</th>
        <th>Edad</th>
        <th>Dni</th>
        <th>Est Civil</th>
        <th>Grado Dependencia</th>
        <th>Transporte</th>
        <th>Transp Dias</th>
        <th>Trayecto</th>
        <th>Transp Fecha Init</th>
        <th>Transp Dir Recogida</th>
        <th>Cesion Imagen</th>
        <th>Autoriz Salida Ext</th>
        <th>Autoriz Salir Centro</th>
        <th>Socio</th>
        <th>Num Socio</th>
        <th>Nivel Educativo</th>
        <th>Estudios Terminados</th>
        <th>Ocupacion Anterior</th>
        <th>Inter Actuales</th>
        <th>Lee Escribe Ahora</th>
        <th>Sit Dependencia</th>
        <th>Lp Grados Dependencia</th>
        <th>Nivel</th>
        <th>Tipo Ayuda Depend</th>
        <th>Fecha Solic Grado</th>
        <th>Fecha Resol Grado</th>
        <th>Fecha Resol Prest</th>
        <th>Fecha Revision Grado</th>
        <th>Cuantia Resol</th>
        <th>Tipo Ayuda Sociosani</th>
        <th>Certi Discapacidad</th>
        <th>Grado Discapacidad</th>
        <th>Fecha Resol Discapacidad</th>
        <th>Tipo Discapacidad</th>
        <th>Sit Legal</th>
            <th>Action</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>N Expediente</th>
        <th>Fecha Alta Acufade</th>
        <th>Foto</th>
        <th>Nombre Completo</th>
        <th>Alias</th>
        <th>Genero</th>
        <th>Fecha Naci</th>
        <th>Edad</th>
        <th>Dni</th>
        <th>Est Civil</th>
        <th>Grado Dependencia</th>
        <th>Transporte</th>
        <th>Transp Dias</th>
        <th>Trayecto</th>
        <th>Transp Fecha Init</th>
        <th>Transp Dir Recogida</th>
        <th>Cesion Imagen</th>
        <th>Autoriz Salida Ext</th>
        <th>Autoriz Salir Centro</th>
        <th>Socio</th>
        <th>Num Socio</th>
        <th>Nivel Educativo</th>
        <th>Estudios Terminados</th>
        <th>Ocupacion Anterior</th>
        <th>Inter Actuales</th>
        <th>Lee Escribe Ahora</th>
        <th>Sit Dependencia</th>
        <th>Lp Grados Dependencia</th>
        <th>Nivel</th>
        <th>Tipo Ayuda Depend</th>
        <th>Fecha Solic Grado</th>
        <th>Fecha Resol Grado</th>
        <th>Fecha Resol Prest</th>
        <th>Fecha Revision Grado</th>
        <th>Cuantia Resol</th>
        <th>Tipo Ayuda Sociosani</th>
        <th>Certi Discapacidad</th>
        <th>Grado Discapacidad</th>
        <th>Fecha Resol Discapacidad</th>
        <th>Tipo Discapacidad</th>
        <th>Sit Legal</th>
            <th>Action</th>
        </tr>
    </tfoot>
    <tbody>
    <?php $__currentLoopData = $people; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $person): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $person->n_expediente; ?></td>
            <td><?php echo $person->fecha_alta_acufade; ?></td>
            <td><?php echo $person->foto; ?></td>
            <td><?php echo $person->nombre_completo; ?></td>
            <td><?php echo $person->alias; ?></td>
            <td><?php echo $person->genero; ?></td>
            <td><?php echo $person->fecha_naci; ?></td>
            <td><?php echo $person->edad; ?></td>
            <td><?php echo $person->dni; ?></td>
            <td><?php echo $person->est_civil; ?></td>
            <td><?php echo $person->grado_dependencia; ?></td>
            <td><?php echo $person->transporte; ?></td>
            <td><?php echo $person->transp_dias; ?></td>
            <td><?php echo $person->trayecto; ?></td>
            <td><?php echo $person->transp_fecha_init; ?></td>
            <td><?php echo $person->transp_dir_recogida; ?></td>
            <td><?php echo $person->cesion_imagen; ?></td>
            <td><?php echo $person->autoriz_salida_ext; ?></td>
            <td><?php echo $person->autoriz_salir_centro; ?></td>
            <td><?php echo $person->socio; ?></td>
            <td><?php echo $person->num_socio; ?></td>
            <td><?php echo $person->nivel_educativo; ?></td>
            <td><?php echo $person->estudios_terminados; ?></td>
            <td><?php echo $person->ocupacion_anterior; ?></td>
            <td><?php echo $person->inter_actuales; ?></td>
            <td><?php echo $person->lee_escribe_ahora; ?></td>
            <td><?php echo $person->sit_dependencia; ?></td>
            <td><?php echo $person->lp_grados_dependencia; ?></td>
            <td><?php echo $person->nivel; ?></td>
            <td><?php echo $person->tipo_ayuda_depend; ?></td>
            <td><?php echo $person->fecha_solic_grado; ?></td>
            <td><?php echo $person->fecha_resol_grado; ?></td>
            <td><?php echo $person->fecha_resol_prest; ?></td>
            <td><?php echo $person->fecha_revision_grado; ?></td>
            <td><?php echo $person->cuantia_resol; ?></td>
            <td><?php echo $person->tipo_ayuda_sociosani; ?></td>
            <td><?php echo $person->certi_discapacidad; ?></td>
            <td><?php echo $person->grado_discapacidad; ?></td>
            <td><?php echo $person->fecha_resol_discapacidad; ?></td>
            <td><?php echo $person->tipo_discapacidad; ?></td>
            <td><?php echo $person->sit_legal; ?></td>
            <td>
                <?php echo Form::open(['route' => ['people.destroy', $person->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('people.show', [$person->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-eye"></i></a>
                    <a href="<?php echo route('people.edit', [$person->id]); ?>" class='btn btn-primary btn-xs'><i class="far fa-edit"></i></a>
                    <?php echo Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH /var/www/resources/views/people/table.blade.php ENDPATH**/ ?>