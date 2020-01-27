<?php $__env->startSection('loginTitle', 'Login'); ?>
<?php $__env->startSection('content'); ?>
<div class="row login_allegra">

    <div class="col-xl-10 col-lg-12 col-md-9 m-auto">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-login-image"
                    style="background-image:url(<?php echo e(asset("storage/login_allegra.jpg")); ?>);">
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5 my-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Bienvenido/a a Alegra</h1>
                            </div>
                            <form class="user" method="POST" action="<?php echo e(route('login')); ?>">
                                <?php echo csrf_field(); ?>

                                <div class="form-group">
                                    <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?> form-control-user" name="email"
                                        value="<?php echo e(old('email')); ?>" required autofocus aria-describedby="emailHelp" placeholder="Introduce tu email...">                                    <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span> <?php endif; ?>
                                </div>

                                <div class="form-group">
                                    <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?> form-control-user"
                                        name="password" placeholder="Contraseña" required>                                    <?php if($errors->has('password')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span> <?php endif; ?>
                                </div>

                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" class="custom-control-input" type="checkbox" name="remember" id="remember" <?php echo e(old( 'remember') ?
                                            'checked' : ''); ?>>

                                        <label class="custom-control-label" for="remember">
                                            <?php echo e(__('Recuerdame en este ordenador')); ?>

                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        <?php echo e(__('Iniciar sesión')); ?>

                                    </button>

                                    
                                   

                                </div>

                                <!-- Uncomment next for adding loggin with socialite -->
                                

                                <!-- end socialite -->

                            </form>

                            

                            

                            
                            

                        </div>
                    </div>
                </div>
            </div>
        </div>

            <div class="container my-auto">
                <div class="copyright text-center my-auto text-white h6">
                    <small><span>Realizado con <i class="fas fa-heart"></i> para Acufade por La Isla Creativa &copy; | <i class="fas fa-grin-hearts"></i> Alegra app 2019 </span></small>
                </div>
            </div>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/auth/login.blade.php ENDPATH**/ ?>