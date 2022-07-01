<?php
    /* Template Name: Template - Text Page */

    get_header();
    get_template_part('template-parts/header/page-header');
?>

<div class="page-content">
    <div class="container margin-xl-top margin-xl-bottom">
        <div class="row">
            <div class="col-12 offset-sm-2 col-sm-8">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>

                <?php endwhile; else : ?>
                <?php esc_html_e('Sorry, no posts matched your criteria.'); ?>
                <?php endif;?>
            </div>
        </div>
    </div>
</div>

<?php
    include('template-parts/components/call-to-action.php'); // Be sure to include ACF 
    include('menu.php');
    get_footer();
?>