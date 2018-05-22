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
        $url = get_the_post_video_url($post->ID);
        $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
        preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);
        $youtube_id = $match[1];
        $excerpt = get_the_excerpt();
        ?>
        <header class="header-featured-news">

            <?php if ($url) : ?>
                <div class="header-bg-container">
                    <div class="header-bg-overlay"></div>
                    <div class="header-bg-video">
                        <div class="featured-video-plus post-thumbnail fvp-responsive fvp-youtube fvp-center">
                            <iframe id="ytheader" width="640" height="360"
                                    src="https://www.youtube.com/embed/<?php echo $youtube_id ?>?width=640&amp;height=360&amp;vq=small&amp;autoplay=1&amp;enablejsapi=1&amp;iv_load_policy=3&amp;loop=1&amp;playlist=<?php echo $youtube_id ?>&amp;modestbranding=1&amp;rel=0&amp;showinfo=0&amp;mute=1"
                                    frameborder="0" allow="autoplay; encrypted-media" allowfullscreen="">
                            </iframe>
                        </div>
                    </div>
                    <div class="header-bg" style="background-image: url('<?php echo $backgroundImg[0]; ?>')"></div>
                </div>
            <?php elseif ($backgroundImg) : ?>
                <div class="header-bg-container">
                    <div class="header-bg-overlay"></div>
                    <div class="header-bg" style="background-image: url('<?php echo $backgroundImg[0]; ?>')"></div>
                </div>
            <?php else : ?>
                <div class="header-bg-container">
                    <div class="header-bg-overlay"></div>
                    <div class="header-bg-video"><?php echo $backgroundVid ?></div>
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
                'category_name' => 'esilehel_alguses',
            );
            $query = new WP_Query($args);
            while ($query->have_posts()) : $query->the_post(); ?>
                <?php static $count_feat = 0;
                if ($count_feat == 2) {
                    break;
                } else { ?>
                    <?php
                    $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
                    $content = get_the_content();
                    ?>
                    <div class="featured-container grid-3">
                        <a href="<?php the_permalink(); ?>">
                            <div class="featured-bg-container">
                                <div class="featured-bg-overlay"></div>
                                <div class="featured-bg" style="background-image: url('<?php echo $backgroundImg[0]; ?>')"></div>
                            </div>
                            <div class="featured-item">
                                <div class="featured-text">
                                    <div class="featured-title"><h1><?php the_title(); ?></h1></div>
                                    <?php if ($content) : ?>
                                        <div class="featured-subtitle multi-ellipsis"><?php echo $content; ?></div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php $count_feat++;
                } ?>
            <?php endwhile; ?>
        </div>

        <div class="logo-slider">
            <?php echo do_shortcode('[widget widget_name="logos_widget"]'); ?>
        </div>

        <div class="featured-results">
            <?php echo do_shortcode('[widget widget_name="results_widget"]'); ?>
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
                                <?php if ($backgroundImg) : ?>
                                    <div class="news-bg-container">
                                        <div class="news-bg" style="background-image: url('<?php echo $backgroundImg[0]; ?>')"></div>
                                    </div>
                                <?php endif; ?>
                                <div class="news-title"><h1><?php the_title(); ?></h1></div>
                                <div class="news-meta">
                                    uuendatud:
                                    <span class="news-date"><?php the_modified_time('H:i'); ?><?php the_modified_time('d.m.y'); ?></span>
                                    autor: <span class="news-author"><?php the_author(); ?></span></div>
                                <div class="news-excerpt">
                                    <p><?php echo $excerpt; ?></p>
                                    <button class="news-continue btn btn-featured">loe edasi</button>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php $count_news++;
                } ?>
            <?php endwhile; ?>
            <div class="news-linkto grid-6">
                <a class="" href="/index.php/uudised/">
                    <h4>kõik uudiseid </h4>
                </a>
            </div>
        </div>

        <?php //featured wide:
        $args = array(
            'category_name' => 'esilehel_lai',
        );
        $query = new WP_Query($args);
        while ($query->have_posts()) : $query->the_post(); ?>
            <?php static $count_news_header = 0;
            if ($count_wide == 1) {
                break;
            } else { ?>
                <?php
                $url = get_the_post_video_url($post->ID);
                $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
                preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);
                $youtube_id = $match[1];
                $excerpt = get_the_excerpt();
                ?>
                <div class="featured-wide-container">
                    <div class="featured-wide-innercontainer">
                        <div class="featured-wide">
                            <?php if ($url) : ?>
                                <div class="header-bg-container">
                                    <div class="header-bg-overlay"></div>
                                    <div class="header-bg-video">
                                        <div class="featured-video-plus post-thumbnail fvp-responsive fvp-youtube fvp-center">
                                            <iframe id="ytheader" width="640" height="360"
                                                    src="https://www.youtube.com/embed/<?php echo $youtube_id ?>?width=640&amp;height=360&amp;vq=small&amp;autoplay=1&amp;enablejsapi=1&amp;iv_load_policy=3&amp;loop=1&amp;playlist=<?php echo $youtube_id ?>&amp;modestbranding=1&amp;rel=0&amp;showinfo=0&amp;mute=1"
                                                    frameborder="0" allow="autoplay; encrypted-media" allowfullscreen="">
                                            </iframe>
                                        </div>
                                    </div>
                                    <div class="header-bg" style="background-image: url('<?php echo $backgroundImg[0]; ?>')"></div>
                                </div>
                            <?php elseif ($backgroundImg) : ?>
                                <div class="header-bg-container">
                                    <div class="header-bg-overlay"></div>
                                    <div class="header-bg" style="background-image: url('<?php echo $backgroundImg[0]; ?>')"></div>
                                </div>
                            <?php else : ?>
                                <div class="header-bg-container">
                                    <div class="header-bg-overlay"></div>
                                    <div class="header-bg-video"><?php echo $backgroundVid ?></div>
                                    <div class="header-bg" style="background-image: url('<?php echo random_img(); ?>')"></div>
                                </div>
                            <?php endif; ?>
                            <div class="featured-wide-text">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="featured-wide-title"><h1><?php the_title(); ?></h1></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $count_wide++;
            } ?>
        <?php endwhile; ?>

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
