<?php
/*
Plugin Name: Modal Popup Template
Description: A plugin for a modal popup message or image
Author: Robin Sola
Version: 0.1
*/
function modal_popup($atts) {
	ob_start();
  wp_enqueue_script( 'modal-popup',  plugin_dir_url( __FILE__ ) . '/modal-popup.js', array( 'jquery' ) );
	$modal_data = shortcode_atts(array(
    'popup_image' => null,
    'popup_timer' => '2000',
	), $atts);
	session_start();
  wp_localize_script( 'modal-popup', 'modal_data_object', $modal_data );
	?>

	<div id="modal-popup" class="modal-popup-container">
    <div class="modal-content">
      <span class="close-btn">&times;</span>
      <img src="<?php echo $modal_data['popup_image']; ?>">
    </div>
	</div>

	<?php
	return ob_get_clean();
}

add_shortcode('modal_popup', 'modal_popup');
function modal_popup_assets() {
	wp_enqueue_style( 'modal-popup',  plugin_dir_url( __FILE__ ) . '/modal-popup.css' );
}
add_action('wp_enqueue_scripts', 'modal_popup_assets');

?>
