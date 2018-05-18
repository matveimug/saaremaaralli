<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package saaremaaralli
 */

get_header();
while (have_posts()) : the_post();
    $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
    ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div id="content" class="site-content single">


                <?php

                get_template_part('template-parts/content', get_post_type());

                the_post_navigation();

                // If comments are open or we have at least one comment, load up the comment template.
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;

                ?>

            </div>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
endwhile; // End of the loop.
get_footer();