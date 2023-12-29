<?php (the_content()); ?>

<?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<h1><?php echo e($article['title']); ?></h1>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php echo wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>

<?php /**PATH /var/www/html/wp-content/themes/rodockersage/resources/views/partials/content-page-articles.blade.php ENDPATH**/ ?>