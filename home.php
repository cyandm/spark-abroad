<?php

$service = new WP_Query(
	[
		'post_type' => 'service',
	]
);

?>

<?php get_header(); ?>

<main class="home">
	<?php get_template_part('/templates/pages/home/slider/index'); ?>
	<div class="mobile-landing">

		<div class="mobile-intro">
			<h1>تا زندگی رویاییـــت
				فقط <span>
					چندقـــدم </span>فاصله داری </h1>
			<p>فقط کافیه جواب چنتا سوالو پیدا کنی!</p>
			<div class="container-ball-stand-mobile">
				<div class="ball-mobile"><img src="<?= get_stylesheet_directory_uri() ?>/assets/imgs/ball.png" alt="ball"></div>
				<div class="stand-mobile"><img src="<?= get_stylesheet_directory_uri() ?>/assets/imgs/home_page_slide_0.png" alt="stand-ball"></div>
			</div>
		</div>
		<div class="explain-services-counseling">
			<div class="container-btn-title-text-explain  container">
				<p class="title-explain-service explain-section-1">چطور میتونم توی شغل
					خودم درکانادا موفق شم</p>
				<p class="description-explain-service">در هر صورت من میتونم کمکت کنم
					به چیزی که میخوای برسی</p>
				<div class="btn-explain-section"><a href="<?= site_url() . '/تماس-با-ما/' ?>">درخواست مشاوره <i class="icon-arrow-down"></i></a></div>
			</div>
			<div class="container-btn-title-text-explain  container">
				<p class="title-explain-service explain-section-2">توی کانادا استخدام شو</p>
				<p class="description-explain-service">اینجوری هزینه های رفتنتو کم کن و
					سریع تر مستقرشو</p>
				<div class="btn-explain-section"><a href="<?= site_url() . '/تماس-با-ما/' ?>">استخدام درکانادا<i class="icon-arrow-down"></i></a></div>
			</div>
			<div class="container-btn-title-text-explain  container">
				<p class="title-explain-service explain-section-3">یا کسب و کار خودتو
					شروع کن</p>
				<p class="description-explain-service">استارتاپ خودتو شروع کن یا یه بیزینس اماده رو بخرو در امدتو شروع کن در هر صورت من میتونم کمکت کنم</p>
				<div class="btn-explain-section"><a href="<?= site_url() . '/تماس-با-ما/' ?>">شروع کسب وکار<i class="icon-arrow-down"></i></a></div>
			</div>
			<div class="explain-section-4">
				<p class="title-explain-service">دیگه وقتشه بلیت بگیری</p>
				<p class="description-explain-service">استارتاپ خودتو شروع کن یا یه بیزینس اماده رو بخرو در امدتو شروع کن در هر صورت من میتونم کمکت کنم</p>
				<div class="btn-explain-section"><a href="<?= site_url() . '/خدمات/' ?>">مشاهده خدمات<i class="icon-arrow-down"></i></a></div>
			</div>
			<div class="plane-section-mobile">
				<img src="<?= get_stylesheet_directory_uri() ?>/assets/imgs/plane-for-mobile.png" alt="plane">
			</div>
		</div>
		<div class="container-services-home container">
			<div class="title-subtitle-service">
				<h1 class="title-service">چه کمکی میتونم بهت بکنم؟</h1>
				<p class="subtitle-service">ما کمکت میکنیم به چیزی که میخوای برسی</p>
			</div>
			<?php
			if ($service->have_posts()) : ?>
				<div class="container-cards">
					<?php while ($service->have_posts()) {
						$service->the_post();
						get_template_part('/templates/card/card', 'service');
					} ?>
				</div>
			<?php endif; ?>
		</div>

	</div>


</main>

<?php get_footer(); ?>