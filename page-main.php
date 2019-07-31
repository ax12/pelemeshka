<?php /* Template Name: Шаблон главной страницы */ ?>
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
        <div class="col-12  text-center">
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

    <!--    START block-section 3       -->
    <div class="row content-bg justify-content-md-center">
        <div class="col-12  text-center">
            <h2>   <?php echo carbon_get_post_meta(get_the_ID(), 'part3_name');?> </h2>
        </div>
        <div class="col-12  text-center">
            <img src="<? echo get_template_directory_uri() . '/img/line-1.png' ?>" alt="">
        </div>


        <div class="col-4  text-center content-font slogan">
            <a href="/dostavka"><img src="<?php echo carbon_get_post_meta(get_the_ID(),'first_img'); ?>" alt=""></a>
        </div>
        <div class="col-4  text-center content-font slogan">
            <a href="/dostavka"><img src="<?php echo carbon_get_post_meta(get_the_ID(),'second_img'); ?>" alt=""></a>
        </div>

    </div>
    <div class="row text-center mb-30">
       <div class="col-12"><a href="/dostavka"> <button type="button" class="btn btn-outline-secondary">заказать доставку </button></a></div>
    </div>

    <!--    END block-section 3        -->

    <!--    START block-section 4       -->
    <div class="row content-bg-2">
        <div class="col-12  text-center">
            <h2>   <?php echo carbon_get_post_meta(get_the_ID(), 'part4_name');?> </h2>
        </div>
        <div class="col-12  text-center mb-30">
            <img src="<? echo get_template_directory_uri() . '/img/line-1.png' ?>" alt="">
        </div>
            <div class="col-4 popmake-396"> <img class="img-menu rounded mx-auto d-block" src="<?php echo carbon_get_post_meta(get_the_ID(),'first_vine_img'); ?>" alt=""> </div>
            <div class="col-4 popmake-465"> <img class="img-menu rounded mx-auto d-block" src="<?php echo carbon_get_post_meta(get_the_ID(),'second_vine_img'); ?>" alt=""> </div>
            <div class="col-4 popmake-478"> <img class="img-menu rounded mx-auto d-block" src="<?php echo carbon_get_post_meta(get_the_ID(),'third_vine_img'); ?>" alt=""> </div>
    </div>

    <!--    END block-section 4        -->

</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
