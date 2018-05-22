<?php /* Template Name: sponsors */


get_header();
while (have_posts()) : the_post();
    $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
    $realtitle = get_the_title();
    $realcontent = get_the_content();
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
                <div class="header-title" style="text-align: center"><h1><?php echo $realtitle; ?></h1></div>
            </a>
        </div>
    </header>
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
                    );

                    $attachments = get_posts($args);

                    if ($attachments) {
                        foreach ($attachments as $attachment) {
                            $url = get_post_meta( $attachment->ID, '_wp_attachment_image_alt', true);
                            $title = get_post($attachment->ID)->post_excerpt;
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

