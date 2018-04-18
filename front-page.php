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
 * @package mamasheaven
 */

get_header(); ?>

<?php //featured newz:
$args = array(
    'category_name' => 'mega-uudis'
);
$query = new WP_Query($args);
while ($query->have_posts()) : $query->the_post(); ?>
    <?php static $count_news_header = 0;
    if ($count_news_header == 1) {
        break;
    } else { ?>
        <?php
        $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
        $excerpt = get_the_excerpt();
        ?>
        <header class="header-featured-news">

            <?php if ($backgroundImg) : ?>
                <div class="header-bg-container">
                    <div class="header-bg-overlay"></div>
                    <div class="header-bg-dust"></div>
                    <div class="header-bg" style="background-image: url('<?php echo $backgroundImg[0]; ?>')"></div>
                </div>
            <?php else : ?>
                <div class="header-bg-container">
                    <div class="header-bg-overlay"></div>
                    <div class="header-bg-dust"></div>
                    <div class="header-bg" style="background-image: url('<?php echo random_img(); ?>')"></div>
                </div>
            <?php endif; ?>
            <div class="header-text">
                <a href="<?php the_permalink(); ?>">
                    <div class="header-title"><h1><?php the_title(); ?></h1></div>
                    <div class="header-excerpt">
                        <p><?php echo $excerpt; ?></p>
                        <!--                                <button class="news-continue btn-sm btn-featured">loe edasi</button>-->
                    </div>
                </a>
            </div>
        </header>
        <?php $count_news_header++;
    } ?>
<?php endwhile; ?>

    <!-- /#masthead -->
    <div id="content" class="site-content">

    <div class="featured-pages-container grid">

        <?php //featured pages:
        $args = array(
            'post_type' => 'featured'
        );
        $query = new WP_Query($args);
        while ($query->have_posts()) : $query->the_post(); ?>
            <?php static $count_feat = 0;
            if ($count_feat == 2) {
                break;
            } else { ?>
                <?php
                $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
                $link = get_post_meta(get_the_ID(), 'link', true);
                $content = get_the_content();
                ?>
                <div class="featured-container grid-3">
                    <a href="/index.php/<?php if (!empty($link)) {echo $link;} ?>">
                        <div class="featured-bg-container">
                            <div class="featured-bg-overlay"></div>
                            <div class="featured-bg" style="background-image: url('<?php echo $backgroundImg[0]; ?>')"></div>
                        </div>
                        <div class="featured-item">

                            <div class="featured-title"><h1><?php the_title(); ?></h1></div>
                            <?php if ($content) : ?>
                                <div class="featured-subtitle multi-ellipsis"><?php echo $content; ?></div>
                            <?php endif; ?>
                        </div>
                    </a>
                </div>
                <?php $count_feat++;
            } ?>
        <?php endwhile; ?>
    </div>

    <div class="logo-slider">
        <?php echo do_shortcode('[gs_logo order="ASC" speed="1000" inf_loop="1" ticker="1" logo_color="gray_to_def"]
'); ?>
    </div>

    <div class="featured-news-container grid">

        <?php //featured newz:
        $args = array(
            'category_name' => 't2htis_uudis'
        );
        $query = new WP_Query($args);
        while ($query->have_posts()) : $query->the_post(); ?>
            <?php static $count_news = 0;
            if ($count_news == 3) {
                break;
            } else { ?>
                <?php
                $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
                $excerpt = get_the_excerpt();
                ?>
                <div class="news-container grid-2">
                    <a href="<?php the_permalink(); ?>">

                        <div class="news-item">
                            <div class="news-title"><h1><?php the_title(); ?></h1></div>
                            <div class="news-meta">
                                uuendatud:
                                <span class="news-date"><?php the_modified_time('H:i'); ?><?php the_modified_time('d.m.y'); ?></span>
                                autor: <span class="news-author"><?php the_author(); ?></span></div>
                            <?php if ($backgroundImg) : ?>
                                <div class="news-bg-container">
                                    <div class="news-bg" style="background-image: url('<?php echo $backgroundImg[0]; ?>')"></div>
                                </div>
                            <?php endif; ?>
                            <div class="news-excerpt">
                                <p><?php echo $excerpt; ?></p>
                                <button class="news-continue btn-sm btn-featured">loe edasi</button>
                            </div>
                        </div>
                    </a>
                </div>
                <?php $count_news++;
            } ?>
        <?php endwhile; ?>
        <div class="news-linkto grid-6">
            <a class="btn btn-featured" href="/index.php/uudised/">
                <h4>kõik uudiseid </h4>
            </a>
        </div>


    </div>

    <div class="social-feed">
        <?php
        $the_slug = 'social';
        $args = array(
            'post_type' => 'page',
            'name' => $the_slug
        );

        $your_query = new WP_Query($args);
        while ($your_query->have_posts()) :
        $your_query->the_post(); ?>
        <?php the_content(); endwhile; ?>
        </div>
    </div>

<?php
//get_sidebar();
get_footer();
