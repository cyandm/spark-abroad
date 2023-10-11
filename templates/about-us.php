<?php
/*Template Name: About Us Page */

$section_1 = get_field('about_us_group')["section_1"];
$section_2 = get_field('about_us_group')["section_2"];
$section_3 = get_field('about_us_group')["section_3"];
$section_4 = get_field('about_us_group')["section_4"];

$telephone = get_option('cyn_phone_number_one');
?>

<?php get_header() ?>
<main class="about-us-page">

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

    <div class="divider on-desktop-show"></div>

    <?php if (!is_null($section_4['last_words_section_4']) && !empty($section_4['last_words_section_4'])) : ?>
        <h2 class="container last_words"><?php echo $section_4['last_words_section_4'] ?></h2>
    <?php endif; ?>
    <?php if (!empty($section_4['title_section_4']) || !empty($section_4['text_section_4']) || !empty($section_4['image_section_4'])) : ?>
        <div class="container section-aboutus-odd">

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