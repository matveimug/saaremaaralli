<?php /* Template Name: sponsors */


get_header();
while (have_posts()) : the_post();
    $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
    $realtitle = get_the_title();
    $realcontent = get_the_content();
    ?>
    <?php get_template_part('postheader') ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div id="content" class="site-content page">
                <div class="sponsor-intro">
                    <?php the_content(); ?>
                </div>
                <div class="sponsor-container">
                    <?php
                    $args = array(
                        'post_type' => 'attachment',
                        'category_name' => 'logo',
                        'orderby' => 'post_title',
                        'order' => 'ASC',
                        'posts_per_page'=>-1,
                    );

                    $attachments = get_posts($args);

                    if ($attachments) {
                        foreach ($attachments as $attachment) {
                            $url = get_post_meta( $attachment->ID, '_wp_attachment_image_alt', true );
                            $title = get_post($attachment->ID)->post_title;
                            $img = wp_get_attachment_url($attachment->ID);

                            echo '<div class="sponsor-single">';
                            if ($url) echo '<a href="'.$url.'">';
                            echo '<div class="sponsor-single-logo">';
                            echo '<img src="'.$img.'" alt="'.$title.'">';
                            echo '</div><div class="sponsor-single-title">'.$title.'</div>';
                            if ($url) echo '</a>';
                            echo '</div>';
                        }
                    }
                    ?>
                </div>
                <?php
                ?>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
endwhile; // End of the loop.
get_footer();

