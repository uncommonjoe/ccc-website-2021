<?php
    get_header();
    get_template_part('template-parts/header/page-header');
?>

<div class="page-content">
	<div class="container margin-xxl-top margin-xxl-bottom">
		<div class="row">
			<div class="col-12">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>

				<?php endwhile; else : ?>
				<p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
				<?php endif;?>
			</div>
		</div>
	</div>
</div>

<?php
    include('menu.php');
    get_footer();
?>
