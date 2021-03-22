<?php get_header(); ?>

<div class="page-content" id="page-single-sermon">
	<div class="row">
		<div class="col-12 col-xl-8 no-padding-right no-padding-left" id="video-area">
			<?php
                while (have_posts()) :
                    global $post;
                    the_post();

                    // Get current post ID
                    $current_post_id = $post->ID;
                    // Get current series
                    $post_series = strip_tags(get_the_term_list($post->ID, 'wpfc_sermon_series'));

                    if (! post_password_required($post)) {
                        wpfc_sermon_single_v2(); // You can edit the content of this function in `partials/content-sermon-single.php`.
                    } else {
                        echo get_the_password_form($post);
                    }
                endwhile;
            ?>
		</div>

		<div class="col-12 col-xl-4" id="sidebar">
			<h4 class="d-inline bold margin-xl-bottom">Related</h4>

			<!-- <div class="btn-group-toggle d-inline" data-toggle="buttons">
				<label class="btn btn-dark btn-sm margin-sm-bottom margin-md-left">
					<input type="checkbox" checked autocomplete="off"> Series
				</label>
			</div>

			<div class="btn-group-toggle d-inline" data-toggle="buttons">
				<label class="btn btn-dark inverse btn-sm margin-sm-bottom margin-xs-left">
					<input type="checkbox" autocomplete="off"> Recent
				</label>
			</div> -->

			<div class="margin-md-top">
				<?php

                // If query doesn't find related_sermons, then show most recent sermon
                $related_sermons = new WP_Query(array(
                    'post__not_in' => array($current_post_id),
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'posts_per_page' => 5,
                    'post_type' => 'wpfc_sermon',
                    'post_status' => 'publish',
                    'no_found_rows' => true,
                    'update_post_term_cache' => false,
                    'update_post_meta_cache' => false,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'wpfc_sermon_series',
                            'field'    => 'name',
                            'terms'    => $post_series, // Show sermons from the same series
                        ),
                    ),
                ));

                $recent_sermons = new WP_Query(array(
                    'post__not_in' => array($current_post_id),
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'posts_per_page' => 5,
                    'post_type' => 'wpfc_sermon',
                    'post_status' => 'publish',
                    'no_found_rows' => true,
                    'update_post_term_cache' => false,
                    'update_post_meta_cache' => false,
                ));
                
                if ($related_sermons->have_posts()) {
                    while ($related_sermons->have_posts()) {
                        $related_sermons->the_post();
                        global $post;
            
                        include('template-parts/components/sermon-list-template.php');
                    }
                    wp_reset_postdata();
                } elseif ($recent_sermons->have_posts()) {
                    while ($recent_sermons->have_posts()) {
                        $recent_sermons->the_post();
                        global $post;
            
                        include('template-parts/components/sermon-list-template.php');
                    }
                    wp_reset_postdata();
                }
                ?>
			</div>
		</div>
	</div>
</div>


<?php
    include('menu.php');
    get_footer();
?>
