<?php 
/*
Template Name: Wordpress Category
*/

 ?>

 <?php echo get_template_part('partials/head'); ?>
     <?php echo get_template_part('partials/header'); ?>
<main id="content">

        <!-- Hero -->
        <div class="container py-5 py-lg-6">
            <h1 class="display-3 pb-3">Wordpress Projects</h1>
                                    <!-- line -->
                                    <div class="holder">
                <div class="line line1"></div>
                <div class="line line2"></div>
            </div>
            <div class="row">
                <div class="col-lg-8">

                </div>
            </div>
        </div>

                <div class="bg-white text-black pb-5">
            <div class="container py-2">
                <div class="row mt-n6">


<?php 

$args = array(
    'cat' => 'laravel',
    'post_type' => array( 'page' ),
    'order' => 'DESC',
    'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field' => 'slug',
                'terms' => 'wordpress'
            ),     
    )
);
$laravel_pages = query_posts( $args );
  foreach ($laravel_pages as $laravel) : ?>

<div class="col-md-6">
                        <div class="card border-0 mb-5">
                            <a href="<?php echo get_page_link($laravel->ID); ?>" class="h-100 img-rising" aria-hidden="true">

                                <img width="357" height="353" src="
                                <?php 
                                $url = get_the_post_thumbnail_url( $laravel->ID, 'large' );
                                echo $url; ?>" class="card-img-top wp-post-image">                            </a>
                            <div class="card-body px-0">
                                <h2 class="card-title h3">
                                    <a href="<?php echo get_page_link($laravel->ID); ?>"><?php echo $laravel->post_title; ?></a>
                                </h2>
                                

                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>



        </div>
    </div>


        <!-- Articles -->
        
                <nav aria-label="Page navigation">
                    <div class="pagination justify-content-center">

<?php the_posts_pagination( array(
    'mid_size' => 4,
    'prev_text' => __( 'Previous', 'textdomain' ),
    'next_text' => __( 'Next', 'textdomain' ),
) ); ?>

                    </div>
                </nav>
            </div>
        </div>
    </main>
             <?php echo get_template_part('partials/call-to-action'); ?>
     <?php echo get_template_part('partials/footer'); ?>
