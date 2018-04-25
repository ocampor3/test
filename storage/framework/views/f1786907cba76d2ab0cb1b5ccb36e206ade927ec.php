<?php $__env->startSection('content'); ?>
<br>
    <h1>Articles</h1>
    <?php if(count($articles) > 0): ?>
        <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="well">
            <h3><a href="/articles/<?php echo e($article->Id); ?>"><?php echo e($article->Title); ?></a></h3>
            <!--<small>Created By: <?php echo e($article->CreatedBy); ?></small> : <small>Created Date: <?php echo e($article->CreatedDate); ?></small><br>-->
            <small>ID: <?php echo e($article->Id); ?></small><br>
            <small>Location: <?php echo e($article->Title); ?></small><br>
            <small>Latitude and Longitude: <?php echo e($article->Value); ?></small><br><br>
            <!--<small>CategoryID: <?php echo e($article->CategoryId); ?></small>
            <small>Type: <?php echo e($article->Type); ?></small><br>
            <small>Icon: <?php echo e($article->Icon); ?></small><br>
            <small>IconName: <?php echo e($article->IconName); ?></small><br>
            <small>Geo Location Assign User: <?php echo e($article->GeoLocAssignedUserId); ?></small><br>
            <small>Filename: <?php echo e($article->FileName); ?></small><br>
            <small>Calendar Value ID:<?php echo e($article->CalendarValueId); ?></small><br>
            <small>Menu Footer:<?php echo e($article->MenuFooter); ?></small><br>
            <small>Top Banner Show:<?php echo e($article->TopBannerShow); ?></small><br>
            <small>Allow Share: <?php echo e($article->AllowShare); ?></small><br>
            <small>Status: <?php echo e($article->Status); ?></small><br>
            <small>IsArticle: <?php echo e($article->IsArticle); ?></small><br>
            <small>Article ID:<?php echo e($article->ArticleId); ?></small><br>
            <small>Sort Order: <?php echo e($article->SortOrder); ?></small><br>
            <small>SiteCode: <?php echo e($article->SiteCode); ?></small><br>
            <small>IsDelete: <?php echo e($article->IsDelete); ?></small><br>
            <small>Modified By: <?php echo e($article->ModifiedBy); ?></small> | <small>Modified Date: <?php echo e($article->ModifiedDate); ?></small><br>-->
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php echo e($articles->links()); ?>

    <?php else: ?>
    <p> No articles found </p>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>