<?php
    /* Template Name: Page - Live */

    get_header();
    include("template-parts/components/sunday-date.php");

    function orderOfService()
    {
        ?>

<h3 class="semibold"><?php the_field("order_of_worship_title") ?></h3>
<div class="font-color-gold"><?php the_field('service_date') ?></div>
<div class="margin-md-top"><?php the_field('order_of_worship') ?></div>

<?php
    }
?>

<div class="page-content" id="page-live">
	<div class="row">
		<div class="col-12 col-xl-8" id="video-area">
			<div class="text-wrapper" ng-if="!isServiceLive">
				<div class="title bold"><?php the_field('offline_title'); ?></div>
				<div class="subtitle bold font-color-gold"><?php the_field('offline_subtitle'); ?></div>
			</div>

			<div class="video-wrapper ng-cloak" ng-if="isServiceLive" responsive-video>
				<iframe width="560" height="315" src="<?php the_field('live_video_url'); ?>" frameborder="0"
					allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
					allowfullscreen></iframe>
			</div>
		</div>

		<div class="col-12 col-xl-4" id="sidebar">
			<?php
            if (current_user_can('edit_posts')):
                orderOfService();
            else:
        ?>
			<div ng-if="!isServiceLive">
				<h3 class="semibold">Services</h3>

				<div class="text-group margin-md-top">
					<div class="text-group-title font-color-gold ng-cloak">
						<?php echo $nextSunday;?>
					</div>

					<div class="text-group-value bold">
						<?php the_field('global_first_service_time', 'option'); ?>
						<?php the_field('global_first_service_ampm', 'option'); ?>
					</div>
				</div>

				<div class="text-group">
					<div class="text-group-title font-color-gold ng-cloak">
						<?php echo $nextSunday;?>
					</div>

					<div class="text-group-value bold">
						<?php the_field('global_second_service_time', 'option'); ?>
						<?php the_field('global_second_service_ampm', 'option'); ?>
					</div>
				</div>
			</div>

			<div ng-if="isServiceLive">
				<?php orderOfService(); ?>
			</div>
			<?php endif; ?>
		</div>
	</div>
</div>

<div class="clearfix"></div>

</div><!-- .page -->
<?php get_footer(); ?>
