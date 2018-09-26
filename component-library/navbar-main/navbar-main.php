<?php
/*
Plugin Name: Navbar Main Template
Description: A plugin for main site navigation
Author: Robin Sola
Version: 0.1
*/
function navbar_main($atts) {
	ob_start();
	$data = shortcode_atts(array(
	), $atts);
	session_start();
	?>

	<script defer src="https://use.fontawesome.com/releases/v5.2.0/js/all.js"></script>

  <div>
    <div class="main-nav-container">
			<div id="navbar-main-btn" class="main-nav-mobile">
				<i class="fas fa-bars"></i>
			</div>
			<div class="main-nav-loop"><?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?></div>
		</div>
  </div>

	<?php
	return ob_get_clean();
}

add_shortcode('navbar_main', 'navbar_main');
function navbar_main_assets() {
  wp_enqueue_script( 'navbar-main',  plugin_dir_url( __FILE__ ) . '/navbar-main.js', array( 'jquery' ) );
	wp_enqueue_style( 'navbar-main',  plugin_dir_url( __FILE__ ) . '/navbar-main.css' );
}
add_action('wp_enqueue_scripts', 'navbar_main_assets');

?>
