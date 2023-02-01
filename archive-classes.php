<?php 

get_header();

global $post; 

// Console log outputs php values to chrome console
function console_log($output, $with_script_tags = true) {
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . ');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}

?>

<div class="page-header">
    <div class="section-content">
        <h1>Classes</h1>
    </div>
</div>


<div class="page-content margin-xxl-top margin-xxl-bottom">
    <div class="container">
        <div class="row">
            <div class="col-12">


                <?php
                $latest_sermon = new WP_Query(array(
                    'orderby' => get_field('global_recent_sermon_order_by', 'option'),
                    'order' => get_field('global_recent_sermon_order', 'option'),
                    'posts_per_page' => 1,
                    'post_type' => 'wpfc_sermon',
                    'post_status' => 'publish',
                    'no_found_rows' => true,
                    'update_post_term_cache' => false,
                    'update_post_meta_cache' => false,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'wpfc_sermon_series',
                            'operator' => 'NOT IN',
                            'field' => 'term_id',
                            'terms' => 
                                get_field('global_recent_sermon_exclude_series', 'option')
                            ,
                        )
                    )
                ));

                console_log(get_field('global_recent_sermon_exclude_series', 'option'));
                
                if ($latest_sermon->have_posts()) :
                    while ($latest_sermon->have_posts()) :
                        $latest_sermon->the_post();
                        global $post;
                ?>

                <div class="card card-horizontal clickable margin-md-bottom" style="height: auto;">
                    <div class="card-img">
                        <img class="wpfc-sermon-single-image-img" alt="<?php the_title(); ?>"
                            src="<?php the_field('class_image', $post->ID); ?>" />
                    </div>

                    <div class="card-body">
                        <div class="card-title"><?php echo esc_attr(get_the_title()); ?></div>
                        <div class="card-subtitle"><?php the_field('class_date', $post->ID); ?></div>

                    </div>

                    <a class="stretched-link" href="<?php the_permalink(); ?>"></a>
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
    include('menu.php');
    get_footer();
?>