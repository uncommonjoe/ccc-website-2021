<?php // phpcs:ignore
/**
 * Template used for displaying archive pages
 *
 * @package SM/Views
 */
	$cur_uri = $_SERVER['REQUEST_URI'];
	include_once($cur_uri);

	$directory = basename($cur_uri);
	
	//echo $directory;
	
get_header(); ?>

<div class="page-header">
    <div class="section-content">
		<!-- THIS TITLE DISPLAYS IN SERIES AND SERMON TITLE -->
        <h1><?php echo $directory == 'sermons' ? 'Sermons' : 'Sermon Series' ?></h1>
    </div>
</div>

<?php if($directory == 'sermons') : ?>
<div class="gray-area padding-lg-top padding-lg-bottom padding-lg-left padding-lg-right">
	<div class="row margin-md-bottom">
		<div class="col-12">
			<h4 class="text-uppercase font-700">Recent Sermon</h4>
		</div>
	</div>

	<div class="row">
		<div class="col-12">
			<?php if ($latest_sermon->have_posts()) :
				while ($latest_sermon->have_posts()) : $latest_sermon->the_post();
				global $post; ?>
					<div class="row" id="latest_sermon">
						<div class="col-12 col-lg-7 col-xl-5">
							<?php if ( get_wpfc_sermon_meta( 'sermon_video_link' ) ) : ?>
								<div class="wpfc-sermon-single-video wpfc-sermon-single-video-link">
									<?php echo wpfc_render_video( get_wpfc_sermon_meta( 'sermon_video_link' ) ); ?>
								</div>
							
								<?php else: ?>
								<a href="<?php the_permalink(); ?>">
									<img class="wpfc-sermon-single-image-img" alt="<?php the_title(); ?>" src="<?php echo get_sermon_image_url(); ?>">
								</a>
							<?php endif; ?>
						</div>

						<div class="col-12 col-lg-5 col-xl-7">
							<h1 class="text-uppercase font-700 mt-4 mt-lg-0"><?php the_title(); ?></h1>
							
							<div class="meta">
								<?php if ( has_term( '', 'wpfc_preacher', $post->ID ) ) : ?>
									<h5 class="serif italic">
										<span><?php the_terms( $post->ID, 'wpfc_preacher' ); ?></span>
										<span> | </span>
										<span><?php wpfc_sermon_date(get_option('date_format')); ?></span>
									</h6>
								<?php endif; ?>

								<div class="italic">
									<?php wpfc_sermon_meta('bible_passage', '<div class="bible_passage">'.__( 'Bible Text: ', 'sermon-manager'), '</div>'); ?>
								</div>

								<div class="row">
									<div class="col-12 col-sm-4 col-lg-12 mt-3">
										<a href="https://podcasts.apple.com/us/podcast/sermons-cornerstone-community-church/id1483110050" target="_blank">
											<img src="<?php echo get_template_directory_uri(); ?>/img/apple-podcast-badge.png" height="40" width="165" alt="Listen on Apple Podcast" style="width: 165px;" class="podcast" />
										</a>
									</div>

									<div class="col-12 col-sm-4 col-lg-12 mt-3">
										<a href="https://open.spotify.com/show/6IvTBM4gFulFycIXmjYaRJ" target="_blank">
											<img src="<?php echo get_template_directory_uri(); ?>/img/spotify-podcast-badge.png" height="40" width="165" alt="Listen on Spotify" style="width: 165px;" class="podcast" />
										</a>
									</div>

									<div class="col-12 col-sm-4 col-lg-12 mt-3">
										<a href="https://play.google.com/music/m/I6ngl4epuifmg4ujpx665qijjba?t=Sermons__Cornerstone_Community_Church" target="_blank">
											<img src="<?php echo get_template_directory_uri(); ?>/img/google-play-badge.png" height="40" width="134" alt="Listen on Google Play" style="width: 134px;" class="podcast" />
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-12 margin-lg-top">
							<?php if ( get_wpfc_sermon_meta( 'sermon_audio' ) || get_wpfc_sermon_meta( 'sermon_audio_id' ) ) : ?>
								<?php
									$sermon_audio_id     = get_wpfc_sermon_meta( 'sermon_audio_id' );
									$sermon_audio_url_wp = $sermon_audio_id ? wp_get_attachment_url( intval( $sermon_audio_id ) ) : false;
									$sermon_audio_url    = $sermon_audio_id && $sermon_audio_url_wp ? $sermon_audio_url_wp : get_wpfc_sermon_meta( 'sermon_audio' );
								?>

								<div class="wpfc-sermon-single-audio player-<?php echo strtolower( \SermonManager::getOption( 'player', 'plyr' ) ); ?>">
									<?php echo wpfc_render_audio( $sermon_audio_url ); ?>
								</div>
							<?php endif; ?>
						</div>
					</div>
			<?php endwhile;

				wp_reset_postdata();
			
				endif;
			?>
		</div>
	</div>
</div>
<?php endif; ?>

<div class="container-fluid margin-xl-top">
	<div class="row margin-md-bottom">
		<div class="col-12">
			<h1 class="text-uppercase"><?php echo $directory == 'sermons' ? 'Past Sermons' : '' ?></h1>
		</div>
	</div>

	<div class="row">
		<div class="col-12">
			<?php echo render_wpfc_sorting(); ?>
		</div>
	</div>

	<div class="row row-eq-height">
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					wpfc_sermon_excerpt_v2(); // You can edit the content of this function in `partials/content-sermon-archive.php`.
				endwhile;

				echo '<div class="col-12">';
				echo '<div class="sm-pagination ast-pagination">';
				if ( SermonManager::getOption( 'use_prev_next_pagination' ) ) {
					posts_nav_link();
				} else {
					if ( function_exists( 'wp_pagenavi' ) ) :
						wp_pagenavi();
					elseif ( function_exists( 'oceanwp_pagination' ) ) :
						oceanwp_pagination();
					else :
						the_posts_pagination();
					endif;
				}
				echo '</div>';
				echo '</div>';
			else :
				echo '<div class="col-12 text-center italic serif margin-xl-top margin-xl-bottom">';
				echo __( 'Sorry, but there aren\'t any posts matching your query.' );
				echo '</div>';
			endif;
			?>
	</div>
</div>

<?php
get_footer();
