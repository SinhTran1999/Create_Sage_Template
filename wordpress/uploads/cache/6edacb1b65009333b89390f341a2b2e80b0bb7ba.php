

<?php $__env->startSection('content'); ?>
  <?php while(have_posts()): ?> <?php the_post() ?>
      <section class="py-5 font-sans min-h-screen -mb-10 leading-normal">
        <h2 class="text-2xl mb-4"><?php echo e(the_title('<h2>','</h2>')); ?></h2>
        <?php echo the_content(); ?>

     
      <?php
        $args = [
          'post_per_page' => -1,
          'offset' => 0,
          'orderby' => 'date',
          'order' => 'DESC',
          'post_type' =>'projects'
        ];

        $the_query = new \WP_Query($args)
      ?>

      <div class="flex">
        <?php while($the_query->have_posts()): ?> <?php $the_query->the_post() ?>
          <?php
          $image = get_field('project_image'); 
          //  vars
          $url = $image['url'];
          $title = $image['title'];
          $alt = $image['alt'];
          $caption = $image['caption'];

          // thumbnail, medium, large 
          $size = ['medium'];
          $thumb = $image['sizes'][$size];
          $width = $image['sizes'][$size. '-width'];
          $height = $image['sizes'][$size.'-height'];

          ?>

          <div class="w-1/3">
          <img src= "<?php echo e($thumb); ?>" alt="<?php echo e($alt); ?>" title="<?php echo e($title); ?>">
          </div>

        <?php endwhile; ?>
      </div>


      <?php 
        wp_reset_postdata();
      ?>
    <?php endwhile; ?>
  </section>
<?php $__env->stopSection(); ?>
  
<?php echo $__env->make('../layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>