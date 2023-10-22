<?php
/*Template Name: About Us Page */

$section_1 = get_field('about_us_group')["section_1"];
$section_2 = get_field('about_us_group')["section_2"];
$section_3 = get_field('about_us_group')["section_3"];
$section_4 = get_field('about_us_group')["section_4"];

$telephone = get_option('cyn_phone_number_one');

$jobseeker_in_about_us = new WP_Query(
    [
        'post_type' => 'jobseeker',
        'posts_per_page' => 8
    ]
);

$bg_slider_group = get_field('bg_slider');

$counter = 1;


?>

<?php get_header()
?>
<main class="about-us-page">

    <div class="background-about-us">
        <div class="swiper" id="swiperAboutUsBgTop">
            <div class="swiper-wrapper">
                <?php foreach ($bg_slider_group as $bg_slider) : ?>
                    <?php if (!is_null($bg_slider)) : ?>
                        <?php if (!empty($bg_slider["bg_slider_$counter"])) : ?>
                            <div class="swiper-slide">
                                <div class="bg_slider"><?php echo wp_get_attachment_image($bg_slider["bg_slider_$counter"], 'full') ?></div>
                                <div class="title-image-slider">
                                    <p class="title-slider"><?php echo $bg_slider["text_slider_$counter"] ?></p>
                                    <div class="image-slider"><?php echo wp_get_attachment_image($bg_slider["image_slider_$counter"], 'full') ?> </div>
                                </div>
                            </div>
                            <?php $counter++;  ?>
                        <?php endif; ?>
                    <?php endif;
                    ?>

                <?php endforeach; ?>
            </div>
            <div class="swiper-button-prev btn-prev-about-us"><i class="icon-arrow-down"></i></div>
            <div class="swiper-button-next btn-next-about-us"><i class="icon-arrow-down"></i></div>
        </div>
    </div>

    <div class="spacer"></div>

    <div class="popup-about-us">
        <div class="bg-color-popup"></div>
        <div class="btn-close"><i class="icon-close2"></i></div>
        <div class="video-popup">
            <video class="video-popup-jobseeker" autoplay muted>
                <source src="http://spark-abroad.local/wp-content/uploads/2023/10/mov_bbb.mp4" type="video/mp4">

            </video>
        </div>
        <div class="text-popup">
            <p class="jobseeker-name-popup">name</p>
            <p class="jobseeker-description-popup">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون</p>
        </div>
    </div>
    <?php if (!empty($section_1['title_section_1']) || !empty($section_1['text_section_1']) || !empty($section_1['image_section_1'])) : ?>
        <div class="container section-aboutus-odd">
            <?php if (!is_null($section_1['image_section_1']) && !empty($section_1['image_section_1'])) : ?>
                <?php echo  wp_get_attachment_image($section_1['image_section_1'], 'full', false); ?>
            <?php endif; ?>
            <?php if ($section_1['title_section_1'] || $section_1['text_section_1']) : ?>
                <div class="container-title-text">
                    <?php if (!is_null($section_1['title_section_1']) && !empty($section_1['title_section_1'])) : ?>
                        <h2><?php echo $section_1['title_section_1'] ?></h2>
                    <?php endif; ?>
                    <?php if (!is_null($section_1['text_section_1']) && !empty($section_1['text_section_1'])) : ?>
                        <p><?php echo $section_1['text_section_1'] ?></p>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    <?php endif; ?>



    <?php if (!empty($section_2['title_section_2']) || !empty($section_2['text_section_2']) || !empty($section_2['image_section_2'])) : ?>
        <div class="divider on-desktop-show"></div>
        <div class="container section-aboutus-even">
            <?php if (!is_null($section_2['image_section_2']) && !empty($section_2['image_section_2'])) : ?>
                <?php echo  wp_get_attachment_image($section_2['image_section_2'], 'full', false); ?>
            <?php endif; ?>
            <?php if ($section_2['title_section_2'] || $section_2['text_section_2']) : ?>
                <div class=" container-title-text">
                    <?php if (!is_null($section_2['title_section_2']) && !empty($section_2['title_section_2'])) : ?>
                        <h2><?php echo $section_2['title_section_2'] ?></h2>
                    <?php endif; ?>
                    <?php if (!is_null($section_2['text_section_2']) && !empty($section_2['text_section_2'])) : ?>
                        <p><?php echo $section_2['text_section_2'] ?></p>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    <?php endif; ?>



    <?php if (!empty($section_3['title_section_3']) || !empty($section_3['text_section_3']) || !empty($section_3['image_section_3'])) : ?>
        <div class="divider on-desktop-show"></div>
        <div class="container section-aboutus-odd">
            <?php if (!is_null($section_3['image_section_3']) && !empty($section_3['image_section_3'])) : ?>
                <?php echo  wp_get_attachment_image($section_3['image_section_3'], 'full', false); ?>
            <?php endif; ?>
            <?php if ($section_3['title_section_3'] || $section_3['text_section_3']) : ?>
                <div class="container-title-text">
                    <?php if (!is_null($section_3['title_section_3']) && !empty($section_3['title_section_3'])) : ?>
                        <h2><?php echo $section_3['title_section_3'] ?></h2>
                    <?php endif; ?>
                    <?php if (!is_null($section_3['text_section_3']) && !empty($section_3['text_section_3'])) : ?>
                        <p><?php echo $section_3['text_section_3'] ?></p>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    <?php endif; ?>


    <?php if ($jobseeker_in_about_us->have_posts()) : ?>
        <div class="divider on-desktop-show"></div>
        <div class="jobseeker-container">
            <h2 class="successful-jobseeker">کارجویان موفق ما</h2>
        </div>
        <div class="jobseeker-content">
            <div class="swiper swiper-about-us">
                <div class="swiper-wrapper">
                    <?php while ($jobseeker_in_about_us->have_posts()) {
                        $jobseeker_in_about_us->the_post();
                        get_template_part('/templates/card/card', 'about-us', ['post_id' => get_the_ID()]);
                    } ?>
                </div>
            </div>
        </div>
    <?php endif; ?>


    <?php if (!is_null($section_4['last_words_section_4']) && !empty($section_4['last_words_section_4'])) : ?>
        <h2 class="container last_words"><?php echo $section_4['last_words_section_4'] ?></h2>
    <?php endif; ?>
    <?php if (!empty($section_4['title_section_4']) || !empty($section_4['text_section_4']) || !empty($section_4['image_section_4'])) : ?>
        <div class="container section-aboutus-odd section-4">

            <?php if (!is_null($section_4['image_section_4']) && !empty($section_4['image_section_4'])) : ?>
                <div class="last-section-image container"><?php echo  wp_get_attachment_image($section_4['image_section_4'], 'full', false); ?></div>
            <?php endif; ?>
            <?php if ($section_4['title_section_4'] || $section_4['text_section_4']) : ?>
                <div class="container-title-text">
                    <?php if (!is_null($section_4['title_section_4']) && !empty($section_4['title_section_4'])) : ?>
                        <h2><?php echo $section_4['title_section_4'] ?></h2>
                    <?php endif; ?>
                    <?php if (!is_null($section_4['text_section_4']) && !empty($section_4['text_section_4'])) : ?>
                        <p><?php echo $section_4['text_section_4'] ?></p>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    <?php endif; ?>


    <div class="call-to-action">
        <div class="container">
            <h2>دیگه منتظر چی هستی؟</h2>
            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
            <div class="secondary-btn">
                <a href='<?php if (isset($telephone) && !empty($telephone)) echo "tel:$telephone";
                            else echo '#' ?> '>
                    <p>تماس با اسپارک</p>
                    <i class="icon-call"></i>
                </a>
            </div>
        </div>
    </div>
</main>
<?php get_footer() ?>