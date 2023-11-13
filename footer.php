<?php
$twitter = get_option('cyn_socialmedia_twitter');
$youtube = get_option('cyn_socialmedia_youtube');
$linkedin = get_option('cyn_socialmedia_linkedin');
$instagram = get_option('cyn_socialmedia_instagram');

$slogan = get_option('cyn_slogan_footer');

?>
<footer>
	<div class="container">
		<div class="container-logo-menu-footer">
			<div class="logo-and-name">
				<?php the_custom_logo() ?>
				<h2>Spark Abroad</h2>
			</div>
			<div class="footer-menu">
				<?php wp_nav_menu(['theme_location' => 'footer']) ?>
			</div>
		</div>
		<div class="socialmedia-and-slogan">
			<div class="socialmedia-footer">
				<a href="<?php echo $twitter ?>"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/imgs/twitter.svg' ?>" alt="logo-footer"></a>
				<a href="<?php echo $youtube ?>"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/imgs/youtube.svg' ?>" alt="logo-footer"></a>
				<a href="<?php echo $linkedin ?>"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/imgs/linkedIn.svg' ?>" alt="logo-footer"></a>
				<a href="<?php echo $instagram ?>"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/imgs/instagram.svg' ?>" alt="logo-footer"></a>
			</div>
			<div class="slogan">
				<?php echo $slogan ?>
			</div>
		</div>
	</div>
</footer>

<div class="wp-scripts">
	<?php wp_footer() ?>
</div>


</body>

</html>