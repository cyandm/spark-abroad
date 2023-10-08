<?php get_header() ?>

<main class="search-page container">
    <div class="search-res">
        <?php if (have_posts()) : ?>
            <h1>نتایج جستجو</h1>
            <p>مشاهده نتایج جستجو برای <?php echo  get_search_query();  ?></p>
            <div class="result-row">
                <?php
                while (have_posts()) : the_post();
                    if (get_post_field('post_type', get_the_id()) == 'post') :

                        set_query_var('id', get_the_id());
                        get_template_part(
                            '/templates/card/card-blog',
                            null,
                            ['id' => get_the_ID()]
                        );
                    endif;
                endwhile;
                ?>
            </div>
        <?php
        else :
        ?>
            <div class="search-not-found">
                <h1>یافت نشد</h1>
                <p>نتیجه ای برای <?php echo get_search_query();  ?> پیدا نکردیم</p>
                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/imgs/search-not-found.svg' ?>" alt="not-found-search">
            </div>
        <?php endif; ?>
    </div>
</main>

<?php get_footer() ?>