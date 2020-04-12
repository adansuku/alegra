<div class="row">
    <!-- Cesion Imagen Field -->
    <div class="form-group col-sm-6">
        <?php echo Form::label('cesion_imagen', 'Cesión de Imagen:'); ?>

        <select class="form-control" id="type" name="cesion_imagen">
            <option value="">Selecciona una opción</option>
            <option <?php echo e($patient->patientOther->cesion_imagen == 'Si' ? 'selected':''); ?>>Si</option>
            <option <?php echo e($patient->patientOther->cesion_imagen == 'No' ? 'selected':''); ?>>No</option>
        </select>
    </div>

    <!-- Salir Centro Field -->
    <div class="form-group col-sm-6">
        <?php echo Form::label('salir_centro', 'Autorización Entrar y Salir Centro:'); ?>

        <select class="form-control" id="type" name="salir_centro">
            <option value="">Selecciona una opción</option>
            <option <?php echo e($patient->patientOther->salir_centro == 'Si' ? 'selected':''); ?>>Si</option>
            <option <?php echo e($patient->patientOther->salir_centro == 'No' ? 'selected':''); ?>>No</option>
        </select>
    </div>

    <!-- Riesgo Caidas Field -->
    <div class="form-group col-sm-6">
        <?php echo Form::label('riesgo_caidas', 'Riesgo Caidas:'); ?>

        <select class="form-control" id="type" name="riesgo_caidas">
            <option value="">Selecciona una opción</option>
            <option <?php echo e($patient->patientOther->riesgo_caidas == 'Sin Riesgo' ? 'selected':''); ?>>Sin Riesgo</option>
            <option <?php echo e($patient->patientOther->riesgo_caidas == 'Leve' ? 'selected':''); ?>>Leve</option>
            <option <?php echo e($patient->patientOther->riesgo_caidas == 'Moderado' ? 'selected':''); ?>>Moderado</option>
            <option <?php echo e($patient->patientOther->riesgo_caidas == 'Grave' ? 'selected':''); ?>>Grave</option>

        </select>
    </div>

    <!-- Salida Externa Field -->
    <div class="form-group col-sm-6">
        <?php echo Form::label('salida_externa', 'Autorización Salida Externa:'); ?>

        <select class="form-control" id="type" name="salida_externa">
            <option value="">Selecciona una opción</option>
            <option <?php echo e($patient->patientOther->salida_externa == 'Si' ? 'selected':''); ?>>Si</option>
            <option <?php echo e($patient->patientOther->salida_externa == 'No' ? 'selected':''); ?>>No</option>
        </select>
    </div>



</div><?php /**PATH /var/www/resources/views/patients/edit/other_data.blade.php ENDPATH**/ ?>