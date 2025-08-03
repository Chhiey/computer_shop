<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Electro - <?php echo $__env->yieldContent('title'); ?></title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href=" <?php echo e(asset('frontend/css/bootstrap.min.css')); ?>" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href=" <?php echo e(asset('frontend/css/slick.css')); ?>" />
    <link type="text/css" rel="stylesheet" href=" <?php echo e(asset('frontend/css/slick-theme.css')); ?>" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href=" <?php echo e(asset('frontend/css/nouislider.min.css')); ?>" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href=" <?php echo e(asset('frontend/css/font-awesome.min.css')); ?>">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href=" <?php echo e(asset('frontend/css/style.css')); ?>" />

</head>

<body>

    <?php echo $__env->make('frontend.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('frontend.layout.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make('frontend.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- jQuery Plugins -->
    <script src=" <?php echo e(asset('frontend/js/jquery.min.js')); ?>"></script>
    <script src=" <?php echo e(asset('frontend/js/bootstrap.min.js')); ?>"></script>
    <script src=" <?php echo e(asset('frontend/js/slick.min.js')); ?>"></script>
    <script src=" <?php echo e(asset('frontend/js/nouislider.min.js')); ?>"></script>
    <script src=" <?php echo e(asset('frontend/js/jquery.zoom.min.js')); ?>"></script>
    <script src=" <?php echo e(asset('frontend/js/main.js')); ?>"></script>

</body>

</html>
<?php /**PATH D:\web\Computer-Shop\resources\views/frontend/layout/master.blade.php ENDPATH**/ ?>