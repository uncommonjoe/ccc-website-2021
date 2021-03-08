<?php
    get_header();
    get_template_part('template-parts/header/page-header');
 ?>

<div class="page-content">
	<div class="container margin-xl-top margin-xl-bottom">
		<?php
        if (have_posts()) {

            // Load posts loop.
            while (have_posts()) {
                the_post();
                get_template_part('template-parts/content/content');
            }

            // Previous/next page navigation.
        } else {

            // If no content, include the "No posts found" template.
            get_template_part('template-parts/content/content-none');
        }
        ?>
	</div>
</div>

<?php get_footer(); ?>
