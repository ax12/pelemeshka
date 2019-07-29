<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pelemeshka-ekb
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'plm' ); ?></a>

	<header id="masthead" class="site-header">
<!--        --><?php //echo carbon_get_theme_option('phone');?>
<!--       <img src="--><?php //echo carbon_get_theme_option('main_logo'); ?><!--" alt="" />-->
       <div class="container-fluid">
           <div class="row bg-header" style="background-image: url(<?php echo carbon_get_theme_option('main_background_img'); ?>)">
               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus autem consequatur cupiditate dolorem ducimus eaque, harum, iste libero non pariatur perferendis quidem tempora, vero. Cumque enim exercitationem hic inventore quisquam?
           </div>
       </div>



		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'plm' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
