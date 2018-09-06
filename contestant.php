<?php /* Template Name: contestant */


get_header();
while (have_posts()) : the_post();
    $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
    $realtitle = get_the_title();
    $realcontent = get_the_content();
    $realcontent = apply_filters('the_content', $realcontent);
    ?>
    <?php get_template_part('postheader') ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div id="content" class="site-content page">
                <div class="grid info">
                    <div class="grid-1 info-menu">
                        <div class="accordion">
                            <div class="info-menu-cat accordion__wrapper">
                                <?php //contestant loop
                                $args = array(
                                    'post_type' => 'contestant',
                                );
                                $query = new WP_Query($args); ?>
                                <div class="accordion__item">
                                    <input type="checkbox" >
                                    <h3><?php
                                        $object = get_post_type_object('contestant');
                                        echo $object->labels->name;
                                        ?></h3>
                                    <div class="panel">
                                        <?php
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-5" id="info">
                        <div class="info-content info-intro">
                            <h1><?php echo $realtitle; ?></h1>
                            <div><?php echo $realcontent; ?></div>
                        </div>
                        <?php //contestant-spectator loop
                        $args = array(
                            'post_type' => array('contestant'),
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

