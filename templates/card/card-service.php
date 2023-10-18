<div class="service-card-container">
    <div class="image-card-service">
        <a href="<?php echo get_the_permalink(get_the_ID()); ?>"><?php echo get_the_post_thumbnail(get_the_ID()); ?></a>
    </div>
    <?php echo get_field('section_1', get_the_ID())['title_section_1'] ?>
</div>