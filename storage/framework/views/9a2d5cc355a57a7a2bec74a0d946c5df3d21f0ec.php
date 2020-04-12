<div class="row">
    <div class="col-sm-6">
        <!-- Url Pia Field -->
        <div class="form-group col-sm-12">
            <div class="h6">
                <strong><?php echo Form::label('url_pia', 'Adjunto Informe PIA'); ?></strong>
            </div>
            <?php echo Form::file('url_pia'); ?>

        </div>

        <div class="form-group col-sm-12">
            <div class="h6">
                <strong><?php echo Form::label('url_recepcion', 'Adjunto Documento Recepción PIA'); ?></strong>
            </div>
            <?php echo Form::file('url_recepcion'); ?>

        </div>

        <!-- Obs Pia Field -->
        <div class="form-group col-sm-12">
            <div class="h6">
                <strong><?php echo Form::label('fecha_real_entrega', 'Fecha real de entrega:'); ?></strong>
            </div>
            <?php echo Form::date('fecha_real_entrega', null, ['class' => 'form-control']); ?>

        </div>

        <!--<div class="form-group col-sm-12">
            <div class="h6">
                <strong><?php echo Form::label('exito_pia', 'Éxito PIA'); ?></strong>
            </div>
            <?php echo Form::select('exito_pia', [
            "" => '',
            "Si" => 'Si',
            "No" => 'No'
            ], null, ['class' => 'form-control']); ?>

        </div>-->
        <!-- Submit Field -->


        <div class="form-group col-sm-12">
            <?php echo Form::submit('Actualizar información Pia', ['class' => 'btn btn-primary']); ?>

            <a href="<?php echo route('patients.edit', $patientPia->patient->id); ?>" class="btn btn-default">Cancelar</a>
        </div>
    </div>

    <div class="col-sm-6">

        <!-- Obs Pia Field -->
        <div class="form-group col-sm-12">
            <?php echo Form::label('obs_pia', 'Observaciones:'); ?>

            <?php echo Form::textArea('obs_pia', null, ['class' => 'form-control']); ?>

        </div>
    </div>
</div><?php /**PATH /var/www/resources/views/patient_pias/fields.blade.php ENDPATH**/ ?>