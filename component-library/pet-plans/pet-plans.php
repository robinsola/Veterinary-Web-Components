<?php
/*
Plugin Name: Pet Plans Template
Description: A plugin to see hospital pet plans
Author: Robin Sola
Version: 0.1
*/
function pet_plans($atts) {
	ob_start();
  wp_enqueue_script( 'pet-plans',  plugin_dir_url( __FILE__ ) . '/pet-plans.js', array( 'jquery' ) );
	$plans_data = shortcode_atts(array(
    'dog_plan' => 'Plan Title',
    'dog_platinum' => 'Platinum Contents',
    'dog_gold' => 'Gold Contents',
    'dog_silver' => 'Silver Contents',

    'cat_plan' => 'Plan Title',
    'cat_platinum' => 'Platinum Contents',
    'cat_gold' => 'Gold Contents',
    'cat_silver' => 'Silver Contents',

    'puppy_plan' => 'Plan Title',
    'puppy_gold' => 'Gold Contents',
    'puppy_silver' => 'Silver Contents',

    'kitten_plan' => 'Plan Title',
    'kitten_gold' => 'Gold Contents',
    'kitten_silver' => 'Silver Contents',
	), $atts);
	session_start();
  wp_localize_script( 'pet-plans', 'plans_data_object', $plans_data );

	?>

	<script defer src="https://use.fontawesome.com/releases/v5.2.0/js/all.js"></script>

	<div class="pet-plans-container">
		<h1>Preferred Pet Plans</h1>
    <div class="plan-menu-nav">
      <button class="plan-menu-btn" id="catPlans">
        <img src="http://robin.ivetbuilds.com/wp-content/uploads/2018/08/cat.jpeg">
        <h2>Adult Cat</h2>
      </button>
      <button class="plan-menu-btn" id="dogPlans">
        <img src="http://robin.ivetbuilds.com/wp-content/uploads/2018/08/gold-dog.jpeg">
        <h2>Adult Dog</h2>
      </button>
      <button class="plan-menu-btn" id="kittenPlans">
        <img src="http://robin.ivetbuilds.com/wp-content/uploads/2018/08/kitten-stripped.jpeg">
        <h2>Kitten</h2>
      </button>
      <button class="plan-menu-btn" id="puppyPlans">
        <img src="http://robin.ivetbuilds.com/wp-content/uploads/2018/08/puppy-white.jpeg">
        <h2>Puppy</h2>
      </button>
    </div>
      <div class="pet-plans-wrapper">
        <div class="pet-plan-item" id="display-platinum">
          <i class="fas fa-paw platinum-paw"></i>
          <h1>PLATINUM</h1>
          <ul id="platinum">
          </ul>
        </div>
        <div class="pet-plan-item" id="display-gold">
          <i class="fas fa-paw gold-paw"></i>
          <h1>GOLD</h1>
          <ul id="gold">
          </ul>
        </div>
        <div class="pet-plan-item" id="display-silver">
          <i class="fas fa-paw silver-paw"></i>
          <h1>SILVER</h1>
          <ul id="silver">
          </ul>
        </div>
      </div>
	</div>

	<?php
	return ob_get_clean();
}

add_shortcode('pet_plans', 'pet_plans');
function pet_plans_assets() {
	wp_enqueue_style( 'pet-plans',  plugin_dir_url( __FILE__ ) . '/pet-plans.css' );
}
add_action('wp_enqueue_scripts', 'pet_plans_assets');

?>
