<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIGECOL | <?php echo $__env->yieldContent('titulo'); ?></title>
	<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
	<meta name="routeName" content="<?php echo e(Route::currentRouteName()); ?>">
    <!-- Fuente -->
	<link rel="stylesheet" href="<?php echo e(asset('plantilla/dist/fonts/Sans.css')); ?>">
	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="<?php echo e(asset('plantilla/plugins/fontawesome-free/css/all.min.css')); ?>">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?php echo e(asset('plantilla/plugins/icheck-bootstrap/icheck-bootstrap.min.css')); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo e(asset('plantilla/dist/css/adminlte.min.css')); ?>">
</head>
<body>
    <?php echo $__env->yieldContent('content'); ?>
</body>
</html>
<?php /**PATH /var/www/html/sigecol/resources/views/layouts/login.blade.php ENDPATH**/ ?>