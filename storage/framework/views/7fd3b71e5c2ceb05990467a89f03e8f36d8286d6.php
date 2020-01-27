<!-- His Categoria Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('his_categoria', 'Categoria:'); ?>

    <?php echo Form::select('his_categoria', [
        ''=>'',
        'Administrativas' => 'Administrativas', 
        'Recursos' => 'Recursos',
        'Alta en la empresa' => 'Alta en la empresa',
        'Modificaciones de contrato' => 'Modificaciones de contrato',
        'Vacaciones' => 'Vacaciones',
        'Ausencias' => 'Ausencias',
        'Permisos' => 'Permisos',
        'Horas extras' => 'Horas extras',
        'Informes mensuales SPAPD' => 'Informes mensuales SPAPD',
        'Entrega Plan de Igualdad y Cuidado del Personal' => 'Entrega Plan de Igualdad y Cuidado del Personal',
        'Entrega Guía de Acogida' => 'Entrega Guía de Acogida',
        'Entrega devolución de material' => 'Entrega devolución de material',
        'Correo corporativo' => 'Correo corporativo',
        'Mensajería instantánea' => 'Mensajería instantánea',
        'Presencia en web corporativa' => 'Presencia en web corporativa',
        'Participación en Bolsa de empleo' => 'Participación en Bolsa de empleo',
        'Participación Formación Inicial' => 'Participación Formación Inicial',
        'Participación Puntual Reciclaje Interna' => 'Participación Puntual Reciclaje Interna',
        'Participación Formación Trimestrales' => 'Participación Formación Trimestrales',
        'Participación en Formación Externas ' => 'Participación en Formación Externas ',
        'Participación Voluntaria en Actividades Extraordinarias' => 'Participación Voluntaria en Actividades Extraordinarias',
        'Implicación en actividades para recaudar fondos' => 'Implicación en actividades para recaudar fondos',
        'Incidencias' => 'Incidencias',
        'Amonestaciones/apercibimientos' => 'Amonestaciones/apercibimientos',
        'Quejas' => 'Quejas',
        'Reclamaciones' => 'Reclamaciones',
        'Felicitaciones' => 'Felicitaciones'
        ], null, ['class' => 'form-control', 'required' => 'required']); ?>

</div>

<!-- His Tipo Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('his_tipo', 'Tipo:'); ?>

    <?php echo Form::select('his_tipo', [''=>'', ' Contratos' => ' Contratos', ' Nóminas' => ' Nóminas', ' Vacaciones' => ' Vacaciones', ' Ausencias' => ' Ausencias', ' Permisos' => ' Permisos', ' Horas Extra' => ' Horas Extra', ' Informes Mensuales SPAPD' => ' Informes Mensuales SPAPD'], null, ['class' => 'form-control',  'required' => 'required']); ?>

</div>

<!-- His Respuesta Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('his_respuesta', 'Respuesta:'); ?>

    <?php echo Form::text('his_respuesta', null, ['class' => 'form-control',  'required' => 'required']); ?>

</div>

<!-- His Observaciones Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('his_observaciones', 'Observaciones:'); ?>

    <?php echo Form::textarea('his_observaciones', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Guardar', ['class' => 'btn btn-primary float-right']); ?>

    <button type="button" class="btn btn-default float-right" data-dismiss="modal">Cancelar</button>
</div>
<?php /**PATH /var/www/resources/views/workers/create/history.blade.php ENDPATH**/ ?>