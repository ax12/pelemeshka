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

<br>
<br>
<br>

<div class="container">
    <div class="row justify-content-center">
        <div class="header">
            <nav class="navbar navbar-expand-sm bg-light">
                <a class="navbar-brand" href="#">Navbar</a>
                <ul class="navbar-nav ">
                    <li class="navbar-item">
                        <a href="#" class="nav-link">1</a>
                    </li>
                    <li class="navbar-item">
                        <a href="#" class="nav-link">2</a>
                    </li>
                    <li class="navbar-item">
                        <a href="#" class="nav-link">3</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<br>
<br>
<br>
<br>
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-center">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="nav justify-content-center ">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown link
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        </div>

        <ul class=" nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" href="#">Active</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>

        <div id="content" class="site-content">
