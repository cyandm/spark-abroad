<div class="card-post">
    <div class="image-card-post">
        <a href="<?php the_permalink(); ?> "><?php the_post_thumbnail('full'); ?></a>
    </div>
    <div class="container-title-expert-author-date-button">
        <div class="title-post-card">
            <a href="<?php the_permalink(); ?> "><?php the_title(); ?></a>
        </div>

        <div class="expert-post-card">
            <?php the_excerpt(); ?>
        </div>
        <div class="container-author-date-avatar">
            <div class="avatar-athor">
                <?php echo get_avatar(get_the_author_meta('ID')); ?>
            </div>
            <div class=" author-post-card">
                <?php the_author(); ?>
            </div>
            <div class="date-post-card">
                <?php the_date(); ?>
            </div>
        </div>
    </div>
</div>