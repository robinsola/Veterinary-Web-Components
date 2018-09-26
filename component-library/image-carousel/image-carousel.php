<?php
/*
Plugin Name: Image Carousel Template
Description: A plugin for image carousel gallery
Author: Robin Sola
Version: 0.1
*/
function image_carousel($atts) {
	ob_start();
	$ic_data = shortcode_atts(array(
		'bg_image_1' => null,
		'bg_image_2' => null,
		'bg_image_3' => null,
		'slide_title_1' => 'Slide Title',
		'slide_title_2' => 'Slide Title',
		'slide_title_3' => 'Slide Title',
		'slide_text_1' => 'Slide Text',
		'slide_text_2' =>	'Slide Text',
		'slide_text_3' => 'Slide Text',
		'slide_link_1' => '#',
		'slide_link_2' => '#',
		'slide_link_3' => '#',
	), $atts);
	session_start();
	?>

	<div class="image-carousel-container">
		<div class="carousel-wrap">
			<div id="carouselSlides">
				<div class="image-slide showing" id="slide1" style="background: url(<?php echo $ic_data['bg_image_1'] ?>) center / cover;">
					<div class="text-block">
						<h1><?php echo $ic_data['slide_title_1'] ?></h1>
						<a href="<?php echo $ic_data['slide_link_1'] ?>"><?php echo $ic_data['slide_text_1'] ?> >></a>
					</div>
				</div>
				<div class="image-slide" id="slide2" 	style="background: url(<?php echo $ic_data['bg_image_2'] ?>) center / cover;">
					<div class="text-block">
						<h1><?php echo $ic_data['slide_title_2'] ?></h1>
						<a href="<?php echo $ic_data['slide_link_2'] ?>"><?php echo $ic_data['slide_text_2'] ?> >></a>
					</div>
				</div>
				<div class="image-slide" id="slide3" style="background: url(<?php echo $ic_data['bg_image_3'] ?>) center / cover;">
					<div class="text-block">
						<h1><?php echo $ic_data['slide_title_3'] ?></h1>
						<a href="<?php echo $ic_data['slide_link_3'] ?>"><?php echo $ic_data['slide_text_3'] ?> >></a>
					</div>
				</div>
			</div>
			<div class="controls">
				<button class="back-btn" id="backBtn"><</button>
				<button class="forward-btn" id="forwardBtn">></button>
				<button class="toggle-btn" id="toggleBtn">&#10074;&#10074;</button>
			</div>
		</div>
	</div>

	<?php
	return ob_get_clean();
}

add_shortcode('image_carousel', 'image_carousel');
function image_carousel_assets() {
  wp_enqueue_script( 'image-carousel',  plugin_dir_url( __FILE__ ) . '/image-carousel.js', array( 'jquery' ) );
	wp_enqueue_style( 'image-carousel',  plugin_dir_url( __FILE__ ) . '/image-carousel.css' );
}
add_action('wp_enqueue_scripts', 'image_carousel_assets');

?>
