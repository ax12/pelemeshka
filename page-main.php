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


        <div class="col-lg-4  col-md-6 col-sm-6 text-center content-font slogan">
            <a href="/dostavka"><img src="<?php echo carbon_get_post_meta(get_the_ID(),'first_img'); ?>" alt=""></a>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 text-center content-font slogan">
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
            <div class="col-md-4 col-sm-12 popmake-396"> <img class="img-menu rounded mx-auto d-block" src="<?php echo carbon_get_post_meta(get_the_ID(),'first_vine_img'); ?>" alt=""> </div>
            <div class="col-md-4 col-sm-12 popmake-465"> <img class="img-menu rounded mx-auto d-block" src="<?php echo carbon_get_post_meta(get_the_ID(),'second_vine_img'); ?>" alt=""> </div>
            <div class="col-md-4 col-sm-12 popmake-478"> <img class="img-menu rounded mx-auto d-block" src="<?php echo carbon_get_post_meta(get_the_ID(),'third_vine_img'); ?>" alt=""> </div>
    </div>

    <!--    END block-section 4        -->

    <!--    START block-section 5       -->
    <div class="row content-bg justify-content-md-center">
        <div class="col-12  mb-30 text-center justify-content-center">
            <h3>   <?php echo carbon_get_post_meta(get_the_ID(), 'part5_name');?> </h3>
        </div>
        <div class="col-2"></div>
        <div class="col-md-4 col-sm-12 text-center">

           <?php echo do_shortcode( '[contact-form-7 id="660" title="Контактная форма 1"]' ); ?>
        </div>
        <div class="col-md-4 d-none d-sm-none d-md-block ">
            <img class="cook-img" src="/wp-content/uploads/2017/10/600417134.png" alt="">
        </div>
        <div class="col-2"></div>
<div class="col-12 text-center">*Нажимая на кнопку «Отправить», вы принимаете
    <a href="/wp-content/uploads/2017/10/Согласие.pdf">СОГЛАСИЕ НА ОБРАБОТКУ ПЕРСОНАЛЬНЫХ ДАННЫХ
    </a>
    </div>
    </div>

<div class="et_pb_text_10 phone text-center">

    <p>ВЫ ТАКЖЕ МОЖЕТЕ ЗАБРОНИРОВАТЬ СТОЛИК ПО ТЕЛЕФОНУ: <br>
        <a href="tel:<?php echo carbon_get_theme_option('phone'); ?>"><?php echo carbon_get_theme_option('phone'); ?></a></p>

</div>
    <!--    END block-section 5        -->

    <!--    START block-section 6       -->
    <div class="row content-bg-2 justify-content-md-center">
        <div class="col-12  text-center">
            <h2>   <?php echo carbon_get_post_meta(get_the_ID(), 'part6_name');?> </h2>
        </div>
        <div class="col-12  text-center">
            <img src="<? echo get_template_directory_uri() . '/img/line-1.png' ?>" alt="">
        </div>


        <div class="col-12  text-center content-font slogan font-white">
            <p>Адрес: <?php echo carbon_get_post_meta(get_the_ID(), 'adres_mine_page');?></p>
            <p>Телефон: <?php echo carbon_get_theme_option('phone'); ?></p>
            <p>Открыто: <?php echo carbon_get_post_meta(get_the_ID(), 'time_working');?></p>
        </div>
        <div class="row">
            <div class="col-md-12 justify-content-md-center mb-30">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1090.5797949776913!2d60.64721308217521!3d56.86035818198311!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43c16dceb9cc92c9%3A0xef8dc7ba374702cf!2z0JLRgNC10LzRjyDQldGB0YLRjA!5e0!3m2!1sru!2sru!4v1564581472460!5m2!1sru!2sru" width="1800" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>


    </div>

    <!--    END block-section 6        -->

</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
