<?php $post_id = isset($args['post_id']) ? $args['post_id'] :  get_the_ID();
$post_image = wp_get_attachment_image(get_post_thumbnail_id($post_id), 'full');

$jobseeker_name = get_field('jobseeker_name', $post_id);
$jobseeker_company = get_field('jobseeker_company', $post_id);
$jobseeker_job = get_field('jobseeker_job', $post_id);
$jobseeker_video_link = get_field('jobseeker_video_link', $post_id);

?>
<div class="jobseeker-card">
    <div class="image_jobseeker"><?= $post_image ?></div>

    <div class="play-btn"><i class="icon-play2"></i></div>
    <div class="jobseeker-information">
        <div class="jobseeker-name-company">
            <p class="jobseeker-name"><?php echo $jobseeker_name ?></p>
            <p class="jobseeker-company"><?php echo $jobseeker_company ?></p>
        </div>
        <p class="jobseeker-job"><?php echo $jobseeker_job ?></p>
    </div>
</div>