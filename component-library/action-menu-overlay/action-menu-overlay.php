<?php
/*
Plugin Name: Action Menu Overlay Template
Description: A plugin to select veterinary services
Author: Robin Sola
Version: 0.1
*/
function action_menu_overlay($atts) {
	ob_start();
	$amo_data = shortcode_atts(array(
    'menu_title_1' => 'Menu Title',
		'menu_text_1' => 'Menu Text',
		'menu_img_1' => null,
		'menu_link_1' => '#',
    'menu_title_2' => 'Menu Title',
		'menu_text_2' => 'Menu Text',
		'menu_img_2' => null,
		'menu_link_2' => '#',
    'menu_title_3' => 'Menu Title',
    'menu_text_3' => 'Menu Text',
		'menu_img_3' => null,
		'menu_link_3' => '#',
	), $atts);
	session_start();
	?>

  <script defer src="https://use.fontawesome.com/releases/v5.2.0/js/all.js"></script>

	<div class="action-menu-overlay-container">
    <a href="<?php echo $amo_data['menu_link_1']; ?>">
      <div class="action-item-wrapper">
        <div class="hover-color-overlay"></div>
        <img src="<?php echo $amo_data['menu_img_1']; ?>" alt="menu item"/>
        <div class="action-item-overlay">
          <h1><?php echo $amo_data['menu_title_1']; ?></h1>
          <p><?php echo $amo_data['menu_text_1']; ?></p>
        </div>
        <div class="menu-icon-wrapper">
          <i class="fas fa-paw fa"></i>
        </div>
      </div>
    </a>

    <a href="<?php echo $amo_data['menu_link_2']; ?>">
      <div class="action-item-wrapper">
        <div class="hover-color-overlay"></div>
        <img src="<?php echo $amo_data['menu_img_2']; ?>" alt="menu item"/>
        <div class="action-item-overlay">
          <h1><?php echo $amo_data['menu_title_2']; ?></h1>
          <p><?php echo $amo_data['menu_text_2']; ?></p>
        </div>
        <div class="menu-icon-wrapper">
          <i class="fas fa-briefcase-medical fa"></i>
        </div>
      </div>
    </a>

    <a href="<?php echo $amo_data['menu_link_3']; ?>">
      <div class="action-item-wrapper">
        <div class="hover-color-overlay"></div>
        <img src="<?php echo $amo_data['menu_img_3']; ?>" alt="menu item"/>
        <div class="action-item-overlay">
          <h1><?php echo $amo_data['menu_title_3']; ?></h1>
          <p><?php echo $amo_data['menu_text_3']; ?></p>
        </div>
        <div class="menu-icon-wrapper">
          <i class="far fa-calendar-check"></i>
        </div>
      </div>
    </a>
	</div>

	<?php
	return ob_get_clean();
}

add_shortcode('action_menu_overlay', 'action_menu_overlay');
function action_menu_overlay_assets() {
  wp_enqueue_script( 'action-menu-overlay',  plugin_dir_url( __FILE__ ) . '/action-menu-overlay.js', array( 'jquery' ) );
	wp_enqueue_style( 'action-menu-overlay',  plugin_dir_url( __FILE__ ) . '/action-menu-overlay.css' );
}
add_action('wp_enqueue_scripts', 'action_menu_overlay_assets');

?>
