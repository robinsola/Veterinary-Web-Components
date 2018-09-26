<?php
/*
Plugin Name: Service Loop Template
Description: A plugin to select veterinary services
Author: Robin Sola
Version: 0.1
*/
function service_loop($atts) {
	ob_start();
	$lp_data = shortcode_atts(array(
    // 'variable' => 'variable default';
	), $atts);

  $args = array('category_name' => 'Services');

  $query = new WP_Query($args);

  function trim_excerpt($limit) {
    return wp_trim_words(get_the_excerpt(), $limit);
  }

?>

  <script defer src="https://use.fontawesome.com/releases/v5.2.0/js/all.js"></script>

	<div class="service-loop-container">
    <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();?>
    <div class="service-item">
      <img src="<?php the_post_thumbnail_url();?>" alt="service item"/>
      <div class="item-contents">
        <h3><?php the_title(); ?></h3>
        <p><?php echo trim_excerpt(13); ?></p>
        <a href="<?php the_permalink(); ?>">Read More</a>
      </div>
    </div>
    <?php endwhile; else :?>
    <?php endif; ?>
	</div>


<?php
	return ob_get_clean();
}

add_shortcode('service_loop', 'service_loop');
function service_loop_assets() {
  wp_enqueue_script( 'service-loop',  plugin_dir_url( __FILE__ ) . '/service-loop.js', array( 'jquery' ) );
	wp_enqueue_style( 'service-loop',  plugin_dir_url( __FILE__ ) . '/service-loop.css' );
}
add_action('wp_enqueue_scripts', 'service_loop_assets');

?>
