<?php
$inCategoryExist = false;

$post_id = get_the_ID();

$categories = get_categories([
    'orderby' => 'id',
    'current_category' => 1,
    'hide_empty' => false
]);

$categories_link = [];

foreach ($categories as $cat) {
    $category_link = get_category_link($cat->cat_ID);
    array_push($categories_link, $category_link);
    echo '<a href="' . esc_url($category_link) . '" title="' . esc_attr($cat->name) . '">' . esc_html($cat->name) . '</a>';
    echo '<br>';
}

if (in_category($categories, $post_id)) {
    $inCategoryExist = true;
}

$category_single_post = array($categories, $categories_link, $inCategoryExist);
var_dump($category_single_post);
?>

<?php get_header() ?>
<main class="single-post">
    <div class="category-and-new-blogs">
        <div class="category-single-blog">
        </div>
        <div class="new-blogs">
            <h3>جدیدترین ها</h3>
        </div>
    </div>
    <div>
    </div>
</main>

<?php get_footer() ?>