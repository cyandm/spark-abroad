<?php
/*Template Name: Home Page */

$service = new WP_Query(
	[
		'post_type' => 'service',
	]
);

$faq = new WP_Query(
	[
		'post_type' => 'faq',
	]
);

$jobseeker_in_home = new WP_Query(
	[
		'post_type' => 'jobseeker',
		'posts_per_page' => 8
	]
);

$cats = get_categories([
	'taxonomy' => 'faq-cat',
	'orderby' => 'id',
	'current_category' => 1,
	'hide_empty' => false,

]);

$cats_name_group = [];
$cats_id_group = [];
foreach ($cats as $cat) {
	array_push($cats_name_group, $cat->name);
	array_push($cats_id_group, $cat->term_id);
}


$all_categories_faq = $cyn_general->category_info(get_the_ID(), "", 'faq-cat');

$blogs_choosed = get_field('blogs_choosed');
$author_name = get_the_author_meta('display_name', get_post_field('post_author', get_the_ID()));
$counter = 1;

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
$getting_to_know_voice_sec2 = $getting_to_know_section2['getting_to_know_voice'];

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

/*-----------blog section acf*/
$blog_section_home = get_field('blog_section_home');
$title_blog_home = $blog_section_home['title_blog_home'];
$subtitle_blog_home = $blog_section_home['subtitle_blog_home'];


/*-----------faq section acf*/
$faq_section_home = get_field('faq_section_home');
$title_faq_home = $faq_section_home['title_faq_home'];
$subtitle_faq_home = $faq_section_home['subtitle_faq_home'];

?>

<?php get_header(); ?>

