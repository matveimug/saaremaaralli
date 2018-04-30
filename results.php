<?php
// Register and load the widget
function results_load_widget()
{
    register_widget('results_widget');
}

add_action('widgets_init', 'results_load_widget');

// Creating the widget
class results_widget extends WP_Widget
{

    function __construct()
    {
        parent::__construct(

// Base ID of your widget
            'results_widget',

// Widget name will appear in UI
            __('00__TULEMUSED__', 'results_widget_domain'),

// Widget description
            array('description' => __('Ralli tulemused', 'results_widget_domain'),)
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


        <div class="results grid">
            <div class="results-container grid-1">
                <span class="results-title">Katse tulemused<div class="speed">Keskmine kiirus: <span class="js-speed">112</span> <span>km/h</span></div></span>
                <div class="results-table-container">
                <table class="results-table">
                    <thead>
                    <tr class="results-table-header">
                        <th class="r-place">K</th>
                        <th class="r-m">M</th>
                        <th class="r-nr">#</th>
                        <th class="r-driver">Juht <br>
                            Kaardilugeja
                        </th>
                        <th class="r-class">GRL/KL</th>
                        <th class="r-time">Aeg <br>
                            Karistused
                        </th>
                        <th class="r-distance">Vahe <br>
                            (Vahe E)
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="results-rally-result">
                        <td class="r-place">1</td>
                        <td class="r-m "><span>=</span></td>
                        <td class="r-nr "><span>1</span></td>
                        <td class="r-driver">GEORG GROSS<br> RAIGO MÕLDER</td>
                        <td class="r-class">EMV1</td>
                        <td class="r-time">06:49.2</td>
                        <td class="r-distance"><span></span><br></td>
                    </tr>
                    <tr class="results-rally-result">
                        <td class="r-place">2</td>
                        <td class="r-m "><span>=</span></td>
                        <td class="r-nr "><span>3</span></td>
                        <td class="r-driver">SIIM PLANGI<br> URMAS ROOSIMAA</td>
                        <td class="r-class">EMV1,EMV3</td>
                        <td class="r-time">06:54.5</td>
                        <td class="r-distance"><span>00:05:3</span><br></td>
                    </tr>
                    <tr class="results-rally-result">
                        <td class="r-place">3</td>
                        <td class="r-m "><span>=</span></td>
                        <td class="r-nr "><span>4</span></td>
                        <td class="r-driver">RANNO BUNDSEN<br> ROBERT LOŠTŠENIKOV</td>
                        <td class="r-class">EMV1,EMV4</td>
                        <td class="r-time">06:56.1</td>
                        <td class="r-distance"><span>00:06:9</span><br> 00:01:6</td>
                    </tr>
                    <tr class="results-rally-result">
                        <td class="r-place">4</td>
                        <td class="r-m "><span>=</span></td>
                        <td class="r-nr "><span>2</span></td>
                        <td class="r-driver">RAINER AUS<br> TAANIEL TIGAS</td>
                        <td class="r-class">EMV1</td>
                        <td class="r-time">07:00.1</td>
                        <td class="r-distance"><span>00:10:9</span><br> 00:04:0</td>
                    </tr>
                    <tr class="results-rally-result">
                        <td class="r-place">5</td>
                        <td class="r-m up"><span>2</span></td>
                        <td class="r-nr "><span>6</span></td>
                        <td class="r-driver">SAKU VIERIMAA<br> DUNCAN MCNIVEN</td>
                        <td class="r-class">EMV1</td>
                        <td class="r-time">07:11.3</td>
                        <td class="r-distance"><span>00:22:1</span><br> 00:11:2</td>
                    </tr>
                    <tr class="results-rally-result">
                        <td class="r-place">1</td>
                        <td class="r-m "><span>=</span></td>
                        <td class="r-nr "><span>1</span></td>
                        <td class="r-driver">GEORG GROSS<br> RAIGO MÕLDER</td>
                        <td class="r-class">EMV1</td>
                        <td class="r-time">06:49.2</td>
                        <td class="r-distance"><span></span><br></td>
                    </tr>
                    <tr class="results-rally-result">
                        <td class="r-place">2</td>
                        <td class="r-m down"><span>=</span></td>
                        <td class="r-nr "><span>3</span></td>
                        <td class="r-driver">SIIM PLANGI<br> URMAS ROOSIMAA</td>
                        <td class="r-class">EMV1,EMV3</td>
                        <td class="r-time">06:54.5</td>
                        <td class="r-distance"><span>00:05:3</span><br></td>
                    </tr>
                    <tr class="results-rally-result">
                        <td class="r-place">3</td>
                        <td class="r-m "><span>=</span></td>
                        <td class="r-nr "><span>4</span></td>
                        <td class="r-driver">RANNO BUNDSEN<br> ROBERT LOŠTŠENIKOV</td>
                        <td class="r-class">EMV1,EMV4</td>
                        <td class="r-time">06:56.1</td>
                        <td class="r-distance"><span>00:06:9</span><br> 00:01:6</td>
                    </tr>
                    <tr class="results-rally-result">
                        <td class="r-place">4</td>
                        <td class="r-m "><span>=</span></td>
                        <td class="r-nr "><span>2</span></td>
                        <td class="r-driver">RAINER AUS<br> TAANIEL TIGAS</td>
                        <td class="r-class">EMV1</td>
                        <td class="r-time">07:00.1</td>
                        <td class="r-distance"><span>00:10:9</span><br> 00:04:0</td>
                    </tr>
                    <tr class="results-rally-result">
                        <td class="r-place">5</td>
                        <td class="r-m up"><span>2</span></td>
                        <td class="r-nr "><span>6</span></td>
                        <td class="r-driver">SAKU VIERIMAA<br> DUNCAN MCNIVEN</td>
                        <td class="r-class">EMV1</td>
                        <td class="r-time">07:11.3</td>
                        <td class="r-distance"><span>00:22:1</span><br> 00:11:2</td>
                    </tr>
                    <tr class="results-rally-result">
                        <td class="r-place">1</td>
                        <td class="r-m "><span>=</span></td>
                        <td class="r-nr "><span>1</span></td>
                        <td class="r-driver">GEORG GROSS<br> RAIGO MÕLDER</td>
                        <td class="r-class">EMV1</td>
                        <td class="r-time">06:49.2</td>
                        <td class="r-distance"><span></span><br></td>
                    </tr>
                    <tr class="results-rally-result">
                        <td class="r-place">2</td>
                        <td class="r-m down"><span>=</span></td>
                        <td class="r-nr "><span>3</span></td>
                        <td class="r-driver">SIIM PLANGI<br> URMAS ROOSIMAA</td>
                        <td class="r-class">EMV1,EMV3</td>
                        <td class="r-time">06:54.5</td>
                        <td class="r-distance"><span>00:05:3</span><br></td>
                    </tr>
                    <tr class="results-rally-result">
                        <td class="r-place">3</td>
                        <td class="r-m "><span>=</span></td>
                        <td class="r-nr "><span>4</span></td>
                        <td class="r-driver">RANNO BUNDSEN<br> ROBERT LOŠTŠENIKOV</td>
                        <td class="r-class">EMV1,EMV4</td>
                        <td class="r-time">06:56.1</td>
                        <td class="r-distance"><span>00:06:9</span><br> 00:01:6</td>
                    </tr>
                    <tr class="results-rally-result">
                        <td class="r-place">4</td>
                        <td class="r-m "><span>=</span></td>
                        <td class="r-nr "><span>2</span></td>
                        <td class="r-driver">RAINER AUS<br> TAANIEL TIGAS</td>
                        <td class="r-class">EMV1</td>
                        <td class="r-time">07:00.1</td>
                        <td class="r-distance"><span>00:10:9</span><br> 00:04:0</td>
                    </tr>
                    <tr class="results-rally-result">
                        <td class="r-place">5</td>
                        <td class="r-m up"><span>2</span></td>
                        <td class="r-nr "><span>6</span></td>
                        <td class="r-driver">SAKU VIERIMAA<br> DUNCAN MCNIVEN</td>
                        <td class="r-class">EMV1</td>
                        <td class="r-time">07:11.3</td>
                        <td class="r-distance"><span>00:22:1</span><br> 00:11:2</td>
                    </tr>
                    </tbody>
                </table>
                </div>
            </div>
            <div class="results-container grid-1">
                <span class="results-title">Üldarvestus<div class="speed">Keskmine kiirus: <span class="results-speed">106</span> <span>km/h</span></div></span>
                <div class="results-table-container">
                <table class="results-table">
                    <thead>
                    <tr class="results-table-header">
                        <th class="r-place">K</th>
                        <th class="r-m">M</th>
                        <th class="r-nr">#</th>
                        <th class="r-driver">Juht <br>
                            Kaardilugeja
                        </th>
                        <th class="r-class">GRL/KL</th>
                        <th class="r-time">Aeg <br>
                            Karistused
                        </th>
                        <th class="r-distance">Vahe <br>
                            (Vahe E)
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="results-rally-result">
                        <td class="r-place">1</td>
                        <td class="r-m "><span>=</span></td>
                        <td class="r-nr "><span>1</span></td>
                        <td class="r-driver">GEORG GROSS<br> RAIGO MÕLDER</td>
                        <td class="r-class">EMV1</td>
                        <td class="r-time">30:02.4</td>
                        <td class="r-distance"><span></span><br></td>
                    </tr>
                    <tr class="results-rally-result">
                        <td class="r-place">2</td>
                        <td class="r-m "><span>=</span></td>
                        <td class="r-nr "><span>3</span></td>
                        <td class="r-driver">SIIM PLANGI<br> URMAS ROOSIMAA</td>
                        <td class="r-class">EMV1,EMV3</td>
                        <td class="r-time">30:30.0</td>
                        <td class="r-distance"><span>00:27:6</span><br></td>
                    </tr>
                    <tr class="results-rally-result">
                        <td class="r-place">3</td>
                        <td class="r-m "><span>=</span></td>
                        <td class="r-nr "><span>4</span></td>
                        <td class="r-driver">RANNO BUNDSEN<br> ROBERT LOŠTŠENIKOV</td>
                        <td class="r-class">EMV1,EMV4</td>
                        <td class="r-time">30:40.4</td>
                        <td class="r-distance"><span>00:38:0</span><br> 00:10:4</td>
                    </tr>
                    <tr class="results-rally-result">
                        <td class="r-place">4</td>
                        <td class="r-m up"><span>=</span></td>
                        <td class="r-nr "><span>2</span></td>
                        <td class="r-driver">RAINER AUS<br> TAANIEL TIGAS</td>
                        <td class="r-class">EMV1</td>
                        <td class="r-time">30:50.1</td>
                        <td class="r-distance"><span>00:47:7</span><br> 00:09:7</td>
                    </tr>
                    <tr class="results-rally-result">
                        <td class="r-place">5</td>
                        <td class="r-m "><span>=</span></td>
                        <td class="r-nr "><span>5</span></td>
                        <td class="r-driver">AIKO AIGRO<br> KERMO KÄRTMANN</td>
                        <td class="r-class">EMV4</td>
                        <td class="r-time">31:50.2</td>
                        <td class="r-distance"><span>01:47:8</span><br> 01:00:1</td>
                    </tr>
                    <tr class="results-rally-result">
                        <td class="r-place">1</td>
                        <td class="r-m up"><span>=</span></td>
                        <td class="r-nr "><span>1</span></td>
                        <td class="r-driver">GEORG GROSS<br> RAIGO MÕLDER</td>
                        <td class="r-class">EMV1</td>
                        <td class="r-time">30:02.4</td>
                        <td class="r-distance"><span></span><br></td>
                    </tr>
                    <tr class="results-rally-result">
                        <td class="r-place">2</td>
                        <td class="r-m "><span>=</span></td>
                        <td class="r-nr "><span>3</span></td>
                        <td class="r-driver">SIIM PLANGI<br> URMAS ROOSIMAA</td>
                        <td class="r-class">EMV1,EMV3</td>
                        <td class="r-time">30:30.0</td>
                        <td class="r-distance"><span>00:27:6</span><br></td>
                    </tr>
                    <tr class="results-rally-result">
                        <td class="r-place">3</td>
                        <td class="r-m "><span>=</span></td>
                        <td class="r-nr "><span>4</span></td>
                        <td class="r-driver">RANNO BUNDSEN<br> ROBERT LOŠTŠENIKOV</td>
                        <td class="r-class">EMV1,EMV4</td>
                        <td class="r-time">30:40.4</td>
                        <td class="r-distance"><span>00:38:0</span><br> 00:10:4</td>
                    </tr>
                    <tr class="results-rally-result">
                        <td class="r-place">4</td>
                        <td class="r-m "><span>=</span></td>
                        <td class="r-nr "><span>2</span></td>
                        <td class="r-driver">RAINER AUS<br> TAANIEL TIGAS</td>
                        <td class="r-class">EMV1</td>
                        <td class="r-time">30:50.1</td>
                        <td class="r-distance"><span>00:47:7</span><br> 00:09:7</td>
                    </tr>
                    <tr class="results-rally-result">
                        <td class="r-place">5</td>
                        <td class="r-m down"><span>=</span></td>
                        <td class="r-nr "><span>5</span></td>
                        <td class="r-driver">AIKO AIGRO<br> KERMO KÄRTMANN</td>
                        <td class="r-class">EMV4</td>
                        <td class="r-time">31:50.2</td>
                        <td class="r-distance"><span>01:47:8</span><br> 01:00:1</td>
                    </tr>
                    <tr class="results-rally-result">
                        <td class="r-place">1</td>
                        <td class="r-m "><span>=</span></td>
                        <td class="r-nr "><span>1</span></td>
                        <td class="r-driver">GEORG GROSS<br> RAIGO MÕLDER</td>
                        <td class="r-class">EMV1</td>
                        <td class="r-time">30:02.4</td>
                        <td class="r-distance"><span></span><br></td>
                    </tr>
                    <tr class="results-rally-result">
                        <td class="r-place">2</td>
                        <td class="r-m down"><span>=</span></td>
                        <td class="r-nr "><span>3</span></td>
                        <td class="r-driver">SIIM PLANGI<br> URMAS ROOSIMAA</td>
                        <td class="r-class">EMV1,EMV3</td>
                        <td class="r-time">30:30.0</td>
                        <td class="r-distance"><span>00:27:6</span><br></td>
                    </tr>
                    <tr class="results-rally-result">
                        <td class="r-place">3</td>
                        <td class="r-m "><span>=</span></td>
                        <td class="r-nr "><span>4</span></td>
                        <td class="r-driver">RANNO BUNDSEN<br> ROBERT LOŠTŠENIKOV</td>
                        <td class="r-class">EMV1,EMV4</td>
                        <td class="r-time">30:40.4</td>
                        <td class="r-distance"><span>00:38:0</span><br> 00:10:4</td>
                    </tr>
                    <tr class="results-rally-result">
                        <td class="r-place">4</td>
                        <td class="r-m down"><span>=</span></td>
                        <td class="r-nr "><span>2</span></td>
                        <td class="r-driver">RAINER AUS<br> TAANIEL TIGAS</td>
                        <td class="r-class">EMV1</td>
                        <td class="r-time">30:50.1</td>
                        <td class="r-distance"><span>00:47:7</span><br> 00:09:7</td>
                    </tr>
                    <tr class="results-rally-result">
                        <td class="r-place">5</td>
                        <td class="r-m "><span>=</span></td>
                        <td class="r-nr "><span>5</span></td>
                        <td class="r-driver">AIKO AIGRO<br> KERMO KÄRTMANN</td>
                        <td class="r-class">EMV4</td>
                        <td class="r-time">31:50.2</td>
                        <td class="r-distance"><span>01:47:8</span><br> 01:00:1</td>
                    </tr>
                    </tbody>
                </table>
                </div>
            </div>
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
            $title = __('New title', 'results_widget_domain');
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
} // Class results_widget ends here