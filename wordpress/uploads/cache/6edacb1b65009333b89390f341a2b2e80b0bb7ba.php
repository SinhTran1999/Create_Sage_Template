

<?php $__env->startSection('content'); ?>

      
      <section class="py-5 font-sans min-h-screen -mb-10 leading-normal">
        <h2 class="text-2xl mb-4"><?php echo e($post->post_title)); ?></h2>
        <?php echo $post->post_content; ?>



        <div class="flex my-10">
        <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          
            <div class="w-1/3 relative">
              <img src= "<?php echo e($project->thumb); ?>" alt="<?php echo e($project->alt); ?>"  title="<?php echo e($project->title); ?>">
              <p class=" bottom-5  left-0 "><?php echo e($project->name); ?></p>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>          

  </section>
<?php $__env->stopSection(); ?>
  
<?php echo $__env->make('../layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>