<div class="slider-wrapper">
	<?php get_template_part('templates/pages/home/slider/slide', 0); ?>

	<div class="slider-1-3-wrapper container">
		<div class="sidebar">
			<div class="img-wrapper">
				<img src=<?= get_stylesheet_directory_uri() . '/assets/imgs/home_page_slide_wrapper_left.svg' ?> alt="">
			</div>
			<div class="img-wrapper">
				<img src=<?= get_stylesheet_directory_uri() . '/assets/imgs/home_page_slide_wrapper_right.svg' ?> alt="">
			</div>
			<div class="ball">
			</div>
		</div>
		<?php get_template_part('templates/pages/home/slider/slide', 1); ?>
		<?php get_template_part('templates/pages/home/slider/slide', 2); ?>
		<?php get_template_part('templates/pages/home/slider/slide', 3); ?>
	</div>

	<?php get_template_part('templates/pages/home/slider/slide', 4); ?>
</div>