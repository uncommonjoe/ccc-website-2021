<?php
    /**
     * Template Name: News and Events
     */

    get_header();
    get_template_part('template-parts/header/page-header');

?>

<div class="page-content">
	<div class="container margin-xl-top margin-xl-bottom">
		<div class="row">
			<?php
            $args = array(
                'orderby' => get_field('order_by'),
                'order' => get_field('order'),
                'posts_per_page' => get_field('posts_per_page'),
                'post_type' => get_field('post_type'),
                'post_status' => get_field('post_status'),
                'tax_query' => array(
                    array(
                        'taxonomy' => 'category',
                        'field' => 'term_id',
                        'terms' => array(
                            get_field('category')
                        ),
                    )
                )
            
            );
            $the_query = new WP_Query($args);

            if ($the_query->have_posts()) :
                while ($the_query->have_posts()) :
                    $the_query->the_post();
                
            ?>

			<div class="col-12 col-sm-6 col-lg-12 margin-md-top margin-md-bottom" <?php post_class(); ?>
				id="post-<?php the_ID(); ?>">

				<div class="card card-horizontal">
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
                endwhile;
                wp_reset_postdata();
                endif;
          ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
