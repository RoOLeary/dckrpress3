<?php $__env->startSection('content'); ?>
  <?php echo $textField; ?>

  <?php echo $blortTest; ?>

  <?php
    $bannerText = 'SHOULD BE MY ALERTaaaah';
    $text = 'Boootay';
  ?>

  <?php if (isset($component)) { $__componentOriginalc44902e6e10cdfeb100007a622575ca58020957b = $component; } ?>
<?php $component = App\View\Components\Bits::resolve(['bannerText' => ''.e($bannerText).'','textField' => ''.e($text).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('bits'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Bits::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc44902e6e10cdfeb100007a622575ca58020957b)): ?>
<?php $component = $__componentOriginalc44902e6e10cdfeb100007a622575ca58020957b; ?>
<?php unset($__componentOriginalc44902e6e10cdfeb100007a622575ca58020957b); ?>
<?php endif; ?>
  
  <?php while(have_posts()): ?> <?php (the_post()); ?>
    <?php echo $__env->make('partials.content-page-fack', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php endwhile; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/wp-content/themes/rodockersage/resources/views/front-page.blade.php ENDPATH**/ ?>