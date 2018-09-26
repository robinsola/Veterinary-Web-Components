<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to finish
	/* rendering the page and display the footer area/content
	/*-----------------------------------------------------------------------------------*/
?>

</main><!-- / end page container, begun in the header -->
<script defer src="https://use.fontawesome.com/releases/v5.2.0/js/all.js"></script>
<footer class="site-footer">
	<div class="site-info container">

		<p>Created
			<!-- <a href="http://bckmn.com/naked-wordpress" rel="theme">Naked</a>
			on <a href="http://wordpress.org" rel="generator">Wordpress</a> -->
			by <p>Robin Sola | 2018</p>
			<a href="https://github.com/robinsola" target="_blank"><i class="fab fa-github-square"></i></a>
			<a href="https://www.linkedin.com/in/robin-sola/" target="_blank"><i class="fab fa-linkedin"></i></a>
		</p>

	</div><!-- .site-info -->
</footer><!-- #colophon .site-footer -->

<?php wp_footer();
// This fxn allows plugins to insert themselves/scripts/css/files (right here) into the footer of your website.
// Removing this fxn call will disable all kinds of plugins.
// Move it if you like, but keep it around.
?>

</body>
</html>
