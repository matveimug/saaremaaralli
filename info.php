<?php /* Template Name: info */


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
                <div class="header-title"><h1><?php echo $realtitle; ?></h1></div>
            </a>
        </div>
    </header>
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div id="content" class="site-content page">
                <div class="grid info">
                    <div class="grid-1 info-menu">
                        <div class="info-menu-cat">
                            <?php //contestant loop
                            $args = array(
                                'post_type' => 'contestant',
                            );
                            $query = new WP_Query($args);
                            while ($query->have_posts()) : $query->the_post(); ?>
                                <?php
                                $type = get_post_type();
                                $id = get_the_ID();
                                ?>
                                <div class="info-menu-item">
                                    <a data-url="<?php echo $type; ?>_<?php echo $id; ?>"><?php the_title(); ?></a>
                                </div>
                            <?php endwhile; ?>
                        </div>
                        <div class="info-menu-cat">
                            <?php //spectator loop
                            $args = array(
                                'post_type' => 'spectator',
                            );
                            $query = new WP_Query($args);
                            while ($query->have_posts()) : $query->the_post(); ?>
                                <?php
                                $type = get_post_type();
                                $id = get_the_ID();
                                ?>
                                <div class="info-menu-item">
                                    <a data-url="<?php echo $type; ?>_<?php echo $id; ?>"><?php the_title(); ?></a>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                    <div class="grid-5" id="info">
                        <div class="info-content info-intro">
                            <h1><?php echo $realtitle; ?></h1>
                            <p><?php echo $realcontent; ?></p>
                        </div>
                        <?php //contestant-spectator loop
                        $args = array(
                            'post_type' => array('contestant', 'spectator'),
                        );
                        $query = new WP_Query($args);
                        while ($query->have_posts()) : $query->the_post(); ?>
                            <?php
                            $type = get_post_type();
                            $id = get_the_ID();
                            ?>
                            <div id="<?php echo $type; ?>_<?php echo $id; ?>" class="info-content info-<?php echo $type; ?>" hidden>
                                <h1><?php the_title(); ?></h1>
                                <?php the_content(); ?>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
                <?php
                ?>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
endwhile; // End of the loop.
get_footer();

