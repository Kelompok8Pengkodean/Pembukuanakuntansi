<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><?php echo $__env->yieldContent('title'); ?><?php echo e(env('APP_NAME')); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="-" name="description" />
    <meta content="-" name="author" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <link rel="shortcut icon" href="<?php echo e(asset('assets/images/favicon.ico')); ?>">
    <link href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />
    <?php echo $__env->yieldPushContent('styles'); ?>
</head>
<body style="background-color: #fff;">

<?php echo $__env->yieldContent('content'); ?>

<script src="<?php echo e(asset('assets/libs/jquery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
<?php /**PATH C:\Semester 4\Pengkodean\akuntansi\resources\views/layouts/blank.blade.php ENDPATH**/ ?>