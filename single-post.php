<?php
$all_categories = $cyn_general->category_info(get_the_ID(), "http://spark-abroad.local/بلاگ/", 'category');

$author_name = get_the_author_meta('display_name', get_post_field('post_author', get_the_ID()));

$current_post_cats_id = [];
foreach (get_the_category() as $cat) {
    array_push($current_post_cats_id, $cat->term_id);
}
$new_blogs = new WP_Query([
    'post_type' => 'post',
    'posts_per_page' => 3,
    'category__in' => $current_post_cats_id,
    'post__not_in' => [get_the_ID()],
]);

$post_id = get_queried_object_id();

?>

<?php get_header(); ?>

<main class="single-post container">
    <div class="category-and-new-blogs">
        <div class="category-single-blog on-mobile-show">
            <select class="dropdown-menu">
                <option disabled selected>دسته بندی ها</option>
                <?php for ($i = 0; $i < count($all_categories); $i++) : ?>
                    <option data-uri="<?php echo $all_categories[$i]['link'] ?>"><?php echo $all_categories[$i]['name'] ?></option>
                <?php endfor; ?>
            </select>
        </div>
        <div class="category-blogs-and-new-blogs on-desktop-show">
            <div class="category-blogs">
                <div class="line-next-of-title-section">
                    <h3>دسته بندی ها
                    </h3>
                    <p></p>
                </div>
                <div>
                    <ul>
                        <?php for ($i = 0; $i < count($all_categories); $i++) : ?>
                            <li class="<?php if ($all_categories[$i]['in_category_exist']) echo "isInCategory" ?>"><a href="<?php echo $all_categories[$i]['link'] ?>"><?php echo $all_categories[$i]['name'] ?></a></li>
                        <?php endfor; ?>
                    </ul>
                </div>
            </div>

            <?php
            if ($new_blogs->have_posts()) : ?>
                <div class="new-blogs-desktop">
                    <div class="line-next-of-title-section">
                        <h3>جدیدترین ها
                        </h3>
                        <p></p>
                    </div>
                    <div class="new-blogs">
                        <div class="container-card-post">
                            <?php
                            while ($new_blogs->have_posts()) {
                                $new_blogs->the_post();
                                get_template_part('/templates/card/card', 'blog');
                            }
                            ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php wp_reset_postdata() ?>
        </div>
        <div class="single-post-content">
            <div class="image-post"><?= wp_get_attachment_image(get_post_thumbnail_id(), 'full'); ?></div>
            <h2><?php echo get_the_title(); ?></h2>
            <div class="container-author-date">
                <?php
                echo get_avatar(get_the_author_meta('ID'));
                ?>
                <div><?php echo $author_name ?></div>
                <div><?php echo get_the_date() ?></div>
            </div>
            <div class="main-content-post">
                <?php the_content() ?>
            </div>

            <div class="count-of-comment-text-and-button-comment-single-post">
                <div class="blog-comments">
                    <div class="single-comment-number">
                        <h6><span> <?php echo get_comments_number($post_id); ?></span>دیدگاه </h6>
                    </div>
                    <?php comments_template(); ?>
                </div>
            </div>
        </div>
        <?php
        if ($new_blogs->have_posts()) : ?>
            <div class="new-blogs on-mobile-show">
                <h1>جدیدترین ها</h1>
                <div class="container-card-post">
                    <?php
                    while ($new_blogs->have_posts()) {
                        $new_blogs->the_post();
                        get_template_part('/templates/card/card', 'blog');
                    }
                    ?>
                </div>
            </div>


        <?php endif; ?>
        <?php wp_reset_postdata() ?>


    </div>
    <div>
    </div>
</main>

<?php get_footer() ?>