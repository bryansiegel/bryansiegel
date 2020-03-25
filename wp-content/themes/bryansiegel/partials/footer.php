<footer class="bg-white text-dark">
	<div class="container pt-6 pb-2">
		<div class="row justify-content-md-between">
			<div class="col-4 col-md-2 mb-4">
				<h4 class="h6">Pages</h4>
				<ul class="nav flex-column">
					<li class="mb-1">
						<a href="<?php echo get_home_url(); ?>/about" class="text-muted" title="About Bryan Siegel">About</a>
					</li>
					<li class="mb-1">
						<a href="<?php echo get_home_url(); ?>/projects" class="text-muted" title="Bryan Siegel Projects">Projects</a>
					</li>
					<li class="mb-1">
						<a href="<?php echo get_home_url(); ?>/blog" class="text-muted" title="Blog">Blog</a>
					</li>
					<li class="mb-1">
						<a href="<?php echo get_home_url(); ?>/resume" class="text-muted" title="Bryan Siegel Resume">Resume</a>
					</li>
					<li class="mb-1">
						<a href="<?php echo get_home_url(); ?>/contact" class="text-muted" title="Contact Bryan Siegel">Contact</a>
					</li>
				</ul>
			</div>
			<div class="col-4 col-md-2 mb-4">
				<h4 class="h6 mb-3">Projects</h4>
				<ul class="nav flex-column">
					<li class="mb-1">
						<a href="<?php echo get_home_url(); ?>/category/Laravel" class="text-muted" title="Laravel">Laravel</a>
					</li>
					<li class="mb-1">
						<a href="<?php echo get_home_url(); ?>/category/Wordpress" class="text-muted" title="Wordpress">Wordpress</a>
					</li>
					<li class="mb-1">
						<a href="<?php echo get_home_url(); ?>/category/JQuery" class="text-muted" title="JQuery">JQuery</a>
					</li>
					<li class="mb-1">
						<a href="<?php echo get_home_url(); ?>/category/Magento" class="text-muted" title="Magento">Magento</a>
					</li>
					<!-- <li class="mb-1"><a href="<?php //echo get_home_url(); ?>/catetgory/Vue" class="text-muted">Vue</a></li> -->
				</ul>
			</div>
			<div class="col-4 col-md-2 mb-4">
				<h4 class="h6 mb-3">Posts</h4>
				<ul class="nav flex-column">
					<li class="mb-1">
						<a href="<?php echo get_home_url(); ?>/category/Apple" class="text-muted" title="Apple">Apple</a>
					</li>
					<li class="mb-1">
						<a href="<?php echo get_home_url(); ?>/category/Web-Development" class="text-muted" title="Web Development">Web Dev</a>
					</li>
					<li class="mb-1">
						<a href="<?php echo get_home_url(); ?>/category/Personal" class="text-muted" title="Personal">Personal</a>
					</li>
					<li class="mb-1">
						<a href="<?php echo get_home_url(); ?>/category/Reflection" class="text-muted" title="Reflection">Reflection</a>
					</li>
				</ul>
			</div>
			<div class="col-sm-12 col-md-4 mb-4">
				<h3 class="h6 mb-3">Disclaimer</h3>
				<p class="text-muted">The opinions expressed herein are my own personal opinions and do not represent my
					employer’s view in any way.</p>
			</div>
		</div>
		<hr>
		<p class="small">© <?php echo Date( "Y" ); ?> <a href="<?php echo get_home_url(); ?>" title="Bryan Siegel">bryansiegel.com</a>
		</p>
		<hr>
<!--		<div class="d-flex justify-content-center">-->
<!--			<img src="--><?php //echo get_template_directory_uri(); ?><!--/img/icons/wordpress.png" alt="Wordpress" class="img-fluid">-->
<!--			<img src="--><?php //echo get_template_directory_uri(); ?><!--/img/icons/bootstrap.png" alt="Bootstrap" class="img-fluid">-->
<!--			<img src="--><?php //echo get_template_directory_uri(); ?><!--/img/icons/vue.png" alt="Vue" class="img-fluid">-->
<!--		</div>-->
	</div>
</footer>

<script src="<?php echo get_bloginfo( 'template_directory' ); ?>/js/jquery-3.3.1.slim.min.js"></script>
<!--<script src="--><?php //echo get_bloginfo( 'template_directory' ); ?><!--/js/popper.min.js"></script>-->
<script src="<?php echo get_bloginfo( 'template_directory' ); ?>/js/bootstrap.min.js"></script>