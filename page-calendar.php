<?php
    /* Template Name: Page - Calendar */

    get_header();
    get_template_part('template-parts/header/page-header');
?>


<div class="page-content margin-xxl-top">
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
	</div>

	<?php
       if (have_posts()) :
    ?>
	<div class="container-fluid no-padding-left no-padding-right">

		<div class="gray-area card-holder padding-xxl-top padding-xxl-bottom">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h2 class="d-inline font-700">News and Events</h2>
						<a class="btn btn-dark inverse btn-sm margin-sm-bottom margin-md-left" href="news-and-events"
							title="See all">See all</a>
					</div>
				</div>

				<div class="row row-eq-height">
					<?php
                    $args = array(
                        'orderby' => get_field('calendar_event_order_by'),
                        'order' => get_field('calendar_event_order'),
                        'posts_per_page' => get_field('calendar_event_posts_per_page'),
                        'post_type' => get_field('calendar_event_post_type'),
                        'post_status' => get_field('calendar_event_post_status'),
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'category',
                                'field' => 'term_id',
                                'terms' => array(
                                    get_field('calendar_event_category')
                                ),
                            )
                        )
                    );
                    
                    $the_query = new WP_Query($args);

                    if ($the_query -> have_posts()) :
                        while ($the_query -> have_posts()) :
                            $the_query -> the_post();
                ?>

					<div class="col-12 col-lg-4 margin-md-top margin-md-bottom" <?php post_class(); ?>
						id="post-<?php the_ID(); ?>">

						<div class="card">
							<div class="card-img">
								<img src="<?php the_field('event_photo', $post->ID); ?>" alt="<?php the_title(); ?>" />
							</div>

							<div class="card-body">
								<div class="card-title"><?php the_title(); ?></div>
								<div class="card-subtitle"><?php the_field('event_date', $post->ID); ?></div>
								<div class="card-text"><?php the_content(get_the_title()); ?></div>
							</div>
						</div>
					</div>

					<?php
                    // Repeat the process and reset once it hits the limit
                        endwhile;
                        wp_reset_postdata();
                    
                        else:
                    ?>

					<div class="margin-xl-top margin-xl-bottom">No results found</div>

					<?php endif; ?>
				</div>
			</div>
		</div>

		<?php
       endif;
    ?>

	</div>
</div>

<?php
    include('menu.php');
    get_footer();
?>
