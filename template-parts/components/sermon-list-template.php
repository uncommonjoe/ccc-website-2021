<div class="card card-sm card-horizontal clickable margin-md-bottom" style="height: auto;">
	<div class="card-img">
		<img class="wpfc-sermon-single-image-img" alt="<?php the_title(); ?>"
			src="<?php echo get_sermon_image_url(); ?>" />
	</div>

	<div class="card-body">
		<div class="card-title"><?php echo esc_attr(get_the_title()); ?></div>
		<div class="card-subtitle"><?php sm_the_date(get_option('date_format')); ?></div>

	</div>

	<a class="stretched-link" href="<?php the_permalink(); ?>"></a>
</div>
