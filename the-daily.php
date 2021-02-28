<?php
/* Template Name: The Daily */

get_header();

$testPageNumber = 2017;
//$testPageNumber = 2316;
$pageNumber = $testPageNumber;
?>

<div class="page-wrap" data-ng-controller="theDailyController as vm">

	<div ng-show="vm.isServiceLive">
		<div class="py-2" id="alert-message" style="background-color: #dd3333">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<span style="color: <?php the_field('alert_foreground_color') ?>">
							Sunday worship service is live now!
						</span>
						
						<a class='btn btn-light inverse px-3 py-1 ml-3' style="color: white; border-color: white" href="#live">
							Watch live
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div ng-hide="vm.isServiceLive">
		<?php if(get_field('is_alert_active', $pageNumber)) : ?>
			<div class="py-2" id="alert-message" style="background-color: <?php the_field('alert_background_color') ?>">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<span style="color: <?php the_field('alert_foreground_color') ?>">
								<?php the_field('alert_message') ?>
							</span>
							
							<?php if(get_field('alert_message_action_button_title', $pageNumber)) : ?>
								<a class='btn btn-light inverse px-3 py-1 ml-3' style="color: <?php the_field('alert_foreground_color') ?>; border-color: <?php the_field('alert_foreground_color') ?>" href="<?php the_field('alert_message_action_button_path') ?>">
									<?php the_field('alert_message_action_button_title') ?>
								</a>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		<?php endif; ?>
	</div>

	<div class="page-header fixed-bg" id="the-daily">
		<div class="section-content">
			<div class="row">
				<div class="col-12" style="z-index: 5;">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
	
			<div class="row margin-xxl-top">
				<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3" style="z-index: 5;">
					<div class="ml-4 plyr plyr--full-ui plyr--video plyr--youtube plyr--fullscreen-enabled plyr--paused plyr--stopped plyr__poster-enabled">
						<div class="plyr__video-wrapper plyr__video-embed">
							<iframe width="560" height="315" title="<?php the_field('daily_update_title', $pageNumber); ?>" src="https://www.youtube.com/embed/<?php the_field('youtube_video_url', $pageNumber); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
					</div>
				</div>

				<div class="col-12 text-center mt-3">
					<a class="btn btn-light inverse" href="<?php the_field('archive_button_url', $pageNumber); ?>" target="_blank" style="color:white;"><?php the_field('archive_button_title', $pageNumber); ?></a>
				</div>
			</div>
		</div>
	</div>

	<?php if(get_field('letter_active', $pageNumber)) :?>
		<div class="page-content" id="serviceSignup">
			<div class="gray-area padding-xxl-top padding-xxl-bottom">
				<div class="container px-5">
					<div class="col-12 col-lg-7 offset-lg-2">
						<?php the_field('letter', $pageNumber) ?>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<?php if(get_field('sunday_signup_contact_form', $pageNumber)) : ?>
		<div class="page-content" id="serviceSignup">
			<div class="padding-xxl-top padding-xxl-bottom">
				<div class="container px-5">
					<service-signup></service-signup>
				</div>
			</div>
		</div>
	<?php endif;?>

	<div class="page-content">
		<div class="gray-area padding-xxl-top padding-xxl-bottom">
			<div class="container px-5">
				<div class="row">
					<div class="col-12 pl-4 a-fade-up">
						<h2 class="text-center mb-5">Let's Talk</h2>
					</div>
				</div>

				<div class="row">
					<div class="col-12 text-center">
					<?php 
						if(get_field('first_button_title', $pageNumber)) {
							echo "<div class='a-fade-up delay-1'><a class='btn btn-secondary margin-md-bottom' href='" . get_field('first_button_path') . "'>" . get_field('first_button_title') . "</a></div>";
						}
		
						if(get_field('second_button_title', $pageNumber)) {
							echo "<div class='a-fade-up delay-2'><a class='btn btn-secondary margin-md-bottom' href='" . get_field('second_button_path') . "'>" . get_field('second_button_title') . "</a></div>";
						}
		
						if(get_field('third_button_title', $pageNumber)) {
							echo "<div class='a-fade-up delay-3'><a class='btn btn-secondary margin-md-bottom' href='" . get_field('third_button_path') . "'>" . get_field('third_button_title') . "</a></div>";
						}
		
						if(get_field('fourth_button_title', $pageNumber)) {
							echo "<div class='a-fade-up delay-14'><a class='btn btn-secondary' href='" . get_field('fourth_button_path') . "'>" . get_field('fourth_button_title') . "</a></div>";
						}
					?>
					</div>
				</div>
			</div>
		</div>

		<div class="container px-5 padding-xxl-top padding-xxl-bottom pin-trigger" id="sunday-sermon">
		<?php if(get_field('sunday_service_custom_video', $pageNumber)) : ?>
				<div class="row">
					<div class="col-12">
						<div class="plyr plyr--full-ui plyr--video plyr--youtube plyr--fullscreen-enabled plyr--paused plyr--stopped plyr__poster-enabled">
							<div class="plyr__video-wrapper plyr__video-embed">
								<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php the_field('sunday_service_custom_video', $pageNumber); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</div>

			<?php else: ?>

			<div class="row" ng-hide="vm.isServiceLive">
				<div class="col-12 col-md-4 order-2 order-md-1">
					<h2 class="break-word a-fade-up">
						<?php the_field('sunday_service_section_title', $pageNumber); ?>
					</h2>

					<div class="paragraph a-fade-up delay-1"><?php the_field('sunday_service_section_paragraph', $pageNumber); ?></div>
				</div>

				<div class="col-12 col-md-8 order-1 order-md-2 mb-5">
					<div class="pin" id="latest_sermon">
					<?php if(get_field('sunday_service_custom_video', $pageNumber)) : ?>
							<div class="plyr plyr--full-ui plyr--video plyr--youtube plyr--fullscreen-enabled plyr--paused plyr--stopped plyr__poster-enabled">
								<div class="plyr__video-wrapper plyr__video-embed">
									<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php the_field('sunday_service_custom_video', $pageNumber); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								</div>
							</div>
						
						<?php elseif(!get_field('sunday_service_custom_video', $pageNumber) && !get_field('swap_last_sunday_video_with_graphic', $pageNumber)): ?>
							<?php if ($latest_sermon->have_posts()) : while ($latest_sermon->have_posts()) : $latest_sermon->the_post(); global $post; ?> 
								<div class="wpfc-sermon-single-video wpfc-sermon-single-video-link">
									<?php echo wpfc_render_video( get_wpfc_sermon_meta( 'sermon_video_link' ) ); ?>
								</div>
							<?php endwhile; endif; ?>
						
						<?php elseif(get_field('swap_last_sunday_video_with_graphic', $pageNumber) && !get_field('sunday_service_custom_video', $pageNumber)) : ?>
							<img src="<?php echo get_field('upcoming_service_graphic', $pageNumber) ?>" alt="" />
						<?php endif; ?>
					</div>
				</div>
			</div>

			<div class="row" ng-show="vm.isServiceLive" id="live">
					<div class="col-12 text-center">						
						<div class="plyr plyr--full-ui plyr--video plyr--youtube plyr--fullscreen-enabled plyr--paused plyr--stopped plyr__poster-enabled" style="height:auto;">
							<div class="plyr__video-wrapper plyr__video-embed">
								<iframe width="560" height="315" src="https://www.youtube.com/embed/live_stream?channel=UC1Ynk4qAMEVc92G-t-RXmeg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>

						<div class="small mt-3">If you are having troubles viewing above, please go directly to <a href="https://www.youtube.com/CornerstoneCommunityChurchBillings/live" target="_blank">our YouTube channel</a></div>
					</div>
				</div>
			<?php endif; ?>
		</div>

		<div class="custom-background-img-area fixed-bg padding-xxl-top padding-xxl-bottom parallax-bg" style="background: linear-gradient(to right, rgba(27, 28, 39, 0.5), rgba(27, 28, 39, 0.5)), url('<?php the_field('give_custom_bg_img', $pageNumber) ?>') center center / cover no-repeat;">
			<div class="container px-5 py-5 py-sm-0">
				<div class="row">
					<div class="col-12 pl-4 mb-5 a-fade-up">
						<h2><?php the_field('give_title', $pageNumber) ?></h2>
					</div>
				</div>

				<div class="row">
					<div class="col-12 d-none d-sm-block">
						<div id="breeze_giving_embed" data-subdomain="cccbillings" data-width="100%" data-background_color="fffff" data-text_color="000" data-donate_button_background_color="777777" data-donate_button_text_color="ffffff" data-fund_id="" data-frequency="" data-amount=""></div>
						<script src="https://www.breezechms.com/js/give.js"></script>
					</div>

					<div class="col-12 d-sm-none text-center delay-1">
						<a class="btn btn-light" href="https://cccbillings.breezechms.com/give/online" target="_blank">Tap to give</a>
					</div>
				</div>
			</div>
		</div>

		<?php if(get_field('is_kids_section_active', $pageNumber)) : ?>
			<div class="container px-5 padding-xxl-top padding-xxl-bottom">
				<div class="row">
					<div class="col-12 col-md-5 text-center mb-5 a-fade-up">
						<img class="section-img" src="<?php the_field('cornerstone_kids_img', $pageNumber) ?>" alt="<?php the_field('cornerstone_kids_title') ?>" style="height:200px;width: auto;object-fit:unset;" />
					</div>

					<div class="col-12 col-md-7">
						<h2 class="a-fade-up delay-2"><?php the_field('cornerstone_kids_title', $pageNumber) ?></h2>

						<div class="a-fade-up delay-2"><?php the_field('cornerstone_kids_paragraph', $pageNumber) ?></div>
					</div>
				</div>
			</div>
		<?php endif;?>

		<?php if(get_field('is_c3_active', $pageNumber)) : ?>
			<div class="gray-area padding-xxl-top padding-xxl-bottom">
				<div class="container px-5">
					<div class="row">
						<div class="col-12 col-md-5 mb-5 text-center a-fade-up">
							<img class="section-img" src="<?php the_field('c3_img', $pageNumber) ?>" alt="<?php the_field('c3_title') ?>" style="width: 100%;height: auto;min-height: unset; max-width: unset;" />
						</div>

						<div class="col-12 col-md-7">
							<h2 class="a-fade-up delay-2"><?php the_field('c3_title', $pageNumber) ?></h2>
							<div class="a-fade-up delay-2"><?php the_field('c3_paragraph', $pageNumber) ?></div>
						</div>
					</div>
				</div>
			</div>
		<?php endif;?>

		<div class="padding-xxl-top padding-xxl-bottom">
			<div class="container px-5">
				<div class="row">
					<div class="col-12 col-md-5 mb-5 text-center a-fade-up">
						<img class="section-img" src="<?php the_field('growth_group_img', $pageNumber) ?>" alt="<?php the_field('growth_group_title') ?>" style="width: 100%;height: auto;min-height: unset; max-width: unset;" />
					</div>

					<div class="col-12 col-md-7 a-fade-up">
						<h2 class=""><?php the_field('growth_group_title', $pageNumber) ?></h2>
						<div class=""><?php the_field('growth_group_paragraph', $pageNumber) ?></div>
					</div>
				</div>
			</div>
		</div>

		<?php if(get_field('is_last_section_active', $pageNumber)) : ?>
		<div class="gray-area padding-xxl-top padding-xxl-bottom">
			<div class="container px-5">
				<div class="row">
					<div class="col-12 col-md-5 mb-5 text-center a-fade-up">
						<img class="section-img" src="<?php the_field('last_section_img', $pageNumber) ?>" alt="<?php the_field('last_section_title') ?>" style="width: 100%;height: auto;min-height: unset; max-width: unset;" />
					</div>

					<div class="col-12 col-md-7">
						<h2 class="a-fade-up delay-2"><?php the_field('last_section_title', $pageNumber) ?></h2>
						<div class="a-fade-up delay-2">
							<?php the_field('last_section_paragraph', $pageNumber) ?>
						
							<?php if(get_field('show_action_button', $pageNumber)) : ?>
								<div class="pt-3">
									<a class="btn <?php the_field('action_button_color', $pageNumber) ?>" href="<?php the_field('last_action_button_url', $pageNumber) ?>"><?php the_field('last_action_button_title', $pageNumber) ?></a>
								</div>
							<?php endif; ?>

						</div>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>
	</div>
</div>

<?php get_footer(); ?>