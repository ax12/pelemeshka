<?php /* Template Name: Главная страница */ ?>
<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pelemeshka-ekb
 */

get_header('main');
?>

	<div id="primary" class="content-area main-page-top">
		<main id="main" class="site-main">


            <div class="row ">
            <div class="col-12 content-bg text-center">
                <h1><?  the_title(); ?></h1>
            </div>
                <div class="col-12 content-bg text-center">
                    <img src="<? echo get_template_directory_uri() . '/img/line-1.png' ?>" alt="">
            </div>
                <div class="col-10 content-bg text-center justify-content-center ">
                    <?php echo carbon_get_post_meta(get_the_ID(), 'slogan');?>
            </div>

            </div>
            <div class="row">
                <div class="col-12 content-bg content-font">
                    <?php
                    the_content();
                    ?>
                </div>
            </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
