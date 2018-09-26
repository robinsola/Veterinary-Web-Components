<?php
/*
Plugin Name: Landing Page plugin
Description: A plugin for library of veterinary components
Author: Robin Sola
Version: 0.1
*/
function landing_page_services($atts) {
	ob_start();
	$lp_data = shortcode_atts(array(

	), $atts);
	session_start();
	$_SESSION['primary_color'] = $lp_data['primary_color'];
	$_SESSION['accent_color'] = $lp_data['accent_color'];
	$loop = new WP_Query(array('post_type' => 'Service', 'orderby' => 'menu_order', 'posts_per_page' => '-1'));
	?>
	<div class="landing-page-plugin">
		<h1>Component Library</h1>
		<p>for Veterinary Websites</p>
		<img class="landing-page-img" src="http://robin.ivetbuilds.com/wp-content/uploads/2018/09/oscar-napping.png">
	</div>
	<?php
	return ob_get_clean();
}

add_shortcode('landing_page_services', 'landing_page_services');
function landing_page_assets() {
  wp_enqueue_script( 'lpJS',  plugin_dir_url( __FILE__ ) . '/js/lpJS.js', array( 'jquery' ) );
	// wp_enqueue_style( 'lpPhpCss',  plugin_dir_url( __FILE__ ) . '/css/layout.php' );
}
add_action('wp_enqueue_scripts', 'landing_page_assets');

require( dirname( __FILE__ ) . '/action-menu/action-menu.php');
require( dirname( __FILE__ ) . '/action-menu-flash/action-menu-flash.php');
require( dirname( __FILE__ ) . '/service-loop/service-loop.php');
require( dirname( __FILE__ ) . '/service-accordion/service-accordion.php');
require( dirname( __FILE__ ) . '/testimonial-slider/testimonial-slider.php');
require( dirname( __FILE__ ) . '/testimonial-blurbs/testimonial-blurbs.php');
require( dirname( __FILE__ ) . '/odometer-4col/odometer-4col.php');
require( dirname( __FILE__ ) . '/service-loop-full/service-loop-full.php');
require( dirname( __FILE__ ) . '/veterinary-map/veterinary-map.php');
require( dirname( __FILE__ ) . '/veterinary-blog/veterinary-blog.php');
require( dirname( __FILE__ ) . '/footer-slider/footer-slider.php');
require( dirname( __FILE__ ) . '/image-carousel/image-carousel.php');
require( dirname( __FILE__ ) . '/action-menu-overlay/action-menu-overlay.php');
require( dirname( __FILE__ ) . '/pet-gallery/pet-gallery.php');
require( dirname( __FILE__ ) . '/pet-plans/pet-plans.php');
require( dirname( __FILE__ ) . '/doctor-profiles/doctor-profiles.php');
require( dirname( __FILE__ ) . '/navbar-basic/navbar-basic.php');
require( dirname( __FILE__ ) . '/navbar-slider/navbar-slider.php');
require( dirname( __FILE__ ) . '/navbar-main/navbar-main.php');
require( dirname( __FILE__ ) . '/navbar-symmetrical/navbar-symmetrical.php');
require( dirname( __FILE__ ) . '/service-specials/service-specials.php');
require( dirname( __FILE__ ) . '/modal-popup/modal-popup.php');
require( dirname( __FILE__ ) . '/image-slider/image-slider.php');

?>
