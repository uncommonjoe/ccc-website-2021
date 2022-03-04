<?php
    /* Template Name: Page - Giving */

    get_header();
    get_template_part('template-parts/header/page-header');
?>



<div class="page-content margin-xxl-top margin-xxl-bottom">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>

				<?php endwhile; else : ?>
				<?php esc_html_e('Sorry, no posts matched your criteria.'); ?>
				<?php endif;?>
			</div>
		</div>

		<?php if (have_rows('top_buckets')): ?>

		<div class="row">
			<div class="col-12">
				<h2 class="h1 fw-600 text-center margin-lg-bottom">
					<?php echo the_field('page_title'); ?>
				</h2>
			</div>
		</div>

		<div class="row margin-xl-top">
			<div class="offset-2 col-8 offset-md-0 col-md-12 offset-lg-2 col-lg-8">
				<div class="row">
					<?php
                    while (have_rows('top_buckets')) :
                        the_row();
                ?>

					<div class="col-12 col-md-4 r-margin-lg-bottom r-xs r-sm text-center delay-1">
						<img class="" src="<?php echo get_sub_field('bucket_icon'); ?>"
							alt="<?php echo get_sub_field('bucket_title') . " - " . get_sub_field('bucket_description'); ?>" />

						<h4 class="fw-600 margin-lg-top margin-lg-bottom">
							<?php echo get_sub_field('bucket_title'); ?>
						</h4>

						<p><?php echo get_sub_field('bucket_description'); ?></p>
					</div>

					<?php
                    endwhile;
                ?>
				</div>
			</div>
		</div>

		<?php
            endif;
        ?>


		<div class="row margin-xl-top delay-1">
			<div class="col-12">
				<div id="breeze_giving_embed" data-subdomain="cccbillings" data-width="100%"
					data-background_color="fffff" data-text_color="000" data-donate_button_background_color="1a1b1d"
					data-donate_button_text_color="ffffff" data-fund_id="" data-frequency="" data-amount=""></div>
				<script src="https://www.breezechms.com/js/give.js"></script>
			</div>
		</div>

	</div>
</div>

<?php
    include('menu.php');
    get_footer();
?>
