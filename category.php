<?php
    get_header();
    get_template_part('template-parts/header/page-header');
 ?>

<div class="page-content">
	<div class="container margin-xxl-top margin-xxl-bottom">
		<div class="row">
			<div class="col-12">
				<?php
                if (have_posts()):

                    // Load posts loop.
                    while (have_posts()):
                        the_post();
?>

				<div class="col-12 col-sm-6 col-lg-12 margin-md-top margin-md-bottom" <?php post_class(); ?>
					id="post-<?php the_ID(); ?>">

					<div class="card card-horizontal">
						<div class="card-img">
							<img src="<?php the_field('event_photo', $post->ID); ?>" alt="<?php the_title(); ?>" />
						</div>

						<div class="card-body">
							<div class="card-title"><?php the_title(); ?></div>
							<div class="card-subtitle"><?php the_field('event_date', $post->ID); ?></div>
							<div class="card-text"><?php the_content(get_the_title()); ?></div>
						</div>
					</div>
				</div>

				<?php
                    endwhile;
                    endif;
            ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer();?>
