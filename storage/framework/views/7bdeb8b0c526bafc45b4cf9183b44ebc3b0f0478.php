<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?> - <?php echo $__env->yieldContent('loginTitle'); ?></title>

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

    
</head>

<body class="bg-gradient-primary">

    <div class="container-fluid">
    
    
    <?php echo $__env->yieldContent('content'); ?>
    </div>


    <!-- Bootstrap core JavaScript, Core plugin JavaScript, Page level plugins -->
    <script src="<?php echo e(mix('js/app.js')); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo e(mix('js/customJs/custom.js')); ?>"></script>

</body>

</html>
<?php /**PATH /var/www/resources/views/layouts/app.blade.php ENDPATH**/ ?>