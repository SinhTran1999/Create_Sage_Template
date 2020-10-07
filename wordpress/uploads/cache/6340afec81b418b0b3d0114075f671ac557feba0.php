
<?php $__env->startSection('content'); ?>
      <div class="container">
        <?php echo $__env->make('partials.slider', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <h1 class="text-center text-danger mb-4">Danh sách các hình ảnh</h1>

        <div class="d-flex justify-content-between">
        <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4 px-3">
              <img src= "<?php echo e($project->thumb); ?>" alt="<?php echo e($project->alt); ?>"  title="<?php echo e($project->title); ?>" class="image-fluid">
              <p class="text-center text-uppercase"><?php echo e($project->name); ?></p>
            </div>

            <?php if($loop->iteration %3 === 0): ?>
              </div>
              <div class="d-flex mb-5">
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>         
    </div>
    
  </section>

<?php $__env->stopSection(); ?>
  
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>