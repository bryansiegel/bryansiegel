<?php
/*
Template Name: Blog Main
*/

global $wp;
?>

<?php echo get_template_part( 'partials/head' ); ?>
<?php echo get_template_part( 'partials/header' ); ?>
<main id="content">

	<!-- Hero -->
	<div class="container py-5 py-lg-6">
		<h1 class="display-3 pb-3"><?php
			if($wp->request == 'blog') {
				echo "Blog";
			} else {
				echo single_term_title();
			}
			?>
		</h1>
		<!-- line -->
		<div class="holder">
			<div class="line line1"></div>
			<div class="line line2"></div>
		</div>
	</div>

	<div class="bg-white text-black pb-5">
		<div class="container py-2">
			<div class="row mt-n6">
				<?php
				//posts
				if ( have_posts() ) : while ( have_posts() ) : the_post();

					get_template_part( 'content', get_post_format() );

				endwhile; endif;
				?>
			</div>
		</div>
		<nav aria-label="Page navigation">
			<div class="pagination justify-content-center">

				<?php the_posts_pagination( array(
					'mid_size'  => 4,
					'prev_text' => __( 'Previous', 'textdomain' ),
					'next_text' => __( 'Next', 'textdomain' ),
				) ); ?>

			</div>
		</nav>
	</div>
	</div>
</main>
<?php echo get_template_part( 'partials/call-to-action' ); ?>
<?php echo get_template_part( 'partials/footer' ); ?>
