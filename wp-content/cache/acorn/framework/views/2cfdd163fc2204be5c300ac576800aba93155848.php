<?php $__env->startSection('content'); ?>
  <?php echo $textField; ?>

  Dhluls
  <?php echo $blortTest; ?>


  Gee
  <?php echo $__env->make('components.bits', [ $data = 'floop'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php while(have_posts()): ?> <?php (the_post()); ?>
    <?php echo $__env->make('partials.content-page-fack', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php endwhile; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/wp-content/themes/rodockersage/resources/views/front-page.blade.php ENDPATH**/ ?>