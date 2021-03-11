<?php
    /* Template Name: Page - Live */

    get_header();
?>

<div class="page-content" id="page-live">
	<div class="row">
		<div class="col-12 col-lg-7 col-xl-8" id="video-area">
			<div class="text-center">
				<div class="title bold">Currently offline</div>
				<div class="subtitle bold font-color-gold">We'll see you on Sunday!</div>
			</div>
		</div>

		<div class="col-12 col-lg-5 col-xl-4 margin-md-top" id="sidebar">
			<h3 class="semibold">Services</h3>

			<div class="text-group margin-md-top">
				<div class="text-group-title font-color-gold">Sunday, February 21</div>
				<div class="text-group-value bold">
					<?php the_field('global_first_service_time', 'option'); ?>
				</div>
			</div>

			<div class="text-group">
				<div class="text-group-title font-color-gold">Sunday, February 21</div>
				<div class="text-group-value bold">
					<?php the_field('global_second_service_time', 'option'); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="clearfix"></div>

</div><!-- .page -->
<?php get_footer(); ?>
