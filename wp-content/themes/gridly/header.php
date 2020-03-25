<!DOCTYPE html>

	
    <html <?php language_attributes();?>> 
	<meta charset="<?php bloginfo('charset'); ?>" />
	<title><?php bloginfo('sitename'); ?> <?php wp_title(); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>"/>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    

	<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" />

    <?php  $options = get_option('plugin_options');
			$gridly_color_scheme = $options['gridly_color_scheme'];
			$gridly_logo = $options['gridly_logo'];
			$gridly_responsive = $options['gridly_responsive'];?> 
   
   <?php if ($gridly_color_scheme == 'dark') { ?>
    	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/dark.css" /> 
	<?php  } elseif ($gridly_color_scheme == 'custom') {  ?>
    	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/custom.css"/> 
    <?php  } else {?>
         <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/light.css"/> 
    <?php  } ?>
    
    <?php if ($gridly_responsive != 'no') { ?>
    	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
      	<link rel="stylesheet" type="text/css" media="handheld, only screen and (max-width: 480px), only screen and (max-device-width: 480px)" href="<?php echo get_template_directory_uri(); ?>/css/mobile.css" />
    <?php  } ?>
    
 	<!-- wp head -->
	<?php wp_head(); ?>
    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<link rel="author" href="https://plus.google.com/107021327353878189947/posts" />
  <style type="text/css">
.title_color a{ color:#444444; }
  </style>

</head>

<body <?php body_class(); ?>>
	
<div id="wrap">
	<div id="header">
        
    	<div id="logo">
        	<a href="<?php echo home_url( '/' ); ?>"  title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
            
                 <?php if ($gridly_logo != '') {?>
                 	 <img src="<?php echo $gridly_logo; ?>" alt="<?php bloginfo('sitename'); ?>">
                 <?php } else { ?>
                       <img src="<?php echo get_template_directory_uri(); ?>/images/light/logo.png" alt="<?php bloginfo('sitename'); ?>">
                 <?php } ?>
            </a>
            
       </div>
 	 	 <div id="nav"><ul><li><span class="title_color"><a href="http://bryansiegel.com/who-cares-about-bryan-siegel/">Who Cares About Bryan Siegel?</a></span></li><li><a href="https://twitter.com/BryanSiegel" title="Bryan Siegel on Twitter"><img src="http://bryansiegel.com/images/twitter.png" alt="Bryan Siegel on Twitter" /></a></li></ul></div>
	   

   </div>
         