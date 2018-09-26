<?php
/*
Plugin Name: Testimonial Slider Template
Description: A plugin to slide through testimonials
Author: Robin Sola
Version: 0.1
*/
function testimonial_slider ($atts) {
	ob_start();

  $args = array('category_name' => 'Testimonials');
  $query = new WP_Query($args);

?>

<script defer src="https://use.fontawesome.com/releases/v5.2.0/js/all.js"></script>

	<div class="testimonial-container">
		<h1>Client <i class="fas fa-paw"></i> Feedback</h1>
    <div class="divider"></div>
    <div class="flex-header">
      <i class="fas fa-quote-left"></i>
      <div class="button-sliders">
        <button id="prev"><</button>
        <button id="next">></button>
      </div>
    </div>
    <div id="testimonials">
      <?php $i=0; ?>
      <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
      <div class="slide" <?php if ($i > 0) echo 'style="display:none"'; ?> >
        <div class="testimonial-quote">
          <p><?php the_content(); ?></p>
          <p>- <?php the_title(); ?></p>
        </div>
				<div class="five-stars">
					<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
				</div>
      </div>
      <?php $i++; ?>
      <?php endwhile; else :?>
      <?php endif; ?>
    </div>
    <div class="divider"></div>
	</div>

<?php
	return ob_get_clean();
}

add_shortcode('testimonial_slider', 'testimonial_slider');
function testimonial_slider_assets() {
  wp_enqueue_script( 'testimonial-slider',  plugin_dir_url( __FILE__ ) . '/testimonial-slider.js', array( 'jquery' ) );
	wp_enqueue_style( 'testimonial-slider',  plugin_dir_url( __FILE__ ) . '/testimonial-slider.css' );
}
add_action('wp_enqueue_scripts', 'testimonial_slider_assets');

?>
