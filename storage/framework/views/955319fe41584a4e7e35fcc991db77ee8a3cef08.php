<div class="row">
    <!--<div class="col-sm-6">

        <div class="form-group">
            <?php echo Form::label('email', 'Email corporativo :'); ?>

            <small>Este email se utilizará para loguearse en la plataforma</small>

            <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?> form-control-user" 
            name="email" value="<?php echo e($worker->email); ?>" placeholder="Introduce un email corporativo" required>

            <?php if($errors->has('email')): ?>
            <span class="invalid-feedback" role="alert">
                <strong><?php echo e($errors->first('email')); ?></strong>
            </span>
            <?php endif; ?>
        </div>

        <?php echo Form::label('password', 'Contraseña:'); ?>


        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">

                <input id="password" type="password" value="<?php echo e($worker->password); ?>" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?> form-control-user" name="password" placeholder="Contraseña" required> <?php if($errors->has('password')): ?>

                <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($errors->first('password')); ?></strong>
                </span> <?php endif; ?>
            </div>

            <div class="col-sm-6">
                 <input id="password-confirm" type="password" class="form-control form-control-user" name="password_confirmation" 
            placeholder="Repetir contraseña" value="<?php echo e($worker->password); ?>" required>
                            </div>
        </div>

    </div>-->
    
    <div class="col-sm-6">
            <!-- Fecha Alta Field -->
            <div class="form-group ">
                <?php echo Form::label('fecha_alta', 'Fecha de Alta:'); ?>

                <?php echo Form::date('fecha_alta', $worker->fecha_alta, ['class' => 'form-control','id'=>'fecha_alta']); ?>

            </div>

            <?php $__env->startSection('scripts'); ?>
                <script type="text/javascript">
                    $('#fecha_alta').datetimepicker({
                        format: 'DD-MM-YYYY',
                        useCurrent: false
                    })
                </script>
            <?php $__env->stopSection(); ?>
            <!-- Fecha Baja Field -->
         <div class="form-group ">
                <?php echo Form::label('fecha_baja', 'Fecha de Baja:'); ?>

                <?php echo Form::date('fecha_baja', $worker->fecha_baja, ['class' => 'form-control','id'=>'fecha_baja']); ?>

            </div>

            <?php $__env->startSection('scripts'); ?>
                <script type="text/javascript">
                    $('#fecha_baja').datetimepicker({
                        format: 'DD-MM-YYYY',
                        useCurrent: false
                    })
                </script>
            <?php $__env->stopSection(); ?>

           
    </div>
    
</div><?php /**PATH /var/www/resources/views/workers/partials/relation_lab.blade.php ENDPATH**/ ?>