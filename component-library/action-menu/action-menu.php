<?php
/*
Plugin Name: Action Menu Template
Description: A plugin to select veterinary services
Author: Robin Sola
Version: 0.1
*/
function action_menu($atts) {
	ob_start();
	$data = shortcode_atts(array(
		'menu_text_1' => 'Sevice Name',
		'menu_img_1' => null,
		'menu_link_1' => '#',
		'menu_text_2' => 'Service Name',
		'menu_img_2' => null,
		'menu_link_2' => '#',
		'menu_text_3' => 'Service Name',
		'menu_img_3' => null,
		'menu_link_3' => '#',
	), $atts);
	session_start();
	?>

	<div class="service-grid-plugin">
		<a href= "<?php echo $data['menu_link_1']; ?>" >
			<div class="service-col">
				<div class="col-title">
					<p> <?php echo $data['menu_text_1']; ?> </p>
				</div>
				<div class="service-img">
					<img class="img-border" src="<?php echo $data['menu_img_1'] ?>" alt="New Patient Center"/>
				</div>
				<div class="service-icon">
					<img src="http://robin.ivetbuilds.com/wp-content/uploads/2014/02/visit.png" alt="New Patient Center Icon"/>
				</div>
			</div>
		</a>
		<a href= "<?php echo $data['menu_link_2']; ?>" >
			<div class="service-col">
				<div class="col-title">
					<p> <?php echo $data['menu_text_2']; ?> </p>
				</div>
				<div class="service-img">
					<img class="img-border" src="<?php echo $data['menu_img_2'] ?>" alt="Wellness Plans"/>
				</div>
				<div class="service-icon">
					<img src="http://robin.ivetbuilds.com/wp-content/uploads/2014/02/refills.png" alt="Wellness Plans Icon"/>
				</div>
			</div>
		</a>
		<a href= "<?php echo $data['menu_link_3']; ?>">
			<div class="service-col">
				<div class="col-title">
					<p> <?php echo $data['menu_text_3']; ?> </p>
				</div>
				<div class="service-img">
					<img class="img-border" src="<?php echo $data['menu_img_3'] ?>" alt="Make an Appointment"/>
				</div>
				<div class="service-icon">
					<img src="http://robin.ivetbuilds.com/wp-content/uploads/2014/02/appointment.png" alt="Make an Appointment Icon"/>
				</div>
			</div>
		</a>
	</div>

	<?php
	return ob_get_clean();
}

add_shortcode('action_menu', 'action_menu');
function action_menu_assets() {
  wp_enqueue_script( 'action-menu',  plugin_dir_url( __FILE__ ) . '/action-menu.js', array( 'jquery' ) );
	wp_enqueue_style( 'action-menu',  plugin_dir_url( __FILE__ ) . '/action-menu.css' );
}
add_action('wp_enqueue_scripts', 'action_menu_assets');

?>
