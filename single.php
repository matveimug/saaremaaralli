<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package saaremaaralli
 */

get_header();
$args = array(
    'post_type' => 'post',
);
while (have_posts($args)) : the_post($args);
    $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
    ?>
    <?php get_template_part('postheader') ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div id="content" class="site-content single">


                <?php

                get_template_part('template-parts/content', get_post_type());

                ?>

            </div>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
endwhile; // End of the loop.
get_footer();