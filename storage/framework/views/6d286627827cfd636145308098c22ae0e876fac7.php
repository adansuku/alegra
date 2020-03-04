<div class="row">
    <div class="col-sm-6">

        <!-- Nombre Field -->
        <div class="form-group ">
            <?php echo Form::label('nombre', 'Nombre:'); ?>

            <input id="nombre" type="text"
                class="form-control<?php echo e($errors->has('nombre') ? ' is-invalid' : ''); ?> form-control-user" name="nombre"
                value="<?php echo e(old('nombre')); ?>" placeholder="Introduce un nombre" required>

            <?php if($errors->has('nombre')): ?>
            <span class="invalid-feedback" role="alert">
                <strong><?php echo e($errors->first('nombre')); ?></strong>
            </span>
            <?php endif; ?>
        </div>

        <!-- Apellido Field -->
        <div class="form-group ">
            <?php echo Form::label('apellido', 'Apellidos:'); ?>

            <input id="apellido" type="text"
                class="form-control<?php echo e($errors->has('apellido') ? ' is-invalid' : ''); ?> form-control-user"
                name="apellido" value="<?php echo e(old('apellido')); ?>" placeholder="Introduce los apellidos" required>

            <?php if($errors->has('apellido')): ?>
            <span class="invalid-feedback" role="alert">
                <strong><?php echo e($errors->first('apellido')); ?></strong>
            </span>
            <?php endif; ?>
        </div>
    </div>

    <div class="col-sm-6">

        <div class="form-group">
            <?php echo Form::label('email', 'Email corporativo :'); ?>

            <small>Este email se utilizará para loguearse en la plataforma</small>

            <input id="email" type="email"
                class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?> form-control-user" name="email"
                value="<?php echo e(old('email')); ?>" placeholder="Introduce un email corporativo" required>

            <?php if($errors->has('email')): ?>
            <span class="invalid-feedback" role="alert">
                <strong><?php echo e($errors->first('email')); ?></strong>
            </span>
            <?php endif; ?>
        </div>

        <?php echo Form::label('password', 'Contraseña:'); ?>


        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">

                <input id="password" type="password"
                    class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?> form-control-user"
                    name="password" placeholder="Contraseña" required> <?php if($errors->has('password')): ?>

                <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($errors->first('password')); ?></strong>
                </span> <?php endif; ?>
            </div>

            <div class="col-sm-6">
                <input id="password-confirm" type="password" class="form-control form-control-user"
                    name="password_confirmation" placeholder="Repetir contraseña" required>
            </div>
        </div>

    </div>
</div>

<?php echo csrf_field(); ?><?php /**PATH /var/www/resources/views/workers/create/new_user.blade.php ENDPATH**/ ?>