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
    <header class="header-page">

        <?php if ($backgroundImg) : ?>
            <div class="header-bg-container">
                <div class="header-bg-overlay"></div>
                <div class="header-bg" style="background-image: url('<?php echo $backgroundImg[0]; ?>')"></div>
            </div>
        <?php else : ?>
            <div class="header-bg-container">
                <div class="header-bg-overlay"></div>
                <div class="header-bg" style="background-image: url('<?php echo random_img(); ?>')"></div>
            </div>
        <?php endif; ?>
        <div class="header-text">
            <a href="<?php the_permalink(); ?>">
                <div class="header-title"><h1><?php the_title(); ?></h1></div>
            </a>
        </div>
    </header>
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