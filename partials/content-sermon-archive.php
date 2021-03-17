<?php
/**
 * To edit this file, please copy the contents of this file to one of these locations:
 * - `/wp-content/themes/<your_theme>/partials/content-sermon-archive.php`
 * - `/wp-content/themes/<your_theme>/template-parts/content-sermon-archive.php`
 * - `/wp-content/themes/<your_theme>/content-sermon-archive.php`
 *
 * That will ensure that your changes are not deleted on plugin update.
 *
 * Sometimes, we need to edit this file to add new features or to fix some bugs, and when we do so, we will modify the
 * changelog in this header comment.
 *
 * @package SermonManager\Views\Partials
 *
 * @since   2.13.0 - added.
 * @since   2.15.2 - fix $args not being loaded from shortcode.
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

<div class="col-12 margin-lg-bottom">
	<div class="card card-horizontal clickable" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php
            if (get_sermon_image_url() && ! \SermonManager::getOption('disable_image_archive')) :
        ?>

		<div class="card-img">
			<img class="wpfc-sermon-single-image-img" alt="<?php the_title(); ?>"
				src="<?php echo get_sermon_image_url(); ?>" />
		</div>

		<?php
            endif;
        ?>

		<div class="card-body">


			<div class="card-title"><?php the_title(); ?></div>
			<div class="card-subtitle">
				<?php if (SermonManager::getOption('use_published_date')) : ?>
				<?php the_date(); ?>
				<?php else : ?>
				<?php echo SM_Dates::get(); ?>
				<?php endif; ?>
			</div>

			<div class="card-text">

				<?php if (has_term('', 'wpfc_preacher', $post->ID)) :?>
				<div>Preacher <?php the_terms($post->ID, 'wpfc_preacher'); ?></div>
				<?php endif; ?>

				<?php if (has_term('', 'wpfc_sermon_series', $post->ID)) : ?>
				<div>Series <?php the_terms($post->ID, 'wpfc_sermon_series'); ?></div>

				<?php
                    endif;
                ?>

				<?php
                    wpfc_sermon_meta('bible_passage', '<div class="bible_passage">'.__('Passage ', 'sermon-manager'), '</div>');
                ?>

				<div class="wpfc-sermon-description">
					<div class="sermon-description-content">
						<?php if (has_excerpt($post)) : ?>
						<?php echo get_the_excerpt($post); ?>
						<?php else : ?>
						<?php echo wp_trim_words(get_post_meta($post->ID, 'sermon_description', true), 30); ?>
						<?php endif; ?>
						<br />
					</div>
				</div>


			</div>

		</div>
		<a class="stretched-link" href="<?php the_permalink(); ?>"></a>
	</div>
</div>
