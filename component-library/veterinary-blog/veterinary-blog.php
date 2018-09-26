<?php
/*
Plugin Name: Veterinary Blog Template
Description: A plugin for veterinary blog
Author: Robin Sola
Version: 0.1
*/
function veterinary_blog($atts) {
	ob_start();

  $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

  $posts = array('category_name' => 'News');

  $query = new WP_Query('category_name=' . $posts['category_name'] . '&paged=' . $paged);

  function trim_excerpt($limit) {
    return wp_trim_words(get_the_excerpt(), $limit);
  }

?>

  <script defer src="https://use.fontawesome.com/releases/v5.2.0/js/all.js"></script>

	<div class="veterinary-blog-container">
	  <h1 class="blog-container-title">Our Blog</h1>
	  <div class="page-switch">
	    <div><?php previous_posts_link( '<< Prev' ); ?></div>
	    <div><?php next_posts_link( 'Next >>', $query->max_num_pages); ?></div>
	  </div>
	  <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();?>
	    <div class="blog-post">
	      <h1><?php the_title(); ?></h1>
	      <div class="indented-content">
	        <p><?php the_date(); ?></p>
	        <p><?php echo trim_excerpt(55); ?></p>
	        <a href="<?php the_permalink(); ?>">keep reading</a>
	      </div>
	    </div>
	  <?php endwhile; ?>
	  <div class="page-switch">
	    <div><?php previous_posts_link( '<< Prev' ); ?></div>
	    <div><?php next_posts_link( 'Next >>', $query->max_num_pages); ?></div>
	  </div>
	  <?php
	  wp_reset_postdata();
	  ?>
	  <?php else : ?>
	  <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	  <?php endif; ?>
	</div>


<?php
	return ob_get_clean();
}

add_shortcode('veterinary_blog', 'veterinary_blog');
function veterinary_blog_assets() {
  wp_enqueue_script( 'veterinary-blog',  plugin_dir_url( __FILE__ ) . '/veterinary-blog.js', array( 'jquery' ) );
	wp_enqueue_style( 'veterinary-blog',  plugin_dir_url( __FILE__ ) . '/veterinary-blog.css' );
}
add_action('wp_enqueue_scripts', 'veterinary_blog_assets');

?>
