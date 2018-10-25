<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to begin
	/* rendering the page and display the header/nav
	/*-----------------------------------------------------------------------------------*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>
	<?php bloginfo('name'); // show the blog name, from settings ?> |
	<?php is_front_page() ? bloginfo('description') : wp_title(''); // if we're on the home page, show the description, from the site's settings - otherwise, show the title of the post or page ?>
</title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // We are loading our theme directory style.css by queuing scripts in our functions.php file,
	// so if you want to load other stylesheets,
	// I would load them with an @import call in your style.css
?>

<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head();
// This fxn allows plugins, and Wordpress itself, to insert themselves/scripts/css/files
// (right here) into the head of your website.
// Removing this fxn call will disable all kinds of plugins and Wordpress default insertions.
// Move it if you like, but I would keep it around.
?>

</head>

<body
	<?php body_class();
	// This will display a class specific to whatever is being loaded by Wordpress
	// i.e. on a home page, it will return [class="home"]
	// on a single post, it will return [class="single postid-{ID}"]
	// and the list goes on. Look it up if you want more.
	?>
>
<script defer src="https://use.fontawesome.com/releases/v5.2.0/js/all.js"></script>
<header id="masthead" class="site-header">
	<?php if (is_page('navbar-basic')) {
		echo do_shortcode('[navbar_basic logo_image="http://vetcomponents.com/wp-content/uploads/2018/10/vet-logo-2.png" home_link="/"]');
	} elseif (is_page('navbar-slider')) {
		echo do_shortcode('[navbar_slider logo_image="http://vetcomponents.com/wp-content/uploads/2018/10/vet-logo.png" home_link="/"]');
	} elseif (is_page('navbar-symmetrical')) {
		echo do_shortcode('[navbar_symmetrical logo_image="http://vetcomponents.com/wp-content/uploads/2018/10/orange-cat-logo.jpg" home_link="/" location_1="Seattle" location_1_ph="518-585-5250" location_2="Portland" location_2_ph="355-553-3599" email="emailus@animalhospital.com"]');
	} else {
		echo do_shortcode('[navbar_main]');
		?>
	<div class="center">
		<div id="brand">
			<h1 class="site-title">
				<!-- <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a> -->
			</h1>
			<h4 class="site-description">
				<?php bloginfo( 'description' ); // Display the blog description, found in General Settings ?>
			</h4>
		</div><!-- /brand -->

		<div class="clear"></div>
	</div><!--/container -->
	<?php
	} ?>
</header><!-- #masthead .site-header -->



<?php  /* if (is_page(#pageid)) {} */ ?>

<main class="main-fluid"><!-- start the page containter -->
