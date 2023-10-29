<?php
/*Template Name: Home Page */

$service = new WP_Query(
	[
		'post_type' => 'service',
	]
);
/*-----------service section acf*/
$title_service_section =  get_field('service_section_home')['title_service_section'];
$subtitle_service_section =  get_field('service_section_home')['subtitle_service_section'];

/*-----------getting to know section acf*/
$getting_to_know_section1 =  get_field('getting_to_know')['getting_to_know_section1'];
$getting_to_know_section2 = get_field('getting_to_know')['getting_to_know_section2'];
$getting_to_know_title_sec1 = $getting_to_know_section1['getting_to_know_title'];
$getting_to_know_subtitle_sec1 = $getting_to_know_section1['getting_to_know_subtitle'];
$getting_to_know_image_sec1 = $getting_to_know_section1['getting_to_know_image'];
$getting_to_know_title_sec2 = $getting_to_know_section2['getting_to_know_title'];
$getting_to_know_subtitle_sec2 = $getting_to_know_section2['getting_to_know_subtitle'];
$getting_to_know_title2_sec2 = $getting_to_know_section2['getting_to_know_title2'];
$getting_to_know_description_sec2 = $getting_to_know_section2['getting_to_know_description'];
$getting_to_know_image_sec2 = $getting_to_know_section2['getting_to_know_image'];

/*-----------jobseeker section acf*/
$jobseeker_section_home =  get_field('jobseeker_section_home');
$title_jobseeker_home = $jobseeker_section_home['title_jobseeker_home'];
$description_jobseeker_home = $jobseeker_section_home['description_jobseeker_home'];
$jobseeker_choosed = $jobseeker_section_home['jobseeker_choosed'];
$title2_jobseeker_home = $jobseeker_section_home['title2_jobseeker_home'];
$description2_jobseeker_home = $jobseeker_section_home['description2_jobseeker_home'];
$title3_jobseeker_home = $jobseeker_section_home['title3_jobseeker_home'];
$description3_jobseeker_home = $jobseeker_section_home['description3_jobseeker_home'];
$video_cover_jobseeker_home = $jobseeker_section_home['video_cover_jobseeker_home'];
$jobseeker_videolink_home = $jobseeker_section_home['jobseeker_videolink_home'];



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
			<a href="#explain-service-home">
				<div class="btn-anchor"><i class="icon-arrow"></i></div>
			</a>
		</div>
		<div class="explain-services-counseling" id="explain-service-home">
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
				<h1 class="title-service"><?php echo $title_service_section ?></h1>
				<p class="subtitle-service"><?php echo $subtitle_service_section ?></p>
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
		<div class="getting-to-know">
			<div class="getting-to-know-section-1">
				<div class="container">
					<p class="title-getting-to-know"><?php echo $getting_to_know_title_sec1 ?></p>
					<p class="subtitle-getting-to-know"><?php echo $getting_to_know_subtitle_sec1 ?></p>
				</div>
				<div class="image-getting-to-know"><?php echo wp_get_attachment_image($getting_to_know_image_sec1, 'full') ?></div>
			</div>

			<div class="getting-to-know-section-2">
				<div class="container">
					<p class="title-getting-to-know"><?php echo $getting_to_know_title_sec2 ?></p>
					<p class="subtitle-getting-to-know"><?php echo $getting_to_know_subtitle_sec2 ?></p>
					<div class="voice-getting-to-know"></div>
					<p class="title2-getting-to-know"><?php echo $getting_to_know_title2_sec2 ?></p>
					<div class="description-getting-to-know"><?php echo $getting_to_know_description_sec2 ?></div>
				</div>
				<div class="image-getting-to-know"><?php echo wp_get_attachment_image($getting_to_know_image_sec2, 'full') ?></div>
			</div>
		</div>

		<div class="jobseeker-section-home">
			<div class="container">
				<p class="title-jobseeker-home"><?php echo $title_jobseeker_home ?></p>
				<div class="description-jobseeker-home"><?php echo $description_jobseeker_home ?></div>
			</div>

			<div></div>

			<div class="container">
				<div class="container-title-btn-jobseeker">
					<p class="title-jobseeker-home"><?php echo $title2_jobseeker_home ?></p>
					<div class="btn-accent"><a href="/درباره-ما/">مشاهده کامل</a></div>
				</div>

				<div class="description-jobseeker-home"><?php echo $description2_jobseeker_home ?></div>
			</div>


			<div class="container">
				<p class="title-jobseeker-home"><?php echo $title3_jobseeker_home ?></p>
				<div class="description-jobseeker-home"><?php echo $description3_jobseeker_home ?></div>
				<div class="video-jobseeker-popup">
					<div><?php echo wp_get_attachment_image($video_cover_jobseeker_home, 'full') ?></div>
					<div class="play-btn"><i class="icon-play2"></i></div>
				</div>
				<div class="primary-btn"><a href="/خدمات/">مشاهده خدمات <i class="icon-arrow-down"></i></a></div>
			</div>
		</div>

	</div>


</main>

<?php get_footer(); ?>