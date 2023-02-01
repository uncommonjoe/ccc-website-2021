<div class="card card-sm card-horizontal clickable margin-md-bottom" style="height: auto;">
    <div class="card-img">
        <?php console_log(get_field('class_image', $post->ID)); ?>
        <img class="wpfc-sermon-single-image-img" alt="<?php the_title(); ?>"
            src="<?php echo get_field('class_image', $post->ID); ?>" />
    </div>

    <div class="card-body">
        <div class="card-title"><?php echo esc_attr(get_the_title()); ?></div>
        <div class="card-subtitle"><?php sm_the_date(get_option('date_format')); ?></div>

    </div>

    <a class="stretched-link" href="<?php the_permalink(); ?>"></a>
</div>