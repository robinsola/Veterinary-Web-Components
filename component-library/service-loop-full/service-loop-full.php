<?php
/*
Plugin Name: Service Loop Full Template
Description: A plugin to select veterinary services
Author: Robin Sola
Version: 0.1
*/
function service_loop_full($atts) {
	ob_start();

  $args = array('category_name' => 'Services');

  $query = new WP_Query($args);

  function trim_excerpt($limit) {
    return wp_trim_words(get_the_excerpt(), $limit);
  }

?>

  <script defer src="https://use.fontawesome.com/releases/v5.2.0/js/all.js"></script>

	<div class="service-loop-full-width">
    <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();?>
    <div class="service-loop-wrapper">
			<a href="<?php the_permalink(); ?>">
	      <div class="service-loop-image">
	        <img class="service-image-styles" src="<?php the_post_thumbnail_url();?>" alt="service item"/>
	        <div class="hover-fade-text">
						<p><?php echo trim_excerpt(15); ?></p>
	          <p>learn more</p>
	        </div>
	      </div>
			</a>
      <div class="service-loop-contents">
        <h1><?php the_title(); ?></h1>
      </div>
    </div>
    <?php endwhile; else :?>
    <?php endif; ?>
	</div>

<?php
	return ob_get_clean();
}

add_shortcode('service_loop_full', 'service_loop_full');
function service_loop_full_assets() {
  wp_enqueue_script( 'service-loop-full',  plugin_dir_url( __FILE__ ) . '/service-loop-full.js', array( 'jquery' ) );
	wp_enqueue_style( 'service-loop-full',  plugin_dir_url( __FILE__ ) . '/service-loop-full.css' );
}
add_action('wp_enqueue_scripts', 'service_loop_full_assets');

?>
