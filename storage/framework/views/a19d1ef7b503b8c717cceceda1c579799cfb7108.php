<?php $__env->startSection('content'); ?>
    <h1>Create Articles</h1>
    <?php echo Form::open(['action' => 'ArticlesController@store', 'method' => 'POST']); ?>

            <div class="form-group">
                <?php echo e(Form::label('Title', 'Location')); ?>

                <?php echo e(Form::text('Title', '', ['class' => 'form-control', 'placeholder' => 'Location'])); ?>

            </div>
            <div class="form-group">
                <?php echo e(Form::label('Type', 'Type')); ?>

                <?php echo e(Form::text('Type', 'GeoLocation', ['class' => 'form-control', 'placeholder' => 'Type'])); ?>

            </div>
            <div class="form-group">
                <?php echo e(Form::label('Value', 'Latitude and Longitude')); ?>

                <?php echo e(Form::textarea('Value', '', ['class' => 'form-control', 'placeholder' => 'Latitude and Longitude'])); ?>

            </div>
            <a href="/articles" class="btn btn-default btn-dark btn-dark">Go Back</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo e(Form::submit('Submit', ['class'=>'btn btn-primary'])); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>