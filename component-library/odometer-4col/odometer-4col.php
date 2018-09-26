<?php
/*
Plugin Name: Odometer 4col Template
Description: A plugin to see veterinary stats on odometer reading
Author: Robin Sola
Version: 0.1
*/
function odometer_4col($atts) {
	ob_start();
	$lp_data = shortcode_atts(array(
    'odometer1' => '111',
    'odometer2' => '222',
    'odometer3' => '333',
    'odometer4' => '444',
    'stat_title1' => 'Stat Title 1',
    'stat_title2' => 'Stat Title 2',
    'stat_title3' => 'Stat Title 3',
    'stat_title4' => 'Stat Title 4',
	), $atts);
	session_start();
	$loop = new WP_Query(array('post_type' => 'Service', 'orderby' => 'menu_order', 'posts_per_page' => '-1'));
	?>
  <script defer src="https://use.fontawesome.com/releases/v5.2.0/js/all.js"></script>
  <script defer src="http://github.hubspot.com/odometer/odometer.js"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      setTimeout(function(){
          odometer1.innerHTML = <?php echo $lp_data['odometer1']; ?>;
      }, 1000);
      setTimeout(function(){
          odometer2.innerHTML = <?php echo $lp_data['odometer2']; ?>;
      }, 1000);
      setTimeout(function(){
          odometer3.innerHTML = <?php echo $lp_data['odometer3']; ?>;
      }, 1000);
      setTimeout(function(){
          odometer4.innerHTML = <?php echo $lp_data['odometer4']; ?>;
      }, 1000);
    });
  </script>

  <div class="background-image-container">
    <img src="http://robin.ivetbuilds.com/wp-content/uploads/2018/08/puppy.jpeg" alt="background image of dog"/>
    <div class="odometer-container">
      <div class="stat-group">
        <h1 id="odometer1" class="odometer stat-digit"></h1>
        <h2 class="stat-title"><?php echo $lp_data['stat_title1']; ?></h2>
      </div>
      <div class="stat-group">
        <h1 id="odometer2" class="odometer stat-digit"></h1>
        <h2 class="stat-title"><?php echo $lp_data['stat_title2']; ?></h2>
      </div>
      <div class="stat-group">
        <h1 id="odometer3" class="odometer stat-digit"></h1>
        <h2 class="stat-title"><?php echo $lp_data['stat_title3']; ?></h2>
      </div>
      <div class="stat-group">
        <h1 id="odometer4" class="odometer stat-digit"></h1>
        <h2 class="stat-title"><?php echo $lp_data['stat_title4']; ?></h2>
      </div>
  	</div>
  </div>

	<?php
	return ob_get_clean();
}

add_shortcode('odometer_4col', 'odometer_4col');
function odometer_4col_assets() {
  wp_enqueue_script( 'odometer-4col',  plugin_dir_url( __FILE__ ) . '/odometer-4col.js', array( 'jquery' ) );
	wp_enqueue_style( 'odometer-4col',  plugin_dir_url( __FILE__ ) . '/odometer-4col.css' );
}
add_action('wp_enqueue_scripts', 'odometer_4col_assets');

?>
