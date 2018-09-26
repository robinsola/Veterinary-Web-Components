<?php
/*
Plugin Name: Service Accordion Template
Description: A plugin to select veterinary services
Author: Robin Sola
Version: 0.1
*/
function service_accordion ($atts) {
	ob_start();

  $args = array('category_name' => 'Services');

  $query = new WP_Query($args);

  function trim_excerpt($limit) {
    return wp_trim_words(get_the_excerpt(), $limit);
  }

?>
	<script defer src="https://use.fontawesome.com/releases/v5.2.0/js/all.js"></script>

	<div class="accordion-container">
		<div class="accordion-header">
			<h1>Pet <i class="fas fa-paw"></i> Services</h1>
		</div>
		<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();?>
    <div class="accordion-item">
      <h3 class="title-box"><?php the_title(); ?></h3>
      <div class="hidden-contents">
        <p><?php echo trim_excerpt(55); ?></p>
        <a href="<?php the_permalink(); ?>">Read More</a>
      </div>
    </div>
    <?php endwhile; else :?>
    <?php endif; ?>
	</div>

<?php
	return ob_get_clean();
}

add_shortcode('service_accordion', 'service_accordion');
function service_accordion_assets() {
  wp_enqueue_script( 'service-accordion',  plugin_dir_url( __FILE__ ) . '/service-accordion.js', array( 'jquery' ) );
	wp_enqueue_style( 'service-accordion',  plugin_dir_url( __FILE__ ) . '/service-accordion.css' );
}
add_action('wp_enqueue_scripts', 'service_accordion_assets');

?>
