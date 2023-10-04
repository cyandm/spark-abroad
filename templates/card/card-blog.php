<?php

$post_id = isset($args['post_id']) ? $args['post_id'] :  get_the_ID();
$author_name = get_the_author_meta('display_name', get_post_field('post_author', get_the_ID()));

?>
<div class="card-post">
    <div class="image-card-post">
        <a href="<?= get_the_permalink($post_id); ?> "><?= wp_get_attachment_image(get_post_thumbnail_id($post_id), 'full'); ?></a>
    </div>
    <div class="container-title-expert-author-date-button">
        <div class="title-post-card">
            <a href="<?= get_the_permalink($post_id); ?> "><?= get_the_title($post_id); ?></a>
        </div>

        <div class="expert-post-card">
            <?= get_the_excerpt($post_id); ?>
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