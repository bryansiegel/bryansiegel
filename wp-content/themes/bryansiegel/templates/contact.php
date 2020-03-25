 <?php 
/*
Template Name: Contact
*/

 ?>

 <?php echo get_template_part('partials/head'); ?>

     <?php echo get_template_part('partials/header'); ?>
<main id="content">

        <div class="container py-6">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h1 class="display-4 mb-4">Contact Me</h1>
                        <!-- line -->
                        <div class="holder">
                <div class="line line1"></div>
                <div class="line line2"></div>
            </div>                    
            <p class="lead text-secondary">Ask me about anything.</p>
                </div>
            </div>
        </div>



        <div class="bg-white text-black">
            <div class="container py-2">
                <div class="bg-white mt-n6 px-3 px-lg-0">
                    <div class="row justify-content-center py-4 py-lg-5">
                        <div class="col-md-10 col-lg-8">
                            <?php 
            if ( have_posts() ) : while ( have_posts() ) : the_post();
    
                the_content();
  
            endwhile; endif; 
            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
             <?php echo get_template_part('partials/call-to-action'); ?>
    </main>

     <?php echo get_template_part('partials/footer'); ?>
