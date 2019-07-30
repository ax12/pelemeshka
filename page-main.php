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

<div class="container-fluid">
<!--    START block-section 1       -->
    <div class="row ">
            <div class="col-12 content-bg text-center">
                <h1><?  the_title(); ?></h1>
            </div>
                <div class="col-12 content-bg text-center">
                    <img src="<? echo get_template_directory_uri() . '/img/line-1.png' ?>" alt="">
            </div>

                <div class="col-2"></div>
                <div class="col-8 content-bg text-center content-font slogan">
                    <?php echo carbon_get_post_meta(get_the_ID(), 'slogan');?>
                </div>
                <div class="col-2"></div>

    </div>
            <div class="row">
                <div class="col-12 content-bg content-font mx-padding">
                    <?php
                    the_content();
                    ?>
                </div>
            </div>
    <!--    END block-section 1        -->
    <!--    START block-section 2       -->
    <div class="row content-bg-2">
        <div class="col-12  text-center mx-white-font">
            <h2>   <?php echo carbon_get_post_meta(get_the_ID(), 'part2_name');?> </h2>
        </div>
        <div class="col-12  text-center">
            <img src="<? echo get_template_directory_uri() . '/img/line-1.png' ?>" alt="">
        </div>

        <div class="col-2"></div>
        <div class="col-8  text-center content-font slogan">
            <?php echo do_shortcode('[supsystic-gallery id=1]') ?>
        </div>
        <div class="col-2"></div>

    </div>

    <!--    END block-section 2        -->

</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
