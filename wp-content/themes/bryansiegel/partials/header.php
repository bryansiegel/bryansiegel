<!-- header -->
<header class="site-header fixed-top bg-black border-dark">
	<a href="#content" class="sr-only sr-only-focusable">Skip to content</a>

	<div class="container">
		<nav class="navbar main-nav navbar-expand-lg navbar-dark" aria-label="Main navigation">
			<span class="navbar-brand">
				<a href="<?php echo get_home_url(); ?>" title="Bryan Siegel">bryan(<span style="color:green;">siegel</span>);</a></span>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent"
			        aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse text-uppercase" id="navbarContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a href="<?php echo get_home_url(); ?>/about" class="nav-link" title="About">About</a>
					</li>
					<li class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
						   aria-haspopup="true" aria-expanded="false" title="Projects">Projects</a>

						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
		 					<a class="dropdown-item" href="<?php echo get_home_url(); ?>/category/Laravel"
						       title="Laravel Projects">Laravel Projects</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/category/Wordpress"
							   title="Wordpress Projects">Wordpress Projects</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/category/Magento"
							   title="Magento Projects">Magento Projects</a>
						</div>
					</li>
					<li class="nav-item">
						<a href="<?php echo get_home_url(); ?>/blog" class="nav-link" title="Blog">Blog</a>
					</li>
					<li class="nav-item">
						<a href="<?php echo get_home_url(); ?>/resume" class="nav-link" title="Resume">Resume</a>
					</li>
					<li class="nav-item">
						<a href="<?php echo get_home_url(); ?>/contact" class="nav-link" title="Contact">Contact</a>
					</li>
				</ul>
			</div>
		</nav>
	</div>
</header>