<?php
    /* Template Name: Page - Visit */

    get_header();
?>

<style type="text/css">
.acf-map {
	width: 100%;
	height: 400px;
	border: #ccc solid 1px;
	margin: 20px 0;
}

// Fixes potential theme css conflict.
.acf-map img {
	max-width: inherit !important;
}

</style>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB3Tdf_NksajErvtWwMOmz2-2Jjezdfz6E"></script>
<script type="text/javascript">

</script>

<div class="page-header">
	<div class="section-content">
		<h1>
			<?php the_title(); ?>
		</h1>
	</div>
</div>

<div class="page-content margin-xxl-top margin-xxl-bottom">
	<div class="container">
		<div class="row">
			<div class="col-12 offset-0 offset-lg-2 col-lg-8">
				<h2 class="h1 line margin-lg-bottom"><?php the_field('page_title'); ?></h1>
			</div>
		</div>

		<div class="row">
			<div class="col-12 offset-0 offset-lg-2 col-lg-8">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>

				<?php endwhile; else : ?>
				<?php esc_html_e('Sorry, no posts matched your criteria.'); ?>
				<?php endif;?>
			</div>
		</div>

		<?php
            $firstServiceTime = get_field('global_first_service_time', 'option');
            $firstServiceAmpm = get_field('global_first_service_ampm', 'option');
            $secondServiceTime = get_field('global_second_service_time', 'option');
            $secondServiceAmpm = get_field('global_second_service_ampm', 'option');

            $noSecondService = !$secondServiceTime;

            if (have_rows('services')):
                while (have_rows('services')) : the_row();
                    
        ?>

		<div class="row margin-lg-top <?php echo get_row_index(); ?> <?php echo $noSecondService;?>"
			ng-class="{'d-none' : <?php echo $noSecondService;?> == 1 && <?php echo get_row_index(); ?> != 1}">
			<div class="col-12 offset-0 offset-lg-2 col-lg-8">
				<div class="row">
					<div class="col-6 col-md-4 col-xl-3 r-margin-md-bottom r-xs r-sm">
						<div class="card card-body height-unset bg-dark text-center">
							<div class="h1 fw-600 no-margin">
								<?php
                                    
                                    if (get_row_index() == 1) {
                                        echo $firstServiceTime;
                                    } else {
                                        echo $secondServiceTime;
                                    }
                                 ?>
							</div>
							<div class=""><?php the_field('service_name'); ?></div>
						</div>
					</div>

					<div class="col-12 col-md-8 col-xl-9">
						<div class="card card-body height-unset">
							<h5 class="fw-600"><?php the_sub_field('worship_service_title'); ?></h5>
							<div class="font-color-gray"><?php the_sub_field('worship_service_description'); ?></div>
						</div>

						<h5 class="font-color-accent fw-600 margin-lg-top"><?php the_sub_field('bible_fellowship_title'); ?>
						</h5>

						<?php
                            if (have_rows('bible_fellowships')):
                                while (have_rows('bible_fellowships')) : the_row();
                        ?>

						<div class="card card-body height-unset margin-md-bottom margin-md-top">
							<h5 class="fw-600"><?php the_sub_field('bible_fellowship_title'); ?></h5>
							<div class="font-color-gray"><?php the_sub_field('bible_fellowship_description'); ?></div>
						</div>

						<?php
                                endwhile;
                            endif;
                        ?>

					</div>
				</div>
			</div>
		</div>

		<?php
                endwhile;
            endif;

            $location = get_field('location_title');
            if ($location):
        ?>

		<div class="row margin-lg-top">
			<div class="col-12 offset-0 offset-lg-2 col-lg-8">
				<h2 class="h1 line margin-lg-bottom"><?php the_field('location_title'); ?></h1>
			</div>
		</div>

		<div class="row">
			<div class="col-12 offset-0 offset-lg-2 col-lg-8">
				<div class="row">
					<div class="col-12 col-lg-6">
						<?php
                            $map = get_field('location');
                            if ($map):
                        ?>
						<map-directive></map-directive>
						<?php endif; ?>
					</div>

					<div class="col-12 col-lg-6">
						<?php the_field('directions'); ?>
					</div>
				</div>

			</div>
		</div>
		<?php endif; ?>


	</div>
</div>

<?php
    include('menu.php');
    get_footer();
?>
