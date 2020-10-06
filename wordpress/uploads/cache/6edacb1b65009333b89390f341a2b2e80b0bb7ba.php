

<?php $__env->startSection('content'); ?>
  <?php while(have_posts()): ?> <?php the_post() ?>
      <section class="py-5 font-sans min-h-screen -mb-10">
        <h2 class="text-2xl mb-4"><?php echo e(the_title('<h2>','</h2>')); ?></h2>
        <?php echo the_content(); ?>

      </section>
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

      <?php while($the_query->have_posts()): ?> 
        <?php $the_query->the_post() ?>
        hello
      <?php endwhile; ?>

      <?php 
        wp_reset_postdata();

      ?>
  <?php endwhile; ?>
<?php $__env->stopSection(); ?>
  
<?php echo $__env->make('../layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>