<?php
/*
Plugin Name: Testimonial Blurbs Template
Description: A plugin to slide through testimonials
Author: Robin Sola
Version: 0.1
*/
function testimonial_blurbs ($atts) {
	ob_start();

  $args = array('category_name' => 'Testimonials');
  $query = new WP_Query($args);

?>

<script defer src="https://use.fontawesome.com/releases/v5.2.0/js/all.js"></script>

	<div class="blurbs-container">
		<div class="blurbs-header">
			<button class="blurb-btn-styles" id="prevBtn"><</button>
	    <h1>Our Satisfied Customers</h1>
			<button class="blurb-btn-styles" id="nextBtn">></button>
		</div>
    <div class="blurbs-slider">
      <?php $i=0; ?>
      <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
      <div class="blurbs-display" <?php if ($i > 1) echo 'style="display:none"'; ?> >
				<div class="single-blurb">
					<i class="fas fa-quote-left"></i>
					<?php the_content(); ?>
					<i class="fas fa-quote-right"></i>
				</div>
				<div class="flexed-client-info">
					<img src="<?php the_post_thumbnail_url();?>" alt="client photo"/>
					<p>- <?php the_title(); ?></p>
				</div>
			</div>
      <?php $i++; ?>
      <?php endwhile; else :?>
      <?php endif; ?>
    </div>
	</div>

<?php
	return ob_get_clean();
}

add_shortcode('testimonial_blurbs', 'testimonial_blurbs');
function testimonial_blurbs_assets() {
  wp_enqueue_script( 'testimonial-blurbs',  plugin_dir_url( __FILE__ ) . '/testimonial-blurbs.js', array( 'jquery' ) );
	wp_enqueue_style( 'testimonial-blurbs',  plugin_dir_url( __FILE__ ) . '/testimonial-blurbs.css' );
}
add_action('wp_enqueue_scripts', 'testimonial_blurbs_assets');

?>
