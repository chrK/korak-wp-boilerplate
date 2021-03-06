<!DOCTYPE html><!--[if IE 6]><html id="ie6" <?php language_attributes(); ?>><![endif]-->
			<!--[if IE 7]><html id="ie7" <?php language_attributes(); ?>><![endif]-->
			<!--[if IE 8]><html id="ie8" <?php language_attributes(); ?>><![endif]-->
			<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
			<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title><?php
		// Print the <title> tag based on what is being viewed.
		global $page, $paged;
		wp_title( '|', true, 'right' );

		// Add the blog name.
		bloginfo( 'name' );

		// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " | $site_description";

		// Add a page number if necessary:
		if ( $paged >= 2 || $page >= 2 )
			echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

		?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/screen.css" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<script src="<?php bloginfo( 'template_url' ); ?>/js/modernizr.js" type="text/javascript"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
