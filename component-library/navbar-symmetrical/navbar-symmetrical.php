<?php
/*
Plugin Name: Navbar Symmetrical Template
Description: A plugin for symmetrical style navbar
Author: Robin Sola
Version: 0.1
*/
function navbar_symmetrical($atts) {
	ob_start();
	$nav_symm_data = shortcode_atts(array(
    'logo_image' => null,
    'home_link' => '#',
		'location_1' => 'hospital city',
		'location_1_ph' => 'hospital phone',
		'location_2' => 'hospital city',
		'location_2_ph' => 'hospital phone',
		'email' => 'email',
	), $atts);
	session_start();
	?>

	<script defer src="https://use.fontawesome.com/releases/v5.2.0/js/all.js"></script>

  <div>
  	<div class="navbar-symmetrical-container">
      <a href="<?php echo $nav_symm_data['home_link']; ?>"><img src="<?php echo $nav_symm_data['logo_image']; ?>"/></a>
      <div id="navbar-symmetrical-btn" class="navbar-symmetrical-mobile">
        <i class="fas fa-bars"></i>
      </div>
      <div class="navbar-symmetrical-loop"><?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?></div>
  	</div>
		<div class="navbar-addresses">
			<a href="tel:+01<?php echo $nav_symm_data['location_1_ph']; ?>" class="navbar-address-group"><i class="fas fa-phone-square"></i><p><?php echo $nav_symm_data['location_1']; ?>: <?php echo $nav_symm_data['location_1_ph']; ?></p></a>
			<p class="address-divider">|</p>
			<a href="tel:+01<?php echo $nav_symm_data['location_2_ph']; ?>" class="navbar-address-group"><i class="fas fa-phone-square"></i><p><?php echo $nav_symm_data['location_2']; ?>: <?php echo $nav_symm_data['location_2_ph']; ?></p></a>
			<p class="address-divider">|</p>
			<a href="mailto:<?php echo $nav_symm_data['email']; ?>" class="navbar-address-group"><i class="fas fa-envelope-square"></i><p><?php echo $nav_symm_data['email']; ?></p></a>
		</div>
  </div>

	<?php
	return ob_get_clean();
}

add_shortcode('navbar_symmetrical', 'navbar_symmetrical');
function navbar_symmetrical_assets() {
  wp_enqueue_script( 'navbar-symmetrical',  plugin_dir_url( __FILE__ ) . '/navbar-symmetrical.js', array( 'jquery' ) );
	wp_enqueue_style( 'navbar-symmetrical',  plugin_dir_url( __FILE__ ) . '/navbar-symmetrical.css' );
}
add_action('wp_enqueue_scripts', 'navbar_symmetrical_assets');

?>
