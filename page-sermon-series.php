<?php
    /* Template Name: Page - Sermon Series */

    get_header();
    get_template_part('template-parts/header/page-header');

    // Console log outputs php values to chrome console
    function console_log($output, $with_script_tags = true) {
        $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . ');';
        if ($with_script_tags) {
            $js_code = '<script>' . $js_code . '</script>';
        }
        echo $js_code;
    }
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

        <?php 
            $orderBy = get_field('sermon_series_order_by');
            $order = get_field('sermon_series_order');

            console_log($includeSeries);

            echo do_shortcode("[sermon_images order='". $order ."' orderBy='". $orderBy ."']"); 
        ?>

    </div>
</div>

<?php
    include('menu.php');
    get_footer();
?>