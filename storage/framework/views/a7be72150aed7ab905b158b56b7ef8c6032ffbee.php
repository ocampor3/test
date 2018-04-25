<?php $__env->startSection('content'); ?>
    <h1>Edit Articles</h1>
    <?php echo Form::open(['action' => ['ArticlesController@update', $article->Id], 'method' => 'POST']); ?>

            <div class="form-group">
                <?php echo e(Form::label('Title', 'Location')); ?>

                <?php echo e(Form::text('Title', $article->Title, ['class' => 'form-control', 'placeholder' => 'Location'])); ?>

            </div>
            <div class="form-group">
                <?php echo e(Form::label('Type', 'Type')); ?>

                <?php echo e(Form::text('Type', $article->Type, ['class' => 'form-control', 'placeholder' => 'Type'])); ?>

            </div>
            <div class="form-group">
                <?php echo e(Form::label('Value', 'Latitude and Longitude')); ?>

                <?php echo e(Form::textarea('Value', $article->Value, ['class' => 'form-control', 'placeholder' => 'Latitude and Longitude'])); ?>

            </div>
            <a href="/articles/<?php echo e($article->Id); ?>" class="btn btn-default btn-dark btn-dark">Go Back</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo e(Form::submit('Submit', ['class'=>'btn btn-primary'])); ?>

    <?php echo Form::hidden('_method','PUT'); ?>       
    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>