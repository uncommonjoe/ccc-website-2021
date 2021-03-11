<?php get_header(); ?>

<?php get_template_part('template-parts/header/page-header'); ?>


<div class="page-content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php the_content(); ?>

	<?php endwhile; else : ?>
	<p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif;?>
</div>

<?php
    include('menu.php');
    get_footer();
?>
