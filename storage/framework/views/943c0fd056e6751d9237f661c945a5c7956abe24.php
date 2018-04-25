<?php $__env->startSection('content'); ?>
<br><br>
    <h1><?php echo e($article->Title); ?></h1>
    <div>
        &nbsp;&nbsp;Latitude and Longitude:&nbsp;<?php echo $article->Value; ?>

    </div>
    <hr>
    <small>ID: <?php echo e($article->Id); ?></small><br>
    <small>Location: <?php echo e($article->Title); ?></small><br>
    <small>Latitude and Longitude: <?php echo e($article->Value); ?></small><br><br> 
    <hr>

    <?php echo Form::open(['action' => ['ArticlesController@destroy', $article->Id], 'method' => 'article', 'class' => 'pull-right']); ?>

        <?php echo e(Form::hidden('_method', 'DELETE')); ?>

        <a href="/articles" class="btn btn-default btn-dark btn-dark">Go Back</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/articles/<?php echo e($article->Id); ?>/edit" class="btn btn-default btn-dark btn-dark">Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo e(Form::submit('Delete', ['class' => 'btn btn-danger'])); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>