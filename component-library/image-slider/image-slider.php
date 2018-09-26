<?php
/*
Plugin Name: Image Slider Template
Description: A plugin for image slider gallery
Author: Robin Sola
Version: 0.1
*/
function image_slider($atts) {
	ob_start();
	$is_data = shortcode_atts(array(
		'bg_image_1' => null,
		'bg_image_2' => null,
		'bg_image_3' => null,
    'bg_image_4' => null,
    'bg_image_5' => null,
		'slide_title_1' => 'Slide Title',
		'slide_title_2' => 'Slide Title',
		'slide_title_3' => 'Slide Title',
    'slide_title_4' => 'Slide Title',
    'slide_title_5' => 'Slide Title',
		'slide_link_1' => '#',
		'slide_link_2' => '#',
		'slide_link_3' => '#',
    'slide_link_4' => '#',
    'slide_link_5' => '#',
	), $atts);
	session_start();
	?>

	<div class="image-slider-container">
    <div class="slides-group">
      <div class="slide-tab" style="background: url(<?php echo $is_data['bg_image_1'] ?>) center / cover;">
        <div class="opacity-shield green"><h1><?php echo $is_data['slide_title_1'] ?></h1></div>
        <a href="<?php echo $is_data['slide_link_1'] ?>" class="green">learn more</a>
      </div>
      <div class="slide-tab" style="background: url(<?php echo $is_data['bg_image_2'] ?>) center / cover;">
        <div class="opacity-shield red"><h1><?php echo $is_data['slide_title_2'] ?></h1></div>
        <a href="<?php echo $is_data['slide_link_2'] ?>" class="red">learn more</a>
      </div>
      <div class="slide-tab" style="background: url(<?php echo $is_data['bg_image_3'] ?>) center / cover;">
        <div class="opacity-shield green"><h1><?php echo $is_data['slide_title_3'] ?></h1></div>
        <a href="<?php echo $is_data['slide_link_3'] ?>" class="green">learn more</a>
      </div>
      <div class="slide-tab" style="background: url(<?php echo $is_data['bg_image_4'] ?>) center / cover;">
        <div class="opacity-shield red"><h1><?php echo $is_data['slide_title_4'] ?></h1></div>
        <a href="<?php echo $is_data['slide_link_4'] ?>" class="red">learn more</a>
      </div>
      <div class="slide-tab" style="background: url(<?php echo $is_data['bg_image_5'] ?>) center / cover;">
        <div class="opacity-shield green"><h1><?php echo $is_data['slide_title_5'] ?></h1></div>
        <a href="<?php echo $is_data['slide_link_5'] ?>" class="green">learn more</a>
      </div>
    </div>
	</div>

	<?php
	return ob_get_clean();
}

add_shortcode('image_slider', 'image_slider');
function image_slider_assets() {
  wp_enqueue_script( 'image-slider',  plugin_dir_url( __FILE__ ) . '/image-slider.js', array( 'jquery' ) );
	wp_enqueue_style( 'image-slider',  plugin_dir_url( __FILE__ ) . '/image-slider.css' );
}
add_action('wp_enqueue_scripts', 'image_slider_assets');

?>
