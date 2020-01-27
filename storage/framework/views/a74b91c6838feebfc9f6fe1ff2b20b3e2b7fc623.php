
    <div class="col-sm-6">
        <?php echo Form::label('transporte', 'Transporte:'); ?>

        <select class="form-control" id="transporte" name="transporte">
            <option value="" selected disabled hidden>Elegir un servicio</option>
            <option <?php echo e($patient->patientOther->transporte == 'Si' ? 'selected':''); ?>>Si</option>
            <option <?php echo e($patient->patientOther->transporte == 'No' ? 'selected':''); ?>>No</option>
        </select>

    </div>
<?php /**PATH /var/www/resources/views/patients/edit/add_transport.blade.php ENDPATH**/ ?>