<main class="home">
	<?php get_template_part('/templates/pages/home/slider/index'); ?>

	<div class="popup-home">
		<div class="bg-color-popup"></div>

		<div class="information-popup container">
			<div class="btn-close-popup"><i class="icon-close2"></i></div>
			<div class="video-popup">
				<video class="video-popup-jobseeker" controls autoplay muted>
					<source src="#" type="video/mp4">
				</video>
			</div>
			<div class="text-popup">
				<p class="jobseeker-name-popup"></p>
				<p class="jobseeker-description-popup"></p>
			</div>
		</div>
	</div>

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
				<p class="title-explain-service explain-section-2">توی <span>کانادا</span> استخدام شو</p>
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
					<div class="voice-getting-to-know">
						<div class="play-voice">
							<p id="time"></p>
							<div id="" class="waveform" data-audio="<?php echo $getting_to_know_voice_sec2 ?>">
								<i class="icon-play"></i>
							</div>
						</div>
					</div>
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

			<?php
			if ($jobseeker_choosed != null) : ?>

				<div class="container-swiper-jobseeker">
					<div class="swiper swiper-jobseeker-home" id="swiperJobseekerHome">
						<div class="swiper-wrapper">
							<?php foreach ($jobseeker_choosed as $index => $jobseeker_id) {
								get_template_part('/templates/card/card', 'jobseeker', ['post_id' => $jobseeker_id]);
							}
							?>
						</div>
					</div>
				</div>
			<?php endif; ?>

			<div class="container">
				<div class="container-title-btn-jobseeker">
					<p class="title-jobseeker-home-diffrent"><?php echo $title2_jobseeker_home ?></p>
					<div class="btn-accent"><a href="/درباره-ما#jobseeker-section-aboutus">مشاهده کامل</a></div>
				</div>

				<div class="description-jobseeker-home"><?php echo $description2_jobseeker_home ?></div>
			</div>

			<div class="container">
				<p class="title-jobseeker-home"><?php echo $title3_jobseeker_home ?></p>
				<div class="description-jobseeker-home"><?php echo $description3_jobseeker_home ?></div>
				<div class="video-jobseeker-popup">
					<div><?php echo wp_get_attachment_image($video_cover_jobseeker_home, 'full') ?></div>
					<div class="play-btn" data-video="<?php echo $jobseeker_videolink_home ?>" data-name="<?php echo $title3_jobseeker_home ?>" data-description="<?php echo $description3_jobseeker_home ?>"><i class="icon-play2"></i></div>
				</div>
				<div class="primary-btn"><a href="/خدمات/">مشاهده خدمات <i class="icon-arrow-down"></i></a></div>
			</div>
		</div>

		<?php
		if ($blogs_choosed != null) : ?>
			<div class="container blog-section-home">
				<div class="container-titles-btn">
					<div class="title-and-subtitle">
						<p class="title-blog-home"><?php echo $title_blog_home ?></p>
						<p class="subtitle-blog-home"><?php echo $subtitle_blog_home ?></p>
					</div>
					<div class="primary-btn"><a href="<?= site_url() . '/بلاگ/' ?>">مشاهده همه</a></div>
				</div>
				<?php
				if ($blogs_choosed != null) : ?>
					<div class="on-mobile-show blog-choosed">
						<?php foreach ($blogs_choosed as $index => $blog_id) {
							get_template_part('/templates/card/card', 'blog', ['post_id' => $blog_id]);
						}
						?>
					</div>
				<?php endif; ?>

				<?php
				if ($blogs_choosed != null) : ?>
					<div class="on-desktop-show blog-choosed-desktop">
						<div class="container-choosed-blog-right">
							<div class="card-post">
								<div class="image-card-post">
									<a href="<?= get_the_permalink($blogs_choosed[0]); ?> "><?= wp_get_attachment_image(get_post_thumbnail_id($blogs_choosed[0]), 'full'); ?></a>
								</div>
								<div class="container-title-expert-author-date-button">
									<div class="title-post-card">
										<a href="<?= get_the_permalink($blogs_choosed[0]); ?> "><?= get_the_title($blogs_choosed[0]); ?></a>
									</div>

									<div class="expert-post-card">
										<?= get_the_excerpt($blogs_choosed[0]); ?>
									</div>
									<div class="container-author-date-avatar">
										<div class="avatar-athor">
											<?= get_avatar(get_the_author_meta('ID')); ?>
										</div>
										<div class=" author-post-card">
											<?php echo $author_name ?>
										</div>
										<div class="date-post-card">
											<?= get_the_date(); ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="container-choosed-blog-left">
							<?php
							foreach ($blogs_choosed as $index => $blog_id) {
								if ($index === 0) {
									continue;
								}
								if ($counter === 4) {
									break;
								}
								get_template_part('/templates/card/card', 'blog', ['post_id' => $blog_id]);
								$counter++;
							}
							?>
						</div>
					</div>
				<?php endif; ?>
			</div>
		<?php endif; ?>

		<?php if ($faq->have_posts()) : ?>
			<div class="faq-section-home container">
				<div class="faq-titles-btn">
					<div class="titles-and-btn-faq">
						<p class="title-faq-home"><?php echo $title_faq_home ?></p>
						<p class="subtitle-faq-home"><?php echo $subtitle_faq_home ?></p>
					</div>
					<div class="primary-btn"><a href="<?= site_url() . '/تماس-با-ما/' ?>">تماس با ما <i class="icon-call"></i></a></div>
				</div>
				<div class="faq-category-content">
					<div class="category-faq-mobile">
						<select class="dropdown-menu">
							<?php for ($i = 0; $i < count($all_categories_faq); $i++) : ?>
								<option><?php echo $all_categories_faq[$i]['name'] ?></option>
							<?php endfor; ?>
						</select>
					</div>
					<div class="category-desktop-faq-group">
						<ul class="category-faq-desktop">
							<?php for ($i = 0; $i < count($all_categories_faq); $i++) : ?>
								<li data-tab="<?php echo $i - 1 ?>" class="cat-item-desktop"><?php echo $all_categories_faq[$i]['name'] ?></li>
							<?php endfor; ?>
						</ul>

						<div class="container-faq-group show" data-tab="-1" data-tabname="همه">
							<?php if ($faq) : ?>
								<?php
								while ($faq->have_posts()) {
									$faq->the_post();
									get_template_part('/templates/card/card', 'faq');
								}
								?>
							<?php endif; ?>
							<?php wp_reset_postdata() ?>
						</div>
						<?php foreach ($cats_id_group as $index => $cat_id) : ?>
							<div class="container-faq-group" data-tab="<?= $index ?>" data-tabname="<?= $cats_name_group[$index] ?>">
								<div>
									<div class="container-faq-home">
										<?php
										$faq_query = new WP_Query([
											'post_type' => 'faq',
											'tax_query' => [
												[
													'taxonomy' => 'faq-cat',
													'field' => 'term_id',
													'terms' => $cat_id
												]
											]
										]);
										if ($faq_query->have_posts()) :
											while ($faq_query->have_posts()) {
												$faq_query->the_post();
												get_template_part('templates/card/card', 'faq');
											}
										else : ?>
											<div class="not-found-category-faq-in-home">
											</div>
										<?php endif;
										wp_reset_postdata();
										?>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					</div>





				</div>
			</div>
		<?php endif; ?>

		<div class="contact-us-section-home">
			<h1>اگه جواب سوالتو پیدا نکردی یا میخوای بیشتر بدونی </h1>
			<p>تماس با ما</p>
			<div class="container-form-image">
				<form class="container contact-us-form">
					<label>نام و نام خانوادگی</label>
					<div class="container-border">
						<i class="icon-user"></i>
						<input type="text" placeholder="نام خود را وارد کنید" />
					</div>
					<label>ایمیل</label>
					<div class="container-border">
						<i class="icon-email"></i>
						<input type="email" placeholder="ایمیل خود را وارد کنید" />
					</div>
					<label>توضیحات</label>
					<div class="container-border">
						<i class="icon-cmessage"></i>
						<textarea rows="5" class="text-area-contact-us" placeholder="توضیحات"></textarea>
					</div>
					<div class="primary-btn"><i class="icon-send2"></i><a href="#">ارسال</a></div>
				</form>
				<div class="image-contact-us">
					<img src="<?php echo get_stylesheet_directory_uri() . "/assets/imgs/img-contact-us.svg" ?>" alt="image contact us" />
				</div>
			</div>
		</div>

	</div>


</main>

<?php get_footer(null, ['isPurple' => true]); ?>