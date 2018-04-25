<?php $__env->startSection('content'); ?>
<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Google Maps</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <?php echo $map['js']; ?>

    </head>
    <body>
        <div style="margin-bottom:10px;">
            <a href="/direction">Direction</a> | <a href="/circle">Circle</a>
        </div>
        <?php echo $map['html']; ?>

        <div id="directionsDiv"></div>
    </body>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>