<?php
    /* Template Name: Home Page */

    get_header();
?>

<div class="page-header">
	<div class="container">
		<img src="<?php echo get_template_directory_uri(); ?>/img/header-photos/worship-with-us.svg"
			title="Worship with us Sunday mornings at 8:30 AM and 10:30 AM"
			alt="Worship with us Sunday mornings at 8:30 AM and 10:30 AM" />
	</div>
</div>

<div class="page-content r-no-padding-left r-no-padding-right r-xs" id="front-page">

	<?php
       if (have_posts()) :
    ?>

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
                        'orderby' => get_field('event_order_by'),
                        'order' => get_field('event_order'),
                        'posts_per_page' => get_field('event_posts_per_page'),
                        'post_type' => get_field('event_post_type'),
                        'post_status' => get_field('event_post_status'),
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'category',
                                'field' => 'term_id',
                                'terms' => array(
                                    get_field('event_category')
                                ),
                            )
                        )
                    
                    );
                    $the_query = new WP_Query($args);

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
                ?>
			</div>
		</div>
	</div>

	<?php
       endif;
    ?>

	<div class="latest-sermon">
		<div class="container  margin-xl-bottom">

			<div class="row">
				<div class="col-12 col-md-6 col-lg-7">
					<h2 class="bold margin-lg-bottom">Latest Sermon</h2>

					<?php
                            $latest_sermon = new WP_Query(array(
                                'orderby' => get_field('recent_sermon_order_by'),
                                'order' => get_field('recent_sermon_order'),
                                'posts_per_page' => 1,
                                'post_type' => 'wpfc_sermon',
                                'post_status' => get_field('recent_sermon_post_status'),
                                'no_found_rows' => true,
                                'update_post_term_cache' => false,
                                'update_post_meta_cache' => false
                            ));
                            
                            if ($latest_sermon->have_posts()) :
                                while ($latest_sermon->have_posts()) :
                                    $latest_sermon->the_post();
                                    global $post;
                        ?>

					<div class="card card-horizontal clickable" style="height: auto;">
						<div class="card-img">
							<img class="wpfc-sermon-single-image-img" alt="<?php the_title(); ?>"
								src="<?php echo get_sermon_image_url(); ?>" />
						</div>

						<div class="card-body">
							<div class="card-title"><?php echo esc_attr(get_the_title()); ?></div>

							<div class="card-subtitle">
								<?php if (has_term('', 'wpfc_preacher', $post->ID)) : ?>

								<span><?php the_terms($post->ID, 'wpfc_preacher'); ?></span>
								<span> | </span>

								<?php
                                    endif;
                                    sm_the_date(get_option('date_format'));
                                ?>
							</div>


						</div>

						<a class="stretched-link" href="<?php the_permalink(); ?>"></a>
					</div>

					<?php
                        endwhile;
                        wp_reset_postdata();
                        endif;
                    ?>
				</div>

				<div class="col-12 col-md-6 col-lg-5 r-margin-xl-top r-xs">
					<h2 class="bold margin-lg-bottom">Latest Series</h2>

					<?php
                        $filter = get_field('sermon_filter_by');
                        $order = get_field('sermon_order');
                        $orderBy = get_field('sermon_order_by');
                        $sermon_list = "[list_sermons tax='$filter' order='$order' orderBy='$orderBy']";

                        echo do_shortcode($sermon_list);
                    ?>
				</div>
			</div>
		</div>
	</div>
</div>

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
