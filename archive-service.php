<?php $service = new WP_Query(
    [
        'post_type' => 'service',
    ]
);
?>
<?php get_header() ?>
<main class="service-page container">
    <div class="title-subtitle-service">
        <h1 class="title-service">چه کمکی میتونم بهت بکنم؟</h1>
        <p class="subtitle-service">ما کمکت میکنیم به چیزی که میخوای برسی</p>
    </div>
    <?php
    if ($service->have_posts()) : ?>
        <div class="container-cards">
            <?php while ($service->have_posts()) {
                $service->the_post();
                get_template_part('/templates/card/card', 'service');
            } ?>
        </div>
    <?php endif; ?>
</main>
<?php get_footer() ?>