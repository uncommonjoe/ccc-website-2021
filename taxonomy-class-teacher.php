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
        <h1><?php single_term_title(); ?></h1>
    </div>
</div>

<div class="page-content margin-xxl-top margin-xxl-bottom">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>

                <?php endwhile; else : ?>
                <?php esc_html_e('Sorry, no posts matched your criteria.'); ?>
                <?php endif;?>


                <?php
                if (have_posts()) :
                    while (have_posts()) :
                        global $post;
                        
                        the_post();
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