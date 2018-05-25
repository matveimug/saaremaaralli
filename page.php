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
 * @package saaremaaralli
 */

get_header();
while ( have_posts() ) : the_post();
    $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');

?>
    <?php get_template_part('postheader') ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            <div id="content" class="site-content page">


            <?php

				the_content();

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;


			?>

            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
endwhile; // End of the loop.
get_footer();

