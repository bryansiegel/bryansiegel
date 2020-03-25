<?php include('includes/head.php'); ?>

<?php include('includes/header.php'); ?>

<main id="content">

        <!-- Hero -->
        <div class="container py-5 pt-lg-6">
            <h1 class="display-3"><?php echo get_the_title(); ?></h1>

                        <!-- line -->
                <div class="holder">
                <div class="line line1"></div>
                <div class="line line2"></div>
            </div>


            <div class="row">
                <div class="col-lg-9">
                    <p class="lead text-secondary">My name is Bryan Siegel. I’m an uber geek that’s into code, gadgets & Star Trek. I’m a father of 3 that is lucky enough to get paid to do what he loves and blogs once in a while.</p>
                </div>
            </div>
        </div>
                    <?php 
            if ( have_posts() ) : while ( have_posts() ) : the_post();
    
                the_content();
  
            endwhile; endif; 
            ?>

        <!-- Projects -->

        <!-- Call to action -->
        <?php include('includes/call-to-action.php'); ?>
    </main>
<?php include('includes/footer.php'); ?>