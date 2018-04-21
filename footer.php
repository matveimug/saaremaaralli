<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package saaremaaralli
 */

?>


<footer id="colophon" class="footer">
    <?php
    $the_slug = 'footer';
    $args = array(
        'post_type' => 'page',
        'name' => $the_slug
    );
    $your_query = new WP_Query($args);
    while ($your_query->have_posts()) :
        $your_query->the_post(); ?>
        <?php
        $fb_link = get_post_meta(get_the_ID(), 'fb-link', true);
        $insta_link = get_post_meta(get_the_ID(), 'insta-link', true);
        $twitter_link = get_post_meta(get_the_ID(), 'twitter-link', true);
        ?>
        <div class="footer-social">
            <ul>
                <li><a href="<?php if (!empty($fb_link)) {echo $fb_link;} ?>"><i class="fa fa-facebook"></i></a></li>
                <li><a href="<?php if (!empty($insta_link)) {echo $insta_link;} ?>"><i class="fa fa-instagram"></i></a></li>
                <li><a href="<?php if (!empty($twitter_link)) {echo $twitter_link;} ?>"><i class="fa fa-twitter"></i></a></li>
            </ul>
        </div>
        <div class="footer-content">
            <?php the_content(); ?>
        </div>
        <small class="imadethis">Made by SARP & WP & ❤</small>
    <?php endwhile; ?>
</footer><!-- #colophon -->

</div><!-- #content -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
