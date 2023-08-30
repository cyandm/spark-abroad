<div class="swiper" id="homeSliderSwiper">
	<div class="swiper-wrapper">
		<?php
		for ( $i = 0; $i < 5; $i++ ) {
			get_template_part( 'templates/pages/home/slider/slide', $i );
		}
		?>
	</div>
</div>