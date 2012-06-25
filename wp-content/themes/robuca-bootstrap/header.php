<?php
/** header.php
 *
 * Displays all of the <head> section and everything up till </header>
 *
 * @author		Konstantin Obenland
 * @package		The Bootstrap
 * @since		1.0 - 05.02.2012
 */

?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
	<head>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<title><?php wp_title( '&laquo;', true, 'right' ); ?></title>
		
		<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
		<![endif]-->
		<link href='<?php bloginfo('stylesheet_directory'); ?>/bootstrap/css/bootstrap.min.css' type='text/css' rel='stylesheet' />
		<link href='<?php bloginfo('stylesheet_directory'); ?>/style.css' type='text/css' rel='stylesheet' />
		<?php wp_head(); ?>
	</head>
	
	<body <?php body_class(); ?> data-spy="scroll">

				<header id="branding" role="banner">

					<hgroup>
						<h1 id="site-title">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								<img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.png" alt="<?php bloginfo( 'name' ); ?>">
							</a>
						</h1>
					</hgroup>

<? if ( is_home() ) { ?>
					<?php wp_nav_menu( array(
						'container'			=>	'nav',
						'container_class'	=>	'subnav hidden-phone',
						'theme_location'	=>	'header-menu',
						'menu_class'		=>	'nav nav-pills',
						'depth'				=>	1,
						'fallback_cb'		=>	false
					) ); ?>
<? } else { ?>
<nav class="subnav hidden-phone">
	<ul id="menu-topo" class="nav nav-pills">
		<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">&lt; Início</a></li>
	</ul>
</nav>
<? } //endif ?>

				</header><!-- #branding -->

		<div class="container">
			<div id="page" class="hfeed row">
				<?php
			

/* End of file header.php */
/* Location: ./wp-content/themes/the-bootstrap/header.php */