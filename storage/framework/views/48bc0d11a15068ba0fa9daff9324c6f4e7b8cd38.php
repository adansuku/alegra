<div class="row">

    <div class="form-group col-sm-6">
        <?php echo Form::label('numero_expediente', 'Numero Expediente:'); ?>

        <?php echo Form::text('numero_expediente', $numero_expediente, ['class' => 'form-control', 'readonly' => 'readonly']); ?>

    </div>

    <!-- Fecha Alta Paciente Field -->
    <div class="form-group col-sm-6">
        <?php echo Form::label('fecha_alta_paciente', 'Fecha Alta:'); ?>

        <?php echo Form::date('fecha_alta_paciente', null, ['class' => 'form-control','id'=>'fecha_alta_paciente', 'required' => 'required']); ?>

    </div>

    <?php $__env->startSection('scripts'); ?>
    <script type="text/javascript">
        $('#fecha_alta_paciente').datetimepicker({
            format: 'DD-MM-YYYY',
            useCurrent: false
        })
    </script>
    <?php $__env->stopSection(); ?>
</div>

<div class="row">
    <!-- Nombre Field -->
    <div class="form-group col-sm-6">
        <?php echo Form::label('nombre', 'Nombre:'); ?>

        <?php echo Form::text('nombre', null, ['class' => 'form-control', 'required' => 'required' ]); ?>

    </div>

    <!-- Apellido Field -->
    <div class="form-group col-sm-6">
        <?php echo Form::label('apellido', 'Apellido:'); ?>

        <?php echo Form::text('apellido', null, ['class' => 'form-control', 'required' => 'required']); ?>

    </div>
</div>

<div class="row">
    <div class="form-group col-sm-6">
        <?php echo Form::label('worker_id', 'Trabajadora social gestora del caso:'); ?>

        <select class="form-control" id="worker_id" name="worker_id" required>
            <?php $__currentLoopData = $workers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $worker): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($worker->cat_profesional == 'Trabajadora Social'): ?>
                <option value="<?php echo e($worker->id); ?>"><?php echo e($worker->nombre); ?> <?php echo e($worker->apellido); ?></option>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Crear persona', ['class' => 'btn btn-primary float-right']); ?>

    <a href="<?php echo route('patients.index'); ?>" class="btn btn-default float-right">Cancelar</a>


</div><?php /**PATH /var/www/resources/views/patients/create/create_patient.blade.php ENDPATH**/ ?>