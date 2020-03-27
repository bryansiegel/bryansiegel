<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-1368144-24"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-1368144-24');
	</script>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>
		<?php //if ( get_category_name(117) ) : ?>
		<?php //else : ?>
			<?php echo wp_title( '', true, '' ); ?>
		<?php //endif; ?>
	</title>

	<link href="<?php echo get_bloginfo( 'template_directory' ); ?>/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo get_bloginfo( 'template_directory' ); ?>/css/theme.css" rel="stylesheet">
	<link href="<?php echo get_bloginfo( 'template_directory' ); ?>/css/style.css" rel="stylesheet">


	<script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"
	        integrity="sha384-0pzryjIRos8mFBWMzSSZApWtPl/5++eIfzYmTgBBmXYdhvxPc+XcFEk+zJwDgWbP"
	        crossorigin="anonymous"></script>
</head>

<?php wp_head(); ?>