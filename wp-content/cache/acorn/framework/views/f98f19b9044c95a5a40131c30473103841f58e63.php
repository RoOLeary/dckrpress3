<?php $__env->startSection('content'); ?>
  <h1 class="text-xl font-extrabold"><?php echo $textField; ?></h1>
  <br>
  <?php echo $blortTest; ?> 
  <?php while(have_posts()): ?> <?php (the_post()); ?>
    <?php echo $__env->make('partials.page-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   
    <?php echo $__env->make('partials.content-page-articles', $articles, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php endwhile; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/wp-content/themes/rodockersage/resources/views/article-page.blade.php ENDPATH**/ ?>