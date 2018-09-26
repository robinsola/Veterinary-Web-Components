<?php
/*
Plugin Name: Footer Slider Template
Description: A plugin for hospital website footer
Author: Robin Sola
Version: 0.1
*/
function footer_slider($atts) {
	ob_start();
	$vet_data = shortcode_atts(array(
    'hospital_1' => 'Hospital Name',
    'street_1' => 'street address',
    'city_state_zip_1' => 'city, state, zip',
    'phone_1' => 'phone number',
    'hours_title_1' => 'Chillicothe Clinic Hours',
		'monday_1' => 'hours',
		'tuesday_1' => 'hours',
		'wednesday_1' => 'hours',
		'thursday_1' => 'hours',
		'friday_1' => 'hours',
		'saturday_1' => 'hours',
		'sunday_1' => 'hours',

    'hospital_2' => 'Hospital Name',
    'street_2' => 'street address',
    'city_state_zip_2' => 'city, state, zip',
    'phone_2' => 'phone number',
    'hours_title_2' => 'Dunlap Clinic Hours',
		'monday_2' => 'hours',
		'tuesday_2' => 'hours',
		'wednesday_2' => 'hours',
		'thursday_2' => 'hours',
		'friday_2' => 'hours',
		'saturday_2' => 'hours',
		'sunday_2' => 'hours',

    'hospital_3' => 'Hospital Name',
    'street_3' => 'street address',
    'city_state_zip_3' => 'city, state, zip',
    'phone_3' => 'phone number',
    'hours_title_3' => 'Dunlap Clinic 2 Hours',
    'monday_3' => 'hours',
    'tuesday_3' => 'hours',
    'wednesday_3' => 'hours',
    'thursday_3' => 'hours',
    'friday_3' => 'hours',
    'saturday_3' => 'hours',
    'sunday_3' => 'hours',
	), $atts);
	session_start();

	?>

	<script defer src="https://use.fontawesome.com/releases/v5.2.0/js/all.js"></script>

	<div class="footer-slider-container">
    <div class="footer-grid">
      <div class="footer-slider-col center-addresses">
        <div class="address-group">
          <h1><?php echo $vet_data['hospital_1']; ?></h1>
          <p><?php echo $vet_data['street_1']; ?></p>
          <p><?php echo $vet_data['city_state_zip_1']; ?></p>
        </div>
        <div class="address-group">
          <h1><?php echo $vet_data['hospital_2']; ?></h1>
          <p><?php echo $vet_data['street_2']; ?></p>
          <p><?php echo $vet_data['city_state_zip_2']; ?></p>
        </div>
        <div class="address-group">
          <h1><?php echo $vet_data['hospital_3']; ?></h1>
          <p><?php echo $vet_data['street_3']; ?></p>
          <p><?php echo $vet_data['city_state_zip_3']; ?></p>
        </div>
      </div>
      <div class="footer-slider-col slider-wrap">
        <div class=footer-hours-slider>
          <div>
            <p><?php echo $vet_data['hours_title_1']; ?></p>
            <div class="hours-slide" id="hours-slide-1">
              <ul>
                <li>Monday</li>
                <li>Tuesday</li>
                <li>Wednesday</li>
                <li>Thursday</li>
                <li>Friday</li>
                <li>Saturday</li>
                <li>Sunday</li>
              </ul>
              <ul>
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
          <div>
            <p><?php echo $vet_data['hours_title_2']; ?></p>
            <div class="hours-slide" id="hours-slide-2">
              <ul>
                <li>Monday</li>
                <li>Tuesday</li>
                <li>Wednesday</li>
                <li>Thursday</li>
                <li>Friday</li>
                <li>Saturday</li>
                <li>Sunday</li>
              </ul>
              <ul>
                <li><?php echo $vet_data['monday_2']; ?></li>
                <li><?php echo $vet_data['tuesday_2']; ?></li>
                <li><?php echo $vet_data['wednesday_2']; ?></li>
                <li><?php echo $vet_data['thursday_2']; ?></li>
                <li><?php echo $vet_data['friday_2']; ?></li>
                <li><?php echo $vet_data['saturday_2']; ?></li>
                <li><?php echo $vet_data['sunday_2']; ?></li>
              </ul>
            </div>
          </div>
          <div>
            <p><?php echo $vet_data['hours_title_3']; ?></p>
            <div class="hours-slide" id="hours-slide-3">
              <ul>
                <li>Monday</li>
                <li>Tuesday</li>
                <li>Wednesday</li>
                <li>Thursday</li>
                <li>Friday</li>
                <li>Saturday</li>
                <li>Sunday</li>
              </ul>
              <ul>
                <li><?php echo $vet_data['monday_3']; ?></li>
                <li><?php echo $vet_data['tuesday_3']; ?></li>
                <li><?php echo $vet_data['wednesday_3']; ?></li>
                <li><?php echo $vet_data['thursday_3']; ?></li>
                <li><?php echo $vet_data['friday_3']; ?></li>
                <li><?php echo $vet_data['saturday_3']; ?></li>
                <li><?php echo $vet_data['sunday_3']; ?></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-slider-col span-last-col">
        <div class="emergency-number">
          <p>After hours Emergency?</p>
          <p>Call Tri-County <br> Emergency Clinic:</p>
          <h2>309-672-1565</h2>
        </div>
        <div class="footer-icons">
          <a href="#" target="_blank"><i class="fab fa-google-plus-g"></i></a>
          <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
          <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
        </div>
      </div>
    </div>
  </div>

	<?php
	return ob_get_clean();
}

add_shortcode('footer_slider', 'footer_slider');
function footer_slider_assets() {
	wp_enqueue_script( 'footer-slider',  plugin_dir_url( __FILE__ ) . '/footer-slider.js', array( 'jquery' ) );
	wp_enqueue_style( 'footer-slider',  plugin_dir_url( __FILE__ ) . '/footer-slider.css' );
}
add_action('wp_enqueue_scripts', 'footer_slider_assets');

?>
