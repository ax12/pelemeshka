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
    <script src="https://kit.fontawesome.com/1318545521.js"></script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'plm' ); ?></a>

    <header id="masthead" class="site-header">
        <div class="container-fluid">
            <div class="row justify-content-center main-navigation-mx fixed-top">

                <nav class="navbar navbar-expand-lg navbar-dark  justify-content-center disable-decor-link  "

                <a class="navbar-brand" href="/">
                    <img src="<?php echo carbon_get_theme_option('main_logo'); ?>" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'menu-1',
                        'menu_id'        => 'primary-menu',
                        'depth'           => 2,
                        'container'       => false,
                        'menu_class'      => 'nav justify-content-center',
                        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'          => new WP_Bootstrap_Navwalker()
                    ]);
                    ?>
                </div>>
                </nav>

            </div>

        </div><!--        END container fluid-->