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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'plm' ); ?></a>

	<header id="masthead" class="site-header">
<!--        --><?php //echo carbon_get_theme_option('phone');?>
<!--       <img src="--><?php //echo carbon_get_theme_option('main_logo'); ?><!--" alt="" />-->
       <div class="container-fluid">
           <div class="row bg-header justify-content-center" style="background-image: url(<?php echo carbon_get_theme_option('main_background_img'); ?>)">
              <div class="row justify-content-center"> <div class="col-12  center_img_header"> <img src="<?php echo carbon_get_theme_option('main_background_img2'); ?>" alt=""></div></div>
           </div>
       </div>

        <div class="row justify-content-md-center">

        <div class="col-12">
<!--		<nav id="site-navigation" class="main-navigation">-->
<!--			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">--><?php //esc_html_e( 'Primary Menu', 'plm' ); ?><!--</button>-->
            <nav class="navbar  navbar-expand-lg navbar-dark nav nav-link navbar-nav text-center main-navigation">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse myalign" id="navbarNav">
			<?php
                    wp_nav_menu([
                    'theme_location' => 'menu-1',
                     'menu_id'        => 'primary-menu',
                    'depth'           => 2,
                    'container'       => false,
                    'menu_class'      => 'navbar-nav mr-auto myalign',
                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'          => new WP_Bootstrap_Navwalker()
                    ]);




//			wp_nav_menu( array(
//				'theme_location' => 'menu-1',
//				'menu_id'        => 'primary-menu',
//			) );
			?>
                </div>
            </nav>

            
        </div><!--end row-->
        <!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
