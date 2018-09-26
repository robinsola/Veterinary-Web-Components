<?php
/*
Plugin Name: Navbar Slider Template
Description: A plugin for slide animation navbar
Author: Robin Sola
Version: 0.1
*/
function navbar_slider($atts) {
	ob_start();
	$data = shortcode_atts(array(
    'logo_image' => null,
    'home_link' => '#',
	), $atts);
	session_start();
	?>

	<script defer src="https://use.fontawesome.com/releases/v5.2.0/js/all.js"></script>

  <div class="navbar-slider-wrapper">
  	<div class="navbar-slider-container">
      <a href="<?php echo $data['home_link']; ?>"><img src="<?php echo $data['logo_image']; ?>"/></a>
      <div id="navbar-slider-btn" class="navbar-slider-mobile">
        <i class="fas fa-bars"></i>
      </div>
      <div class="navbar-slider-loop"><?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?></div>
			<a><div class="appt-slider">
				<p>Make An Appointment</p>
			</div></a>
  	</div>
  </div>

	<?php
	return ob_get_clean();
}

add_shortcode('navbar_slider', 'navbar_slider');
function navbar_slider_assets() {
  wp_enqueue_script( 'navbar-slider',  plugin_dir_url( __FILE__ ) . '/navbar-slider.js', array( 'jquery' ) );
	wp_enqueue_style( 'navbar-slider',  plugin_dir_url( __FILE__ ) . '/navbar-slider.css' );
}
add_action('wp_enqueue_scripts', 'navbar_slider_assets');

?>
