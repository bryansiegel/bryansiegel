 <?php echo get_template_part('partials/head'); ?>
     <?php echo get_template_part('partials/header'); ?>
<main id="content">

        <!-- Article -->
        <div class="container py-6">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h1><?php the_title(); ?></h1>
                                                        <!-- line -->
                                                        <div class="holder">
                <div class="line line1"></div>
                <div class="line line2"></div>
            </div>
                    <div class="d-flex align-items-center mb-3">
                        <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2019/03/bryan-twitter.jpg" class="avatar avatar-sm mr-3" alt="Bryan Siegel">
                        <div class="font-italic text-light">by <a href="<?php echo get_home_url(); ?>/about">Bryan Siegel</a></div>
                        <div class="text-secondary ml-auto"><?php echo get_the_date(); ?></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white text-black">
            <div class="container py-2">
                <div class="bg-white mt-n6 px-3 px-lg-0">
                    <div class="row justify-content-center py-4 py-lg-5">
                        <div class="col-md-10 col-lg-8">
                                    <?php 
            //posts
            if ( have_posts() ) : while ( have_posts() ) : the_post();
                // the_post_thumbnail( 'full', ['class' => 'img-responsive']);
                the_content();
  
            endwhile; endif; 
            ?>
                            <h3 class="sr-only">Tags</h3>

                                                <?php 
                                                    $categories = get_the_category();

                                                    foreach($categories as $category) : ?>

                                                <a href="<?php echo get_home_url(); ?>/category/<?php echo $category->slug; ?>" class="btn btn-sm btn-outline-dark mr-2 mb-3"><?php echo $category->name; ?></a>
                                                <?php //var_dump($category); ?>

                                                    <?php endforeach; ?>

                         <!--    
                            <a href="#" class="btn btn-sm btn-outline-dark mr-2 mb-3">Design</a>
                            <a href="#" class="btn btn-sm btn-outline-dark mb-3">Minimalism</a> -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
             <?php echo get_template_part('partials/call-to-action'); ?>
    </main>
     <?php echo get_template_part('partials/footer'); ?>
