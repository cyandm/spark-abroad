<?php
$telephone = get_option('cyn_phone_number_one');
$post_id = get_the_ID();

$title_section_1 = get_field('section_1', $post_id)['title_section_1'];
$sub_title_section_1 = get_field('section_1', $post_id)['sub_title_section_1'];
$image_section_1 = get_field('section_1', $post_id)['image_section_1'];
$description_section_1 = get_field('section_1', $post_id)['description_section_1'];
$link_section_1 = get_field('section_1', $post_id)['link_section_1'];
$text_link_video_section_1 = get_field('section_1', $post_id)['text_link_video_section_1'];

$title_section_2 = get_field('section_2', $post_id)['title_section_2'];
$sub_title_section_2 = get_field('section_2', $post_id)['sub_title_section_2'];
$image_section_2 = get_field('section_2', $post_id)['image_section_2'];
$description_section_2 = get_field('section_2', $post_id)['description_section_2'];

$title_section_3 = get_field('section_3', $post_id)['title_section_3'];
$sub_title_section_3 = get_field('section_3', $post_id)['sub_title_section_3'];
$description_section_3 = get_field('section_3', $post_id)['description_section_3'];
$slider_section_3 = get_field('section_3', $post_id)['slider_section_3'];

$title_section_4 = get_field('section_4', $post_id)['title_section_4'];
$sub_title_section_4 = get_field('section_4', $post_id)['sub_title_section_4'];
$image_section_4 = get_field('section_4', $post_id)['image_section_4'];
$description_section_4 = get_field('section_4', $post_id)['description_section_4'];

$counter = 1;


?>
<?php get_header() ?>
<main class="single-service-page">

    <div class="popup-service">
        <div class="bg-color-popup-service"></div>
        <div class="information-popup-service container">
            <div class="btn-close-popup-service"><i class="icon-close2"></i></div>
            <div class="container-video-popup-service">
                <video class="video-popup-service" controls autoplay muted>
                    <source src="#" type="video/mp4">
                </video>
            </div>
            <div class="text-service-popup">
                <p class="title-service-popup"></p>
                <p class="description-service-popup"></p>
            </div>
        </div>
    </div>

    <div class="single-service-content">

        <section class="section-1 container">
            <div class="container-image-section1">
                <?php echo wp_get_attachment_image($image_section_1, 'full') ?>
            </div>
            <div class="texts-section1">
                <h2><?php echo $title_section_1 ?></h2>
                <p class="subtitle-section1"><?php echo $sub_title_section_1 ?></p>
                <?php if (!empty($description_section_1)) :  ?><p class="description-section1"><?php echo $description_section_1; ?></p><?php endif; ?>

                <div class="btn-video  popup-btn-service" data-title="<?php echo get_the_title(get_the_ID()) ?>" data-video="<?php echo $link_section_1 ?>" data-description="<?php echo $description_section_1 ?>">
                    <p><?php echo $text_link_video_section_1 ?></p><i class="icon-play2"></i>
                </div>
            </div>

        </section>

        <section class="section section-2 container">
            <div class="container-image-section">
                <div class="card-know">
                    <p class="title-card-know">از کجا شروع کنم؟</p>
                    <p class="description-card-know">چیزهای مهمی که <br>باید درباره ما<br> بدونی!</p>
                </div>
                <?php echo wp_get_attachment_image($image_section_2, 'full') ?>
            </div>
            <div class="texts-section">
                <h2><?php echo $title_section_2 ?></h2>
                <p class="subtitle-section"><?php echo $sub_title_section_2 ?></p>
                <?php if (!empty($description_section_2)) :  ?><p class="description-section"><?php echo $description_section_2; ?></p><?php endif; ?>
            </div>
        </section>

        <section class="section-3">
            <div class="texts-section-3 texts-section container">
                <h2><?php echo $title_section_3 ?></h2>
                <p class="subtitle-section"><?php echo $sub_title_section_3 ?></p>
                <?php if (!empty($description_section_3)) :  ?><p class="description-section"><?php echo $description_section_3; ?></p><?php endif; ?>
                <div class="container-btn-prev-next">
                    <div class="swiper-button-prev-service"><i class="icon-arrow-down"></i></div>
                    <div class="swiper-button-next-service"><i class="icon-arrow-down"></i></div>
                </div>
            </div>
            <div class="container-slider-and-bg">
                <div class="background-slider"></div>
                <div class="container-slider">
                    <div class="swiper" id="swiperService">
                        <div class="swiper-wrapper">
                            <?php
                            if ($slider_section_3 != null) : ?>
                                <?php foreach ($slider_section_3 as $value) : ?>
                                    <?php if (!is_null($value)) : ?>
                                        <?php if (!empty($value["image_slider_$counter"]) && !empty($value["title_slider_$counter"])) : ?>
                                            <div class="swiper-slide">
                                                <div class="content-card-slider">
                                                    <?php if (!empty($value["image_slider_$counter"])) : ?><div class="container-image-slider"><?php echo wp_get_attachment_image($value["image_slider_$counter"]) ?></div><?php endif; ?>
                                                    <?php if (!empty($value["title_slider_$counter"])) : ?><p><?php echo $value["title_slider_$counter"] ?></p><?php endif; ?>
                                                    <i class="icon-play2 play-btn-single-service" data-title="<?php echo $value["title_slider_$counter"]  ?>" data-video="<?php echo $value["link_slider_$counter"]  ?>" data-description="<?php echo $value["description_slider_$counter"] ?>"></i>
                                                </div>

                                            </div>
                                        <?php endif ?>
                                        <?php $counter++; ?>
                                    <?php endif ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section container">
            <div class="container-image-section">
                <?php echo wp_get_attachment_image($image_section_4, 'full') ?>
            </div>
            <div class="texts-section">
                <h2><?php echo $title_section_4 ?></h2>
                <p class="subtitle-section"><?php echo $sub_title_section_4 ?></p>
                <?php if (!empty($description_section_4)) :  ?><p class="description-section"><?php echo $description_section_4; ?></p><?php endif; ?>
            </div>
        </section>

        <section class="call-to-action">
            <h2> همین امروز تماس بگیر</h2>
            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
            <div class="secondary-btn">
                <a href='<?php if (isset($telephone) && !empty($telephone)) echo "tel:$telephone";
                            else echo '#' ?> '>
                    <p>تماس با اسپارک</p>
                    <i class="icon-call"></i>
                </a>
            </div>
        </section>
    </div>
</main>

<?php get_footer() ?>