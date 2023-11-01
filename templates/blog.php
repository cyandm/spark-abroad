<?php

/*Template Name: Blog Page */

$all_categories = $cyn_general->category_info(get_the_ID(), "http://spark-abroad.local/بلاگ/", 'category');

$author_name = get_the_author_meta('display_name', get_post_field('post_author', get_the_ID()));

$blogs_choosed = get_field('blogs_choosed');

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$posts_in_blog_page = new WP_Query(
    [
        'post_type' => 'post',
        'posts_per_page' => 12,
        'orderby' => 'id',
        'paged' => $paged

    ]
);


$knowable = get_field('knowable');
$counter = 1;

$object_id = get_queried_object_id();
$current_url = get_permalink($object_id);
?>
<?php get_header(); ?>
<main class="blog-page">

    <?php
    if ($blogs_choosed != null) : ?>
        <div class="container on-mobile-show blog-choosed">
            <?php foreach ($blogs_choosed as $index => $blog_id) {
                get_template_part('/templates/card/card', 'blog', ['post_id' => $blog_id]);
            }
            ?>
        </div>
    <?php endif; ?>

    <?php
    if ($blogs_choosed != null) : ?>
        <div class="container on-desktop-show blog-choosed-desktop">
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
                    get_template_part('/templates/card/card', 'blog', ['post_id' => $blog_id]);
                }
                ?>
            </div>
        </div>
    <?php endif; ?>

    <?php
    if ($knowable != null) : ?>
        <div class="knowable">
            <div class="container">
                <h1 class="title_knowable" id="getMarginRightTitle">شاید براتون جالب باشه</h1>
            </div>
            <div class="container-cards">
                <div class="swiper" id="swiperBlog">
                    <div class="swiper-wrapper">
                        <?php foreach ($knowable as $value) : ?>
                            <?php if (!is_null($value)) : ?>
                                <div class="swiper-slide">
                                    <div class="card-knowable">
                                        <img class="quote-img" src="<?php echo get_stylesheet_directory_uri() . '/assets/imgs/quotation.svg' ?>" />
                                        <h2 class="knowable_title_card"><?php echo $value["knowable_title_$counter"] ?></h2>
                                        <p class="knowable_text_card"><?php echo $value["knowable_text_$counter"] ?></p>
                                        <a href="<?php echo $value["knowable_link_$counter"] ?>">
                                            <h3 class="knowable_link_card"> ادامه مطلب</h3>
                                        </a>
                                    </div>
                                </div>
                                <?php $counter++; ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="category-blog on-mobile-show">
        <select class="dropdown-menu">
            <option disabled selected>دسته بندی ها</option>
            <?php for ($i = 0; $i < count($all_categories); $i++) : ?>
                <option data-uri="<?php echo $all_categories[$i]['link'] ?>"><?php echo $all_categories[$i]['name'] ?></option>
            <?php endfor; ?>
        </select>
    </div>
    <ul class="category-blog-desktop on-desktop-show">
        <?php for ($i = 0; $i < count($all_categories); $i++) : ?>
            <li class="<?php if (urldecode($current_url) === $all_categories[$i]['link']) echo 'current-link' ?>"><a href="<?php echo $all_categories[$i]['link'] ?>"><?php echo $all_categories[$i]['name'] ?></a></li>
        <?php endfor; ?>
    </ul>
    <?php
    if ($posts_in_blog_page->have_posts()) : ?>

        <div class="container-all-blogs container">
            <h1 class="all-blogs-title">همه مقالات</h1>
            <div class="container-blog-card-group">
                <div class="posts-content">
                    <?php
                    while ($posts_in_blog_page->have_posts()) {

                        $posts_in_blog_page->the_post();
                        get_template_part('/templates/card/card', 'blog');
                    }

                    ?>
                </div>
                <?php
                echo "<div class='pagination-for-blog'>" . paginate_links(
                    array(
                        'total' => $posts_in_blog_page->max_num_pages,
                        'next_text' => __('<i class="icon-arrow"></i>'),
                        'prev_text' => __('<i class="icon-arrow"></i>'),
                        'prev_next' => true
                    )
                ) . "</div>";
                ?>

            </div>
        </div>
    <?php endif; ?>
</main>


<?php get_footer(); ?>