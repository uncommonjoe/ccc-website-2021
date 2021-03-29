<?php
    get_header();
    get_template_part('template-parts/header/page-header');
?>


<div class="page-content">
	<div class="container margin-xl-top margin-xl-bottom">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>

		<?php endwhile; else : ?>
		<?php esc_html_e('Sorry, no posts matched your criteria.'); ?>
		<?php endif;?>
	</div>
</div>

<?php
    include('menu.php');
    get_footer();
?>
