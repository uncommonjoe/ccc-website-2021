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


<div class="page-content margin-xxl-top margin-xxl-bottom">
	<div class="container">

		<?php if ($directory == 'sermons') : ?>

		<div class="margin-xl-top margin-lg-bottom">
			<div class="row">
				<div class="col-12">
					<h2 class="h1 line margin-lg-bottom">Most Recent Sermon</h2>
				</div>
			</div>

			<div class="row">
				<div class="col-12">
					<?php
                        if ($latest_sermon->have_posts()) :
                            while ($latest_sermon->have_posts()) : $latest_sermon->the_post();
                                global $post;
                    ?>

					<div class="card card-horizontal clickable">

						<div class="card-img">
							<img class="wpfc-sermon-single-image-img" alt="<?php the_title(); ?>"
								src="<?php echo get_sermon_image_url(); ?>" />
						</div>

						<div class="card-body">
							<div class="card-title"><?php the_title(); ?></div>
							<div class="card-subtitle">
								<?php
                                    if (has_term('', 'wpfc_preacher', $post->ID)) :
                                ?>
								<span><?php the_terms($post->ID, 'wpfc_preacher'); ?></span>
								<span> | </span>
								<span><?php wpfc_sermon_date(get_option('date_format')); ?></span>

								<?php
                                    endif;
                                ?>
							</div>

							<div class="card-text">
								<?php wpfc_sermon_meta('bible_passage', '<div class="bible_passage">'.__('Bible Text: ', 'sermon-manager'), '</div>'); ?>
							</div>

						</div>
						<a class="stretched-link" href="<?php the_permalink(); ?>"></a>
					</div>

					<?php
                        endwhile;
                        wp_reset_postdata();
                        endif;
                    ?>
				</div>
			</div>
		</div>

		<?php
            endif;
        ?>

		<div class="row margin-xl-top margin-lg-bottom">
			<div class="col-4 offset-md-2 col-md-3">
				<a href="https://podcasts.apple.com/us/podcast/sermons-cornerstone-community-church/id1483110050"
					target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/img/apple-podcast-badge.png" height="40"
						width="165" alt="Listen on Apple Podcast" style="width: 165px;" class="podcast" />
				</a>
			</div>

			<div class="col-4 col-md-3">
				<a href="https://open.spotify.com/show/6IvTBM4gFulFycIXmjYaRJ" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/img/spotify-podcast-badge.png" height="40"
						width="165" alt="Listen on Spotify" style="width: 165px;" class="podcast" />
				</a>
			</div>

			<div class="col-4 col-md-3">
				<a href="https://play.google.com/music/m/I6ngl4epuifmg4ujpx665qijjba?t=Sermons__Cornerstone_Community_Church"
					target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/img/google-play-badge.png" height="40"
						width="134" alt="Listen on Google Play" style="width: 134px;" class="podcast" />
				</a>
			</div>
		</div>


		<div class="row margin-md-bottom">
			<div class="col-12">
				<h2 class="h1 line margin-lg-bottom">
					<?php echo $directory == 'sermons' ? 'Past Sermons' : '' ?>
				</h2>
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<div class="dropdown">
					<button class="btn btn-dark btn-inverse" type="button" id="dropdownMenuButton"
						data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Filter <img class="margin-xs-left" style="margin-bottom: 3px"
							src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-filter.svg" />
					</button>

					<div class="dropdown-menu padding-lg-left padding-lg-right padding-md-top padding-md-bottom"
						aria-labelledby="dropdownMenuButton">
						<?php echo render_wpfc_sorting(); ?> </div>
				</div>
			</div>
		</div>


		<div class="row row-eq-height">
			<?php
            if (have_posts()) :
                while (have_posts()) :
                    the_post();
                    wpfc_sermon_excerpt_v2(); // You can edit the content of this function in `partials/content-sermon-archive.php`.
                endwhile;

                echo '<div class="col-12">';
                echo '<div class="sm-pagination ast-pagination">';
                if (SermonManager::getOption('use_prev_next_pagination')) {
                    posts_nav_link();
                } else {
                    if (function_exists('wp_pagenavi')) :
                        wp_pagenavi(); elseif (function_exists('oceanwp_pagination')) :
                        oceanwp_pagination(); else :
                        the_posts_pagination();
                    endif;
                }
                echo '</div>';
                echo '</div>';
            else :
                echo '<div class="col-12 text-center italic serif margin-xl-top margin-xl-bottom">';
                echo __('Sorry, but there aren\'t any posts matching your query.');
                echo '</div>';
            endif;
            ?>
		</div>
	</div>
</div>
</div>

<?php
get_footer();
