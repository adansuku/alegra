<div class="row">
    <div class="col-sm-6">
                <!-- Nombre Field -->
                    <div class="form-group ">
                        <?php echo Form::label('nombre', 'Nombre:'); ?>

                        <?php echo Form::text('nombre', null, ['class' => 'form-control']); ?>

                    </div>

                    <!-- Apellido Field -->
                    <div class="form-group ">
                        <?php echo Form::label('apellido', 'Apellido:'); ?>

                        <?php echo Form::text('apellido', null, ['class' => 'form-control']); ?>

                    </div>

                    <!-- Fecha Nacimiento Field -->
                    <div class="form-group ">
                        <?php echo Form::label('fecha_nacimiento', 'Fecha Nacimiento:'); ?>

                        <?php echo Form::date('fecha_nacimiento', null, ['class' => 'form-control','id'=>'fecha_nacimiento']); ?>

                    </div>

                    <?php $__env->startSection('scripts'); ?>
                        <script type="text/javascript">
                            $('#fecha_nacimiento').datetimepicker({
                                format: 'dd-mm-yyyy',
                                useCurrent: false
                            })
                        </script>
                    <?php $__env->stopSection(); ?>
                     <!-- Dni Field -->
                    <div class="form-group ">
                        <?php echo Form::label('dni', 'Dni:'); ?>

                        <?php echo Form::text('dni', null, ['class' => 'form-control']); ?>

                    </div>
    </div>

    <div class="col-sm-6">
                    <div class="form-group">
                        <?php echo Form::label('email', 'Email corporativo:'); ?>

                        <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?> form-control-user" name="email"
                            value="<?php echo e(old('email')); ?>" placeholder="Introduce un email corporativo" required>                            <?php if($errors->has('email')): ?>
                        <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('email')); ?></strong>
                                </span> <?php endif; ?>
                    </div>

                    <?php echo Form::label('password', 'Contraseña:'); ?>

                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?> form-control-user"
                                name="password" placeholder="Contraseña" required> <?php if($errors->has('password')): ?>
                            <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('password')); ?></strong>
                                </span> <?php endif; ?>
                        </div>
                        <div class="col-sm-6">
                            <input id="password-confirm" type="password" class="form-control form-control-user" name="password_confirmation" placeholder="Repite la contraseña"
                                required>
                        </div>
                    </div>
                    <!-- Direccion Field -->
                    <div class="form-group ">
                        <?php echo Form::label('direccion', 'Direccion:'); ?>

                        <?php echo Form::text('direccion', null, ['class' => 'form-control']); ?>

                    </div>

                    <!-- Telefono Movil Field -->
                    <div class="form-group ">
                        <?php echo Form::label('telefono_movil', 'Telefono Movil:'); ?>

                        <?php echo Form::number('telefono_movil', null, ['class' => 'form-control']); ?>

                    </div>
    </div>
</div>

<?php echo csrf_field(); ?>







                  <?php /**PATH /var/www/resources/views/workers/fields.blade.php ENDPATH**/ ?>