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

<?php //featured pages:
$args = array(
	'post_type' => 'featured'
);
$query = new WP_Query( $args );
while ( $query->have_posts() ) : $query->the_post(); ?>
    <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
	<div class="featured" style="background-image: url('<?php echo $backgroundImg[0]; ?>')">
        <h1 class="featured-title"><?php the_title(); ?></h1>
        <h5 class="featured-subtitle"><?php the_content(); ?></h5>
    </div>
    <?php endwhile; ?>
<?php


//get_sidebar();
get_footer();
