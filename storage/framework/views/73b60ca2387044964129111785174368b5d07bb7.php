<div class="row">
    <!-- Prog Spapd Field -->
    <div class="form-group col-sm-4">
        <?php echo Form::label('prog_spapd', 'Programa:'); ?>

        <select class="form-control" id="prog_spapd" name="prog_spapd" required>
            <option value="" selected disabled hidden>Elige un programa</option>
            <option value="Estimulación Cognitiva (EC)">Estimulación Cognitiva (EC)</option>
            <option value="Fisioterapia">Fisioterapia</option>
            <option value="Apoyo Emocional">Apoyo Emocional</option>
            <option value="Terapia Ocupacional">Terapia Ocupacional</option>
            <option value="Logopedia">Logopedia</option>
            <option value="Otros">Otros</option>
        </select>
        <script>
            $('#prog_spapd').on('change', function() {
                if ($(this).val() === 'Otros') {
                    $('#otros_programa').css('display','block');
                }else{
                    $('#otros_programa').css('display','none');
                }
            });
        </script>
    </div>

    

    <!-- Dur Spapd Field -->
    <div class="form-group col-sm-4">
        <!-- Num Sesiones Field -->
        <?php echo Form::label('num_sesiones', 'Número Total de Sesiones:'); ?>

        <?php echo Form::number('num_sesiones', null, ['class' => 'form-control','required' => 'required']); ?>

    </div>

    <div class="form-group col-sm-4">
        <?php echo Form::label('worker_id', 'Trabajadora asociada:'); ?>

        <select class="form-control select2" id="worker_id" name="worker_id" required>
            <?php $__currentLoopData = $workers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $worker): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option <?php echo e($patient->worker_id == $worker->id ? 'selected':''); ?> value="<?php echo e($worker->id); ?>"><?php echo e($worker->nombre); ?>

                <?php echo e($worker->apellido); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>

    <!-- Otros Programa Field -->
    <div class="form-group col-sm-12">
        <div id="otros_programa" class="bg-secondary p-2" style="display: none;">
            <?php echo Form::label('otros_programa', 'Otro Programa:'); ?>

            <?php echo Form::text('otros_programa', null, ['class' => 'form-control']); ?>

        </div>
    </div>

    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        <?php echo Form::submit('Crear programa', ['class' => 'btn btn-primary float-right']); ?>

    
    </div>
    
</div>
<!--end row-->

<?php /**PATH /var/www/resources/views/patients/create/spapd.blade.php ENDPATH**/ ?>