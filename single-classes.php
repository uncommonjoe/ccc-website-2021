<?php
    /* 
        Template Name: Post - Class 
    */


    get_header();

    // Console log outputs php values to chrome console
    function console_log($output, $with_script_tags = true) {
        $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . ');';
        if ($with_script_tags) {
            $js_code = '<script>' . $js_code . '</script>';
        }
        echo $js_code;
    }
?>

<div class="page-content" id="page-single-sermon">
    <div class="row">
        <div class="col-12 col-xl-8 no-padding-right no-padding-left" id="video-area">
            <?php
                while (have_posts()) :
                    global $post;
                    the_post();

                    include('partials/content-class-single.php');
                endwhile;
            ?>
        </div>

        <div class="col-12 col-xl-4" id="sidebar">
            <h4 class="d-inline bold margin-xl-bottom">Related</h4>

            <div class="margin-md-top">
                <?php
                $args = array(  
                    'post_type' => 'class',
                    'post_status' => 'publish',
                    'posts_per_page' => 8, 
                    'orderby' => 'title', 
                    'order' => 'ASC', 
                );
            
                $loop = new WP_Query( $args ); 
                    
                while ( $loop->have_posts() ) : $loop->the_post(); 
                    print the_title(); 
                    the_excerpt(); 
                endwhile;
            
                wp_reset_postdata(); 

                // If query doesn't find related_sermons, then show most recent sermon
                $related_sermons = new WP_Query(array(

                    'orderby' => 'date',
                    'order' => 'desc',
                    'posts_per_page' => 5,
                    'post_type' => 'classes',
                    'post_status' => 'publish',
                    
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'class-type',
                            'field' => 'name',
                            'terms' => strip_tags(get_the_term_list( $post->ID, 'class-type', '', ', ')),
                        )
                    )
                ));
                if ($related_sermons->have_posts()) {
                    while ($related_sermons->have_posts()) {
                        $related_sermons->the_post();
                        global $post;
            
                        include('template-parts/components/class-list-template.php');
                    }
                    wp_reset_postdata();
                }
                else {
                    echo 'No results found';
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