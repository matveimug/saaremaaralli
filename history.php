<?php /* Template Name: history */

get_header();
while (have_posts()) : the_post();

    ?>
<?php get_template_part('postheader') ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div id="content" class="site-content page">


                <section class="timeline-intro">
<!--                    <h1>--><?php //the_title(); ?><!--</h1><br>-->
                    <?php the_content(); ?>
                </section>
                <section class="timeline">
                    <ul>
                        <?php //history loop:
                        $args = array(
                            'post_type' => 'history',
                            'meta_key' => 'aasta',
                            'orderby' => 'meta_value',
                            'order' => 'DESC'
                        );
                        $query = new WP_Query($args);
                        while ($query->have_posts()) : $query->the_post(); ?>

                            <?php
                            $url = get_the_post_video_url($post->ID);
                            $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
                            preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);
                            $youtube_id = $match[1];
                            $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
                            $content = get_the_content();
                            $year = get_post_meta(get_the_ID(), 'aasta', true);
                            ?>
                            <li>
                                <div class="year" title="<?php echo $year; ?>">
                                    <div class="year-media">
                                        <?php if ($url) : ?>
                                            <div class="vid-container">
                                                <div class="vid">
                                                    <div class="featured-video-plus post-thumbnail fvp-responsive fvp-youtube fvp-center">
                                                        <iframe id="ytheader" width="640" height="360"
                                                                src="https://www.youtube.com/embed/<?php echo $youtube_id ?>?width=640&amp;height=360&amp;vq=small&amp;enablejsapi=1&amp;iv_load_policy=3&amp;modestbranding=1&amp;rel=0&amp;showinfo=0&amp;mute=1"
                                                                frameborder="0" encrypted-media
                                                        " allowfullscreen="">
                                                        </iframe>
                                                    </div>
                                                </div>
                                                <div class="year-bg" style="background-image: url('<?php echo $backgroundImg[0]; ?>')"></div>
                                            </div>
                                        <?php elseif ($backgroundImg) : ?>
                                            <div class="year-img-container">
                                                <img src="<?php echo $backgroundImg[0]; ?>" alt="">
                                            </div>
                                        <?php else : ?>
                                            <div class="year-nomedia"></div>
                                        <?php endif; ?>
                                        <h1 class="year-title"><?php the_title(); ?></h1>
                                    </div>
                                    <?php if ($content) : ?>
                                        <div class="year-content"><?php echo $content; ?></div>
                                    <?php endif; ?>
                                </div>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </section>

            </div>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
endwhile; // End of the loop.
get_footer();

