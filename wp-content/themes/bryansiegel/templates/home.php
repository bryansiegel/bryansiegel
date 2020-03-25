<?php
/*
Template Name: Homepage
*/

?>

<?php echo get_template_part('partials/head'); ?>

<body>

	<?php echo get_template_part('partials/header'); ?>

	<!-- main -->
	<main id="content">
		<!-- hero -->
		<div class="container py-5">

			<?php
			if (have_posts()) : while (have_posts()) : the_post();

					the_content();

				endwhile;
			endif;
			?>
			<div class="hp-icons">
				<a href="https://bitbucket.org/bryansiegel/" title="Bryan Siegel on Bitbucket">
					<img src="<?php echo get_home_url(); ?>/wp-content/uploads/2019/03/fav-bitbucket.png" alt="My Old repos on Bitbucket" />
				</a>
				<a href="https://github.com/bryansiegel" alt="Bryan Siegel on Github">
					<img src="<?php echo get_home_url(); ?>/wp-content/uploads/2020/03/GitHub-Mark-Light-120px-plus.png" alt="Bryan Siegel On Github">
					<a href="https://twitter.com/BryanSiegel" title="Bryan Siegel  on Twitter">
					</a>
					<img src="<?php echo get_home_url(); ?>/wp-content/uploads/2019/03/twitter.png" alt="Bryan Siegel  on Twitter" />
				</a>
				<a href="https://www.linkedin.com/in/bsiegel/" title="Bryan Siegel on LinkedIn">
					<img src="<?php echo get_home_url(); ?>/wp-content/uploads/2019/03/linkedin.png" alt="Bryan Siegel on LinkedIn" />
				</a>
				<a href="<?php echo get_home_url(); ?>/contact" title="Contact Bryan Siegel">
					<img src="<?php echo get_home_url(); ?>/wp-content/uploads/2019/03/inbox.png" alt="Contact Bryan Siegel" />
				</a>
			</div>
		</div>

		<!-- projects -->
		<div class="container py-4">
			<ul class="row list-unstyled">
				<li class="col-md-6 mb-4">
					<a href="<?php echo get_home_url(); ?>/category/Wordpress" title="Wordpress Projects">
						<figure class="img-overlay">
							<img src="<?php echo get_home_url(); ?>/wp-content/uploads/2019/03/horizon-portfolio.png" alt="Horizon Solar Power" class="border-dark img-thumbnail w-100 h-100" alt="Horizon Solar Power">
							<div class="img-hover">
								<span class="img-text">View Page</span>
							</div>
						</figure>
						<div class="h5 font-weight-normal text-center">Wordpress Development</div>
					</a>
				</li>

				<li class="col-md-6 mb-4">
					<a href="<?php echo get_home_url(); ?>/category/Laravel" title="Laravel Projects">
						<figure class="img-overlay">
							<img src="<?php echo get_home_url(); ?>/wp-content/uploads/2019/03/laravel-portfolio-1.png" alt="Laravel Web Development" class="border-dark img-thumbnail w-100 h-100">

							<div class="img-hover">
								<span class="img-text">View Page</span>
							</div>
						</figure>
						<div class="h5 font-weight-normal text-center">Laravel Development</div>
					</a>
				</li>

				<li class="col-md-6 mb-4">
					<a href="<?php echo get_home_url(); ?>/category/Wordpress" title="Wordpress Development">
						<figure class="img-overlay">
							<img src="<?php echo get_home_url(); ?>/wp-content/uploads/2019/03/ei-portfolio.png" alt="Wordpress Development" class="border-dark img-thumbnail w-100 h-100">

							<div class="img-hover">
								<span class="img-text">View Page</span>
							</div>
						</figure>
						<div class="h5 font-weight-normal text-center">Wordpress Development</div>
					</a>
				</li>

				<li class="col-md-6 mb-4">
					<a href="<?php echo get_home_url(); ?>/category/Magento" title="Magento Development">
						<figure class="img-overlay">
							<img src="<?php echo get_home_url(); ?>/wp-content/uploads/2019/03/cibaria-portfolio-1.png" alt="Magento Development" class="border-dark img-thumbnail w-100 h-100">

							<div class="img-hover">
								<span class="img-text">View Page</span>
							</div>
						</figure>
						<div class="h5 font-weight-normal text-center">Magento Development</div>
					</a>
				</li>
			</ul>
		</div>

		<!-- twitter -->
		<div class="bg-white text-black">
			<div class="container py-6">
				<h1 class="h1 text-center mb-5">I Chat About Stuff</h1>
				<div class="row">
					<div class="card-deck">
						<!-- twitter timeline -->
						<?php echo get_template_part('partials/twitter-timeline'); ?>
					</div>
				</div>
			</div>
		</div>
		<!-- end Twitter -->

		<!-- Start Posts -->
		<div class="bg-black text-black">
			<div class="container py-6">
				<h1 class="h1 text-center mb-5 text-white">I Blog About Stuff</h1>
				<div class="row">
					<!-- posts -->
					<div class="container py-2">
						<div class="row">
							<?php $the_query = new WP_Query('posts_per_page=2'); ?>
							<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

								<div class="col-md-6">
									<div class="card border-0 mb-5">
										<div class="card-body">
											<h2 class="card-title h3 card-title-green">
												<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
											</h2>

											<?php
											$categories = get_the_category();

											foreach ($categories as $category) : ?>

												<span class="badge badge-pill badge-dark">
													<?php echo $category->name; ?>
												</span>

											<?php endforeach; ?>
											<hr>
											<div class="small text-muted mb-3">
												<a href="<?php the_permalink() ?>" class="btn btn-primary btn-sm">Read More
												</a><span style="float:right;" class="card-title-green">by: <a href="<?php echo get_home_url(); ?>/about">Bryan Siegel</a></span>
											</div>
										</div>
									</div>
								</div>


							<?php
							endwhile;
							wp_reset_postdata();
							?>

						</div>
						<div class="text-center my-5">
							<a href="<?php echo get_home_url(); ?>/blog" class="btn btn-outline-white" title="View all Blog Posts">View all Blog Posts</a>
						</div>
					</div>
					<!-- end posts -->
				</div>
			</div>
		</div>
		<!-- End Posts -->
		<?php echo get_template_part('partials/call-to-action'); ?>
	</main>

	<?php echo get_template_part('partials/footer'); ?>
</body>

</html>