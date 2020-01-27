<div class="row">
    <div class="col-sm-6">  
            <!-- Email Field -->
            <div class="form-group ">
                    <strong><?php echo Form::label('email', 'Email corporativo:'); ?></strong>
                    <?php echo Form::email('email', null, ['class' => 'form-control']); ?>

                </div>
                <?php echo Form::label('password', 'Contraseña:'); ?>

                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?> form-control-user"
                                name="password" placeholder="Contraseña" value="00000000" > <?php if($errors->has('password')): ?>
                            <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('password')); ?></strong>
                                </span> <?php endif; ?>
                        </div>
                        <div class="col-sm-6">
                            <input id="password-confirm" type="password" class="form-control form-control-user" 
                            name="password_confirmation" placeholder="Repite la contraseña" value="00000000">
                        </div>
                    </div>
                   
            

            <!-- Numero Horas Field -->
            <div class="form-group ">
                <?php echo Form::label('numero_horas', 'Numero Horas contratadas:'); ?>

                <?php echo Form::number('numero_horas', null, ['class' => 'form-control']); ?>

            </div>
    </div>  
    
    <div class="col-sm-6">
            <!-- Fecha Alta Field -->
            <div class="form-group ">
                <?php echo Form::label('fecha_alta', 'Fecha de Alta:'); ?>

                <?php echo Form::date('fecha_alta', null, ['class' => 'form-control','id'=>'fecha_alta']); ?>

            </div>

            <?php $__env->startSection('scripts'); ?>
                <script type="text/javascript">
                    $('#fecha_alta').datetimepicker({
                        format: 'YYYY-MM-DD HH:mm:ss',
                        useCurrent: false
                    })
                </script>
            <?php $__env->stopSection(); ?>
            <!-- Fecha Baja Field -->
         <div class="form-group ">
                <?php echo Form::label('fecha_baja', 'Fecha de Baja:'); ?>

                <?php echo Form::date('fecha_baja', null, ['class' => 'form-control','id'=>'fecha_baja']); ?>

            </div>

            <?php $__env->startSection('scripts'); ?>
                <script type="text/javascript">
                    $('#fecha_baja').datetimepicker({
                        format: 'YYYY-MM-DD HH:mm:ss',
                        useCurrent: false
                    })
                </script>
            <?php $__env->stopSection(); ?>

           
    </div>
    
</div><?php /**PATH /var/www/resources/views/workers/partials/relacion_lab.blade.php ENDPATH**/ ?>