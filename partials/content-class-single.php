<?php
/**
 * Created from a copy of content-sermon-single.php to make class display properly
 */

global $post;


?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="wpfc-sermon-single-inner">
        <div class="wpfc-sermon-single-media">

            <?php if(get_field('audio_file')) : ?>


            <div class="margin-lg-top wpfc-sermon-single-audio player-plyr">
                <?php echo wpfc_render_audio(get_field('audio_file')); ?>
            </div>

            <?php endif; ?>

            <?php if (!(get_field('audio_file'))) : ?>

            <div class="text-wrapper">
                <div class="title bold">We're Sorry!</div>
                <div class="subtitle bold font-color-accent">Media not found.</div>
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

                    <div class="sermon-sub-title font-color-accent font-size-md">
                        <span><?php echo get_the_term_list( $post->ID, 'class-teacher', '', ', '); ?></span>
                        <span> | </span>
                        <span><?php echo get_field('class_date'); ?></span>
                    </div>

                    <div class="wpfc-sermon-single-meta-series">
                        <span class="wpfc-sermon-single-meta-prefix">
                            Series:</span>
                        <span class="wpfc-sermon-single-meta-text">
                            <?php echo get_the_term_list( $post->ID, 'class-type', '', ', ') ?>
                        </span>
                    </div>

                    <?php
                        if (get_post_meta($post->ID, 'bible_passage', true)) :
                    ?>

                    <div class=" wpfc-sermon-single-meta-passage">
                        <span class="wpfc-sermon-single-meta-prefix">
                            <?php echo __('Passage', 'sermon-manager-for-wordpress'); ?>:</span>
                        <span class="wpfc-sermon-single-meta-text"><?php wpfc_sermon_meta('bible_passage'); ?></span>
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
        </div>


    </div>
</article>