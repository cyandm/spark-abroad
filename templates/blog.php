<?php

/*Template Name: Blog Page */

$all_categories = $cyn_general->category_info(get_the_ID(), "http://spark-abroad.local/بلاگ/", 'category');
$all_blogs = new WP_Query([
    'post_type' => 'post'
]);
$blogs_choosed = get_field('blogs_choosed');
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$posts_in_blog_page = new WP_Query(
    [
        'post_type' => 'post',
        'posts_per_page' => 2,
        'orderby' => 'id',
        'paged' => $paged

    ]
);
?>
<?php get_header(); ?>
<main class="blog-page container">
    <div class="category-blog on-mobile-show">
        <select class="dropdown-menu">
            <option disabled selected>دسته بندی ها</option>
            <?php for ($i = 0; $i < count($all_categories); $i++) : ?>
                <option><?php echo $all_categories[$i]['name'] ?></option>
            <?php endfor; ?>
        </select>
    </div>
    <?php
    if ($blogs_choosed != null) : ?>
        <div>
            <div>
                <?php foreach ($blogs_choosed as $index => $blog_id) {
                    get_template_part('/templates/card/card', 'blog', ['post_id' => $blog_id]);
                }
                ?>
            </div>
        </div>
    <?php endif; ?>
    <?php
    if ($posts_in_blog_page->have_posts()) : ?>
        <div class="container-all-blogs">
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