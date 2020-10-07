<section class="mod-slider">
  <div class="container-fluid px-0">
    <div class="slider slider-lazy has-slider">
      <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="slider-item">
          <a href="<?php echo e($item['link']); ?>">
            <div data-src="<?php echo e($item['image']); ?>" class="lazy h-100 bg-img" src="<?php echo e(App::LoadImages()); ?>"></div>
          </a>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
</section>