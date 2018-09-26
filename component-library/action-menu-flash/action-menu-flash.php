<?php
/*
Plugin Name: Action Menu Flash Template
Description: A plugin to select veterinary services
Author: Robin Sola
Version: 0.1
*/
function action_menu_flash($atts) {
	ob_start();
	$acf_data = shortcode_atts(array(
		'menu_title_1' => 'Menu Name',
		'menu_text_1' => 'Menu Text',
		'menu_img_1' => null,
		'menu_link_1' => '#',
		'menu_title_2' => 'Menu Name',
		'menu_text_2' => 'Menu Text',
		'menu_img_2' => null,
		'menu_link_2' => '#',
		'menu_title_3' => 'Menu Name',
		'menu_text_3' => 'Menu Text',
		'menu_img_3' => null,
		'menu_link_3' => '#',
	), $atts);
	session_start();
	?>

  <script defer src="https://use.fontawesome.com/releases/v5.2.0/js/all.js"></script>

	<div class="services-container">
    <div class="item-wrapper blue-shield">
      <img src="<?php echo $acf_data['menu_img_1']; ?>" alt="menu item"/>
      <div class="item-content">
        <i class="fas fa-paw fa-2x"></i>
        <h3><?php echo $acf_data['menu_title_1']; ?></h3>
        <p><?php echo $acf_data['menu_text_1']; ?></p>
        <a href="<?php echo $acf_data['menu_link_1']; ?>">Read More</a>
      </div>
    </div>
    <div class="item-wrapper red-shield">
      <img src="<?php echo $acf_data['menu_img_2']; ?>" alt="menu item"/>
      <div class="item-content">
        <i class="far fa-calendar-alt fa-2x"></i>
        <h3><?php echo $acf_data['menu_title_2']; ?></h3>
        <p><?php echo $acf_data['menu_text_2']; ?></p>
        <a href="<?php echo $acf_data['menu_link_2']; ?>">Read More</a>
      </div>
    </div>
    <div class="item-wrapper yellow-shield">
      <img src="<?php echo $acf_data['menu_img_3']; ?>" alt="menu item"/>
      <div class="item-content">
        <i class="fas fa-bone fa-2x"></i>
        <h3><?php echo $acf_data['menu_title_3']; ?></h3>
        <p><?php echo $acf_data['menu_text_3']; ?></p>
        <a href="<?php echo $acf_data['menu_link_3']; ?>">Browse Now</a>
      </div>
    </div>
	</div>

	<?php
	return ob_get_clean();
}

add_shortcode('action_menu_flash', 'action_menu_flash');
function action_menu_flash_assets() {
  wp_enqueue_script( 'action-menu-flash',  plugin_dir_url( __FILE__ ) . '/action-menu-flash.js', array( 'jquery' ) );
	wp_enqueue_style( 'action-menu-flash',  plugin_dir_url( __FILE__ ) . '/action-menu-flash.css' );
}
add_action('wp_enqueue_scripts', 'action_menu_flash_assets');

?>
