<?php
/**
 * Template part for displaying posts
 *
 * Theme: CCC 2021
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
        if (is_sticky() && is_home() && ! is_paged()) {
            printf('<span class="sticky-post">%s</span>', _x('Featured', 'post'));
        }
        if (is_singular()) :
            the_title('<h1 class="entry-title">', '</h1>');
        else :
            the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>');
        endif;
        ?>
	</header>

	<div class="entry-content">
		<?php
        the_content(
            get_the_title()
        );

        wp_link_pages(
            array(
                'before' => '<div class="page-links">' . __('Pages:'),
                'after'  => '</div>',
            )
        );
        ?>
	</div>

</article>
