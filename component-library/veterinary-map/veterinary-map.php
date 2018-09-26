<?php
/*
Plugin Name: Veterinary Map Template
Description: A plugin to see multiple locations of veterinary hospitals on google maps
Author: Robin Sola
Version: 0.1
*/
function veterinary_map($atts) {
	ob_start();
  wp_enqueue_script( 'veterinary-map',  plugin_dir_url( __FILE__ ) . '/veterinary-map.js', array( 'jquery' ) );
	$vet_data = shortcode_atts(array(
    'hospital_1' => 'Hospital Name',
    'street_1' => 'street address',
    'city_1' => 'city',
    'state_1' => 'state',
    'zipcode_1' => 'zipcode',
    'phone_1' => 'phone number',
		'description_1' => 'hospital description',

		'monday_1' => 'hours',
		'tuesday_1' => 'hours',
		'wednesday_1' => 'hours',
		'thursday_1' => 'hours',
		'friday_1' => 'hours',
		'saturday_1' => 'hours',
		'sunday_1' => 'hours',

    'hospital_2' => 'Hospital Name',
    'street_2' => 'street address',
    'city_2' => 'city',
    'state_2' => 'state',
    'zipcode_2' => 'zipcode',
    'phone_2' => 'phone number',
		'description_2' => 'hospital description',

		'monday_2' => 'hours',
		'tuesday_2' => 'hours',
		'wednesday_2' => 'hours',
		'thursday_2' => 'hours',
		'friday_2' => 'hours',
		'saturday_2' => 'hours',
		'sunday_2' => 'hours',
	), $atts);
	session_start();
  wp_localize_script( 'veterinary-map', 'vet_data_object', $vet_data );

//hospital 1 formatting for map
  $hospital_1_arr = array($vet_data['hospital_1']);
  $street_1_arr = array($vet_data['street_1']);
  $city_1_arr = array($vet_data['city_1']);
  $state_1_arr = array($vet_data['state_1']);
  $hospital_1_formatted = implode('+', $hospital_1_arr);
  $street_1_formatted = implode('+', $street_1_arr);
  $city_1_formatted = implode('+', $city_1_arr);
  $state_1_formatted = implode('+', $state_1_arr);

//final location variables formatted for map
  $location_1 = $hospital_1_formatted . "+" . $street_1_formatted . "+" . $city_1_formatted . "+" . $state_1_formatted;
	?>

	<script defer src="https://use.fontawesome.com/releases/v5.2.0/js/all.js"></script>

	<div class="veterinary-map-container">
		<h1 class="center-locations-title">Our <i class="fas fa-paw"></i> Locations</h1>
    <div class="toggle-btns">
      <button id="map1"><?php echo $vet_data['description_1']; ?></button>
      <button id="map2"><?php echo $vet_data['description_2']; ?></button>
    </div>
    <div class="map-info-grid">
      <div class="map-col">
        <iframe id="display-map" width="100%" height="100%" frameborder="0" src="https://www.google.com/maps?q=<?php echo $location_1; ?>&output=embed" allowfullscreen></iframe>
      </div>
      <div class="info-col">
        <h1 id="hospital-name"><?php echo $vet_data['hospital_1']; ?></h1>
        <p id="hospital-description"><?php echo $vet_data['description_1']; ?><p>
        <p id="hospital-address"><?php echo $vet_data['street_1']; ?>
        <br><?php echo $vet_data['city_1']; ?>, <?php echo $vet_data['state_1']; ?> <?php echo $vet_data['zipcode_1']; ?></p>
        <a id="phone-href" href="tel:+01-252-654-9738"><i class="fas fa-phone-square"></i><span id="hospital-phone"><?php echo $vet_data['phone_1']; ?></span></a>
				<div class="hours-grid">
					<ul>
						<li>Monday</li>
						<li>Tuesday</li>
						<li>Wednesday</li>
						<li>Thursday</li>
						<li>Friday</li>
						<li>Saturday</li>
						<li>Sunday</li>
					</ul>
					<ul id="hospital-hours">
						<li><?php echo $vet_data['monday_1']; ?></li>
						<li><?php echo $vet_data['tuesday_1']; ?></li>
						<li><?php echo $vet_data['wednesday_1']; ?></li>
						<li><?php echo $vet_data['thursday_1']; ?></li>
						<li><?php echo $vet_data['friday_1']; ?></li>
						<li><?php echo $vet_data['saturday_1']; ?></li>
						<li><?php echo $vet_data['sunday_1']; ?></li>
					</ul>
      </div>
    </div>
	</div>

	<?php
	return ob_get_clean();
}

add_shortcode('veterinary_map', 'veterinary_map');
function veterinary_map_assets() {
	wp_enqueue_style( 'veterinary-map',  plugin_dir_url( __FILE__ ) . '/veterinary-map.css' );
}
add_action('wp_enqueue_scripts', 'veterinary_map_assets');

?>
