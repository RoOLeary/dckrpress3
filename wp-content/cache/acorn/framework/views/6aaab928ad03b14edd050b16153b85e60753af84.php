<article <?php (post_class()); ?>>
  <header>
    <h2 class="text-2xl text-red font-extrabold p-4">
      <a href="<?php echo e(get_permalink()); ?>">
        <?php echo $title; ?>

      </a>
    </h2>
    
    <?php echo $__env->make('partials.entry-meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </header>

  <div class="entry-summary">
    <?php (the_excerpt()); ?>
  </div>
</article>
<?php /**PATH /var/www/html/wp-content/themes/rodockersage/resources/views/partials/content.blade.php ENDPATH**/ ?>