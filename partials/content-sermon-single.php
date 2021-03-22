<?php
/**
 * To edit this file, please copy the contents of this file to one of these locations:
 * - `/wp-content/themes/<your_theme>/partials/content-sermon-single.php`
 * - `/wp-content/themes/<your_theme>/template-parts/content-sermon-single.php`
 * - `/wp-content/themes/<your_theme>/content-sermon-single.php`
 *
 * That will ensure that your changes are not deleted on plugin update.
 *
 * Sometimes, we need to edit this file to add new features or to fix some bugs, and when we do so, we will modify the
 * changelog in this header comment.
 *
 * @package SermonManager\Views\Partials
 *
 * @since   2.13.0 - added
 * @since   2.15.0 - fix audio URL edge case
 */

global $post;

if (empty($GLOBALS['wpfc_partial_args'])) {
    $GLOBALS['wpfc_partial_args'] = array();
}

$GLOBALS['wpfc_partial_args'] += array(
    'image_size' => 'post-thumbnail',
);

$args = $GLOBALS['wpfc_partial_args'];

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="wpfc-sermon-single-inner">
		<div class="wpfc-sermon-single-media">
			<?php if (get_wpfc_sermon_meta('sermon_video_link')) : ?>
			<div class="wpfc-sermon-single-video wpfc-sermon-single-video-link">
				<?php echo wpfc_render_video(get_wpfc_sermon_meta('sermon_video_link')); ?>
			</div>
			<?php endif; ?>

			<?php if (!get_wpfc_sermon_meta('sermon_video_link') && (get_wpfc_sermon_meta('sermon_audio') || get_wpfc_sermon_meta('sermon_audio_id'))) : ?>
			<?php
                $sermon_audio_id     = get_wpfc_sermon_meta('sermon_audio_id');
                $sermon_audio_url_wp = $sermon_audio_id ? wp_get_attachment_url(intval($sermon_audio_id)) : false;
                $sermon_audio_url    = $sermon_audio_id && $sermon_audio_url_wp ? $sermon_audio_url_wp : get_wpfc_sermon_meta('sermon_audio');
                ?>

			<div
				class="margin-lg-top wpfc-sermon-single-audio player-<?php echo strtolower(\SermonManager::getOption('player', 'plyr')); ?>">
				<?php echo wpfc_render_audio($sermon_audio_url); ?>
			</div>
			<?php endif; ?>

			<?php
                if (!get_wpfc_sermon_meta('sermon_video_link') && !(get_wpfc_sermon_meta('sermon_audio') || get_wpfc_sermon_meta('sermon_audio_id'))) :
            ?>

			<div class="text-wrapper">
				<div class="title bold">We're Sorry!</div>
				<div class="subtitle bold font-color-gold">Sermon media not found.</div>
			</div>

			<?php endif; ?>

		</div>


		<div class="wpfc-sermon-single-main padding-lg margin-lg-left">
			<div class="row">
				<div class="col-12">
					<h1 class="bold"><?php the_title(); ?></h1>
				</div>
			</div>

			<div class="row">
				<div class="col-12">

					<?php
                        if (has_term('', 'wpfc_preacher', $post->ID)) :
                    ?>
					<div class="sermon-sub-title font-color-gold font-size-md">
						<span><?php the_terms($post->ID, 'wpfc_preacher'); ?></span>
						<span> | </span>
						<span><?php wpfc_sermon_date(get_option('date_format')); ?></span>
					</div>

					<?php
                        endif;
                        if (has_term('', 'wpfc_sermon_series', $post->ID)) :
                    ?>

					<div class="wpfc-sermon-single-meta-series">
						<span class="wpfc-sermon-single-meta-prefix">
							<?php echo __('Series', 'sermon-manager-for-wordpress'); ?>:</span>
						<span
							class="wpfc-sermon-single-meta-text"><?php the_terms($post->ID, 'wpfc_sermon_series'); ?></span>
					</div>

					<?php
                        endif;
                        if (get_post_meta($post->ID, 'bible_passage', true)) :
                    ?>

					<div class=" wpfc-sermon-single-meta-passage">
						<span class="wpfc-sermon-single-meta-prefix">
							<?php echo __('Passage', 'sermon-manager-for-wordpress'); ?>:</span>
						<span class="wpfc-sermon-single-meta-text"><?php wpfc_sermon_meta('bible_passage'); ?></span>
					</div>

					<?php
                        endif;
                        if (has_term('', 'wpfc_service_type', $post->ID)) :
                    ?>

					<div class=" wpfc-sermon-single-meta-service">
						<span class="wpfc-sermon-single-meta-prefix">
							<?php echo __('Service Type', 'sermon-manager-for-wordpress'); ?>:</span>
						<span
							class="wpfc-sermon-single-meta-text"><?php the_terms($post->ID, 'wpfc_service_type'); ?></span>
					</div>

					<?php
                        endif;
                    ?>

					<div class="margin-lg-top">
						<span class="d-block d-sm-inline">
							<a class="no-underline"
								href="https://podcasts.apple.com/us/podcast/sermons-cornerstone-community-church/id1483110050"
								target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/img/apple-podcast-badge.png"
									height="40" width="165" alt="Listen on Apple Podcast" style="width: 165px;"
									class="podcast" />
							</a>
						</span>

						<span
							class="d-block d-sm-inline margin-md-left margin-md-right r-no-margin-left r-no-margin-right r-padding-md-top r-padding-md-bottom r-xs">
							<a class="no-underline" href="https://open.spotify.com/show/6IvTBM4gFulFycIXmjYaRJ"
								target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/img/spotify-podcast-badge.png"
									height="40" width="165" alt="Listen on Spotify" style="width: 165px;"
									class="podcast" />
							</a>
						</span>

						<span class="d-block d-sm-inline">
							<a class="no-underline"
								href="https://play.google.com/music/m/I6ngl4epuifmg4ujpx665qijjba?t=Sermons__Cornerstone_Community_Church"
								target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/img/google-play-badge.png"
									height="40" width="134" alt="Listen on Google Play" style="width: 134px;"
									class="podcast" />
							</a>
						</span>
					</div>
				</div>
			</div>

			<div class="wpfc-sermon-single-description"><?php wpfc_sermon_description(); ?></div>
			<?php if (get_wpfc_sermon_meta('sermon_notes') || get_wpfc_sermon_meta('sermon_bulletin')) : ?>
			<div class="wpfc-sermon-single-attachments"><?php echo wpfc_sermon_attachments(); ?></div>
			<?php endif; ?>

		</div>


	</div>
</article>
