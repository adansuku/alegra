<?php $__env->startSection('loginTitle', 'Register'); ?>
<?php $__env->startSection('content'); ?>
<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
            <div class="col-lg-7">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                    </div>

                    <form class="user" method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input id="name" type="text" class="form-control<?php echo e($errors->has('nombre') ? ' is-invalid' : ''); ?> form-control-user" name="nombre" value="<?php echo e(old('nombre')); ?>" placeholder="First Name" required autofocus>
                                <?php if($errors->has('nombre')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('nombre')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            <div class="col-sm-6">
                                <input id="lastname" type="text" class="form-control<?php echo e($errors->has('apellido') ? ' is-invalid' : ''); ?> form-control-user" name="apellido" value="<?php echo e(old('apellido')); ?>" placeholder="Last Name">
                                <?php if($errors->has('apellido')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('apellido')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <input id="email" type="email" 
                            class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?> form-control-user" 
                            name="email" value="<?php echo e(old('email')); ?>" placeholder="Email Address" required>
                            <?php if($errors->has('email')): ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($errors->first('email')); ?></strong>
                            </span>
                            <?php endif; ?>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?> form-control-user" name="password" placeholder="Password" required>
                                <?php if($errors->has('password')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('password')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            <div class="col-sm-6">
                                <input id="password-confirm" type="password" class="form-control form-control-user" name="password_confirmation" placeholder="Repeat Password" required>
                            </div>
                        </div>

                        

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                <?php echo e(__('Register')); ?>

                            </button>
                            <hr>
                            <div class="text-center">
                                <?php if(Route::has('password.request')): ?>
                                <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                    <?php echo e(__('Forgot Your Password?')); ?>

                                </a><br>
                                <?php endif; ?>
                                <a class="btn btn-link" href="<?php echo e(url('login')); ?>">Already have an account? Login!</a>
                            </div>
                        </div>

                        

                        
                        

                

                </form>
            </div>
        </div>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/auth/register.blade.php ENDPATH**/ ?>