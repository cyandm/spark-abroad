<?php
$telephone = get_option('cyn_phone_number_one');
$post_id = get_the_ID();

//********************section 1*/
$title_section_1 = get_field('section_1', $post_id)['title_section_1'];
$sub_title_section_1 = get_field('section_1', $post_id)['sub_title_section_1'];
$image_section_1 = get_field('section_1', $post_id)['image_section_1'];
$description_section_1 = get_field('section_1', $post_id)['description_section_1'];
$link_section_1 = get_field('section_1', $post_id)['link_section_1'];
$text_link_video_section_1 = get_field('section_1', $post_id)['text_link_video_section_1'];





?>
<?php get_header() ?>
<main class="single-service-page">
    <div class="single-service-content">
        <section class="section-1 container">
            <div class="container-image-section1">
                <div class="bg-image-section1"></div><?php echo wp_get_attachment_image($image_section_1) ?>
            </div>
            <div class="texts-section1">
                <h2><?php echo $title_section_1 ?></h2>
                <p class="subtitle-section1"><?php echo $sub_title_section_1 ?></p>
                <p class="description-section1"><?php echo $description_section_1 ?></p>
                <div><i class="icon-play2"></i></div>
            </div>

        </section>
        <section class="section-2 container">

        </section>
        <section class="section-3">

        </section>
        <section class="section-4 container">

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