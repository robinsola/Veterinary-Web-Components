<?php
/*
Plugin Name: Navbar Basic Template
Description: A plugin for basic website navbar
Author: Robin Sola
Version: 0.1
*/
function navbar_basic($atts) {
	ob_start();
	$data = shortcode_atts(array(
    'logo_image' => null,
    'home_link' => '#',
	), $atts);
	session_start();
	?>

	<script defer src="https://use.fontawesome.com/releases/v5.2.0/js/all.js"></script>

  <div>
  	<div class="navbar-basic-container">
      <a href="<?php echo $data['home_link']; ?>"><img src="<?php echo $data['logo_image']; ?>"/></a>
      <div id="navbar-basic-btn" class="navbar-basic-mobile">
        <i class="fas fa-bars"></i>
      </div>
      <div class="navbar-basic-loop"><?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?></div>
  	</div>
  </div>

	<?php
	return ob_get_clean();
}

add_shortcode('navbar_basic', 'navbar_basic');
function navbar_basic_assets() {
  wp_enqueue_script( 'navbar-basic',  plugin_dir_url( __FILE__ ) . '/navbar-basic.js', array( 'jquery' ) );
	wp_enqueue_style( 'navbar-basic',  plugin_dir_url( __FILE__ ) . '/navbar-basic.css' );
}
add_action('wp_enqueue_scripts', 'navbar_basic_assets');

?>
