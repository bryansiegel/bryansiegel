<?php 
/*
Template Name: Projects Internal
*/

 ?>


 <?php echo get_template_part('partials/head'); ?>
     <?php echo get_template_part('partials/header'); ?>
<main id="content">

        <!-- Hero -->
        <div class="container pt-5 pt-lg-6">
            <h1 class="display-4 mb-5"><?php echo get_the_title(); ?></h1>

                      <?php 
            if ( have_posts() ) : while ( have_posts() ) : the_post();
    
                the_content();
  
            endwhile; endif; 
            ?>


        </div>
         <?php echo get_template_part('partials/call-to-action'); ?>

    </main>
     <?php echo get_template_part('partials/footer'); ?>
