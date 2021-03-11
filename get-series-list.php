<?php
                        //$terms = get_terms(array('wpfc_sermon_series'));

                        echo "order by " . get_field('sermon_order_by') . "<br /><br />";
                        echo "order " . get_field('sermon_order') . "<br /><br />";
                        echo "posts_per_page " . get_field('sermon_posts_per_page') . "<br /><br />";
                        echo "post_type " . get_field('sermon_post_type') . "<br /><br />";
                        echo "post_status " . get_field('sermon_post_status') . "<br /><br />";
                        echo "filter " . get_field('sermon_filter_by') . "<br /><br />";
                        
                                    
                        $terms = get_terms(
                            'wpfc_sermon_series',
                            array(
                                'orderby' => 'date',
                                'order' => 'ASC',
                                'hide_empty' => 0,
                                'fields' => 'ids',

                            )
                        );

                        print_r($terms);
                            
                        $series_list = new WP_Query(array(
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'posts_per_page' => 5,
                            'post_type' => 'wpfc_sermon',
                            'post_status' => 'publish',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'wpfc_sermon_series',
                                    'field' => 'term_id',
                                    'terms' => $terms,
                                )
                            )
                        ));

                        // $series_list = new WP_Query(array(
                        //     'post_type' => 'e',
                        //     'posts_per_page' => 5,
                        //     'post_status' => 'publish',
                        //     'no_found_rows' => true,
                        //     'update_post_term_cache' => false,
                        //     'update_post_meta_cache' => false
                        // ));
                        
                        if ($series_list->have_posts()) :
                               while ($series_list->have_posts()) :
                            
                            $series_list->the_post();
                            global $post;
                    ?>

<a class="btn btn-glow btn-block" href="<?php the_permalink(); ?>">
	<?php echo the_title(); ?>
</a>

<?php
                        endwhile;
                        wp_reset_postdata();
                        endif;
                    ?>
