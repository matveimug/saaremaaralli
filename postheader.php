<?php
/**
 * Template part for displaying post headers
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package saaremaaralli
 */

?>


<header class="header-page">
    <?php
    $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
    if ($backgroundImg) : ?>
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
            <div class="header-title" style="text-align: center"><h1><?php the_title(); ?></h1></div>
            <?php if ( !is_page() ) : ?>
            <div class="entry-meta single">
                <?php saaremaaralli_posted_on(); ?>
            </div><!-- .entry-meta -->
            <?php endif; ?>
        </a>
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <?php
            if(function_exists('bcn_display'))
            {
                bcn_display();
            }?>
        </div>
    </div>
</header>