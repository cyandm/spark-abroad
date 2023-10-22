<?php

global $wp_query;


$all_categories = $cyn_general->category_info(get_the_ID(), "http://spark-abroad.local/بلاگ/", 'category');

$author_name = get_the_author_meta('display_name', get_post_field('post_author', get_the_ID()));

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$category_name = $wp_query->queried_object->name;
?>
<?php get_header(); ?>
<main class="blog-page">
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
            <li class="<?php if ($category_name === $all_categories[$i]['name']) echo 'current-link' ?>"><a href="<?php echo $all_categories[$i]['link'] ?>"><?php echo $all_categories[$i]['name'] ?></a></li>
        <?php endfor; ?>
    </ul>
    <?php
    if ($wp_query->have_posts()) : ?>

        <div class="container-all-blogs container">
            <h1 class="all-blogs-title"><?php echo ($category_name) ?></h1>
            <div class="container-blog-card-group">
                <div class="posts-content">
                    <?php
                    while ($wp_query->have_posts()) {

                        $wp_query->the_post();
                        get_template_part('/templates/card/card', 'blog');
                    }

                    ?>
                </div>
                <?php
                echo "<div class='pagination-for-blog'>" . paginate_links(
                    array(
                        'total' => $wp_query->max_num_pages,
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