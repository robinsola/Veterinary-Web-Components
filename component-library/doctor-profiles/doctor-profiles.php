<?php
/*
Plugin Name: Doctor Profiles Template
Description: A plugin to see doctor profiles
Author: Robin Sola
Version: 0.1
*/
function doctor_profiles($atts) {
	ob_start();

  $posts = array('category_name' => 'Doctors');

  $query = new WP_Query($posts);

?>

  <script defer src="https://use.fontawesome.com/releases/v5.2.0/js/all.js"></script>

	<div class="doctor-profiles-container">
		<div class="doctor-profiles-header">
    	<p>Meet Our</p>
			<h1>Team of Doctors</h1>
		</div>
		<div class="doctor-loop">
      <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
        <div class="doctor-profile">
          <div class="doctor-col">
            <img src="<?php the_post_thumbnail_url();?>" alt="doctor photo"/>
            <div class="hidden-dog">
              <img src="http://robin.ivetbuilds.com/wp-content/uploads/2018/03/dog-1.png"/>
            </div>
          </div>
          <div class="doctor-col">
            <div class="doctor-content">
              <h2><?php the_title(); ?></h2>
              <p><?php the_content(); ?></p>
							<div class="hidden-cat">
								<img src="http://robin.ivetbuilds.com/wp-content/uploads/2018/03/cat-2.png"/>
							</div>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    <?php else : ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
    </div>
	</div>


<?php
	return ob_get_clean();
}

add_shortcode('doctor_profiles', 'doctor_profiles');
function doctor_profiles_assets() {
  wp_enqueue_script( 'doctor-profiles',  plugin_dir_url( __FILE__ ) . '/doctor-profiles.js', array( 'jquery' ) );
	wp_enqueue_style( 'doctor-profiles',  plugin_dir_url( __FILE__ ) . '/doctor-profiles.css' );
}
add_action('wp_enqueue_scripts', 'doctor_profiles_assets');

?>
