<?php
/*
Plugin Name: Pet Gallery Template
Description: A plugin for pet photo gallery
Author: Robin Sola
Version: 0.1
*/
function pet_gallery($atts) {
	ob_start();
	$pg_data = shortcode_atts(array(

	), $atts);
	session_start();

  $args = array('category_name' => 'Pets');
  $query = new WP_Query($args);

	?>

	<div class="pet-gallery-container">
    <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();?>
    <div class="pg-thumb">
      <img class="open-lightbox" src='<?php the_post_thumbnail_url();?>'>
      <p><?php the_title(); ?></p>
    </div>
  <?php endwhile; else :?>
  <?php endif; ?>
	</div>

	<?php
	return ob_get_clean();
}

add_shortcode('pet_gallery', 'pet_gallery');
function pet_gallery_assets() {
  wp_enqueue_script( 'pet-gallery',  plugin_dir_url( __FILE__ ) . '/pet-gallery.js', array( 'jquery' ) );
	wp_enqueue_style( 'pet-gallery',  plugin_dir_url( __FILE__ ) . '/pet-gallery.css' );
}
add_action('wp_enqueue_scripts', 'pet_gallery_assets');

?>
