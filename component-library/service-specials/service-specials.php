<?php
/*
Plugin Name: Service Specials Template
Description: A plugin to select veterinary services
Author: Robin Sola
Version: 0.1
*/
function service_specials($atts) {
	ob_start();
	$data = shortcode_atts(array(
    'title_1' => 'Service Title',
    'title_2' => 'Service Title',
    'title_3' => 'Service Title',
    'title_4' => 'Service Title',
    'description_1' => 'Service Description',
    'description_2' => 'Service Description',
    'description_3' => 'Service Description',
    'description_4' => 'Service Description',
    'service_link_1' => 'link to service',
    'service_link_2' => 'link to service',
    'service_link_3' => 'link to service',
    'service_link_4' => 'link to service',
	), $atts);
	session_start();
	?>

	<div class="service-specials-container">
    <div class="service-special-item">
      <a href="<?php echo $data['service_link_1']; ?>">
        <div>
          <i class='fas fa-bone'></i>
          <h1><?php echo $data['title_1']; ?></h1>
          <p><?php echo $data['description_1']; ?></p>
        </div>
      </a>
    </div>
    <div class="service-special-item">
      <a href="<?php echo $data['service_link_2']; ?>">
        <div>
          <i class="fas fa-home"></i>
          <h1><?php echo $data['title_2']; ?></h1>
          <p><?php echo $data['description_2']; ?></p>
        </div>
      </a>
    </div>
    <div class="service-special-item">
      <a href="<?php echo $data['service_link_3']; ?>">
        <div>
          <i class="fas fa-tooth"></i>
          <h1><?php echo $data['title_3']; ?></h1>
          <p><?php echo $data['description_3']; ?></p>
        </div>
      </a>
    </div>
    <div class="service-special-item">
      <a href="<?php echo $data['service_link_4']; ?>">
        <div>
          <i class="fas fa-heartbeat"></i>
          <h1><?php echo $data['title_4']; ?></h1>
          <p><?php echo $data['description_4']; ?></p>
        </div>
      </a>
    </div>
	</div>

	<?php
	return ob_get_clean();
}

add_shortcode('service_specials', 'service_specials');
function service_specials_assets() {
  wp_enqueue_script( 'service-specials',  plugin_dir_url( __FILE__ ) . '/service-specials.js', array( 'jquery' ) );
	wp_enqueue_style( 'service-specials',  plugin_dir_url( __FILE__ ) . '/service-specials.css' );
}
add_action('wp_enqueue_scripts', 'service_specials_assets');

?>
