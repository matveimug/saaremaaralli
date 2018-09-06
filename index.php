<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package saaremaaralli
 */
$backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');


get_header(); ?>
    <header class="header-page">

        <?php if ($backgroundImg) : ?>
            <div class="header-bg-container">
                <div class="header-bg-overlay"></div>
                <div class="header-bg" style="background-image: url('<?php echo random_img(); ?>')"></div>
            </div>
        <?php else : ?>
            <div class="header-bg-container">
                <div class="header-bg-overlay"></div>
                <div class="header-bg" style="background-image: url('<?php echo random_img(); ?>')"></div>
            </div>
        <?php endif; ?>
        <div class="header-text">
            <a href="<?php the_permalink(); ?>">
                <div class="header-title"><h1><?php single_post_title(); ?></h1></div>
            </a>
            <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                <?php
                if (function_exists('bcn_display')) {
                    bcn_display();
                } ?>
            </div>
        </div>
    </header>
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div id="content" class="site-content page">

                <?php
                if (have_posts()) :

                if (is_home() && !is_front_page()) : ?>
                <header>
                    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                </header>
                <div class="news-posts grid">
                    <?php
                    endif;

                    /* Start the Loop */
                    while (have_posts()) : the_post();
                        ?>
                        <div class="news-post grid-3">
                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <header class="entry-header">
                                    <?php
                                    if (is_singular()) :
                                        the_title('<h1 class="entry-title">', '</h1>');
                                    else :
                                        the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
                                    endif; ?>
                                </header><!-- .entry-header -->
                                <?php
                                saaremaaralli_post_thumbnail();
                                //                        get_template_part('template-parts/content', get_post_format());
                                if ('post' === get_post_type()) : ?>
                                    <div class="entry-meta">
                                        <?php
                                        saaremaaralli_posted_on();
                                        ?>
                                    </div><!-- .entry-meta -->
                                <?php
                                endif;
                                ?>
                                <div class="entry-content">
                                    <?php
                                    the_excerpt();
                                    ?>
                                </div><!-- .entry-content -->
                        </div>
                        </article><!-- #post-<?php the_ID(); ?> -->
                    <?php
                    endwhile;

                    the_posts_navigation();

                    else :

                        get_template_part('template-parts/content', 'none');

                    endif; ?>
                </div>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_sidebar();
get_footer();
