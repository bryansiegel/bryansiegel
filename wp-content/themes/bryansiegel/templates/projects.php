<?php 
/*
Template Name: Projects Main
*/

 ?>

 <?php echo get_template_part('partials/head'); ?>
     <?php echo get_template_part('partials/header'); ?>
<main id="content">

        <!-- Hero -->
        <div class="container py-5 py-lg-6 text-center">
            <h1 class="display-3 mb-5"><?php echo get_the_title(); ?></h1>
            <div class="row justify-content-center">
                
                                                        <!-- line -->
                                                        <div class="holder">
                <div class="line line1"></div>
                <div class="line line2"></div>
            </div>
            <div class="col-lg-10">
                        <p class="font-italic">Here are some projects I'm working on or are currently working on.</p>
                        
                   
                </div>
            </div>
        </div>

        <!-- Projects -->

                    <?php 
            if ( have_posts() ) : while ( have_posts() ) : the_post();
    
                the_content();
  
            endwhile; endif; 
            ?>


             <?php echo get_template_part('partials/call-to-action'); ?>
    </main>
     <?php echo get_template_part('partials/footer'); ?>
