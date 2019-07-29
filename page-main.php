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

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
            <div class="col-12 test">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad alias
                assumenda aut commodi deleniti dignissimos distinctio
                dolor eum illo ipsa maiores maxime molestiae nemo, nulla odit quia, quos sint sit?
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, aliquid animi assumenda
                atque blanditiis dolore doloribus eaque eum iste labore minima molestias nemo neque odit,
                quam similique temporibus ut voluptatem. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad alias
                assumenda aut commodi deleniti dignissimos distinctio
                dolor eum illo ipsa maiores maxime molestiae nemo, nulla odit quia, quos sint sit?
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, aliquid animi assumenda
                atque blanditiis dolore doloribus eaque eum iste labore minima molestias nemo neque odit,
                quam similique temporibus ut voluptatem. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad alias
                assumenda aut commodi deleniti dignissimos distinctio
                dolor eum illo ipsa maiores maxime molestiae nemo, nulla odit quia, quos sint sit?
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, aliquid animi assumenda
                atque blanditiis dolore doloribus eaque eum iste labore minima molestias nemo neque odit,
                quam similique temporibus ut voluptatem.
            </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
