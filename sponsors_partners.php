<?php
// Register and load the widget
function partners_load_widget()
{
    register_widget('partners_widget');
}

add_action('widgets_init', 'partners_load_widget');

// Creating the widget
class partners_widget extends WP_Widget
{

    function __construct()
    {
        parent::__construct(

// Base ID of your widget
            'partners_widget',

// Widget name will appear in UI
            __('00__PARTNERS__', 'partners_widget_domain'),

// Widget description
            array('description' => __('Ralli tulemused', 'partners_widget_domain'),)
        );
    }

// Creating widget front-end

    public function widget($args, $instance)
    {
        $title = apply_filters('widget_title', $instance['title']);
        $blog_title = get_bloginfo('name');
        $tagline = get_bloginfo('description');
// before and after widget arguments are defined by themes
        echo $args['before_widget'];
        if (!empty($title))
            echo $args['before_title'] . $title . $args['after_title'];
        ?>


        <div class="sponsor-container sponsor-partner">
            <?php
            $args = array(
                'post_type' => 'attachment',
                'category_name' => 'partner',
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
        echo $args['after_widget'];
    }

// Widget Backend
    public function form($instance)
    {
        if (isset($instance['title'])) {
            $title = $instance['title'];
        } else {
            $title = __('New title', 'partners_widget_domain');
        }
// Widget admin form
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>"/>
        </p>
        <?php
    }

// Updating widget replacing old instances with new
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        return $instance;
    }
} // Class partners_widget ends here