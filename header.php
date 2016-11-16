<?php
/**
 * The header template
 *
 * @package WordPress
 * @subpackage zfwp-base
 * @since ZFWP Base 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?php bloginfo('name'); ?> </title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" rel="shortcut icon">
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/foundation.min.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" />
	<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr.js"></script>
	<?php if ( is_front_page() ) : ?>
	<?php endif; ?>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<header class="header full-width">
		<div class="site-header" role="banner">
			<div id="site-details" class="row">
				<div id="logo" class="small-6 medium-3 vertical-center columns"><a href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/r7-grfx-hdr-lrg-logo.png" /></a></div>

				<?php include get_template_directory() . '/includes/mobile-menu.php'; ?>

				<div id="custom-nav" class="medium-9 show-for-medium-up columns">
					<!-- ADD NAVIGATION HERE -->
					<?php
						wp_nav_menu( array( 
							'container_class' => 'menu-main-menu-container vertical-center', 
							'container_id'    => '', 'menu_class' => 'menu', 'menu_id' => '',
							'fallback_cb'     => 'wp_page_menu',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>' 
						));
					?>
				</div>
			</div>
		</div>
	</header>